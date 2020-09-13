<?php

namespace One\Group\Group;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\Group\Group\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\Group\Group\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\Group\Group\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\Group\Group\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

