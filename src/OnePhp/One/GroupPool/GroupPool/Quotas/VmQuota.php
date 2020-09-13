<?php

namespace One\GroupPool\GroupPool\Quotas;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\GroupPool\GroupPool\Quotas\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\GroupPool\GroupPool\Quotas\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\GroupPool\GroupPool\Quotas\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\GroupPool\GroupPool\Quotas\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

