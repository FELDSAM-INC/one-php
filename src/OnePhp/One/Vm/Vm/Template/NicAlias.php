<?php

namespace One\Vm\Vm\Template;

/**
 * Class representing NicAlias
 */
class NicAlias
{

    /**
     * @var string $aliasId
     */
    private $aliasId = null;

    /**
     * @var string $parent
     */
    private $parent = null;

    /**
     * @var string $parentId
     */
    private $parentId = null;

    /**
     * @var string $vcenterInstanceId
     */
    private $vcenterInstanceId = null;

    /**
     * @var string $vcenterNetRef
     */
    private $vcenterNetRef = null;

    /**
     * @var string $vcenterPortgroupType
     */
    private $vcenterPortgroupType = null;

    /**
     * Gets as aliasId
     *
     * @return string
     */
    public function getAliasId()
    {
        return $this->aliasId;
    }

    /**
     * Sets a new aliasId
     *
     * @param string $aliasId
     * @return self
     */
    public function setAliasId($aliasId)
    {
        $this->aliasId = $aliasId;
        return $this;
    }

    /**
     * Gets as parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * @param string $parent
     * @return self
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId
     *
     * @param string $parentId
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Gets as vcenterInstanceId
     *
     * @return string
     */
    public function getVcenterInstanceId()
    {
        return $this->vcenterInstanceId;
    }

    /**
     * Sets a new vcenterInstanceId
     *
     * @param string $vcenterInstanceId
     * @return self
     */
    public function setVcenterInstanceId($vcenterInstanceId)
    {
        $this->vcenterInstanceId = $vcenterInstanceId;
        return $this;
    }

    /**
     * Gets as vcenterNetRef
     *
     * @return string
     */
    public function getVcenterNetRef()
    {
        return $this->vcenterNetRef;
    }

    /**
     * Sets a new vcenterNetRef
     *
     * @param string $vcenterNetRef
     * @return self
     */
    public function setVcenterNetRef($vcenterNetRef)
    {
        $this->vcenterNetRef = $vcenterNetRef;
        return $this;
    }

    /**
     * Gets as vcenterPortgroupType
     *
     * @return string
     */
    public function getVcenterPortgroupType()
    {
        return $this->vcenterPortgroupType;
    }

    /**
     * Sets a new vcenterPortgroupType
     *
     * @param string $vcenterPortgroupType
     * @return self
     */
    public function setVcenterPortgroupType($vcenterPortgroupType)
    {
        $this->vcenterPortgroupType = $vcenterPortgroupType;
        return $this;
    }


}

