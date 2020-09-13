<?php

namespace One\Vdc\Vdc\Vnets;

/**
 * Class representing Vnet
 */
class Vnet
{

    /**
     * @var int $zoneId
     */
    private $zoneId = null;

    /**
     * @var int $vnetId
     */
    private $vnetId = null;

    /**
     * Gets as zoneId
     *
     * @return int
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Sets a new zoneId
     *
     * @param int $zoneId
     * @return self
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;
        return $this;
    }

    /**
     * Gets as vnetId
     *
     * @return int
     */
    public function getVnetId()
    {
        return $this->vnetId;
    }

    /**
     * Sets a new vnetId
     *
     * @param int $vnetId
     * @return self
     */
    public function setVnetId($vnetId)
    {
        $this->vnetId = $vnetId;
        return $this;
    }


}

