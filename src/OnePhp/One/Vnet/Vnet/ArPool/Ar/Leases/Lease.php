<?php

namespace One\Vnet\Vnet\ArPool\Ar\Leases;

/**
 * Class representing Lease
 */
class Lease
{

    /**
     * @var string $ip
     */
    private $ip = null;

    /**
     * @var string $ip6
     */
    private $ip6 = null;

    /**
     * @var string $ip6Global
     */
    private $ip6Global = null;

    /**
     * @var string $ip6Link
     */
    private $ip6Link = null;

    /**
     * @var string $ip6Ula
     */
    private $ip6Ula = null;

    /**
     * @var string $mac
     */
    private $mac = null;

    /**
     * @var int $vm
     */
    private $vm = null;

    /**
     * @var int $vnet
     */
    private $vnet = null;

    /**
     * @var int $vrouter
     */
    private $vrouter = null;

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
     * Gets as ip6Link
     *
     * @return string
     */
    public function getIp6Link()
    {
        return $this->ip6Link;
    }

    /**
     * Sets a new ip6Link
     *
     * @param string $ip6Link
     * @return self
     */
    public function setIp6Link($ip6Link)
    {
        $this->ip6Link = $ip6Link;
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
     * Gets as vm
     *
     * @return int
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param int $vm
     * @return self
     */
    public function setVm($vm)
    {
        $this->vm = $vm;
        return $this;
    }

    /**
     * Gets as vnet
     *
     * @return int
     */
    public function getVnet()
    {
        return $this->vnet;
    }

    /**
     * Sets a new vnet
     *
     * @param int $vnet
     * @return self
     */
    public function setVnet($vnet)
    {
        $this->vnet = $vnet;
        return $this;
    }

    /**
     * Gets as vrouter
     *
     * @return int
     */
    public function getVrouter()
    {
        return $this->vrouter;
    }

    /**
     * Sets a new vrouter
     *
     * @param int $vrouter
     * @return self
     */
    public function setVrouter($vrouter)
    {
        $this->vrouter = $vrouter;
        return $this;
    }


}

