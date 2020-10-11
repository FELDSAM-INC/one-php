<?php

namespace One;

# Abstract rules of the type USER RESOURCE RIGHTS
# which are:
#     USER      -> #<num>
#                  @<num>
#                  ALL
#     RESOURCE  -> + separated list and "/{#,@,%}<num>|ALL"
#                  VM
#                  HOST
#                  NET
#                  IMAGE
#                  USER
#                  TEMPLATE
#                  GROUP
#                  DATASTORE
#                  CLUSTER
#                  DOCUMENT
#                  ZONE
#                  SECGROUP
#                  VDC
#                  VROUTER
#                  MARKETPLACE
#                  MARKETPLACEAPP
#                  VMGROUP
#     RIGHTS    -> + separated list
#                  USE
#                  MANAGE
#                  ADMIN
#                  CREATE

class Acl
{
    protected const USERS = [
        'UID' => 0x100000000,
        'GID' => 0x200000000,
        'ALL' => 0x400000000,
        'CLUSTER' => 0x800000000,
    ];

    protected const RESOURCES = [
        'VM'  => 0x1000000000,
        'HOST' => 0x2000000000,
        'NET' => 0x4000000000,
        'IMAGE' => 0x8000000000,
        'USER' => 0x10000000000,
        'TEMPLATE' => 0x20000000000,
        'GROUP' => 0x40000000000,
        'DATASTORE' => 0x100000000000,
        'CLUSTER' => 0x200000000000,
        'DOCUMENT' => 0x400000000000,
        'ZONE' => 0x800000000000,
        'SECGROUP' => 0x1000000000000,
        'VDC' => 0x2000000000000,
        'VROUTER' => 0x4000000000000,
        'MARKETPLACE' => 0x8000000000000,
        'MARKETPLACEAPP' => 0x10000000000000,
        'VMGROUP' => 0x20000000000000,
        'VNTEMPLATE' => 0x40000000000000,
    ];

    protected const RIGHTS = [
        'USE' => 0x1,    # Auth. to use an object
        'MANAGE' => 0x2, # Auth. to perform management actions
        'ADMIN' => 0x4,  # Auth. to perform administrative actions
        'CREATE' => 0x8, # Auth. to create an object
    ];

    /**
     * Calculates the numeric value for a String containing an individual
     * (#<id>), group (@<id>) or all (*) ID component
     *
     * @param  string  $idStr Rule Id string
     * @return int The numeric value for the given $idStr
     * @throws \Exception
     */
    protected static function calculateIds(string $idStr): int
    {
        if (!preg_match('/^([#@%]\d+|\*)$/', $idStr)) {
            throw new \Exception(sprintf('ID string \'%s\' malformed', $idStr));
        }

        $usersValue = 0;

        if ($idStr[0] == '#') {
            $value = static::USERS['UID'];
            $usersValue = (int) substr($idStr, 1) + $value;
        }

        if ($idStr[0] == '@') {
            $value = static::USERS['GID'];
            $usersValue = (int) substr($idStr, 1) + $value;
        }

        if ($idStr[0] == '*') {
            $usersValue = static::USERS['ALL'];
        }

        if ($idStr[0] == '%') {
            $value = static::USERS['CLUSTER'];
            $usersValue = (int) substr($idStr, 1) + $value;
        }

        return $usersValue;
    }

    /**
     * Converts a string in the form [#<id>, @<id>, *] to a hex. number
     *
     * @param  string  $users Users component string
     * @return string A string containing a hex number
     * @throws \Exception
     */
    public static function parseUsers(string $users): string {
        return dechex(static::calculateIds($users));
    }

    /**
     * Converts a resources string to a hex. number
     *
     * @param  string  $resources Resources component string
     * @return string A string containing a hex number
     * @throws \Exception
     */
    public static function parseResources(string $resources): string {
        $ret = 0;
        $resources = explode('/', $resources);

        if (count($resources) !== 2) {
            throw new \Exception('Resource "#{resources}" malformed');
        }

        $res = explode('+', $resources[0]);
        foreach ($res as $re) {
            if (!array_key_exists(strtoupper($re), static::RESOURCES)) {
               throw new \Exception('Resource "#{resource}" does not exist');
            }

            $ret += static::RESOURCES[strtoupper($re)];
        }

        $ret += static::calculateIds($resources[1]);

        return dechex($ret);
    }

    /**
     * Converts a rights string to a hex. number
     *
     * @param  string  $rights  Rights component string
     * @return string A string containing a hex number
     * @throws \Exception
     */
    public static function parseRights(string $rights): string {
        $ret = 0;
        $rights = explode('+', $rights);

        foreach ($rights as $right) {
            if (!array_key_exists(strtoupper($right), static::RIGHTS)) {
                throw new \Exception('Right "#{right}" does not exist');
            }

            $ret += static::RIGHTS[strtoupper($right)];
        }

        return dechex($ret);
    }

    /**
     * Converts a string in the form [#<id>, *] to a hex. number
     *
     * @param  string  $zone Zone component string
     * @return string A string containing a hex number
     * @throws \Exception
     */
    public static function parseZone(string $zone): string {
        return dechex(static::calculateIds($zone));
    }

    /**
     * Parses a rule string, e.g. "#5 HOST+VM/@12 INFO+CREATE+DELETE"
     *
     * @param  string  $ruleStr an ACL rule in string format
     * @return string[] an Array containing 3 strings (hex 64b numbers)
     * @throws \Exception
     */
    public static function parseRule(string $ruleStr): array {
        $ret = [];

        $ruleStr = explode(' ', $ruleStr);

        if(count($ruleStr) !== 3 && count($ruleStr) !== 4) {
            throw new \Exception('String needs at least three components: User, Resource, Rights {, Zone}');
        }

        $ret[] = static::parseUsers($ruleStr[0]);
        $ret[] = static::parseResources($ruleStr[1]);
        $ret[] = static::parseRights($ruleStr[2]);

        if (count($ruleStr) === 4) {
            $ret[] = static::parseZone($ruleStr[3]);
        }

        return $ret;
    }
}
