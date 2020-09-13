<?php

namespace One\VmPool\VmPool\Vm;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var \One\VmPool\VmPool\Vm\Template\Disk[] $disk
     */
    private $disk = [
        
    ];

    /**
     * @var \One\VmPool\VmPool\Vm\Template\Nic[] $nic
     */
    private $nic = [
        
    ];

    /**
     * Adds as disk
     *
     * @return self
     * @param \One\VmPool\VmPool\Vm\Template\Disk $disk
     */
    public function addToDisk(\One\VmPool\VmPool\Vm\Template\Disk $disk)
    {
        $this->disk[] = $disk;
        return $this;
    }

    /**
     * isset disk
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisk($index)
    {
        return isset($this->disk[$index]);
    }

    /**
     * unset disk
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisk($index)
    {
        unset($this->disk[$index]);
    }

    /**
     * Gets as disk
     *
     * @return \One\VmPool\VmPool\Vm\Template\Disk[]
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * Sets a new disk
     *
     * @param \One\VmPool\VmPool\Vm\Template\Disk[] $disk
     * @return self
     */
    public function setDisk(array $disk)
    {
        $this->disk = $disk;
        return $this;
    }

    /**
     * Adds as nic
     *
     * @return self
     * @param \One\VmPool\VmPool\Vm\Template\Nic $nic
     */
    public function addToNic(\One\VmPool\VmPool\Vm\Template\Nic $nic)
    {
        $this->nic[] = $nic;
        return $this;
    }

    /**
     * isset nic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNic($index)
    {
        return isset($this->nic[$index]);
    }

    /**
     * unset nic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNic($index)
    {
        unset($this->nic[$index]);
    }

    /**
     * Gets as nic
     *
     * @return \One\VmPool\VmPool\Vm\Template\Nic[]
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Sets a new nic
     *
     * @param \One\VmPool\VmPool\Vm\Template\Nic[] $nic
     * @return self
     */
    public function setNic(array $nic)
    {
        $this->nic = $nic;
        return $this;
    }


}

