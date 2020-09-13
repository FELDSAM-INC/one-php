<?php

namespace One\Host\Host\HostShare\NumaNodes\Node;

/**
 * Class representing Core
 */
class Core
{

    /**
     * @var string $cpus
     */
    private $cpus = null;

    /**
     * @var string $dedicated
     */
    private $dedicated = null;

    /**
     * @var int $free
     */
    private $free = null;

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * Gets as cpus
     *
     * @return string
     */
    public function getCpus()
    {
        return $this->cpus;
    }

    /**
     * Sets a new cpus
     *
     * @param string $cpus
     * @return self
     */
    public function setCpus($cpus)
    {
        $this->cpus = $cpus;
        return $this;
    }

    /**
     * Gets as dedicated
     *
     * @return string
     */
    public function getDedicated()
    {
        return $this->dedicated;
    }

    /**
     * Sets a new dedicated
     *
     * @param string $dedicated
     * @return self
     */
    public function setDedicated($dedicated)
    {
        $this->dedicated = $dedicated;
        return $this;
    }

    /**
     * Gets as free
     *
     * @return int
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Sets a new free
     *
     * @param int $free
     * @return self
     */
    public function setFree($free)
    {
        $this->free = $free;
        return $this;
    }

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


}

