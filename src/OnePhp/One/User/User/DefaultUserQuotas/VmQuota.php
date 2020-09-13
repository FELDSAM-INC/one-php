<?php

namespace One\User\User\DefaultUserQuotas;

/**
 * Class representing VmQuota
 */
class VmQuota
{

    /**
     * @var \One\User\User\DefaultUserQuotas\VmQuota\Vm $vm
     */
    private $vm = null;

    /**
     * Gets as vm
     *
     * @return \One\User\User\DefaultUserQuotas\VmQuota\Vm
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Sets a new vm
     *
     * @param \One\User\User\DefaultUserQuotas\VmQuota\Vm $vm
     * @return self
     */
    public function setVm(\One\User\User\DefaultUserQuotas\VmQuota\Vm $vm)
    {
        $this->vm = $vm;
        return $this;
    }


}

