<?php

namespace One\GroupPool\GroupPool\DefaultGroupQuotas;

/**
 * Class representing NetworkQuota
 */
class NetworkQuota
{

    /**
     * @var \One\GroupPool\GroupPool\DefaultGroupQuotas\NetworkQuota\Network[] $network
     */
    private $network = [
        
    ];

    /**
     * Adds as network
     *
     * @return self
     * @param \One\GroupPool\GroupPool\DefaultGroupQuotas\NetworkQuota\Network $network
     */
    public function addToNetwork(\One\GroupPool\GroupPool\DefaultGroupQuotas\NetworkQuota\Network $network)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * isset network
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetwork($index)
    {
        return isset($this->network[$index]);
    }

    /**
     * unset network
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetwork($index)
    {
        unset($this->network[$index]);
    }

    /**
     * Gets as network
     *
     * @return \One\GroupPool\GroupPool\DefaultGroupQuotas\NetworkQuota\Network[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * @param \One\GroupPool\GroupPool\DefaultGroupQuotas\NetworkQuota\Network[] $network
     * @return self
     */
    public function setNetwork(array $network)
    {
        $this->network = $network;
        return $this;
    }


}

