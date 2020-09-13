<?php

namespace One\VnetPool\VnetPool;

/**
 * Class representing Vnet
 */
class Vnet
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
     * @var \One\VnetPool\VnetPool\Vnet\Permissions $permissions
     */
    private $permissions = null;

    /**
     * @var int[] $clusters
     */
    private $clusters = null;

    /**
     * @var string $bridge
     */
    private $bridge = null;

    /**
     * @var string $bridgeType
     */
    private $bridgeType = null;

    /**
     * @var string $parentNetworkId
     */
    private $parentNetworkId = null;

    /**
     * @var string $vnMad
     */
    private $vnMad = null;

    /**
     * @var string $phydev
     */
    private $phydev = null;

    /**
     * @var string $vlanId
     */
    private $vlanId = null;

    /**
     * @var string $outerVlanId
     */
    private $outerVlanId = null;

    /**
     * @var string $vlanIdAutomatic
     */
    private $vlanIdAutomatic = null;

    /**
     * @var string $outerVlanIdAutomatic
     */
    private $outerVlanIdAutomatic = null;

    /**
     * @var int $usedLeases
     */
    private $usedLeases = null;

    /**
     * @var int[] $vrouters
     */
    private $vrouters = null;

    /**
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * @var \One\VnetPool\VnetPool\Vnet\ArPool\Ar[] $arPool
     */
    private $arPool = null;

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
     * @return \One\VnetPool\VnetPool\Vnet\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\VnetPool\VnetPool\Vnet\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\VnetPool\VnetPool\Vnet\Permissions $permissions)
    {
        $this->permissions = $permissions;
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
     * Gets as bridge
     *
     * @return string
     */
    public function getBridge()
    {
        return $this->bridge;
    }

    /**
     * Sets a new bridge
     *
     * @param string $bridge
     * @return self
     */
    public function setBridge($bridge)
    {
        $this->bridge = $bridge;
        return $this;
    }

    /**
     * Gets as bridgeType
     *
     * @return string
     */
    public function getBridgeType()
    {
        return $this->bridgeType;
    }

    /**
     * Sets a new bridgeType
     *
     * @param string $bridgeType
     * @return self
     */
    public function setBridgeType($bridgeType)
    {
        $this->bridgeType = $bridgeType;
        return $this;
    }

    /**
     * Gets as parentNetworkId
     *
     * @return string
     */
    public function getParentNetworkId()
    {
        return $this->parentNetworkId;
    }

    /**
     * Sets a new parentNetworkId
     *
     * @param string $parentNetworkId
     * @return self
     */
    public function setParentNetworkId($parentNetworkId)
    {
        $this->parentNetworkId = $parentNetworkId;
        return $this;
    }

    /**
     * Gets as vnMad
     *
     * @return string
     */
    public function getVnMad()
    {
        return $this->vnMad;
    }

    /**
     * Sets a new vnMad
     *
     * @param string $vnMad
     * @return self
     */
    public function setVnMad($vnMad)
    {
        $this->vnMad = $vnMad;
        return $this;
    }

    /**
     * Gets as phydev
     *
     * @return string
     */
    public function getPhydev()
    {
        return $this->phydev;
    }

    /**
     * Sets a new phydev
     *
     * @param string $phydev
     * @return self
     */
    public function setPhydev($phydev)
    {
        $this->phydev = $phydev;
        return $this;
    }

    /**
     * Gets as vlanId
     *
     * @return string
     */
    public function getVlanId()
    {
        return $this->vlanId;
    }

    /**
     * Sets a new vlanId
     *
     * @param string $vlanId
     * @return self
     */
    public function setVlanId($vlanId)
    {
        $this->vlanId = $vlanId;
        return $this;
    }

    /**
     * Gets as outerVlanId
     *
     * @return string
     */
    public function getOuterVlanId()
    {
        return $this->outerVlanId;
    }

    /**
     * Sets a new outerVlanId
     *
     * @param string $outerVlanId
     * @return self
     */
    public function setOuterVlanId($outerVlanId)
    {
        $this->outerVlanId = $outerVlanId;
        return $this;
    }

    /**
     * Gets as vlanIdAutomatic
     *
     * @return string
     */
    public function getVlanIdAutomatic()
    {
        return $this->vlanIdAutomatic;
    }

    /**
     * Sets a new vlanIdAutomatic
     *
     * @param string $vlanIdAutomatic
     * @return self
     */
    public function setVlanIdAutomatic($vlanIdAutomatic)
    {
        $this->vlanIdAutomatic = $vlanIdAutomatic;
        return $this;
    }

    /**
     * Gets as outerVlanIdAutomatic
     *
     * @return string
     */
    public function getOuterVlanIdAutomatic()
    {
        return $this->outerVlanIdAutomatic;
    }

    /**
     * Sets a new outerVlanIdAutomatic
     *
     * @param string $outerVlanIdAutomatic
     * @return self
     */
    public function setOuterVlanIdAutomatic($outerVlanIdAutomatic)
    {
        $this->outerVlanIdAutomatic = $outerVlanIdAutomatic;
        return $this;
    }

    /**
     * Gets as usedLeases
     *
     * @return int
     */
    public function getUsedLeases()
    {
        return $this->usedLeases;
    }

    /**
     * Sets a new usedLeases
     *
     * @param int $usedLeases
     * @return self
     */
    public function setUsedLeases($usedLeases)
    {
        $this->usedLeases = $usedLeases;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToVrouters($id)
    {
        $this->vrouters[] = $id;
        return $this;
    }

    /**
     * isset vrouters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVrouters($index)
    {
        return isset($this->vrouters[$index]);
    }

    /**
     * unset vrouters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVrouters($index)
    {
        unset($this->vrouters[$index]);
    }

    /**
     * Gets as vrouters
     *
     * @return int[]
     */
    public function getVrouters()
    {
        return $this->vrouters;
    }

    /**
     * Sets a new vrouters
     *
     * @param int[] $vrouters
     * @return self
     */
    public function setVrouters(array $vrouters)
    {
        $this->vrouters = $vrouters;
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
     * Adds as ar
     *
     * @return self
     * @param \One\VnetPool\VnetPool\Vnet\ArPool\Ar $ar
     */
    public function addToArPool(\One\VnetPool\VnetPool\Vnet\ArPool\Ar $ar)
    {
        $this->arPool[] = $ar;
        return $this;
    }

    /**
     * isset arPool
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArPool($index)
    {
        return isset($this->arPool[$index]);
    }

    /**
     * unset arPool
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArPool($index)
    {
        unset($this->arPool[$index]);
    }

    /**
     * Gets as arPool
     *
     * @return \One\VnetPool\VnetPool\Vnet\ArPool\Ar[]
     */
    public function getArPool()
    {
        return $this->arPool;
    }

    /**
     * Sets a new arPool
     *
     * @param \One\VnetPool\VnetPool\Vnet\ArPool\Ar[] $arPool
     * @return self
     */
    public function setArPool(array $arPool)
    {
        $this->arPool = $arPool;
        return $this;
    }


}

