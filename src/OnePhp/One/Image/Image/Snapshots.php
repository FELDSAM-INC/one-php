<?php

namespace One\Image\Image;

/**
 * Class representing Snapshots
 */
class Snapshots
{

    /**
     * @var string $allowOrphans
     */
    private $allowOrphans = null;

    /**
     * @var int $currentBase
     */
    private $currentBase = null;

    /**
     * @var string $nextSnapshot
     */
    private $nextSnapshot = null;

    /**
     * @var \One\Image\Image\Snapshots\Snapshot[] $snapshot
     */
    private $snapshot = [
        
    ];

    /**
     * Gets as allowOrphans
     *
     * @return string
     */
    public function getAllowOrphans()
    {
        return $this->allowOrphans;
    }

    /**
     * Sets a new allowOrphans
     *
     * @param string $allowOrphans
     * @return self
     */
    public function setAllowOrphans($allowOrphans)
    {
        $this->allowOrphans = $allowOrphans;
        return $this;
    }

    /**
     * Gets as currentBase
     *
     * @return int
     */
    public function getCurrentBase()
    {
        return $this->currentBase;
    }

    /**
     * Sets a new currentBase
     *
     * @param int $currentBase
     * @return self
     */
    public function setCurrentBase($currentBase)
    {
        $this->currentBase = $currentBase;
        return $this;
    }

    /**
     * Gets as nextSnapshot
     *
     * @return string
     */
    public function getNextSnapshot()
    {
        return $this->nextSnapshot;
    }

    /**
     * Sets a new nextSnapshot
     *
     * @param string $nextSnapshot
     * @return self
     */
    public function setNextSnapshot($nextSnapshot)
    {
        $this->nextSnapshot = $nextSnapshot;
        return $this;
    }

    /**
     * Adds as snapshot
     *
     * @return self
     * @param \One\Image\Image\Snapshots\Snapshot $snapshot
     */
    public function addToSnapshot(\One\Image\Image\Snapshots\Snapshot $snapshot)
    {
        $this->snapshot[] = $snapshot;
        return $this;
    }

    /**
     * isset snapshot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSnapshot($index)
    {
        return isset($this->snapshot[$index]);
    }

    /**
     * unset snapshot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSnapshot($index)
    {
        unset($this->snapshot[$index]);
    }

    /**
     * Gets as snapshot
     *
     * @return \One\Image\Image\Snapshots\Snapshot[]
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * Sets a new snapshot
     *
     * @param \One\Image\Image\Snapshots\Snapshot[] $snapshot
     * @return self
     */
    public function setSnapshot(array $snapshot)
    {
        $this->snapshot = $snapshot;
        return $this;
    }


}

