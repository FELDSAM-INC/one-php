<?php

namespace One\Vdc\Vdc\Hosts;

/**
 * Class representing Host
 */
class Host
{

    /**
     * @var int $zoneId
     */
    private $zoneId = null;

    /**
     * @var int $hostId
     */
    private $hostId = null;

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
     * Gets as hostId
     *
     * @return int
     */
    public function getHostId()
    {
        return $this->hostId;
    }

    /**
     * Sets a new hostId
     *
     * @param int $hostId
     * @return self
     */
    public function setHostId($hostId)
    {
        $this->hostId = $hostId;
        return $this;
    }


}

