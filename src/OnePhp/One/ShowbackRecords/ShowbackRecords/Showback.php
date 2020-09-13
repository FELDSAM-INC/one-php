<?php

namespace One\ShowbackRecords\ShowbackRecords;

/**
 * Class representing Showback
 */
class Showback
{

    /**
     * @var int $vmid
     */
    private $vmid = null;

    /**
     * @var string $vmname
     */
    private $vmname = null;

    /**
     * @var int $uid
     */
    private $uid = null;

    /**
     * @var int $gid
     */
    private $gid = null;

    /**
     * @var string $uname
     */
    private $uname = null;

    /**
     * @var string $gname
     */
    private $gname = null;

    /**
     * @var int $year
     */
    private $year = null;

    /**
     * @var int $month
     */
    private $month = null;

    /**
     * @var float $cpuCost
     */
    private $cpuCost = null;

    /**
     * @var float $memoryCost
     */
    private $memoryCost = null;

    /**
     * @var float $diskCost
     */
    private $diskCost = null;

    /**
     * @var float $totalCost
     */
    private $totalCost = null;

    /**
     * @var float $hours
     */
    private $hours = null;

    /**
     * Gets as vmid
     *
     * @return int
     */
    public function getVmid()
    {
        return $this->vmid;
    }

    /**
     * Sets a new vmid
     *
     * @param int $vmid
     * @return self
     */
    public function setVmid($vmid)
    {
        $this->vmid = $vmid;
        return $this;
    }

    /**
     * Gets as vmname
     *
     * @return string
     */
    public function getVmname()
    {
        return $this->vmname;
    }

    /**
     * Sets a new vmname
     *
     * @param string $vmname
     * @return self
     */
    public function setVmname($vmname)
    {
        $this->vmname = $vmname;
        return $this;
    }

    /**
     * Gets as uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * @param int $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as gid
     *
     * @return int
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Sets a new gid
     *
     * @param int $gid
     * @return self
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
        return $this;
    }

    /**
     * Gets as uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Sets a new uname
     *
     * @param string $uname
     * @return self
     */
    public function setUname($uname)
    {
        $this->uname = $uname;
        return $this;
    }

    /**
     * Gets as gname
     *
     * @return string
     */
    public function getGname()
    {
        return $this->gname;
    }

    /**
     * Sets a new gname
     *
     * @param string $gname
     * @return self
     */
    public function setGname($gname)
    {
        $this->gname = $gname;
        return $this;
    }

    /**
     * Gets as year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * @param int $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Gets as month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets a new month
     *
     * @param int $month
     * @return self
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * Gets as cpuCost
     *
     * @return float
     */
    public function getCpuCost()
    {
        return $this->cpuCost;
    }

    /**
     * Sets a new cpuCost
     *
     * @param float $cpuCost
     * @return self
     */
    public function setCpuCost($cpuCost)
    {
        $this->cpuCost = $cpuCost;
        return $this;
    }

    /**
     * Gets as memoryCost
     *
     * @return float
     */
    public function getMemoryCost()
    {
        return $this->memoryCost;
    }

    /**
     * Sets a new memoryCost
     *
     * @param float $memoryCost
     * @return self
     */
    public function setMemoryCost($memoryCost)
    {
        $this->memoryCost = $memoryCost;
        return $this;
    }

    /**
     * Gets as diskCost
     *
     * @return float
     */
    public function getDiskCost()
    {
        return $this->diskCost;
    }

    /**
     * Sets a new diskCost
     *
     * @param float $diskCost
     * @return self
     */
    public function setDiskCost($diskCost)
    {
        $this->diskCost = $diskCost;
        return $this;
    }

    /**
     * Gets as totalCost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * Sets a new totalCost
     *
     * @param float $totalCost
     * @return self
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;
        return $this;
    }

    /**
     * Gets as hours
     *
     * @return float
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Sets a new hours
     *
     * @param float $hours
     * @return self
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
        return $this;
    }


}

