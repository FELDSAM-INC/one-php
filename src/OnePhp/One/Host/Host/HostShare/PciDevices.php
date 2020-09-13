<?php

namespace One\Host\Host\HostShare;

/**
 * Class representing PciDevices
 */
class PciDevices
{

    /**
     * @var \OnePhp\AnyType[] $pci
     */
    private $pci = [
        
    ];

    /**
     * Adds as pci
     *
     * @return self
     * @param \OnePhp\AnyType $pci
     */
    public function addToPci(\OnePhp\AnyType $pci)
    {
        $this->pci[] = $pci;
        return $this;
    }

    /**
     * isset pci
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPci($index)
    {
        return isset($this->pci[$index]);
    }

    /**
     * unset pci
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPci($index)
    {
        unset($this->pci[$index]);
    }

    /**
     * Gets as pci
     *
     * @return \OnePhp\AnyType[]
     */
    public function getPci()
    {
        return $this->pci;
    }

    /**
     * Sets a new pci
     *
     * @param \OnePhp\AnyType[] $pci
     * @return self
     */
    public function setPci(array $pci)
    {
        $this->pci = $pci;
        return $this;
    }


}

