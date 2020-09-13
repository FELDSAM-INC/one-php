<?php

namespace One\UserPool\UserPool\DefaultUserQuotas;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\UserPool\UserPool\DefaultUserQuotas\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\UserPool\UserPool\DefaultUserQuotas\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\UserPool\UserPool\DefaultUserQuotas\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\UserPool\UserPool\DefaultUserQuotas\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

