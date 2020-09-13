<?php

namespace One\Vm\Vm\Template;

/**
 * Class representing Nic
 */
class Nic
{

    /**
     * @var string $bridgeType
     */
    private $bridgeType = null;

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
     * Gets as bridgeType
     *
     * @return string
     */
    public function getBridgeType()
    {
        return $this->bridgeType;
    }

    /**
     * Sets a new bridgeType
     *
     * @param string $bridgeType
     * @return self
     */
    public function setBridgeType($bridgeType)
    {
        $this->bridgeType = $bridgeType;
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

