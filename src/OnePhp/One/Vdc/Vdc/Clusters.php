<?php

namespace One\Vdc\Vdc;

/**
 * Class representing Clusters
 */
class Clusters
{

    /**
     * @var \One\Vdc\Vdc\Clusters\Cluster[] $cluster
     */
    private $cluster = [
        
    ];

    /**
     * Adds as cluster
     *
     * @return self
     * @param \One\Vdc\Vdc\Clusters\Cluster $cluster
     */
    public function addToCluster(\One\Vdc\Vdc\Clusters\Cluster $cluster)
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
     * @return \One\Vdc\Vdc\Clusters\Cluster[]
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Sets a new cluster
     *
     * @param \One\Vdc\Vdc\Clusters\Cluster[] $cluster
     * @return self
     */
    public function setCluster(array $cluster)
    {
        $this->cluster = $cluster;
        return $this;
    }


}

