<?php

namespace One\GroupPool\GroupPool;

/**
 * Class representing Quotas
 */
class Quotas
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var \One\GroupPool\GroupPool\Quotas\DatastoreQuota\Datastore[] $datastoreQuota
     */
    private $datastoreQuota = null;

    /**
     * @var \One\GroupPool\GroupPool\Quotas\NetworkQuota\Network[] $networkQuota
     */
    private $networkQuota = null;

    /**
     * @var \One\GroupPool\GroupPool\Quotas\VmQuota $vmQuota
     */
    private $vmQuota = null;

    /**
     * @var \One\GroupPool\GroupPool\Quotas\ImageQuota\Image[] $imageQuota
     */
    private $imageQuota = null;

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
     * Adds as datastore
     *
     * @return self
     * @param \One\GroupPool\GroupPool\Quotas\DatastoreQuota\Datastore $datastore
     */
    public function addToDatastoreQuota(\One\GroupPool\GroupPool\Quotas\DatastoreQuota\Datastore $datastore)
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
     * @return \One\GroupPool\GroupPool\Quotas\DatastoreQuota\Datastore[]
     */
    public function getDatastoreQuota()
    {
        return $this->datastoreQuota;
    }

    /**
     * Sets a new datastoreQuota
     *
     * @param \One\GroupPool\GroupPool\Quotas\DatastoreQuota\Datastore[] $datastoreQuota
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
     * @param \One\GroupPool\GroupPool\Quotas\NetworkQuota\Network $network
     */
    public function addToNetworkQuota(\One\GroupPool\GroupPool\Quotas\NetworkQuota\Network $network)
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
     * @return \One\GroupPool\GroupPool\Quotas\NetworkQuota\Network[]
     */
    public function getNetworkQuota()
    {
        return $this->networkQuota;
    }

    /**
     * Sets a new networkQuota
     *
     * @param \One\GroupPool\GroupPool\Quotas\NetworkQuota\Network[] $networkQuota
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
     * @return \One\GroupPool\GroupPool\Quotas\VmQuota
     */
    public function getVmQuota()
    {
        return $this->vmQuota;
    }

    /**
     * Sets a new vmQuota
     *
     * @param \One\GroupPool\GroupPool\Quotas\VmQuota $vmQuota
     * @return self
     */
    public function setVmQuota(\One\GroupPool\GroupPool\Quotas\VmQuota $vmQuota)
    {
        $this->vmQuota = $vmQuota;
        return $this;
    }

    /**
     * Adds as image
     *
     * @return self
     * @param \One\GroupPool\GroupPool\Quotas\ImageQuota\Image $image
     */
    public function addToImageQuota(\One\GroupPool\GroupPool\Quotas\ImageQuota\Image $image)
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
     * @return \One\GroupPool\GroupPool\Quotas\ImageQuota\Image[]
     */
    public function getImageQuota()
    {
        return $this->imageQuota;
    }

    /**
     * Sets a new imageQuota
     *
     * @param \One\GroupPool\GroupPool\Quotas\ImageQuota\Image[] $imageQuota
     * @return self
     */
    public function setImageQuota(array $imageQuota)
    {
        $this->imageQuota = $imageQuota;
        return $this;
    }


}

