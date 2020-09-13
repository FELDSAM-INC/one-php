<?php

namespace One\Group\Group\DefaultGroupQuotas;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\Group\Group\DefaultGroupQuotas\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\Group\Group\DefaultGroupQuotas\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\Group\Group\DefaultGroupQuotas\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

