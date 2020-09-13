<?php

namespace One\GroupPool\GroupPool\DefaultGroupQuotas\NetworkQuota;

/**
 * Class representing Network
 */
class Network
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $leases
     */
    private $leases = null;

    /**
     * @var string $leasesUsed
     */
    private $leasesUsed = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as leases
     *
     * @return string
     */
    public function getLeases()
    {
        return $this->leases;
    }

    /**
     * Sets a new leases
     *
     * @param string $leases
     * @return self
     */
    public function setLeases($leases)
    {
        $this->leases = $leases;
        return $this;
    }

    /**
     * Gets as leasesUsed
     *
     * @return string
     */
    public function getLeasesUsed()
    {
        return $this->leasesUsed;
    }

    /**
     * Sets a new leasesUsed
     *
     * @param string $leasesUsed
     * @return self
     */
    public function setLeasesUsed($leasesUsed)
    {
        $this->leasesUsed = $leasesUsed;
        return $this;
    }


}

