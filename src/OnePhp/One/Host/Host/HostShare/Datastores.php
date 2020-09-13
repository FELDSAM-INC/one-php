<?php

namespace One\Host\Host\HostShare;

/**
 * Class representing Datastores
 */
class Datastores
{

    /**
     * @var \One\Host\Host\HostShare\Datastores\Ds[] $ds
     */
    private $ds = [
        
    ];

    /**
     * Adds as ds
     *
     * @return self
     * @param \One\Host\Host\HostShare\Datastores\Ds $ds
     */
    public function addToDs(\One\Host\Host\HostShare\Datastores\Ds $ds)
    {
        $this->ds[] = $ds;
        return $this;
    }

    /**
     * isset ds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDs($index)
    {
        return isset($this->ds[$index]);
    }

    /**
     * unset ds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDs($index)
    {
        unset($this->ds[$index]);
    }

    /**
     * Gets as ds
     *
     * @return \One\Host\Host\HostShare\Datastores\Ds[]
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * Sets a new ds
     *
     * @param \One\Host\Host\HostShare\Datastores\Ds[] $ds
     * @return self
     */
    public function setDs(array $ds)
    {
        $this->ds = $ds;
        return $this;
    }


}

