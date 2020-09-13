<?php

namespace One\VmtemplatePool;

/**
 * Class representing VmtemplatePool
 */
class VmtemplatePool
{

    /**
     * @var \One\Vmtemplate[] $vmtemplate
     */
    private $vmtemplate = [
        
    ];

    /**
     * Adds as vmtemplate
     *
     * @return self
     * @param \One\Vmtemplate $vmtemplate
     */
    public function addToVmtemplate(\One\Vmtemplate $vmtemplate)
    {
        $this->vmtemplate[] = $vmtemplate;
        return $this;
    }

    /**
     * isset vmtemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVmtemplate($index)
    {
        return isset($this->vmtemplate[$index]);
    }

    /**
     * unset vmtemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVmtemplate($index)
    {
        unset($this->vmtemplate[$index]);
    }

    /**
     * Gets as vmtemplate
     *
     * @return \One\Vmtemplate[]
     */
    public function getVmtemplate()
    {
        return $this->vmtemplate;
    }

    /**
     * Sets a new vmtemplate
     *
     * @param \One\Vmtemplate[] $vmtemplate
     * @return self
     */
    public function setVmtemplate(array $vmtemplate)
    {
        $this->vmtemplate = $vmtemplate;
        return $this;
    }


}

