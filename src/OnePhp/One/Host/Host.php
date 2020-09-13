<?php

namespace One\Host;

/**
 * Class representing Host
 */
class Host
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $state
     */
    private $state = null;

    /**
     * @var int $prevState
     */
    private $prevState = null;

    /**
     * @var string $imMad
     */
    private $imMad = null;

    /**
     * @var string $vmMad
     */
    private $vmMad = null;

    /**
     * @var int $lastMonTime
     */
    private $lastMonTime = null;

    /**
     * @var int $clusterId
     */
    private $clusterId = null;

    /**
     * @var string $cluster
     */
    private $cluster = null;

    /**
     * @var \One\Host\Host\HostShare $hostShare
     */
    private $hostShare = null;

    /**
     * @var int[] $vms
     */
    private $vms = null;

    /**
     * @var \One\Host\Host\Template $template
     */
    private $template = null;

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
     * Gets as imMad
     *
     * @return string
     */
    public function getImMad()
    {
        return $this->imMad;
    }

    /**
     * Sets a new imMad
     *
     * @param string $imMad
     * @return self
     */
    public function setImMad($imMad)
    {
        $this->imMad = $imMad;
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
     * Gets as lastMonTime
     *
     * @return int
     */
    public function getLastMonTime()
    {
        return $this->lastMonTime;
    }

    /**
     * Sets a new lastMonTime
     *
     * @param int $lastMonTime
     * @return self
     */
    public function setLastMonTime($lastMonTime)
    {
        $this->lastMonTime = $lastMonTime;
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

    /**
     * Gets as cluster
     *
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Sets a new cluster
     *
     * @param string $cluster
     * @return self
     */
    public function setCluster($cluster)
    {
        $this->cluster = $cluster;
        return $this;
    }

    /**
     * Gets as hostShare
     *
     * @return \One\Host\Host\HostShare
     */
    public function getHostShare()
    {
        return $this->hostShare;
    }

    /**
     * Sets a new hostShare
     *
     * @param \One\Host\Host\HostShare $hostShare
     * @return self
     */
    public function setHostShare(\One\Host\Host\HostShare $hostShare)
    {
        $this->hostShare = $hostShare;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToVms($id)
    {
        $this->vms[] = $id;
        return $this;
    }

    /**
     * isset vms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVms($index)
    {
        return isset($this->vms[$index]);
    }

    /**
     * unset vms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVms($index)
    {
        unset($this->vms[$index]);
    }

    /**
     * Gets as vms
     *
     * @return int[]
     */
    public function getVms()
    {
        return $this->vms;
    }

    /**
     * Sets a new vms
     *
     * @param int[] $vms
     * @return self
     */
    public function setVms(array $vms)
    {
        $this->vms = $vms;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \One\Host\Host\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \One\Host\Host\Template $template
     * @return self
     */
    public function setTemplate(\One\Host\Host\Template $template)
    {
        $this->template = $template;
        return $this;
    }


}

