<?php

namespace One\User;

/**
 * Class representing User
 */
class User
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var int $gid
     */
    private $gid = null;

    /**
     * @var int[] $groups
     */
    private $groups = null;

    /**
     * @var string $gname
     */
    private $gname = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $password
     */
    private $password = null;

    /**
     * @var string $authDriver
     */
    private $authDriver = null;

    /**
     * @var int $enabled
     */
    private $enabled = null;

    /**
     * @var \One\User\User\LoginToken[] $loginToken
     */
    private $loginToken = [
        
    ];

    /**
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * @var \One\User\User\DatastoreQuota\Datastore[] $datastoreQuota
     */
    private $datastoreQuota = null;

    /**
     * @var \One\User\User\NetworkQuota\Network[] $networkQuota
     */
    private $networkQuota = null;

    /**
     * @var \One\User\User\VmQuota $vmQuota
     */
    private $vmQuota = null;

    /**
     * @var \One\User\User\ImageQuota\Image[] $imageQuota
     */
    private $imageQuota = null;

    /**
     * @var \One\User\User\DefaultUserQuotas $defaultUserQuotas
     */
    private $defaultUserQuotas = null;

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
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToGroups($id)
    {
        $this->groups[] = $id;
        return $this;
    }

    /**
     * isset groups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroups($index)
    {
        return isset($this->groups[$index]);
    }

    /**
     * unset groups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroups($index)
    {
        unset($this->groups[$index]);
    }

    /**
     * Gets as groups
     *
     * @return int[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets a new groups
     *
     * @param int[] $groups
     * @return self
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;
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
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as authDriver
     *
     * @return string
     */
    public function getAuthDriver()
    {
        return $this->authDriver;
    }

    /**
     * Sets a new authDriver
     *
     * @param string $authDriver
     * @return self
     */
    public function setAuthDriver($authDriver)
    {
        $this->authDriver = $authDriver;
        return $this;
    }

    /**
     * Gets as enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Sets a new enabled
     *
     * @param int $enabled
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Adds as loginToken
     *
     * @return self
     * @param \One\User\User\LoginToken $loginToken
     */
    public function addToLoginToken(\One\User\User\LoginToken $loginToken)
    {
        $this->loginToken[] = $loginToken;
        return $this;
    }

    /**
     * isset loginToken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoginToken($index)
    {
        return isset($this->loginToken[$index]);
    }

    /**
     * unset loginToken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoginToken($index)
    {
        unset($this->loginToken[$index]);
    }

    /**
     * Gets as loginToken
     *
     * @return \One\User\User\LoginToken[]
     */
    public function getLoginToken()
    {
        return $this->loginToken;
    }

    /**
     * Sets a new loginToken
     *
     * @param \One\User\User\LoginToken[] $loginToken
     * @return self
     */
    public function setLoginToken(array $loginToken)
    {
        $this->loginToken = $loginToken;
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
     * Adds as datastore
     *
     * @return self
     * @param \One\User\User\DatastoreQuota\Datastore $datastore
     */
    public function addToDatastoreQuota(\One\User\User\DatastoreQuota\Datastore $datastore)
    {
        $this->datastoreQuota[] = $datastore;
        return $this;
    }

    /**
     * isset datastoreQuota
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatastoreQuota($index)
    {
        return isset($this->datastoreQuota[$index]);
    }

    /**
     * unset datastoreQuota
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatastoreQuota($index)
    {
        unset($this->datastoreQuota[$index]);
    }

    /**
     * Gets as datastoreQuota
     *
     * @return \One\User\User\DatastoreQuota\Datastore[]
     */
    public function getDatastoreQuota()
    {
        return $this->datastoreQuota;
    }

    /**
     * Sets a new datastoreQuota
     *
     * @param \One\User\User\DatastoreQuota\Datastore[] $datastoreQuota
     * @return self
     */
    public function setDatastoreQuota(array $datastoreQuota)
    {
        $this->datastoreQuota = $datastoreQuota;
        return $this;
    }

    /**
     * Adds as network
     *
     * @return self
     * @param \One\User\User\NetworkQuota\Network $network
     */
    public function addToNetworkQuota(\One\User\User\NetworkQuota\Network $network)
    {
        $this->networkQuota[] = $network;
        return $this;
    }

    /**
     * isset networkQuota
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetworkQuota($index)
    {
        return isset($this->networkQuota[$index]);
    }

    /**
     * unset networkQuota
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetworkQuota($index)
    {
        unset($this->networkQuota[$index]);
    }

    /**
     * Gets as networkQuota
     *
     * @return \One\User\User\NetworkQuota\Network[]
     */
    public function getNetworkQuota()
    {
        return $this->networkQuota;
    }

    /**
     * Sets a new networkQuota
     *
     * @param \One\User\User\NetworkQuota\Network[] $networkQuota
     * @return self
     */
    public function setNetworkQuota(array $networkQuota)
    {
        $this->networkQuota = $networkQuota;
        return $this;
    }

    /**
     * Gets as vmQuota
     *
     * @return \One\User\User\VmQuota
     */
    public function getVmQuota()
    {
        return $this->vmQuota;
    }

    /**
     * Sets a new vmQuota
     *
     * @param \One\User\User\VmQuota $vmQuota
     * @return self
     */
    public function setVmQuota(\One\User\User\VmQuota $vmQuota)
    {
        $this->vmQuota = $vmQuota;
        return $this;
    }

    /**
     * Adds as image
     *
     * @return self
     * @param \One\User\User\ImageQuota\Image $image
     */
    public function addToImageQuota(\One\User\User\ImageQuota\Image $image)
    {
        $this->imageQuota[] = $image;
        return $this;
    }

    /**
     * isset imageQuota
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageQuota($index)
    {
        return isset($this->imageQuota[$index]);
    }

    /**
     * unset imageQuota
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageQuota($index)
    {
        unset($this->imageQuota[$index]);
    }

    /**
     * Gets as imageQuota
     *
     * @return \One\User\User\ImageQuota\Image[]
     */
    public function getImageQuota()
    {
        return $this->imageQuota;
    }

    /**
     * Sets a new imageQuota
     *
     * @param \One\User\User\ImageQuota\Image[] $imageQuota
     * @return self
     */
    public function setImageQuota(array $imageQuota)
    {
        $this->imageQuota = $imageQuota;
        return $this;
    }

    /**
     * Gets as defaultUserQuotas
     *
     * @return \One\User\User\DefaultUserQuotas
     */
    public function getDefaultUserQuotas()
    {
        return $this->defaultUserQuotas;
    }

    /**
     * Sets a new defaultUserQuotas
     *
     * @param \One\User\User\DefaultUserQuotas $defaultUserQuotas
     * @return self
     */
    public function setDefaultUserQuotas(\One\User\User\DefaultUserQuotas $defaultUserQuotas)
    {
        $this->defaultUserQuotas = $defaultUserQuotas;
        return $this;
    }


}

