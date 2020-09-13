<?php

namespace One\Vdc\Vdc\Clusters;

/**
 * Class representing Cluster
 */
class Cluster
{

    /**
     * @var int $zoneId
     */
    private $zoneId = null;

    /**
     * @var int $clusterId
     */
    private $clusterId = null;

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
     * Gets as clusterId
     *
     * @return int
     */
    public function getClusterId()
    {
        return $this->clusterId;
    }

    /**
     * Sets a new clusterId
     *
     * @param int $clusterId
     * @return self
     */
    public function setClusterId($clusterId)
    {
        $this->clusterId = $clusterId;
        return $this;
    }


}

