<?php

namespace One\HostPool;

/**
 * Class representing HostPool
 */
class HostPool
{

    /**
     * @var \One\Host[] $host
     */
    private $host = [
        
    ];

    /**
     * Adds as host
     *
     * @return self
     * @param \One\Host $host
     */
    public function addToHost(\One\Host $host)
    {
        $this->host[] = $host;
        return $this;
    }

    /**
     * isset host
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHost($index)
    {
        return isset($this->host[$index]);
    }

    /**
     * unset host
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHost($index)
    {
        unset($this->host[$index]);
    }

    /**
     * Gets as host
     *
     * @return \One\Host[]
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets a new host
     *
     * @param \One\Host[] $host
     * @return self
     */
    public function setHost(array $host)
    {
        $this->host = $host;
        return $this;
    }


}

