<?php

namespace One\Host\Host;

/**
 * Class representing HostShare
 */
class HostShare
{

    /**
     * @var int $diskUsage
     */
    private $diskUsage = null;

    /**
     * @var int $memUsage
     */
    private $memUsage = null;

    /**
     * @var int $cpuUsage
     */
    private $cpuUsage = null;

    /**
     * @var int $totalMem
     */
    private $totalMem = null;

    /**
     * @var int $totalCpu
     */
    private $totalCpu = null;

    /**
     * @var int $maxDisk
     */
    private $maxDisk = null;

    /**
     * @var int $maxMem
     */
    private $maxMem = null;

    /**
     * @var int $maxCpu
     */
    private $maxCpu = null;

    /**
     * @var int $freeDisk
     */
    private $freeDisk = null;

    /**
     * @var int $freeMem
     */
    private $freeMem = null;

    /**
     * @var int $freeCpu
     */
    private $freeCpu = null;

    /**
     * @var int $usedDisk
     */
    private $usedDisk = null;

    /**
     * @var int $usedMem
     */
    private $usedMem = null;

    /**
     * @var int $usedCpu
     */
    private $usedCpu = null;

    /**
     * @var int $runningVms
     */
    private $runningVms = null;

    /**
     * @var int $vmsThread
     */
    private $vmsThread = null;

    /**
     * @var \One\Host\Host\HostShare\Datastores\Ds[] $datastores
     */
    private $datastores = null;

    /**
     * @var \OnePhp\AnyType[] $pciDevices
     */
    private $pciDevices = null;

    /**
     * @var \One\Host\Host\HostShare\NumaNodes\Node[] $numaNodes
     */
    private $numaNodes = null;

    /**
     * Gets as diskUsage
     *
     * @return int
     */
    public function getDiskUsage()
    {
        return $this->diskUsage;
    }

    /**
     * Sets a new diskUsage
     *
     * @param int $diskUsage
     * @return self
     */
    public function setDiskUsage($diskUsage)
    {
        $this->diskUsage = $diskUsage;
        return $this;
    }

    /**
     * Gets as memUsage
     *
     * @return int
     */
    public function getMemUsage()
    {
        return $this->memUsage;
    }

    /**
     * Sets a new memUsage
     *
     * @param int $memUsage
     * @return self
     */
    public function setMemUsage($memUsage)
    {
        $this->memUsage = $memUsage;
        return $this;
    }

    /**
     * Gets as cpuUsage
     *
     * @return int
     */
    public function getCpuUsage()
    {
        return $this->cpuUsage;
    }

    /**
     * Sets a new cpuUsage
     *
     * @param int $cpuUsage
     * @return self
     */
    public function setCpuUsage($cpuUsage)
    {
        $this->cpuUsage = $cpuUsage;
        return $this;
    }

    /**
     * Gets as totalMem
     *
     * @return int
     */
    public function getTotalMem()
    {
        return $this->totalMem;
    }

    /**
     * Sets a new totalMem
     *
     * @param int $totalMem
     * @return self
     */
    public function setTotalMem($totalMem)
    {
        $this->totalMem = $totalMem;
        return $this;
    }

    /**
     * Gets as totalCpu
     *
     * @return int
     */
    public function getTotalCpu()
    {
        return $this->totalCpu;
    }

    /**
     * Sets a new totalCpu
     *
     * @param int $totalCpu
     * @return self
     */
    public function setTotalCpu($totalCpu)
    {
        $this->totalCpu = $totalCpu;
        return $this;
    }

    /**
     * Gets as maxDisk
     *
     * @return int
     */
    public function getMaxDisk()
    {
        return $this->maxDisk;
    }

    /**
     * Sets a new maxDisk
     *
     * @param int $maxDisk
     * @return self
     */
    public function setMaxDisk($maxDisk)
    {
        $this->maxDisk = $maxDisk;
        return $this;
    }

    /**
     * Gets as maxMem
     *
     * @return int
     */
    public function getMaxMem()
    {
        return $this->maxMem;
    }

    /**
     * Sets a new maxMem
     *
     * @param int $maxMem
     * @return self
     */
    public function setMaxMem($maxMem)
    {
        $this->maxMem = $maxMem;
        return $this;
    }

    /**
     * Gets as maxCpu
     *
     * @return int
     */
    public function getMaxCpu()
    {
        return $this->maxCpu;
    }

    /**
     * Sets a new maxCpu
     *
     * @param int $maxCpu
     * @return self
     */
    public function setMaxCpu($maxCpu)
    {
        $this->maxCpu = $maxCpu;
        return $this;
    }

    /**
     * Gets as freeDisk
     *
     * @return int
     */
    public function getFreeDisk()
    {
        return $this->freeDisk;
    }

    /**
     * Sets a new freeDisk
     *
     * @param int $freeDisk
     * @return self
     */
    public function setFreeDisk($freeDisk)
    {
        $this->freeDisk = $freeDisk;
        return $this;
    }

    /**
     * Gets as freeMem
     *
     * @return int
     */
    public function getFreeMem()
    {
        return $this->freeMem;
    }

    /**
     * Sets a new freeMem
     *
     * @param int $freeMem
     * @return self
     */
    public function setFreeMem($freeMem)
    {
        $this->freeMem = $freeMem;
        return $this;
    }

    /**
     * Gets as freeCpu
     *
     * @return int
     */
    public function getFreeCpu()
    {
        return $this->freeCpu;
    }

    /**
     * Sets a new freeCpu
     *
     * @param int $freeCpu
     * @return self
     */
    public function setFreeCpu($freeCpu)
    {
        $this->freeCpu = $freeCpu;
        return $this;
    }

    /**
     * Gets as usedDisk
     *
     * @return int
     */
    public function getUsedDisk()
    {
        return $this->usedDisk;
    }

    /**
     * Sets a new usedDisk
     *
     * @param int $usedDisk
     * @return self
     */
    public function setUsedDisk($usedDisk)
    {
        $this->usedDisk = $usedDisk;
        return $this;
    }

    /**
     * Gets as usedMem
     *
     * @return int
     */
    public function getUsedMem()
    {
        return $this->usedMem;
    }

    /**
     * Sets a new usedMem
     *
     * @param int $usedMem
     * @return self
     */
    public function setUsedMem($usedMem)
    {
        $this->usedMem = $usedMem;
        return $this;
    }

    /**
     * Gets as usedCpu
     *
     * @return int
     */
    public function getUsedCpu()
    {
        return $this->usedCpu;
    }

    /**
     * Sets a new usedCpu
     *
     * @param int $usedCpu
     * @return self
     */
    public function setUsedCpu($usedCpu)
    {
        $this->usedCpu = $usedCpu;
        return $this;
    }

    /**
     * Gets as runningVms
     *
     * @return int
     */
    public function getRunningVms()
    {
        return $this->runningVms;
    }

    /**
     * Sets a new runningVms
     *
     * @param int $runningVms
     * @return self
     */
    public function setRunningVms($runningVms)
    {
        $this->runningVms = $runningVms;
        return $this;
    }

    /**
     * Gets as vmsThread
     *
     * @return int
     */
    public function getVmsThread()
    {
        return $this->vmsThread;
    }

    /**
     * Sets a new vmsThread
     *
     * @param int $vmsThread
     * @return self
     */
    public function setVmsThread($vmsThread)
    {
        $this->vmsThread = $vmsThread;
        return $this;
    }

    /**
     * Adds as ds
     *
     * @return self
     * @param \One\Host\Host\HostShare\Datastores\Ds $ds
     */
    public function addToDatastores(\One\Host\Host\HostShare\Datastores\Ds $ds)
    {
        $this->datastores[] = $ds;
        return $this;
    }

    /**
     * isset datastores
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatastores($index)
    {
        return isset($this->datastores[$index]);
    }

    /**
     * unset datastores
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatastores($index)
    {
        unset($this->datastores[$index]);
    }

    /**
     * Gets as datastores
     *
     * @return \One\Host\Host\HostShare\Datastores\Ds[]
     */
    public function getDatastores()
    {
        return $this->datastores;
    }

    /**
     * Sets a new datastores
     *
     * @param \One\Host\Host\HostShare\Datastores\Ds[] $datastores
     * @return self
     */
    public function setDatastores(array $datastores)
    {
        $this->datastores = $datastores;
        return $this;
    }

    /**
     * Adds as pci
     *
     * @return self
     * @param \OnePhp\AnyType $pci
     */
    public function addToPciDevices(\OnePhp\AnyType $pci)
    {
        $this->pciDevices[] = $pci;
        return $this;
    }

    /**
     * isset pciDevices
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPciDevices($index)
    {
        return isset($this->pciDevices[$index]);
    }

    /**
     * unset pciDevices
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPciDevices($index)
    {
        unset($this->pciDevices[$index]);
    }

    /**
     * Gets as pciDevices
     *
     * @return \OnePhp\AnyType[]
     */
    public function getPciDevices()
    {
        return $this->pciDevices;
    }

    /**
     * Sets a new pciDevices
     *
     * @param \OnePhp\AnyType[] $pciDevices
     * @return self
     */
    public function setPciDevices(array $pciDevices)
    {
        $this->pciDevices = $pciDevices;
        return $this;
    }

    /**
     * Adds as node
     *
     * @return self
     * @param \One\Host\Host\HostShare\NumaNodes\Node $node
     */
    public function addToNumaNodes(\One\Host\Host\HostShare\NumaNodes\Node $node)
    {
        $this->numaNodes[] = $node;
        return $this;
    }

    /**
     * isset numaNodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumaNodes($index)
    {
        return isset($this->numaNodes[$index]);
    }

    /**
     * unset numaNodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumaNodes($index)
    {
        unset($this->numaNodes[$index]);
    }

    /**
     * Gets as numaNodes
     *
     * @return \One\Host\Host\HostShare\NumaNodes\Node[]
     */
    public function getNumaNodes()
    {
        return $this->numaNodes;
    }

    /**
     * Sets a new numaNodes
     *
     * @param \One\Host\Host\HostShare\NumaNodes\Node[] $numaNodes
     * @return self
     */
    public function setNumaNodes(array $numaNodes)
    {
        $this->numaNodes = $numaNodes;
        return $this;
    }


}

