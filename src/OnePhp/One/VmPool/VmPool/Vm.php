<?php

namespace One\VmPool\VmPool;

/**
 * Class representing Vm
 */
class Vm
{

    /**
     * @var int $id
     */
    private $id = null;

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
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $lastPoll
     */
    private $lastPoll = null;

    /**
     * @var int $state
     */
    private $state = null;

    /**
     * @var int $lcmState
     */
    private $lcmState = null;

    /**
     * @var int $resched
     */
    private $resched = null;

    /**
     * @var int $stime
     */
    private $stime = null;

    /**
     * @var int $etime
     */
    private $etime = null;

    /**
     * @var string $deployId
     */
    private $deployId = null;

    /**
     * @var \One\VmPool\VmPool\Vm\Template $template
     */
    private $template = null;

    /**
     * @var \One\VmPool\VmPool\Vm\Monitoring $monitoring
     */
    private $monitoring = null;

    /**
     * @var \One\VmPool\VmPool\Vm\UserTemplate $userTemplate
     */
    private $userTemplate = null;

    /**
     * @var \One\VmPool\VmPool\Vm\HistoryRecords\History[] $historyRecords
     */
    private $historyRecords = null;

    /**
     * @var \One\VmPool\VmPool\Vm\Snapshots[] $snapshots
     */
    private $snapshots = [
        
    ];

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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as lastPoll
     *
     * @return int
     */
    public function getLastPoll()
    {
        return $this->lastPoll;
    }

    /**
     * Sets a new lastPoll
     *
     * @param int $lastPoll
     * @return self
     */
    public function setLastPoll($lastPoll)
    {
        $this->lastPoll = $lastPoll;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param int $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as lcmState
     *
     * @return int
     */
    public function getLcmState()
    {
        return $this->lcmState;
    }

    /**
     * Sets a new lcmState
     *
     * @param int $lcmState
     * @return self
     */
    public function setLcmState($lcmState)
    {
        $this->lcmState = $lcmState;
        return $this;
    }

    /**
     * Gets as resched
     *
     * @return int
     */
    public function getResched()
    {
        return $this->resched;
    }

    /**
     * Sets a new resched
     *
     * @param int $resched
     * @return self
     */
    public function setResched($resched)
    {
        $this->resched = $resched;
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
     * Gets as deployId
     *
     * @return string
     */
    public function getDeployId()
    {
        return $this->deployId;
    }

    /**
     * Sets a new deployId
     *
     * @param string $deployId
     * @return self
     */
    public function setDeployId($deployId)
    {
        $this->deployId = $deployId;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \One\VmPool\VmPool\Vm\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \One\VmPool\VmPool\Vm\Template $template
     * @return self
     */
    public function setTemplate(\One\VmPool\VmPool\Vm\Template $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * Gets as monitoring
     *
     * @return \One\VmPool\VmPool\Vm\Monitoring
     */
    public function getMonitoring()
    {
        return $this->monitoring;
    }

    /**
     * Sets a new monitoring
     *
     * @param \One\VmPool\VmPool\Vm\Monitoring $monitoring
     * @return self
     */
    public function setMonitoring(\One\VmPool\VmPool\Vm\Monitoring $monitoring)
    {
        $this->monitoring = $monitoring;
        return $this;
    }

    /**
     * Gets as userTemplate
     *
     * @return \One\VmPool\VmPool\Vm\UserTemplate
     */
    public function getUserTemplate()
    {
        return $this->userTemplate;
    }

    /**
     * Sets a new userTemplate
     *
     * @param \One\VmPool\VmPool\Vm\UserTemplate $userTemplate
     * @return self
     */
    public function setUserTemplate(\One\VmPool\VmPool\Vm\UserTemplate $userTemplate)
    {
        $this->userTemplate = $userTemplate;
        return $this;
    }

    /**
     * Adds as history
     *
     * @return self
     * @param \One\VmPool\VmPool\Vm\HistoryRecords\History $history
     */
    public function addToHistoryRecords(\One\VmPool\VmPool\Vm\HistoryRecords\History $history)
    {
        $this->historyRecords[] = $history;
        return $this;
    }

    /**
     * isset historyRecords
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistoryRecords($index)
    {
        return isset($this->historyRecords[$index]);
    }

    /**
     * unset historyRecords
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistoryRecords($index)
    {
        unset($this->historyRecords[$index]);
    }

    /**
     * Gets as historyRecords
     *
     * @return \One\VmPool\VmPool\Vm\HistoryRecords\History[]
     */
    public function getHistoryRecords()
    {
        return $this->historyRecords;
    }

    /**
     * Sets a new historyRecords
     *
     * @param \One\VmPool\VmPool\Vm\HistoryRecords\History[] $historyRecords
     * @return self
     */
    public function setHistoryRecords(array $historyRecords)
    {
        $this->historyRecords = $historyRecords;
        return $this;
    }

    /**
     * Adds as snapshots
     *
     * @return self
     * @param \One\VmPool\VmPool\Vm\Snapshots $snapshots
     */
    public function addToSnapshots(\One\VmPool\VmPool\Vm\Snapshots $snapshots)
    {
        $this->snapshots[] = $snapshots;
        return $this;
    }

    /**
     * isset snapshots
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSnapshots($index)
    {
        return isset($this->snapshots[$index]);
    }

    /**
     * unset snapshots
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSnapshots($index)
    {
        unset($this->snapshots[$index]);
    }

    /**
     * Gets as snapshots
     *
     * @return \One\VmPool\VmPool\Vm\Snapshots[]
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * Sets a new snapshots
     *
     * @param \One\VmPool\VmPool\Vm\Snapshots[] $snapshots
     * @return self
     */
    public function setSnapshots(array $snapshots)
    {
        $this->snapshots = $snapshots;
        return $this;
    }


}

