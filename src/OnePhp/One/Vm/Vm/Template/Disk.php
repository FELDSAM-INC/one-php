<?php

namespace One\Vm\Vm\Template;

/**
 * Class representing Disk
 */
class Disk
{

    /**
     * @var string $vcenterDsRef
     */
    private $vcenterDsRef = null;

    /**
     * @var string $vcenterInstanceId
     */
    private $vcenterInstanceId = null;

    /**
     * Gets as vcenterDsRef
     *
     * @return string
     */
    public function getVcenterDsRef()
    {
        return $this->vcenterDsRef;
    }

    /**
     * Sets a new vcenterDsRef
     *
     * @param string $vcenterDsRef
     * @return self
     */
    public function setVcenterDsRef($vcenterDsRef)
    {
        $this->vcenterDsRef = $vcenterDsRef;
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


}

