<?php

namespace One\UserPool\UserPool\DefaultUserQuotas;

/**
 * Class representing DatastoreQuota
 */
class DatastoreQuota
{

    /**
     * @var \One\UserPool\UserPool\DefaultUserQuotas\DatastoreQuota\Datastore[] $datastore
     */
    private $datastore = [
        
    ];

    /**
     * Adds as datastore
     *
     * @return self
     * @param \One\UserPool\UserPool\DefaultUserQuotas\DatastoreQuota\Datastore $datastore
     */
    public function addToDatastore(\One\UserPool\UserPool\DefaultUserQuotas\DatastoreQuota\Datastore $datastore)
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
     * @return \One\UserPool\UserPool\DefaultUserQuotas\DatastoreQuota\Datastore[]
     */
    public function getDatastore()
    {
        return $this->datastore;
    }

    /**
     * Sets a new datastore
     *
     * @param \One\UserPool\UserPool\DefaultUserQuotas\DatastoreQuota\Datastore[] $datastore
     * @return self
     */
    public function setDatastore(array $datastore)
    {
        $this->datastore = $datastore;
        return $this;
    }


}

