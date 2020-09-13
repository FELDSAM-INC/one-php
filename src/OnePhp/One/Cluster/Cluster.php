<?php

namespace One\Cluster;

/**
 * Class representing Cluster
 */
class Cluster
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
     * @var int[] $hosts
     */
    private $hosts = null;

    /**
     * @var int[] $datastores
     */
    private $datastores = null;

    /**
     * @var int[] $vnets
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
    public function addToHosts($id)
    {
        $this->hosts[] = $id;
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
     * @return int[]
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Sets a new hosts
     *
     * @param int[] $hosts
     * @return self
     */
    public function setHosts(array $hosts)
    {
        $this->hosts = $hosts;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToDatastores($id)
    {
        $this->datastores[] = $id;
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
     * @return int[]
     */
    public function getDatastores()
    {
        return $this->datastores;
    }

    /**
     * Sets a new datastores
     *
     * @param int[] $datastores
     * @return self
     */
    public function setDatastores(array $datastores)
    {
        $this->datastores = $datastores;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToVnets($id)
    {
        $this->vnets[] = $id;
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
     * @return int[]
     */
    public function getVnets()
    {
        return $this->vnets;
    }

    /**
     * Sets a new vnets
     *
     * @param int[] $vnets
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

