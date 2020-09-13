<?php

namespace One\Group\Group\DefaultGroupQuotas;

/**
 * Class representing DatastoreQuota
 */
class DatastoreQuota
{

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore[] $datastore
     */
    private $datastore = [
        
    ];

    /**
     * Adds as datastore
     *
     * @return self
     * @param \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore $datastore
     */
    public function addToDatastore(\One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore $datastore)
    {
        $this->datastore[] = $datastore;
        return $this;
    }

    /**
     * isset datastore
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatastore($index)
    {
        return isset($this->datastore[$index]);
    }

    /**
     * unset datastore
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatastore($index)
    {
        unset($this->datastore[$index]);
    }

    /**
     * Gets as datastore
     *
     * @return \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore[]
     */
    public function getDatastore()
    {
        return $this->datastore;
    }

    /**
     * Sets a new datastore
     *
     * @param \One\Group\Group\DefaultGroupQuotas\DatastoreQuota\Datastore[] $datastore
     * @return self
     */
    public function setDatastore(array $datastore)
    {
        $this->datastore = $datastore;
        return $this;
    }


}

