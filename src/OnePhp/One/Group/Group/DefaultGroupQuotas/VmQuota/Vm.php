<?php

namespace One\Group\Group\DefaultGroupQuotas\VmQuota;

/**
 * Class representing Vm
 */
class Vm
{

    /**
     * @var float $cpu
     */
    private $cpu = null;

    /**
     * @var float $cpuUsed
     */
    private $cpuUsed = null;

    /**
     * @var int $memory
     */
    private $memory = null;

    /**
     * @var int $memoryUsed
     */
    private $memoryUsed = null;

    /**
     * @var float $runningCpu
     */
    private $runningCpu = null;

    /**
     * @var float $runningCpuUsed
     */
    private $runningCpuUsed = null;

    /**
     * @var int $runningMemory
     */
    private $runningMemory = null;

    /**
     * @var int $runningMemoryUsed
     */
    private $runningMemoryUsed = null;

    /**
     * @var int $runningVms
     */
    private $runningVms = null;

    /**
     * @var int $runningVmsUsed
     */
    private $runningVmsUsed = null;

    /**
     * @var int $systemDiskSize
     */
    private $systemDiskSize = null;

    /**
     * @var int $systemDiskSizeUsed
     */
    private $systemDiskSizeUsed = null;

    /**
     * @var int $vms
     */
    private $vms = null;

    /**
     * @var int $vmsUsed
     */
    private $vmsUsed = null;

    /**
     * Gets as cpu
     *
     * @return float
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Sets a new cpu
     *
     * @param float $cpu
     * @return self
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
        return $this;
    }

    /**
     * Gets as cpuUsed
     *
     * @return float
     */
    public function getCpuUsed()
    {
        return $this->cpuUsed;
    }

    /**
     * Sets a new cpuUsed
     *
     * @param float $cpuUsed
     * @return self
     */
    public function setCpuUsed($cpuUsed)
    {
        $this->cpuUsed = $cpuUsed;
        return $this;
    }

    /**
     * Gets as memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Sets a new memory
     *
     * @param int $memory
     * @return self
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
        return $this;
    }

    /**
     * Gets as memoryUsed
     *
     * @return int
     */
    public function getMemoryUsed()
    {
        return $this->memoryUsed;
    }

    /**
     * Sets a new memoryUsed
     *
     * @param int $memoryUsed
     * @return self
     */
    public function setMemoryUsed($memoryUsed)
    {
        $this->memoryUsed = $memoryUsed;
        return $this;
    }

    /**
     * Gets as runningCpu
     *
     * @return float
     */
    public function getRunningCpu()
    {
        return $this->runningCpu;
    }

    /**
     * Sets a new runningCpu
     *
     * @param float $runningCpu
     * @return self
     */
    public function setRunningCpu($runningCpu)
    {
        $this->runningCpu = $runningCpu;
        return $this;
    }

    /**
     * Gets as runningCpuUsed
     *
     * @return float
     */
    public function getRunningCpuUsed()
    {
        return $this->runningCpuUsed;
    }

    /**
     * Sets a new runningCpuUsed
     *
     * @param float $runningCpuUsed
     * @return self
     */
    public function setRunningCpuUsed($runningCpuUsed)
    {
        $this->runningCpuUsed = $runningCpuUsed;
        return $this;
    }

    /**
     * Gets as runningMemory
     *
     * @return int
     */
    public function getRunningMemory()
    {
        return $this->runningMemory;
    }

    /**
     * Sets a new runningMemory
     *
     * @param int $runningMemory
     * @return self
     */
    public function setRunningMemory($runningMemory)
    {
        $this->runningMemory = $runningMemory;
        return $this;
    }

    /**
     * Gets as runningMemoryUsed
     *
     * @return int
     */
    public function getRunningMemoryUsed()
    {
        return $this->runningMemoryUsed;
    }

    /**
     * Sets a new runningMemoryUsed
     *
     * @param int $runningMemoryUsed
     * @return self
     */
    public function setRunningMemoryUsed($runningMemoryUsed)
    {
        $this->runningMemoryUsed = $runningMemoryUsed;
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
     * Gets as runningVmsUsed
     *
     * @return int
     */
    public function getRunningVmsUsed()
    {
        return $this->runningVmsUsed;
    }

    /**
     * Sets a new runningVmsUsed
     *
     * @param int $runningVmsUsed
     * @return self
     */
    public function setRunningVmsUsed($runningVmsUsed)
    {
        $this->runningVmsUsed = $runningVmsUsed;
        return $this;
    }

    /**
     * Gets as systemDiskSize
     *
     * @return int
     */
    public function getSystemDiskSize()
    {
        return $this->systemDiskSize;
    }

    /**
     * Sets a new systemDiskSize
     *
     * @param int $systemDiskSize
     * @return self
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->systemDiskSize = $systemDiskSize;
        return $this;
    }

    /**
     * Gets as systemDiskSizeUsed
     *
     * @return int
     */
    public function getSystemDiskSizeUsed()
    {
        return $this->systemDiskSizeUsed;
    }

    /**
     * Sets a new systemDiskSizeUsed
     *
     * @param int $systemDiskSizeUsed
     * @return self
     */
    public function setSystemDiskSizeUsed($systemDiskSizeUsed)
    {
        $this->systemDiskSizeUsed = $systemDiskSizeUsed;
        return $this;
    }

    /**
     * Gets as vms
     *
     * @return int
     */
    public function getVms()
    {
        return $this->vms;
    }

    /**
     * Sets a new vms
     *
     * @param int $vms
     * @return self
     */
    public function setVms($vms)
    {
        $this->vms = $vms;
        return $this;
    }

    /**
     * Gets as vmsUsed
     *
     * @return int
     */
    public function getVmsUsed()
    {
        return $this->vmsUsed;
    }

    /**
     * Sets a new vmsUsed
     *
     * @param int $vmsUsed
     * @return self
     */
    public function setVmsUsed($vmsUsed)
    {
        $this->vmsUsed = $vmsUsed;
        return $this;
    }


}

