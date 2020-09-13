<?php

namespace One\History\History\Vm;

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
     * @var int $diskId
     */
    private $diskId = null;

    /**
     * @var int $nextSnapshot
     */
    private $nextSnapshot = null;

    /**
     * @var \One\History\History\Vm\Snapshots\Snapshot[] $snapshot
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
     * Gets as diskId
     *
     * @return int
     */
    public function getDiskId()
    {
        return $this->diskId;
    }

    /**
     * Sets a new diskId
     *
     * @param int $diskId
     * @return self
     */
    public function setDiskId($diskId)
    {
        $this->diskId = $diskId;
        return $this;
    }

    /**
     * Gets as nextSnapshot
     *
     * @return int
     */
    public function getNextSnapshot()
    {
        return $this->nextSnapshot;
    }

    /**
     * Sets a new nextSnapshot
     *
     * @param int $nextSnapshot
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
     * @param \One\History\History\Vm\Snapshots\Snapshot $snapshot
     */
    public function addToSnapshot(\One\History\History\Vm\Snapshots\Snapshot $snapshot)
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
     * @return \One\History\History\Vm\Snapshots\Snapshot[]
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * Sets a new snapshot
     *
     * @param \One\History\History\Vm\Snapshots\Snapshot[] $snapshot
     * @return self
     */
    public function setSnapshot(array $snapshot)
    {
        $this->snapshot = $snapshot;
        return $this;
    }


}

