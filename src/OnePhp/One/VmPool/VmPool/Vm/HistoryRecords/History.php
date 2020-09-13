<?php

namespace One\VmPool\VmPool\Vm\HistoryRecords;

/**
 * Class representing History
 */
class History
{

    /**
     * @var int $oid
     */
    private $oid = null;

    /**
     * @var int $seq
     */
    private $seq = null;

    /**
     * @var string $hostname
     */
    private $hostname = null;

    /**
     * @var int $hid
     */
    private $hid = null;

    /**
     * @var int $cid
     */
    private $cid = null;

    /**
     * @var int $dsId
     */
    private $dsId = null;

    /**
     * @var int $action
     */
    private $action = null;

    /**
     * Gets as oid
     *
     * @return int
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * Sets a new oid
     *
     * @param int $oid
     * @return self
     */
    public function setOid($oid)
    {
        $this->oid = $oid;
        return $this;
    }

    /**
     * Gets as seq
     *
     * @return int
     */
    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * Sets a new seq
     *
     * @param int $seq
     * @return self
     */
    public function setSeq($seq)
    {
        $this->seq = $seq;
        return $this;
    }

    /**
     * Gets as hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Sets a new hostname
     *
     * @param string $hostname
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        return $this;
    }

    /**
     * Gets as hid
     *
     * @return int
     */
    public function getHid()
    {
        return $this->hid;
    }

    /**
     * Sets a new hid
     *
     * @param int $hid
     * @return self
     */
    public function setHid($hid)
    {
        $this->hid = $hid;
        return $this;
    }

    /**
     * Gets as cid
     *
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Sets a new cid
     *
     * @param int $cid
     * @return self
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * Gets as dsId
     *
     * @return int
     */
    public function getDsId()
    {
        return $this->dsId;
    }

    /**
     * Sets a new dsId
     *
     * @param int $dsId
     * @return self
     */
    public function setDsId($dsId)
    {
        $this->dsId = $dsId;
        return $this;
    }

    /**
     * Gets as action
     *
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param int $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


}

