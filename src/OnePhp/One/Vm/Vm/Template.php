<?php

namespace One\Vm\Vm;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var \One\Vm\Vm\Template\Disk[] $disk
     */
    private $disk = [
        
    ];

    /**
     * @var \One\Vm\Vm\Template\Nic[] $nic
     */
    private $nic = [
        
    ];

    /**
     * @var \One\Vm\Vm\Template\NicAlias[] $nicAlias
     */
    private $nicAlias = [
        
    ];

    /**
     * Adds as disk
     *
     * @return self
     * @param \One\Vm\Vm\Template\Disk $disk
     */
    public function addToDisk(\One\Vm\Vm\Template\Disk $disk)
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
     * @return \One\Vm\Vm\Template\Disk[]
     */
    public function getDisk()
    {
        return $this->disk;
    }

    /**
     * Sets a new disk
     *
     * @param \One\Vm\Vm\Template\Disk[] $disk
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
     * @param \One\Vm\Vm\Template\Nic $nic
     */
    public function addToNic(\One\Vm\Vm\Template\Nic $nic)
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
     * @return \One\Vm\Vm\Template\Nic[]
     */
    public function getNic()
    {
        return $this->nic;
    }

    /**
     * Sets a new nic
     *
     * @param \One\Vm\Vm\Template\Nic[] $nic
     * @return self
     */
    public function setNic(array $nic)
    {
        $this->nic = $nic;
        return $this;
    }

    /**
     * Adds as nicAlias
     *
     * @return self
     * @param \One\Vm\Vm\Template\NicAlias $nicAlias
     */
    public function addToNicAlias(\One\Vm\Vm\Template\NicAlias $nicAlias)
    {
        $this->nicAlias[] = $nicAlias;
        return $this;
    }

    /**
     * isset nicAlias
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNicAlias($index)
    {
        return isset($this->nicAlias[$index]);
    }

    /**
     * unset nicAlias
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNicAlias($index)
    {
        unset($this->nicAlias[$index]);
    }

    /**
     * Gets as nicAlias
     *
     * @return \One\Vm\Vm\Template\NicAlias[]
     */
    public function getNicAlias()
    {
        return $this->nicAlias;
    }

    /**
     * Sets a new nicAlias
     *
     * @param \One\Vm\Vm\Template\NicAlias[] $nicAlias
     * @return self
     */
    public function setNicAlias(array $nicAlias)
    {
        $this->nicAlias = $nicAlias;
        return $this;
    }


}

