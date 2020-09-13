<?php

namespace One\ClusterPool;

/**
 * Class representing ClusterPool
 */
class ClusterPool
{

    /**
     * @var \One\Cluster[] $cluster
     */
    private $cluster = [
        
    ];

    /**
     * Adds as cluster
     *
     * @return self
     * @param \One\Cluster $cluster
     */
    public function addToCluster(\One\Cluster $cluster)
    {
        $this->cluster[] = $cluster;
        return $this;
    }

    /**
     * isset cluster
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCluster($index)
    {
        return isset($this->cluster[$index]);
    }

    /**
     * unset cluster
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCluster($index)
    {
        unset($this->cluster[$index]);
    }

    /**
     * Gets as cluster
     *
     * @return \One\Cluster[]
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Sets a new cluster
     *
     * @param \One\Cluster[] $cluster
     * @return self
     */
    public function setCluster(array $cluster)
    {
        $this->cluster = $cluster;
        return $this;
    }


}

