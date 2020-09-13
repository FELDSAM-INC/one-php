<?php

namespace One\VnetPool\VnetPool\Vnet\ArPool;

/**
 * Class representing Ar
 */
class Ar
{

    /**
     * @var string $allocated
     */
    private $allocated = null;

    /**
     * @var string $arId
     */
    private $arId = null;

    /**
     * @var string $globalPrefix
     */
    private $globalPrefix = null;

    /**
     * @var string $ip
     */
    private $ip = null;

    /**
     * @var string $mac
     */
    private $mac = null;

    /**
     * @var string $parentNetworkArId
     */
    private $parentNetworkArId = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $ulaPrefix
     */
    private $ulaPrefix = null;

    /**
     * @var string $vnMad
     */
    private $vnMad = null;

    /**
     * Gets as allocated
     *
     * @return string
     */
    public function getAllocated()
    {
        return $this->allocated;
    }

    /**
     * Sets a new allocated
     *
     * @param string $allocated
     * @return self
     */
    public function setAllocated($allocated)
    {
        $this->allocated = $allocated;
        return $this;
    }

    /**
     * Gets as arId
     *
     * @return string
     */
    public function getArId()
    {
        return $this->arId;
    }

    /**
     * Sets a new arId
     *
     * @param string $arId
     * @return self
     */
    public function setArId($arId)
    {
        $this->arId = $arId;
        return $this;
    }

    /**
     * Gets as globalPrefix
     *
     * @return string
     */
    public function getGlobalPrefix()
    {
        return $this->globalPrefix;
    }

    /**
     * Sets a new globalPrefix
     *
     * @param string $globalPrefix
     * @return self
     */
    public function setGlobalPrefix($globalPrefix)
    {
        $this->globalPrefix = $globalPrefix;
        return $this;
    }

    /**
     * Gets as ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Sets a new ip
     *
     * @param string $ip
     * @return self
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * Gets as mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Sets a new mac
     *
     * @param string $mac
     * @return self
     */
    public function setMac($mac)
    {
        $this->mac = $mac;
        return $this;
    }

    /**
     * Gets as parentNetworkArId
     *
     * @return string
     */
    public function getParentNetworkArId()
    {
        return $this->parentNetworkArId;
    }

    /**
     * Sets a new parentNetworkArId
     *
     * @param string $parentNetworkArId
     * @return self
     */
    public function setParentNetworkArId($parentNetworkArId)
    {
        $this->parentNetworkArId = $parentNetworkArId;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as ulaPrefix
     *
     * @return string
     */
    public function getUlaPrefix()
    {
        return $this->ulaPrefix;
    }

    /**
     * Sets a new ulaPrefix
     *
     * @param string $ulaPrefix
     * @return self
     */
    public function setUlaPrefix($ulaPrefix)
    {
        $this->ulaPrefix = $ulaPrefix;
        return $this;
    }

    /**
     * Gets as vnMad
     *
     * @return string
     */
    public function getVnMad()
    {
        return $this->vnMad;
    }

    /**
     * Sets a new vnMad
     *
     * @param string $vnMad
     * @return self
     */
    public function setVnMad($vnMad)
    {
        $this->vnMad = $vnMad;
        return $this;
    }


}

