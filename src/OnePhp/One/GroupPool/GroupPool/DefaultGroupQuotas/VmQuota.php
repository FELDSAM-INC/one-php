<?php

namespace One\GroupPool\GroupPool\DefaultGroupQuotas;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\GroupPool\GroupPool\DefaultGroupQuotas\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\GroupPool\GroupPool\DefaultGroupQuotas\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\GroupPool\GroupPool\DefaultGroupQuotas\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\GroupPool\GroupPool\DefaultGroupQuotas\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

