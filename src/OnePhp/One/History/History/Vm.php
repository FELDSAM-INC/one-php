<?php

namespace One\History\History;

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
     * @var \One\History\History\Vm\Permissions $permissions
     */
    private $permissions = null;

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
     * @var int $prevState
     */
    private $prevState = null;

    /**
     * @var int $prevLcmState
     */
    private $prevLcmState = null;

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
     * @var \OnePhp\AnyType $monitoring
     */
    private $monitoring = null;

    /**
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * @var \OnePhp\AnyType $userTemplate
     */
    private $userTemplate = null;

    /**
     * @var \OnePhp\AnyType $historyRecords
     */
    private $historyRecords = null;

    /**
     * @var \One\History\History\Vm\Snapshots[] $snapshots
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
     * Gets as permissions
     *
     * @return \One\History\History\Vm\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\History\History\Vm\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\History\History\Vm\Permissions $permissions)
    {
        $this->permissions = $permissions;
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
     * Gets as prevState
     *
     * @return int
     */
    public function getPrevState()
    {
        return $this->prevState;
    }

    /**
     * Sets a new prevState
     *
     * @param int $prevState
     * @return self
     */
    public function setPrevState($prevState)
    {
        $this->prevState = $prevState;
        return $this;
    }

    /**
     * Gets as prevLcmState
     *
     * @return int
     */
    public function getPrevLcmState()
    {
        return $this->prevLcmState;
    }

    /**
     * Sets a new prevLcmState
     *
     * @param int $prevLcmState
     * @return self
     */
    public function setPrevLcmState($prevLcmState)
    {
        $this->prevLcmState = $prevLcmState;
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
     * Gets as monitoring
     *
     * @return \OnePhp\AnyType
     */
    public function getMonitoring()
    {
        return $this->monitoring;
    }

    /**
     * Sets a new monitoring
     *
     * @param \OnePhp\AnyType $monitoring
     * @return self
     */
    public function setMonitoring(\OnePhp\AnyType $monitoring)
    {
        $this->monitoring = $monitoring;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \OnePhp\AnyType
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \OnePhp\AnyType $template
     * @return self
     */
    public function setTemplate(\OnePhp\AnyType $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * Gets as userTemplate
     *
     * @return \OnePhp\AnyType
     */
    public function getUserTemplate()
    {
        return $this->userTemplate;
    }

    /**
     * Sets a new userTemplate
     *
     * @param \OnePhp\AnyType $userTemplate
     * @return self
     */
    public function setUserTemplate(\OnePhp\AnyType $userTemplate)
    {
        $this->userTemplate = $userTemplate;
        return $this;
    }

    /**
     * Gets as historyRecords
     *
     * @return \OnePhp\AnyType
     */
    public function getHistoryRecords()
    {
        return $this->historyRecords;
    }

    /**
     * Sets a new historyRecords
     *
     * @param \OnePhp\AnyType $historyRecords
     * @return self
     */
    public function setHistoryRecords(\OnePhp\AnyType $historyRecords)
    {
        $this->historyRecords = $historyRecords;
        return $this;
    }

    /**
     * Adds as snapshots
     *
     * @return self
     * @param \One\History\History\Vm\Snapshots $snapshots
     */
    public function addToSnapshots(\One\History\History\Vm\Snapshots $snapshots)
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
     * @return \One\History\History\Vm\Snapshots[]
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * Sets a new snapshots
     *
     * @param \One\History\History\Vm\Snapshots[] $snapshots
     * @return self
     */
    public function setSnapshots(array $snapshots)
    {
        $this->snapshots = $snapshots;
        return $this;
    }


}

