<?php

namespace One\Vrouter;

/**
 * Class representing Vrouter
 */
class Vrouter
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var int $uid
     */
    private $uid = null;

    /**
     * @var int $gid
     */
    private $gid = null;

    /**
     * @var string $uname
     */
    private $uname = null;

    /**
     * @var string $gname
     */
    private $gname = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \One\Vrouter\Vrouter\Permissions $permissions
     */
    private $permissions = null;

    /**
     * @var \One\Vrouter\Vrouter\Lock $lock
     */
    private $lock = null;

    /**
     * @var int[] $vms
     */
    private $vms = null;

    /**
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * @param int $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as gid
     *
     * @return int
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Sets a new gid
     *
     * @param int $gid
     * @return self
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
        return $this;
    }

    /**
     * Gets as uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Sets a new uname
     *
     * @param string $uname
     * @return self
     */
    public function setUname($uname)
    {
        $this->uname = $uname;
        return $this;
    }

    /**
     * Gets as gname
     *
     * @return string
     */
    public function getGname()
    {
        return $this->gname;
    }

    /**
     * Sets a new gname
     *
     * @param string $gname
     * @return self
     */
    public function setGname($gname)
    {
        $this->gname = $gname;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as permissions
     *
     * @return \One\Vrouter\Vrouter\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\Vrouter\Vrouter\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\Vrouter\Vrouter\Permissions $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Gets as lock
     *
     * @return \One\Vrouter\Vrouter\Lock
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Sets a new lock
     *
     * @param \One\Vrouter\Vrouter\Lock $lock
     * @return self
     */
    public function setLock(\One\Vrouter\Vrouter\Lock $lock)
    {
        $this->lock = $lock;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToVms($id)
    {
        $this->vms[] = $id;
        return $this;
    }

    /**
     * isset vms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVms($index)
    {
        return isset($this->vms[$index]);
    }

    /**
     * unset vms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVms($index)
    {
        unset($this->vms[$index]);
    }

    /**
     * Gets as vms
     *
     * @return int[]
     */
    public function getVms()
    {
        return $this->vms;
    }

    /**
     * Sets a new vms
     *
     * @param int[] $vms
     * @return self
     */
    public function setVms(array $vms)
    {
        $this->vms = $vms;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \OnePhp\AnyType
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \OnePhp\AnyType $template
     * @return self
     */
    public function setTemplate(\OnePhp\AnyType $template)
    {
        $this->template = $template;
        return $this;
    }


}

