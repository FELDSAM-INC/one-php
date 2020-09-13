<?php

namespace One\Host\Host\HostShare\NumaNodes\Node;

/**
 * Class representing Memory
 */
class Memory
{

    /**
     * @var string $distance
     */
    private $distance = null;

    /**
     * @var int $free
     */
    private $free = null;

    /**
     * @var int $total
     */
    private $total = null;

    /**
     * @var int $usage
     */
    private $usage = null;

    /**
     * @var int $used
     */
    private $used = null;

    /**
     * Gets as distance
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * @param string $distance
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Gets as free
     *
     * @return int
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Sets a new free
     *
     * @param int $free
     * @return self
     */
    public function setFree($free)
    {
        $this->free = $free;
        return $this;
    }

    /**
     * Gets as total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * @param int $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * @param int $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as used
     *
     * @return int
     */
    public function getUsed()
    {
        return $this->used;
    }

    /**
     * Sets a new used
     *
     * @param int $used
     * @return self
     */
    public function setUsed($used)
    {
        $this->used = $used;
        return $this;
    }


}

