<?php

namespace One\VmGroupPool;

/**
 * Class representing VmGroupPool
 */
class VmGroupPool
{

    /**
     * @var \One\VmGroup[] $vmGroup
     */
    private $vmGroup = [
        
    ];

    /**
     * Adds as vmGroup
     *
     * @return self
     * @param \One\VmGroup $vmGroup
     */
    public function addToVmGroup(\One\VmGroup $vmGroup)
    {
        $this->vmGroup[] = $vmGroup;
        return $this;
    }

    /**
     * isset vmGroup
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVmGroup($index)
    {
        return isset($this->vmGroup[$index]);
    }

    /**
     * unset vmGroup
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVmGroup($index)
    {
        unset($this->vmGroup[$index]);
    }

    /**
     * Gets as vmGroup
     *
     * @return \One\VmGroup[]
     */
    public function getVmGroup()
    {
        return $this->vmGroup;
    }

    /**
     * Sets a new vmGroup
     *
     * @param \One\VmGroup[] $vmGroup
     * @return self
     */
    public function setVmGroup(array $vmGroup)
    {
        $this->vmGroup = $vmGroup;
        return $this;
    }


}

