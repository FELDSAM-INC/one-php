<?php

namespace One\VnetPool;

/**
 * Class representing VnetPool
 */
class VnetPool
{

    /**
     * @var \One\VnetPool\VnetPool\Vnet[] $vnet
     */
    private $vnet = [
        
    ];

    /**
     * Adds as vnet
     *
     * @return self
     * @param \One\VnetPool\VnetPool\Vnet $vnet
     */
    public function addToVnet(\One\VnetPool\VnetPool\Vnet $vnet)
    {
        $this->vnet[] = $vnet;
        return $this;
    }

    /**
     * isset vnet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVnet($index)
    {
        return isset($this->vnet[$index]);
    }

    /**
     * unset vnet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVnet($index)
    {
        unset($this->vnet[$index]);
    }

    /**
     * Gets as vnet
     *
     * @return \One\VnetPool\VnetPool\Vnet[]
     */
    public function getVnet()
    {
        return $this->vnet;
    }

    /**
     * Sets a new vnet
     *
     * @param \One\VnetPool\VnetPool\Vnet[] $vnet
     * @return self
     */
    public function setVnet(array $vnet)
    {
        $this->vnet = $vnet;
        return $this;
    }


}

