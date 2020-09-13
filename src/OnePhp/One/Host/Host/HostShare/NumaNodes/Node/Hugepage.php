<?php

namespace One\Host\Host\HostShare\NumaNodes\Node;

/**
 * Class representing Hugepage
 */
class Hugepage
{

    /**
     * @var int $free
     */
    private $free = null;

    /**
     * @var int $pages
     */
    private $pages = null;

    /**
     * @var int $size
     */
    private $size = null;

    /**
     * @var int $usage
     */
    private $usage = null;

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
     * Gets as pages
     *
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Sets a new pages
     *
     * @param int $pages
     * @return self
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param int $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * @param int $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }


}

