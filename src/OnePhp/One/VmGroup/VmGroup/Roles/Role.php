<?php

namespace One\VmGroup\VmGroup\Roles;

/**
 * Class representing Role
 */
class Role
{

    /**
     * @var string $hostAffined
     */
    private $hostAffined = null;

    /**
     * @var string $hostAntiAffined
     */
    private $hostAntiAffined = null;

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $policy
     */
    private $policy = null;

    /**
     * Gets as hostAffined
     *
     * @return string
     */
    public function getHostAffined()
    {
        return $this->hostAffined;
    }

    /**
     * Sets a new hostAffined
     *
     * @param string $hostAffined
     * @return self
     */
    public function setHostAffined($hostAffined)
    {
        $this->hostAffined = $hostAffined;
        return $this;
    }

    /**
     * Gets as hostAntiAffined
     *
     * @return string
     */
    public function getHostAntiAffined()
    {
        return $this->hostAntiAffined;
    }

    /**
     * Sets a new hostAntiAffined
     *
     * @param string $hostAntiAffined
     * @return self
     */
    public function setHostAntiAffined($hostAntiAffined)
    {
        $this->hostAntiAffined = $hostAntiAffined;
        return $this;
    }

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
     * Gets as policy
     *
     * @return string
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * @param string $policy
     * @return self
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }


}

