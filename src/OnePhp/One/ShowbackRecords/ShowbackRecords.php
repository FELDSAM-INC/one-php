<?php

namespace One\ShowbackRecords;

/**
 * Class representing ShowbackRecords
 */
class ShowbackRecords
{

    /**
     * @var \One\ShowbackRecords\ShowbackRecords\Showback[] $showback
     */
    private $showback = [
        
    ];

    /**
     * Adds as showback
     *
     * @return self
     * @param \One\ShowbackRecords\ShowbackRecords\Showback $showback
     */
    public function addToShowback(\One\ShowbackRecords\ShowbackRecords\Showback $showback)
    {
        $this->showback[] = $showback;
        return $this;
    }

    /**
     * isset showback
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShowback($index)
    {
        return isset($this->showback[$index]);
    }

    /**
     * unset showback
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShowback($index)
    {
        unset($this->showback[$index]);
    }

    /**
     * Gets as showback
     *
     * @return \One\ShowbackRecords\ShowbackRecords\Showback[]
     */
    public function getShowback()
    {
        return $this->showback;
    }

    /**
     * Sets a new showback
     *
     * @param \One\ShowbackRecords\ShowbackRecords\Showback[] $showback
     * @return self
     */
    public function setShowback(array $showback)
    {
        $this->showback = $showback;
        return $this;
    }


}

