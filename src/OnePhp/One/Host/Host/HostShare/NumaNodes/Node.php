<?php

namespace One\Host\Host\HostShare\NumaNodes;

/**
 * Class representing Node
 */
class Node
{

    /**
     * @var \One\Host\Host\HostShare\NumaNodes\Node\Core[] $core
     */
    private $core = [
        
    ];

    /**
     * @var \One\Host\Host\HostShare\NumaNodes\Node\Hugepage[] $hugepage
     */
    private $hugepage = [
        
    ];

    /**
     * @var \One\Host\Host\HostShare\NumaNodes\Node\Memory $memory
     */
    private $memory = null;

    /**
     * @var int $nodeId
     */
    private $nodeId = null;

    /**
     * Adds as core
     *
     * @return self
     * @param \One\Host\Host\HostShare\NumaNodes\Node\Core $core
     */
    public function addToCore(\One\Host\Host\HostShare\NumaNodes\Node\Core $core)
    {
        $this->core[] = $core;
        return $this;
    }

    /**
     * isset core
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCore($index)
    {
        return isset($this->core[$index]);
    }

    /**
     * unset core
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCore($index)
    {
        unset($this->core[$index]);
    }

    /**
     * Gets as core
     *
     * @return \One\Host\Host\HostShare\NumaNodes\Node\Core[]
     */
    public function getCore()
    {
        return $this->core;
    }

    /**
     * Sets a new core
     *
     * @param \One\Host\Host\HostShare\NumaNodes\Node\Core[] $core
     * @return self
     */
    public function setCore(array $core)
    {
        $this->core = $core;
        return $this;
    }

    /**
     * Adds as hugepage
     *
     * @return self
     * @param \One\Host\Host\HostShare\NumaNodes\Node\Hugepage $hugepage
     */
    public function addToHugepage(\One\Host\Host\HostShare\NumaNodes\Node\Hugepage $hugepage)
    {
        $this->hugepage[] = $hugepage;
        return $this;
    }

    /**
     * isset hugepage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHugepage($index)
    {
        return isset($this->hugepage[$index]);
    }

    /**
     * unset hugepage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHugepage($index)
    {
        unset($this->hugepage[$index]);
    }

    /**
     * Gets as hugepage
     *
     * @return \One\Host\Host\HostShare\NumaNodes\Node\Hugepage[]
     */
    public function getHugepage()
    {
        return $this->hugepage;
    }

    /**
     * Sets a new hugepage
     *
     * @param \One\Host\Host\HostShare\NumaNodes\Node\Hugepage[] $hugepage
     * @return self
     */
    public function setHugepage(array $hugepage)
    {
        $this->hugepage = $hugepage;
        return $this;
    }

    /**
     * Gets as memory
     *
     * @return \One\Host\Host\HostShare\NumaNodes\Node\Memory
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Sets a new memory
     *
     * @param \One\Host\Host\HostShare\NumaNodes\Node\Memory $memory
     * @return self
     */
    public function setMemory(\One\Host\Host\HostShare\NumaNodes\Node\Memory $memory)
    {
        $this->memory = $memory;
        return $this;
    }

    /**
     * Gets as nodeId
     *
     * @return int
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Sets a new nodeId
     *
     * @param int $nodeId
     * @return self
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;
        return $this;
    }


}

