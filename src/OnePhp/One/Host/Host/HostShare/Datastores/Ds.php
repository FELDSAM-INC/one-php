<?php

namespace One\Host\Host\HostShare\Datastores;

/**
 * Class representing Ds
 */
class Ds
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var int $freeMb
     */
    private $freeMb = null;

    /**
     * @var int $totalMb
     */
    private $totalMb = null;

    /**
     * @var int $usedMb
     */
    private $usedMb = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as freeMb
     *
     * @return int
     */
    public function getFreeMb()
    {
        return $this->freeMb;
    }

    /**
     * Sets a new freeMb
     *
     * @param int $freeMb
     * @return self
     */
    public function setFreeMb($freeMb)
    {
        $this->freeMb = $freeMb;
        return $this;
    }

    /**
     * Gets as totalMb
     *
     * @return int
     */
    public function getTotalMb()
    {
        return $this->totalMb;
    }

    /**
     * Sets a new totalMb
     *
     * @param int $totalMb
     * @return self
     */
    public function setTotalMb($totalMb)
    {
        $this->totalMb = $totalMb;
        return $this;
    }

    /**
     * Gets as usedMb
     *
     * @return int
     */
    public function getUsedMb()
    {
        return $this->usedMb;
    }

    /**
     * Sets a new usedMb
     *
     * @param int $usedMb
     * @return self
     */
    public function setUsedMb($usedMb)
    {
        $this->usedMb = $usedMb;
        return $this;
    }


}

