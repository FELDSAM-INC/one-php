<?php

namespace One\Host\Host;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $vcenterCcrRef
     */
    private $vcenterCcrRef = null;

    /**
     * @var string[] $vcenterDsRef
     */
    private $vcenterDsRef = [
        
    ];

    /**
     * @var string $vcenterHost
     */
    private $vcenterHost = null;

    /**
     * @var string $vcenterInstanceId
     */
    private $vcenterInstanceId = null;

    /**
     * @var string $vcenterName
     */
    private $vcenterName = null;

    /**
     * @var string $vcenterPassword
     */
    private $vcenterPassword = null;

    /**
     * @var \OnePhp\AnyType[] $vcenterResourcePoolInfo
     */
    private $vcenterResourcePoolInfo = [
        
    ];

    /**
     * @var string $vcenterUser
     */
    private $vcenterUser = null;

    /**
     * @var string $vcenterVersion
     */
    private $vcenterVersion = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Gets as vcenterCcrRef
     *
     * @return string
     */
    public function getVcenterCcrRef()
    {
        return $this->vcenterCcrRef;
    }

    /**
     * Sets a new vcenterCcrRef
     *
     * @param string $vcenterCcrRef
     * @return self
     */
    public function setVcenterCcrRef($vcenterCcrRef)
    {
        $this->vcenterCcrRef = $vcenterCcrRef;
        return $this;
    }

    /**
     * Adds as vcenterDsRef
     *
     * @return self
     * @param string $vcenterDsRef
     */
    public function addToVcenterDsRef($vcenterDsRef)
    {
        $this->vcenterDsRef[] = $vcenterDsRef;
        return $this;
    }

    /**
     * isset vcenterDsRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVcenterDsRef($index)
    {
        return isset($this->vcenterDsRef[$index]);
    }

    /**
     * unset vcenterDsRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVcenterDsRef($index)
    {
        unset($this->vcenterDsRef[$index]);
    }

    /**
     * Gets as vcenterDsRef
     *
     * @return string[]
     */
    public function getVcenterDsRef()
    {
        return $this->vcenterDsRef;
    }

    /**
     * Sets a new vcenterDsRef
     *
     * @param string[] $vcenterDsRef
     * @return self
     */
    public function setVcenterDsRef(array $vcenterDsRef)
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

    /**
     * Gets as vcenterName
     *
     * @return string
     */
    public function getVcenterName()
    {
        return $this->vcenterName;
    }

    /**
     * Sets a new vcenterName
     *
     * @param string $vcenterName
     * @return self
     */
    public function setVcenterName($vcenterName)
    {
        $this->vcenterName = $vcenterName;
        return $this;
    }

    /**
     * Gets as vcenterPassword
     *
     * @return string
     */
    public function getVcenterPassword()
    {
        return $this->vcenterPassword;
    }

    /**
     * Sets a new vcenterPassword
     *
     * @param string $vcenterPassword
     * @return self
     */
    public function setVcenterPassword($vcenterPassword)
    {
        $this->vcenterPassword = $vcenterPassword;
        return $this;
    }

    /**
     * Adds as vcenterResourcePoolInfo
     *
     * @return self
     * @param \OnePhp\AnyType $vcenterResourcePoolInfo
     */
    public function addToVcenterResourcePoolInfo(\OnePhp\AnyType $vcenterResourcePoolInfo)
    {
        $this->vcenterResourcePoolInfo[] = $vcenterResourcePoolInfo;
        return $this;
    }

    /**
     * isset vcenterResourcePoolInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVcenterResourcePoolInfo($index)
    {
        return isset($this->vcenterResourcePoolInfo[$index]);
    }

    /**
     * unset vcenterResourcePoolInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVcenterResourcePoolInfo($index)
    {
        unset($this->vcenterResourcePoolInfo[$index]);
    }

    /**
     * Gets as vcenterResourcePoolInfo
     *
     * @return \OnePhp\AnyType[]
     */
    public function getVcenterResourcePoolInfo()
    {
        return $this->vcenterResourcePoolInfo;
    }

    /**
     * Sets a new vcenterResourcePoolInfo
     *
     * @param \OnePhp\AnyType[] $vcenterResourcePoolInfo
     * @return self
     */
    public function setVcenterResourcePoolInfo(array $vcenterResourcePoolInfo)
    {
        $this->vcenterResourcePoolInfo = $vcenterResourcePoolInfo;
        return $this;
    }

    /**
     * Gets as vcenterUser
     *
     * @return string
     */
    public function getVcenterUser()
    {
        return $this->vcenterUser;
    }

    /**
     * Sets a new vcenterUser
     *
     * @param string $vcenterUser
     * @return self
     */
    public function setVcenterUser($vcenterUser)
    {
        $this->vcenterUser = $vcenterUser;
        return $this;
    }

    /**
     * Gets as vcenterVersion
     *
     * @return string
     */
    public function getVcenterVersion()
    {
        return $this->vcenterVersion;
    }

    /**
     * Sets a new vcenterVersion
     *
     * @param string $vcenterVersion
     * @return self
     */
    public function setVcenterVersion($vcenterVersion)
    {
        $this->vcenterVersion = $vcenterVersion;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

