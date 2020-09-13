<?php

namespace One\Vdc;

/**
 * Class representing Vdc
 */
class Vdc
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
     * @var int[] $groups
     */
    private $groups = null;

    /**
     * @var \One\Vdc\Vdc\Clusters\Cluster[] $clusters
     */
    private $clusters = null;

    /**
     * @var \One\Vdc\Vdc\Hosts\Host[] $hosts
     */
    private $hosts = null;

    /**
     * @var \One\Vdc\Vdc\Datastores\Datastore[] $datastores
     */
    private $datastores = null;

    /**
     * @var \One\Vdc\Vdc\Vnets\Vnet[] $vnets
     */
    private $vnets = null;

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
     * Adds as cluster
     *
     * @return self
     * @param \One\Vdc\Vdc\Clusters\Cluster $cluster
     */
    public function addToClusters(\One\Vdc\Vdc\Clusters\Cluster $cluster)
    {
        $this->clusters[] = $cluster;
        return $this;
    }

    /**
     * isset clusters
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClusters($index)
    {
        return isset($this->clusters[$index]);
    }

    /**
     * unset clusters
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClusters($index)
    {
        unset($this->clusters[$index]);
    }

    /**
     * Gets as clusters
     *
     * @return \One\Vdc\Vdc\Clusters\Cluster[]
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * Sets a new clusters
     *
     * @param \One\Vdc\Vdc\Clusters\Cluster[] $clusters
     * @return self
     */
    public function setClusters(array $clusters)
    {
        $this->clusters = $clusters;
        return $this;
    }

    /**
     * Adds as host
     *
     * @return self
     * @param \One\Vdc\Vdc\Hosts\Host $host
     */
    public function addToHosts(\One\Vdc\Vdc\Hosts\Host $host)
    {
        $this->hosts[] = $host;
        return $this;
    }

    /**
     * isset hosts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHosts($index)
    {
        return isset($this->hosts[$index]);
    }

    /**
     * unset hosts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHosts($index)
    {
        unset($this->hosts[$index]);
    }

    /**
     * Gets as hosts
     *
     * @return \One\Vdc\Vdc\Hosts\Host[]
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Sets a new hosts
     *
     * @param \One\Vdc\Vdc\Hosts\Host[] $hosts
     * @return self
     */
    public function setHosts(array $hosts)
    {
        $this->hosts = $hosts;
        return $this;
    }

    /**
     * Adds as datastore
     *
     * @return self
     * @param \One\Vdc\Vdc\Datastores\Datastore $datastore
     */
    public function addToDatastores(\One\Vdc\Vdc\Datastores\Datastore $datastore)
    {
        $this->datastores[] = $datastore;
        return $this;
    }

    /**
     * isset datastores
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatastores($index)
    {
        return isset($this->datastores[$index]);
    }

    /**
     * unset datastores
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatastores($index)
    {
        unset($this->datastores[$index]);
    }

    /**
     * Gets as datastores
     *
     * @return \One\Vdc\Vdc\Datastores\Datastore[]
     */
    public function getDatastores()
    {
        return $this->datastores;
    }

    /**
     * Sets a new datastores
     *
     * @param \One\Vdc\Vdc\Datastores\Datastore[] $datastores
     * @return self
     */
    public function setDatastores(array $datastores)
    {
        $this->datastores = $datastores;
        return $this;
    }

    /**
     * Adds as vnet
     *
     * @return self
     * @param \One\Vdc\Vdc\Vnets\Vnet $vnet
     */
    public function addToVnets(\One\Vdc\Vdc\Vnets\Vnet $vnet)
    {
        $this->vnets[] = $vnet;
        return $this;
    }

    /**
     * isset vnets
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVnets($index)
    {
        return isset($this->vnets[$index]);
    }

    /**
     * unset vnets
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVnets($index)
    {
        unset($this->vnets[$index]);
    }

    /**
     * Gets as vnets
     *
     * @return \One\Vdc\Vdc\Vnets\Vnet[]
     */
    public function getVnets()
    {
        return $this->vnets;
    }

    /**
     * Sets a new vnets
     *
     * @param \One\Vdc\Vdc\Vnets\Vnet[] $vnets
     * @return self
     */
    public function setVnets(array $vnets)
    {
        $this->vnets = $vnets;
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

