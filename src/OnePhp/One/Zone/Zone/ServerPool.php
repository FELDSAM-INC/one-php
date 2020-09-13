<?php

namespace One\Zone\Zone;

/**
 * Class representing ServerPool
 */
class ServerPool
{

    /**
     * @var \One\Zone\Zone\ServerPool\Server[] $server
     */
    private $server = [
        
    ];

    /**
     * Adds as server
     *
     * @return self
     * @param \One\Zone\Zone\ServerPool\Server $server
     */
    public function addToServer(\One\Zone\Zone\ServerPool\Server $server)
    {
        $this->server[] = $server;
        return $this;
    }

    /**
     * isset server
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServer($index)
    {
        return isset($this->server[$index]);
    }

    /**
     * unset server
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServer($index)
    {
        unset($this->server[$index]);
    }

    /**
     * Gets as server
     *
     * @return \One\Zone\Zone\ServerPool\Server[]
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Sets a new server
     *
     * @param \One\Zone\Zone\ServerPool\Server[] $server
     * @return self
     */
    public function setServer(array $server)
    {
        $this->server = $server;
        return $this;
    }


}

