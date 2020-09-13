<?php

namespace One\Datastore\Datastore;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $vcenterDcName
     */
    private $vcenterDcName = null;

    /**
     * @var string $vcenterDcRef
     */
    private $vcenterDcRef = null;

    /**
     * @var string $vcenterDsName
     */
    private $vcenterDsName = null;

    /**
     * @var string $vcenterDsRef
     */
    private $vcenterDsRef = null;

    /**
     * @var string $vcenterHost
     */
    private $vcenterHost = null;

    /**
     * @var string $vcenterInstanceId
     */
    private $vcenterInstanceId = null;

    /**
     * Gets as vcenterDcName
     *
     * @return string
     */
    public function getVcenterDcName()
    {
        return $this->vcenterDcName;
    }

    /**
     * Sets a new vcenterDcName
     *
     * @param string $vcenterDcName
     * @return self
     */
    public function setVcenterDcName($vcenterDcName)
    {
        $this->vcenterDcName = $vcenterDcName;
        return $this;
    }

    /**
     * Gets as vcenterDcRef
     *
     * @return string
     */
    public function getVcenterDcRef()
    {
        return $this->vcenterDcRef;
    }

    /**
     * Sets a new vcenterDcRef
     *
     * @param string $vcenterDcRef
     * @return self
     */
    public function setVcenterDcRef($vcenterDcRef)
    {
        $this->vcenterDcRef = $vcenterDcRef;
        return $this;
    }

    /**
     * Gets as vcenterDsName
     *
     * @return string
     */
    public function getVcenterDsName()
    {
        return $this->vcenterDsName;
    }

    /**
     * Sets a new vcenterDsName
     *
     * @param string $vcenterDsName
     * @return self
     */
    public function setVcenterDsName($vcenterDsName)
    {
        $this->vcenterDsName = $vcenterDsName;
        return $this;
    }

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
     * Gets as vcenterHost
     *
     * @return string
     */
    public function getVcenterHost()
    {
        return $this->vcenterHost;
    }

    /**
     * Sets a new vcenterHost
     *
     * @param string $vcenterHost
     * @return self
     */
    public function setVcenterHost($vcenterHost)
    {
        $this->vcenterHost = $vcenterHost;
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

