<?php

namespace One\Marketplace;

/**
 * Class representing Marketplace
 */
class Marketplace
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
     * @var string $marketMad
     */
    private $marketMad = null;

    /**
     * @var string $zoneId
     */
    private $zoneId = null;

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
     * @var int[] $marketplaceapps
     */
    private $marketplaceapps = null;

    /**
     * @var \One\Marketplace\Marketplace\Permissions $permissions
     */
    private $permissions = null;

    /**
     * @var \OnePhp\AnyType $template
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
     * Gets as marketMad
     *
     * @return string
     */
    public function getMarketMad()
    {
        return $this->marketMad;
    }

    /**
     * Sets a new marketMad
     *
     * @param string $marketMad
     * @return self
     */
    public function setMarketMad($marketMad)
    {
        $this->marketMad = $marketMad;
        return $this;
    }

    /**
     * Gets as zoneId
     *
     * @return string
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Sets a new zoneId
     *
     * @param string $zoneId
     * @return self
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;
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
    public function addToMarketplaceapps($id)
    {
        $this->marketplaceapps[] = $id;
        return $this;
    }

    /**
     * isset marketplaceapps
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketplaceapps($index)
    {
        return isset($this->marketplaceapps[$index]);
    }

    /**
     * unset marketplaceapps
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketplaceapps($index)
    {
        unset($this->marketplaceapps[$index]);
    }

    /**
     * Gets as marketplaceapps
     *
     * @return int[]
     */
    public function getMarketplaceapps()
    {
        return $this->marketplaceapps;
    }

    /**
     * Sets a new marketplaceapps
     *
     * @param int[] $marketplaceapps
     * @return self
     */
    public function setMarketplaceapps(array $marketplaceapps)
    {
        $this->marketplaceapps = $marketplaceapps;
        return $this;
    }

    /**
     * Gets as permissions
     *
     * @return \One\Marketplace\Marketplace\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\Marketplace\Marketplace\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\Marketplace\Marketplace\Permissions $permissions)
    {
        $this->permissions = $permissions;
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


}

