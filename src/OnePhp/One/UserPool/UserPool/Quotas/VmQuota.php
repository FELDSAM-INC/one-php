<?php

namespace One\UserPool\UserPool\Quotas;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\UserPool\UserPool\Quotas\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\UserPool\UserPool\Quotas\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\UserPool\UserPool\Quotas\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\UserPool\UserPool\Quotas\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

