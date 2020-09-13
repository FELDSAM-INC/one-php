<?php

namespace One\Vm\Vm;

/**
 * Class representing HistoryRecords
 */
class HistoryRecords
{

    /**
     * @var \One\Vm\Vm\HistoryRecords\History[] $history
     */
    private $history = [
        
    ];

    /**
     * Adds as history
     *
     * @return self
     * @param \One\Vm\Vm\HistoryRecords\History $history
     */
    public function addToHistory(\One\Vm\Vm\HistoryRecords\History $history)
    {
        $this->history[] = $history;
        return $this;
    }

    /**
     * isset history
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistory($index)
    {
        return isset($this->history[$index]);
    }

    /**
     * unset history
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistory($index)
    {
        unset($this->history[$index]);
    }

    /**
     * Gets as history
     *
     * @return \One\Vm\Vm\HistoryRecords\History[]
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Sets a new history
     *
     * @param \One\Vm\Vm\HistoryRecords\History[] $history
     * @return self
     */
    public function setHistory(array $history)
    {
        $this->history = $history;
        return $this;
    }


}

