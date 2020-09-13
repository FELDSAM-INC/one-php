<?php

namespace One\Marketplaceapp;

/**
 * Class representing Marketplaceapp
 */
class Marketplaceapp
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
     * @var \One\Marketplaceapp\Marketplaceapp\Lock $lock
     */
    private $lock = null;

    /**
     * @var int $regtime
     */
    private $regtime = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $zoneId
     */
    private $zoneId = null;

    /**
     * @var string $originId
     */
    private $originId = null;

    /**
     * @var string $source
     */
    private $source = null;

    /**
     * @var string $md5
     */
    private $md5 = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $format
     */
    private $format = null;

    /**
     * @var string $apptemplate64
     */
    private $apptemplate64 = null;

    /**
     * @var int $marketplaceId
     */
    private $marketplaceId = null;

    /**
     * @var string $marketplace
     */
    private $marketplace = null;

    /**
     * @var int $state
     */
    private $state = null;

    /**
     * @var int $type
     */
    private $type = null;

    /**
     * @var \One\Marketplaceapp\Marketplaceapp\Permissions $permissions
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
     * Gets as lock
     *
     * @return \One\Marketplaceapp\Marketplaceapp\Lock
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Sets a new lock
     *
     * @param \One\Marketplaceapp\Marketplaceapp\Lock $lock
     * @return self
     */
    public function setLock(\One\Marketplaceapp\Marketplaceapp\Lock $lock)
    {
        $this->lock = $lock;
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
     * Gets as originId
     *
     * @return string
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Sets a new originId
     *
     * @param string $originId
     * @return self
     */
    public function setOriginId($originId)
    {
        $this->originId = $originId;
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
     * Gets as md5
     *
     * @return string
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     * Sets a new md5
     *
     * @param string $md5
     * @return self
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;
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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as apptemplate64
     *
     * @return string
     */
    public function getApptemplate64()
    {
        return $this->apptemplate64;
    }

    /**
     * Sets a new apptemplate64
     *
     * @param string $apptemplate64
     * @return self
     */
    public function setApptemplate64($apptemplate64)
    {
        $this->apptemplate64 = $apptemplate64;
        return $this;
    }

    /**
     * Gets as marketplaceId
     *
     * @return int
     */
    public function getMarketplaceId()
    {
        return $this->marketplaceId;
    }

    /**
     * Sets a new marketplaceId
     *
     * @param int $marketplaceId
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->marketplaceId = $marketplaceId;
        return $this;
    }

    /**
     * Gets as marketplace
     *
     * @return string
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * Sets a new marketplace
     *
     * @param string $marketplace
     * @return self
     */
    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;
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
     * Gets as permissions
     *
     * @return \One\Marketplaceapp\Marketplaceapp\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\Marketplaceapp\Marketplaceapp\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\Marketplaceapp\Marketplaceapp\Permissions $permissions)
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

