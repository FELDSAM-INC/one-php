<?php

namespace One\Group\Group;

/**
 * Class representing DefaultGroupQuotas
 */
class DefaultGroupQuotas
{

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore[] $datastoreQuota
     */
    private $datastoreQuota = null;

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\NetworkQuota\Network[] $networkQuota
     */
    private $networkQuota = null;

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\VmQuota $vmQuota
     */
    private $vmQuota = null;

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image[] $imageQuota
     */
    private $imageQuota = null;

    /**
     * Adds as datastore
     *
     * @return self
     * @param \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore $datastore
     */
    public function addToDatastoreQuota(\One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore $datastore)
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
     * @return \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore[]
     */
    public function getDatastoreQuota()
    {
        return $this->datastoreQuota;
    }

    /**
     * Sets a new datastoreQuota
     *
     * @param \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore[] $datastoreQuota
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
     * @param \One\Group\Group\DefaultGroupQuotas\NetworkQuota\Network $network
     */
    public function addToNetworkQuota(\One\Group\Group\DefaultGroupQuotas\NetworkQuota\Network $network)
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
     * @return \One\Group\Group\DefaultGroupQuotas\NetworkQuota\Network[]
     */
    public function getNetworkQuota()
    {
        return $this->networkQuota;
    }

    /**
     * Sets a new networkQuota
     *
     * @param \One\Group\Group\DefaultGroupQuotas\NetworkQuota\Network[] $networkQuota
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
     * @return \One\Group\Group\DefaultGroupQuotas\VmQuota
     */
    public function getVmQuota()
    {
        return $this->vmQuota;
    }

    /**
     * Sets a new vmQuota
     *
     * @param \One\Group\Group\DefaultGroupQuotas\VmQuota $vmQuota
     * @return self
     */
    public function setVmQuota(\One\Group\Group\DefaultGroupQuotas\VmQuota $vmQuota)
    {
        $this->vmQuota = $vmQuota;
        return $this;
    }

    /**
     * Adds as image
     *
     * @return self
     * @param \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image $image
     */
    public function addToImageQuota(\One\Group\Group\DefaultGroupQuotas\ImageQuota\Image $image)
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
     * @return \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image[]
     */
    public function getImageQuota()
    {
        return $this->imageQuota;
    }

    /**
     * Sets a new imageQuota
     *
     * @param \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image[] $imageQuota
     * @return self
     */
    public function setImageQuota(array $imageQuota)
    {
        $this->imageQuota = $imageQuota;
        return $this;
    }


}

