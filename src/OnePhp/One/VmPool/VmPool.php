<?php

namespace One\VmPool;

/**
 * Class representing VmPool
 */
class VmPool
{

    /**
     * @var \One\VmPool\VmPool\Vm[] $vm
     */
    private $vm = [
        
    ];

    /**
     * Adds as vm
     *
     * @return self
     * @param \One\VmPool\VmPool\Vm $vm
     */
    public function addToVm(\One\VmPool\VmPool\Vm $vm)
    {
        $this->vm[] = $vm;
        return $this;
    }

    /**
     * isset vm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVm($index)
    {
        return isset($this->vm[$index]);
    }

    /**
     * unset vm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVm($index)
    {
        unset($this->vm[$index]);
    }

    /**
     * Gets as vm
     *
     * @return \One\VmPool\VmPool\Vm[]
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\VmPool\VmPool\Vm[] $vm
     * @return self
     */
    public function setVm(array $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

