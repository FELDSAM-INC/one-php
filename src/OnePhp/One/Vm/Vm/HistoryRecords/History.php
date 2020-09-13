<?php

namespace One\Vm\Vm\HistoryRecords;

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
     * @var int $stime
     */
    private $stime = null;

    /**
     * @var int $etime
     */
    private $etime = null;

    /**
     * @var string $vmMad
     */
    private $vmMad = null;

    /**
     * @var string $tmMad
     */
    private $tmMad = null;

    /**
     * @var int $dsId
     */
    private $dsId = null;

    /**
     * @var int $pstime
     */
    private $pstime = null;

    /**
     * @var int $petime
     */
    private $petime = null;

    /**
     * @var int $rstime
     */
    private $rstime = null;

    /**
     * @var int $retime
     */
    private $retime = null;

    /**
     * @var int $estime
     */
    private $estime = null;

    /**
     * @var int $eetime
     */
    private $eetime = null;

    /**
     * @var int $action
     */
    private $action = null;

    /**
     * @var int $uid
     */
    private $uid = null;

    /**
     * @var int $gid
     */
    private $gid = null;

    /**
     * @var string $requestId
     */
    private $requestId = null;

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
     * Gets as stime
     *
     * @return int
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * Sets a new stime
     *
     * @param int $stime
     * @return self
     */
    public function setStime($stime)
    {
        $this->stime = $stime;
        return $this;
    }

    /**
     * Gets as etime
     *
     * @return int
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * Sets a new etime
     *
     * @param int $etime
     * @return self
     */
    public function setEtime($etime)
    {
        $this->etime = $etime;
        return $this;
    }

    /**
     * Gets as vmMad
     *
     * @return string
     */
    public function getVmMad()
    {
        return $this->vmMad;
    }

    /**
     * Sets a new vmMad
     *
     * @param string $vmMad
     * @return self
     */
    public function setVmMad($vmMad)
    {
        $this->vmMad = $vmMad;
        return $this;
    }

    /**
     * Gets as tmMad
     *
     * @return string
     */
    public function getTmMad()
    {
        return $this->tmMad;
    }

    /**
     * Sets a new tmMad
     *
     * @param string $tmMad
     * @return self
     */
    public function setTmMad($tmMad)
    {
        $this->tmMad = $tmMad;
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
     * Gets as pstime
     *
     * @return int
     */
    public function getPstime()
    {
        return $this->pstime;
    }

    /**
     * Sets a new pstime
     *
     * @param int $pstime
     * @return self
     */
    public function setPstime($pstime)
    {
        $this->pstime = $pstime;
        return $this;
    }

    /**
     * Gets as petime
     *
     * @return int
     */
    public function getPetime()
    {
        return $this->petime;
    }

    /**
     * Sets a new petime
     *
     * @param int $petime
     * @return self
     */
    public function setPetime($petime)
    {
        $this->petime = $petime;
        return $this;
    }

    /**
     * Gets as rstime
     *
     * @return int
     */
    public function getRstime()
    {
        return $this->rstime;
    }

    /**
     * Sets a new rstime
     *
     * @param int $rstime
     * @return self
     */
    public function setRstime($rstime)
    {
        $this->rstime = $rstime;
        return $this;
    }

    /**
     * Gets as retime
     *
     * @return int
     */
    public function getRetime()
    {
        return $this->retime;
    }

    /**
     * Sets a new retime
     *
     * @param int $retime
     * @return self
     */
    public function setRetime($retime)
    {
        $this->retime = $retime;
        return $this;
    }

    /**
     * Gets as estime
     *
     * @return int
     */
    public function getEstime()
    {
        return $this->estime;
    }

    /**
     * Sets a new estime
     *
     * @param int $estime
     * @return self
     */
    public function setEstime($estime)
    {
        $this->estime = $estime;
        return $this;
    }

    /**
     * Gets as eetime
     *
     * @return int
     */
    public function getEetime()
    {
        return $this->eetime;
    }

    /**
     * Sets a new eetime
     *
     * @param int $eetime
     * @return self
     */
    public function setEetime($eetime)
    {
        $this->eetime = $eetime;
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
     * Gets as requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets a new requestId
     *
     * @param string $requestId
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }


}

