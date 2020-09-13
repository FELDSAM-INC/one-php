<?php

namespace One\Datastore;

/**
 * Class representing Datastore
 */
class Datastore
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
     * @var \One\Datastore\Datastore\Permissions $permissions
     */
    private $permissions = null;

    /**
     * @var string $dsMad
     */
    private $dsMad = null;

    /**
     * @var string $tmMad
     */
    private $tmMad = null;

    /**
     * @var string $basePath
     */
    private $basePath = null;

    /**
     * @var int $type
     */
    private $type = null;

    /**
     * @var int $diskType
     */
    private $diskType = null;

    /**
     * @var int $state
     */
    private $state = null;

    /**
     * @var int[] $clusters
     */
    private $clusters = null;

    /**
     * @var int $totalMb
     */
    private $totalMb = null;

    /**
     * @var int $freeMb
     */
    private $freeMb = null;

    /**
     * @var int $usedMb
     */
    private $usedMb = null;

    /**
     * @var int[] $images
     */
    private $images = null;

    /**
     * @var \One\Datastore\Datastore\Template $template
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
     * @return \One\Datastore\Datastore\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\Datastore\Datastore\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\Datastore\Datastore\Permissions $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Gets as dsMad
     *
     * @return string
     */
    public function getDsMad()
    {
        return $this->dsMad;
    }

    /**
     * Sets a new dsMad
     *
     * @param string $dsMad
     * @return self
     */
    public function setDsMad($dsMad)
    {
        $this->dsMad = $dsMad;
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
     * Gets as basePath
     *
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * Sets a new basePath
     *
     * @param string $basePath
     * @return self
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
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
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToClusters($id)
    {
        $this->clusters[] = $id;
        return $this;
    }

    /**
     * isset clusters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClusters($index)
    {
        return isset($this->clusters[$index]);
    }

    /**
     * unset clusters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClusters($index)
    {
        unset($this->clusters[$index]);
    }

    /**
     * Gets as clusters
     *
     * @return int[]
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * Sets a new clusters
     *
     * @param int[] $clusters
     * @return self
     */
    public function setClusters(array $clusters)
    {
        $this->clusters = $clusters;
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

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToImages($id)
    {
        $this->images[] = $id;
        return $this;
    }

    /**
     * isset images
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImages($index)
    {
        return isset($this->images[$index]);
    }

    /**
     * unset images
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImages($index)
    {
        unset($this->images[$index]);
    }

    /**
     * Gets as images
     *
     * @return int[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets a new images
     *
     * @param int[] $images
     * @return self
     */
    public function setImages(array $images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \One\Datastore\Datastore\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \One\Datastore\Datastore\Template $template
     * @return self
     */
    public function setTemplate(\One\Datastore\Datastore\Template $template)
    {
        $this->template = $template;
        return $this;
    }


}

