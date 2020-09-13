<?php

namespace One\Cluster\Cluster;

/**
 * Class representing Hosts
 */
class Hosts
{

    /**
     * @var int[] $id
     */
    private $id = [
        
    ];

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToId($id)
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * isset id
     *
     * @param int|string $index
     * @return bool
     */
    public function issetId($index)
    {
        return isset($this->id[$index]);
    }

    /**
     * unset id
     *
     * @param int|string $index
     * @return void
     */
    public function unsetId($index)
    {
        unset($this->id[$index]);
    }

    /**
     * Gets as id
     *
     * @return int[]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int[] $id
     * @return self
     */
    public function setId(array $id)
    {
        $this->id = $id;
        return $this;
    }


}

