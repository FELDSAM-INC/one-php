<?php

namespace One\Vdc\Vdc\Datastores;

/**
 * Class representing Datastore
 */
class Datastore
{

    /**
     * @var int $zoneId
     */
    private $zoneId = null;

    /**
     * @var int $datastoreId
     */
    private $datastoreId = null;

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
     * Gets as datastoreId
     *
     * @return int
     */
    public function getDatastoreId()
    {
        return $this->datastoreId;
    }

    /**
     * Sets a new datastoreId
     *
     * @param int $datastoreId
     * @return self
     */
    public function setDatastoreId($datastoreId)
    {
        $this->datastoreId = $datastoreId;
        return $this;
    }


}

