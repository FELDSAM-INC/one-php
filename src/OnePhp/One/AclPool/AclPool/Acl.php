<?php

namespace One\AclPool\AclPool;

/**
 * Class representing Acl
 */
class Acl
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $user
     */
    private $user = null;

    /**
     * @var string $resource
     */
    private $resource = null;

    /**
     * @var string $rights
     */
    private $rights = null;

    /**
     * @var string $zone
     */
    private $zone = null;

    /**
     * @var string $string
     */
    private $string = null;

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
     * Gets as user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param string $user
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * @param string $resource
     * @return self
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as rights
     *
     * @return string
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * Sets a new rights
     *
     * @param string $rights
     * @return self
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
        return $this;
    }

    /**
     * Gets as zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Sets a new zone
     *
     * @param string $zone
     * @return self
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
        return $this;
    }

    /**
     * Gets as string
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Sets a new string
     *
     * @param string $string
     * @return self
     */
    public function setString($string)
    {
        $this->string = $string;
        return $this;
    }


}

