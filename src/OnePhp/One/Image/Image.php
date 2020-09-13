<?php

namespace One\Image;

/**
 * Class representing Image
 */
class Image
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
     * @var \One\Image\Image\Lock $lock
     */
    private $lock = null;

    /**
     * @var \One\Image\Image\Permissions $permissions
     */
    private $permissions = null;

    /**
     * @var int $type
     */
    private $type = null;

    /**
     * @var int $diskType
     */
    private $diskType = null;

    /**
     * @var int $persistent
     */
    private $persistent = null;

    /**
     * @var int $regtime
     */
    private $regtime = null;

    /**
     * @var string $source
     */
    private $source = null;

    /**
     * @var string $path
     */
    private $path = null;

    /**
     * @var string $fstype
     */
    private $fstype = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var int $state
     */
    private $state = null;

    /**
     * @var int $runningVms
     */
    private $runningVms = null;

    /**
     * @var int $cloningOps
     */
    private $cloningOps = null;

    /**
     * @var int $cloningId
     */
    private $cloningId = null;

    /**
     * @var int $targetSnapshot
     */
    private $targetSnapshot = null;

    /**
     * @var int $datastoreId
     */
    private $datastoreId = null;

    /**
     * @var string $datastore
     */
    private $datastore = null;

    /**
     * @var int[] $vms
     */
    private $vms = null;

    /**
     * @var int[] $clones
     */
    private $clones = null;

    /**
     * @var int[] $appClones
     */
    private $appClones = null;

    /**
     * @var \One\Image\Image\Template $template
     */
    private $template = null;

    /**
     * @var \One\Image\Image\Snapshots $snapshots
     */
    private $snapshots = null;

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
     * Gets as lock
     *
     * @return \One\Image\Image\Lock
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Sets a new lock
     *
     * @param \One\Image\Image\Lock $lock
     * @return self
     */
    public function setLock(\One\Image\Image\Lock $lock)
    {
        $this->lock = $lock;
        return $this;
    }

    /**
     * Gets as permissions
     *
     * @return \One\Image\Image\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\Image\Image\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\Image\Image\Permissions $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as diskType
     *
     * @return int
     */
    public function getDiskType()
    {
        return $this->diskType;
    }

    /**
     * Sets a new diskType
     *
     * @param int $diskType
     * @return self
     */
    public function setDiskType($diskType)
    {
        $this->diskType = $diskType;
        return $this;
    }

    /**
     * Gets as persistent
     *
     * @return int
     */
    public function getPersistent()
    {
        return $this->persistent;
    }

    /**
     * Sets a new persistent
     *
     * @param int $persistent
     * @return self
     */
    public function setPersistent($persistent)
    {
        $this->persistent = $persistent;
        return $this;
    }

    /**
     * Gets as regtime
     *
     * @return int
     */
    public function getRegtime()
    {
        return $this->regtime;
    }

    /**
     * Sets a new regtime
     *
     * @param int $regtime
     * @return self
     */
    public function setRegtime($regtime)
    {
        $this->regtime = $regtime;
        return $this;
    }

    /**
     * Gets as source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as fstype
     *
     * @return string
     */
    public function getFstype()
    {
        return $this->fstype;
    }

    /**
     * Sets a new fstype
     *
     * @param string $fstype
     * @return self
     */
    public function setFstype($fstype)
    {
        $this->fstype = $fstype;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
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
     * Gets as runningVms
     *
     * @return int
     */
    public function getRunningVms()
    {
        return $this->runningVms;
    }

    /**
     * Sets a new runningVms
     *
     * @param int $runningVms
     * @return self
     */
    public function setRunningVms($runningVms)
    {
        $this->runningVms = $runningVms;
        return $this;
    }

    /**
     * Gets as cloningOps
     *
     * @return int
     */
    public function getCloningOps()
    {
        return $this->cloningOps;
    }

    /**
     * Sets a new cloningOps
     *
     * @param int $cloningOps
     * @return self
     */
    public function setCloningOps($cloningOps)
    {
        $this->cloningOps = $cloningOps;
        return $this;
    }

    /**
     * Gets as cloningId
     *
     * @return int
     */
    public function getCloningId()
    {
        return $this->cloningId;
    }

    /**
     * Sets a new cloningId
     *
     * @param int $cloningId
     * @return self
     */
    public function setCloningId($cloningId)
    {
        $this->cloningId = $cloningId;
        return $this;
    }

    /**
     * Gets as targetSnapshot
     *
     * @return int
     */
    public function getTargetSnapshot()
    {
        return $this->targetSnapshot;
    }

    /**
     * Sets a new targetSnapshot
     *
     * @param int $targetSnapshot
     * @return self
     */
    public function setTargetSnapshot($targetSnapshot)
    {
        $this->targetSnapshot = $targetSnapshot;
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

    /**
     * Gets as datastore
     *
     * @return string
     */
    public function getDatastore()
    {
        return $this->datastore;
    }

    /**
     * Sets a new datastore
     *
     * @param string $datastore
     * @return self
     */
    public function setDatastore($datastore)
    {
        $this->datastore = $datastore;
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
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToClones($id)
    {
        $this->clones[] = $id;
        return $this;
    }

    /**
     * isset clones
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClones($index)
    {
        return isset($this->clones[$index]);
    }

    /**
     * unset clones
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClones($index)
    {
        unset($this->clones[$index]);
    }

    /**
     * Gets as clones
     *
     * @return int[]
     */
    public function getClones()
    {
        return $this->clones;
    }

    /**
     * Sets a new clones
     *
     * @param int[] $clones
     * @return self
     */
    public function setClones(array $clones)
    {
        $this->clones = $clones;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToAppClones($id)
    {
        $this->appClones[] = $id;
        return $this;
    }

    /**
     * isset appClones
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAppClones($index)
    {
        return isset($this->appClones[$index]);
    }

    /**
     * unset appClones
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAppClones($index)
    {
        unset($this->appClones[$index]);
    }

    /**
     * Gets as appClones
     *
     * @return int[]
     */
    public function getAppClones()
    {
        return $this->appClones;
    }

    /**
     * Sets a new appClones
     *
     * @param int[] $appClones
     * @return self
     */
    public function setAppClones(array $appClones)
    {
        $this->appClones = $appClones;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \One\Image\Image\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \One\Image\Image\Template $template
     * @return self
     */
    public function setTemplate(\One\Image\Image\Template $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * Gets as snapshots
     *
     * @return \One\Image\Image\Snapshots
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * Sets a new snapshots
     *
     * @param \One\Image\Image\Snapshots $snapshots
     * @return self
     */
    public function setSnapshots(\One\Image\Image\Snapshots $snapshots)
    {
        $this->snapshots = $snapshots;
        return $this;
    }


}

