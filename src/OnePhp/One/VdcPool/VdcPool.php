<?php

namespace One\VdcPool;

/**
 * Class representing VdcPool
 */
class VdcPool
{

    /**
     * @var \One\Vdc[] $vdc
     */
    private $vdc = [
        
    ];

    /**
     * Adds as vdc
     *
     * @return self
     * @param \One\Vdc $vdc
     */
    public function addToVdc(\One\Vdc $vdc)
    {
        $this->vdc[] = $vdc;
        return $this;
    }

    /**
     * isset vdc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVdc($index)
    {
        return isset($this->vdc[$index]);
    }

    /**
     * unset vdc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVdc($index)
    {
        unset($this->vdc[$index]);
    }

    /**
     * Gets as vdc
     *
     * @return \One\Vdc[]
     */
    public function getVdc()
    {
        return $this->vdc;
    }

    /**
     * Sets a new vdc
     *
     * @param \One\Vdc[] $vdc
     * @return self
     */
    public function setVdc(array $vdc)
    {
        $this->vdc = $vdc;
        return $this;
    }


}

