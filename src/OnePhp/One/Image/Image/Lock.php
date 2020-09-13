<?php

namespace One\Image\Image;

/**
 * Class representing Lock
 */
class Lock
{

    /**
     * @var int $locked
     */
    private $locked = null;

    /**
     * @var int $owner
     */
    private $owner = null;

    /**
     * @var int $time
     */
    private $time = null;

    /**
     * @var int $reqId
     */
    private $reqId = null;

    /**
     * Gets as locked
     *
     * @return int
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Sets a new locked
     *
     * @param int $locked
     * @return self
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return int
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param int $owner
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * @param int $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as reqId
     *
     * @return int
     */
    public function getReqId()
    {
        return $this->reqId;
    }

    /**
     * Sets a new reqId
     *
     * @param int $reqId
     * @return self
     */
    public function setReqId($reqId)
    {
        $this->reqId = $reqId;
        return $this;
    }


}

