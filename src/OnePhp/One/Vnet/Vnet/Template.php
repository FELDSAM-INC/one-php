<?php

namespace One\Vnet\Vnet;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $contextForceIpv4
     */
    private $contextForceIpv4 = null;

    /**
     * @var string $dns
     */
    private $dns = null;

    /**
     * @var string $gateway
     */
    private $gateway = null;

    /**
     * @var string $gateway6
     */
    private $gateway6 = null;

    /**
     * @var int $guestMtu
     */
    private $guestMtu = null;

    /**
     * @var string $networkAddress
     */
    private $networkAddress = null;

    /**
     * @var string $networkMask
     */
    private $networkMask = null;

    /**
     * @var string $searchDomain
     */
    private $searchDomain = null;

    /**
     * @var string $vcenterFromWild
     */
    private $vcenterFromWild = null;

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
     * @var string $vcenterTemplateRef
     */
    private $vcenterTemplateRef = null;

    /**
     * Gets as contextForceIpv4
     *
     * @return string
     */
    public function getContextForceIpv4()
    {
        return $this->contextForceIpv4;
    }

    /**
     * Sets a new contextForceIpv4
     *
     * @param string $contextForceIpv4
     * @return self
     */
    public function setContextForceIpv4($contextForceIpv4)
    {
        $this->contextForceIpv4 = $contextForceIpv4;
        return $this;
    }

    /**
     * Gets as dns
     *
     * @return string
     */
    public function getDns()
    {
        return $this->dns;
    }

    /**
     * Sets a new dns
     *
     * @param string $dns
     * @return self
     */
    public function setDns($dns)
    {
        $this->dns = $dns;
        return $this;
    }

    /**
     * Gets as gateway
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Sets a new gateway
     *
     * @param string $gateway
     * @return self
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
        return $this;
    }

    /**
     * Gets as gateway6
     *
     * @return string
     */
    public function getGateway6()
    {
        return $this->gateway6;
    }

    /**
     * Sets a new gateway6
     *
     * @param string $gateway6
     * @return self
     */
    public function setGateway6($gateway6)
    {
        $this->gateway6 = $gateway6;
        return $this;
    }

    /**
     * Gets as guestMtu
     *
     * @return int
     */
    public function getGuestMtu()
    {
        return $this->guestMtu;
    }

    /**
     * Sets a new guestMtu
     *
     * @param int $guestMtu
     * @return self
     */
    public function setGuestMtu($guestMtu)
    {
        $this->guestMtu = $guestMtu;
        return $this;
    }

    /**
     * Gets as networkAddress
     *
     * @return string
     */
    public function getNetworkAddress()
    {
        return $this->networkAddress;
    }

    /**
     * Sets a new networkAddress
     *
     * @param string $networkAddress
     * @return self
     */
    public function setNetworkAddress($networkAddress)
    {
        $this->networkAddress = $networkAddress;
        return $this;
    }

    /**
     * Gets as networkMask
     *
     * @return string
     */
    public function getNetworkMask()
    {
        return $this->networkMask;
    }

    /**
     * Sets a new networkMask
     *
     * @param string $networkMask
     * @return self
     */
    public function setNetworkMask($networkMask)
    {
        $this->networkMask = $networkMask;
        return $this;
    }

    /**
     * Gets as searchDomain
     *
     * @return string
     */
    public function getSearchDomain()
    {
        return $this->searchDomain;
    }

    /**
     * Sets a new searchDomain
     *
     * @param string $searchDomain
     * @return self
     */
    public function setSearchDomain($searchDomain)
    {
        $this->searchDomain = $searchDomain;
        return $this;
    }

    /**
     * Gets as vcenterFromWild
     *
     * @return string
     */
    public function getVcenterFromWild()
    {
        return $this->vcenterFromWild;
    }

    /**
     * Sets a new vcenterFromWild
     *
     * @param string $vcenterFromWild
     * @return self
     */
    public function setVcenterFromWild($vcenterFromWild)
    {
        $this->vcenterFromWild = $vcenterFromWild;
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

    /**
     * Gets as vcenterTemplateRef
     *
     * @return string
     */
    public function getVcenterTemplateRef()
    {
        return $this->vcenterTemplateRef;
    }

    /**
     * Sets a new vcenterTemplateRef
     *
     * @param string $vcenterTemplateRef
     * @return self
     */
    public function setVcenterTemplateRef($vcenterTemplateRef)
    {
        $this->vcenterTemplateRef = $vcenterTemplateRef;
        return $this;
    }


}

