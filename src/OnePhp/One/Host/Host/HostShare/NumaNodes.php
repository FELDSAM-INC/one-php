<?php

namespace One\Host\Host\HostShare;

/**
 * Class representing NumaNodes
 */
class NumaNodes
{

    /**
     * @var \One\Host\Host\HostShare\NumaNodes\Node[] $node
     */
    private $node = [
        
    ];

    /**
     * Adds as node
     *
     * @return self
     * @param \One\Host\Host\HostShare\NumaNodes\Node $node
     */
    public function addToNode(\One\Host\Host\HostShare\NumaNodes\Node $node)
    {
        $this->node[] = $node;
        return $this;
    }

    /**
     * isset node
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNode($index)
    {
        return isset($this->node[$index]);
    }

    /**
     * unset node
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNode($index)
    {
        unset($this->node[$index]);
    }

    /**
     * Gets as node
     *
     * @return \One\Host\Host\HostShare\NumaNodes\Node[]
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Sets a new node
     *
     * @param \One\Host\Host\HostShare\NumaNodes\Node[] $node
     * @return self
     */
    public function setNode(array $node)
    {
        $this->node = $node;
        return $this;
    }


}

