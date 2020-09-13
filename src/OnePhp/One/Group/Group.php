<?php

namespace One\Group;

/**
 * Class representing Group
 */
class Group
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
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * @var int[] $users
     */
    private $users = null;

    /**
     * @var int[] $admins
     */
    private $admins = null;

    /**
     * @var \One\Group\Group\DatastoreQuota\Datastore[] $datastoreQuota
     */
    private $datastoreQuota = null;

    /**
     * @var \One\Group\Group\NetworkQuota\Network[] $networkQuota
     */
    private $networkQuota = null;

    /**
     * @var \One\Group\Group\VmQuota $vmQuota
     */
    private $vmQuota = null;

    /**
     * @var \One\Group\Group\ImageQuota\Image[] $imageQuota
     */
    private $imageQuota = null;

    /**
     * @var \One\Group\Group\DefaultGroupQuotas $defaultGroupQuotas
     */
    private $defaultGroupQuotas = null;

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
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToUsers($id)
    {
        $this->users[] = $id;
        return $this;
    }

    /**
     * isset users
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsers($index)
    {
        return isset($this->users[$index]);
    }

    /**
     * unset users
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsers($index)
    {
        unset($this->users[$index]);
    }

    /**
     * Gets as users
     *
     * @return int[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param int[] $users
     * @return self
     */
    public function setUsers(array $users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToAdmins($id)
    {
        $this->admins[] = $id;
        return $this;
    }

    /**
     * isset admins
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdmins($index)
    {
        return isset($this->admins[$index]);
    }

    /**
     * unset admins
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdmins($index)
    {
        unset($this->admins[$index]);
    }

    /**
     * Gets as admins
     *
     * @return int[]
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Sets a new admins
     *
     * @param int[] $admins
     * @return self
     */
    public function setAdmins(array $admins)
    {
        $this->admins = $admins;
        return $this;
    }

    /**
     * Adds as datastore
     *
     * @return self
     * @param \One\Group\Group\DatastoreQuota\Datastore $datastore
     */
    public function addToDatastoreQuota(\One\Group\Group\DatastoreQuota\Datastore $datastore)
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
     * @return \One\Group\Group\DatastoreQuota\Datastore[]
     */
    public function getDatastoreQuota()
    {
        return $this->datastoreQuota;
    }

    /**
     * Sets a new datastoreQuota
     *
     * @param \One\Group\Group\DatastoreQuota\Datastore[] $datastoreQuota
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
     * @param \One\Group\Group\NetworkQuota\Network $network
     */
    public function addToNetworkQuota(\One\Group\Group\NetworkQuota\Network $network)
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
     * @return \One\Group\Group\NetworkQuota\Network[]
     */
    public function getNetworkQuota()
    {
        return $this->networkQuota;
    }

    /**
     * Sets a new networkQuota
     *
     * @param \One\Group\Group\NetworkQuota\Network[] $networkQuota
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
     * @return \One\Group\Group\VmQuota
     */
    public function getVmQuota()
    {
        return $this->vmQuota;
    }

    /**
     * Sets a new vmQuota
     *
     * @param \One\Group\Group\VmQuota $vmQuota
     * @return self
     */
    public function setVmQuota(\One\Group\Group\VmQuota $vmQuota)
    {
        $this->vmQuota = $vmQuota;
        return $this;
    }

    /**
     * Adds as image
     *
     * @return self
     * @param \One\Group\Group\ImageQuota\Image $image
     */
    public function addToImageQuota(\One\Group\Group\ImageQuota\Image $image)
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
     * @return \One\Group\Group\ImageQuota\Image[]
     */
    public function getImageQuota()
    {
        return $this->imageQuota;
    }

    /**
     * Sets a new imageQuota
     *
     * @param \One\Group\Group\ImageQuota\Image[] $imageQuota
     * @return self
     */
    public function setImageQuota(array $imageQuota)
    {
        $this->imageQuota = $imageQuota;
        return $this;
    }

    /**
     * Gets as defaultGroupQuotas
     *
     * @return \One\Group\Group\DefaultGroupQuotas
     */
    public function getDefaultGroupQuotas()
    {
        return $this->defaultGroupQuotas;
    }

    /**
     * Sets a new defaultGroupQuotas
     *
     * @param \One\Group\Group\DefaultGroupQuotas $defaultGroupQuotas
     * @return self
     */
    public function setDefaultGroupQuotas(\One\Group\Group\DefaultGroupQuotas $defaultGroupQuotas)
    {
        $this->defaultGroupQuotas = $defaultGroupQuotas;
        return $this;
    }


}

