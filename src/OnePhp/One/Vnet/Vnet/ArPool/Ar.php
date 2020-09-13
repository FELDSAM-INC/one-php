<?php

namespace One\Vnet\Vnet\ArPool;

/**
 * Class representing Ar
 */
class Ar
{

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
     * @var string $macEnd
     */
    private $macEnd = null;

    /**
     * @var string $ipEnd
     */
    private $ipEnd = null;

    /**
     * @var string $ip6Ula
     */
    private $ip6Ula = null;

    /**
     * @var string $ip6UlaEnd
     */
    private $ip6UlaEnd = null;

    /**
     * @var string $ip6Global
     */
    private $ip6Global = null;

    /**
     * @var string $ip6GlobalEnd
     */
    private $ip6GlobalEnd = null;

    /**
     * @var string $ip6
     */
    private $ip6 = null;

    /**
     * @var string $ip6End
     */
    private $ip6End = null;

    /**
     * @var string $usedLeases
     */
    private $usedLeases = null;

    /**
     * @var \One\Vnet\Vnet\ArPool\Ar\Leases\Lease[] $leases
     */
    private $leases = null;

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

    /**
     * Gets as macEnd
     *
     * @return string
     */
    public function getMacEnd()
    {
        return $this->macEnd;
    }

    /**
     * Sets a new macEnd
     *
     * @param string $macEnd
     * @return self
     */
    public function setMacEnd($macEnd)
    {
        $this->macEnd = $macEnd;
        return $this;
    }

    /**
     * Gets as ipEnd
     *
     * @return string
     */
    public function getIpEnd()
    {
        return $this->ipEnd;
    }

    /**
     * Sets a new ipEnd
     *
     * @param string $ipEnd
     * @return self
     */
    public function setIpEnd($ipEnd)
    {
        $this->ipEnd = $ipEnd;
        return $this;
    }

    /**
     * Gets as ip6Ula
     *
     * @return string
     */
    public function getIp6Ula()
    {
        return $this->ip6Ula;
    }

    /**
     * Sets a new ip6Ula
     *
     * @param string $ip6Ula
     * @return self
     */
    public function setIp6Ula($ip6Ula)
    {
        $this->ip6Ula = $ip6Ula;
        return $this;
    }

    /**
     * Gets as ip6UlaEnd
     *
     * @return string
     */
    public function getIp6UlaEnd()
    {
        return $this->ip6UlaEnd;
    }

    /**
     * Sets a new ip6UlaEnd
     *
     * @param string $ip6UlaEnd
     * @return self
     */
    public function setIp6UlaEnd($ip6UlaEnd)
    {
        $this->ip6UlaEnd = $ip6UlaEnd;
        return $this;
    }

    /**
     * Gets as ip6Global
     *
     * @return string
     */
    public function getIp6Global()
    {
        return $this->ip6Global;
    }

    /**
     * Sets a new ip6Global
     *
     * @param string $ip6Global
     * @return self
     */
    public function setIp6Global($ip6Global)
    {
        $this->ip6Global = $ip6Global;
        return $this;
    }

    /**
     * Gets as ip6GlobalEnd
     *
     * @return string
     */
    public function getIp6GlobalEnd()
    {
        return $this->ip6GlobalEnd;
    }

    /**
     * Sets a new ip6GlobalEnd
     *
     * @param string $ip6GlobalEnd
     * @return self
     */
    public function setIp6GlobalEnd($ip6GlobalEnd)
    {
        $this->ip6GlobalEnd = $ip6GlobalEnd;
        return $this;
    }

    /**
     * Gets as ip6
     *
     * @return string
     */
    public function getIp6()
    {
        return $this->ip6;
    }

    /**
     * Sets a new ip6
     *
     * @param string $ip6
     * @return self
     */
    public function setIp6($ip6)
    {
        $this->ip6 = $ip6;
        return $this;
    }

    /**
     * Gets as ip6End
     *
     * @return string
     */
    public function getIp6End()
    {
        return $this->ip6End;
    }

    /**
     * Sets a new ip6End
     *
     * @param string $ip6End
     * @return self
     */
    public function setIp6End($ip6End)
    {
        $this->ip6End = $ip6End;
        return $this;
    }

    /**
     * Gets as usedLeases
     *
     * @return string
     */
    public function getUsedLeases()
    {
        return $this->usedLeases;
    }

    /**
     * Sets a new usedLeases
     *
     * @param string $usedLeases
     * @return self
     */
    public function setUsedLeases($usedLeases)
    {
        $this->usedLeases = $usedLeases;
        return $this;
    }

    /**
     * Adds as lease
     *
     * @return self
     * @param \One\Vnet\Vnet\ArPool\Ar\Leases\Lease $lease
     */
    public function addToLeases(\One\Vnet\Vnet\ArPool\Ar\Leases\Lease $lease)
    {
        $this->leases[] = $lease;
        return $this;
    }

    /**
     * isset leases
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLeases($index)
    {
        return isset($this->leases[$index]);
    }

    /**
     * unset leases
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLeases($index)
    {
        unset($this->leases[$index]);
    }

    /**
     * Gets as leases
     *
     * @return \One\Vnet\Vnet\ArPool\Ar\Leases\Lease[]
     */
    public function getLeases()
    {
        return $this->leases;
    }

    /**
     * Sets a new leases
     *
     * @param \One\Vnet\Vnet\ArPool\Ar\Leases\Lease[] $leases
     * @return self
     */
    public function setLeases(array $leases)
    {
        $this->leases = $leases;
        return $this;
    }


}

