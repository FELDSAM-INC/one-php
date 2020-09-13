<?php

namespace One\Vdc\Vdc;

/**
 * Class representing Vnets
 */
class Vnets
{

    /**
     * @var \One\Vdc\Vdc\Vnets\Vnet[] $vnet
     */
    private $vnet = [
        
    ];

    /**
     * Adds as vnet
     *
     * @return self
     * @param \One\Vdc\Vdc\Vnets\Vnet $vnet
     */
    public function addToVnet(\One\Vdc\Vdc\Vnets\Vnet $vnet)
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
     * @return \One\Vdc\Vdc\Vnets\Vnet[]
     */
    public function getVnet()
    {
        return $this->vnet;
    }

    /**
     * Sets a new vnet
     *
     * @param \One\Vdc\Vdc\Vnets\Vnet[] $vnet
     * @return self
     */
    public function setVnet(array $vnet)
    {
        $this->vnet = $vnet;
        return $this;
    }


}

