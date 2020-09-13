<?php

namespace One\UserPool\UserPool\DefaultUserQuotas\VmQuota;

/**
 * Class representing Vm
 */
class Vm
{

    /**
     * @var string $cpu
     */
    private $cpu = null;

    /**
     * @var string $cpuUsed
     */
    private $cpuUsed = null;

    /**
     * @var string $memory
     */
    private $memory = null;

    /**
     * @var string $memoryUsed
     */
    private $memoryUsed = null;

    /**
     * @var string $runningCpu
     */
    private $runningCpu = null;

    /**
     * @var string $runningCpuUsed
     */
    private $runningCpuUsed = null;

    /**
     * @var string $runningMemory
     */
    private $runningMemory = null;

    /**
     * @var string $runningMemoryUsed
     */
    private $runningMemoryUsed = null;

    /**
     * @var string $runningVms
     */
    private $runningVms = null;

    /**
     * @var string $runningVmsUsed
     */
    private $runningVmsUsed = null;

    /**
     * @var string $systemDiskSize
     */
    private $systemDiskSize = null;

    /**
     * @var string $systemDiskSizeUsed
     */
    private $systemDiskSizeUsed = null;

    /**
     * @var string $vms
     */
    private $vms = null;

    /**
     * @var string $vmsUsed
     */
    private $vmsUsed = null;

    /**
     * Gets as cpu
     *
     * @return string
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Sets a new cpu
     *
     * @param string $cpu
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
     * @return string
     */
    public function getCpuUsed()
    {
        return $this->cpuUsed;
    }

    /**
     * Sets a new cpuUsed
     *
     * @param string $cpuUsed
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
     * @return string
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Sets a new memory
     *
     * @param string $memory
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
     * @return string
     */
    public function getMemoryUsed()
    {
        return $this->memoryUsed;
    }

    /**
     * Sets a new memoryUsed
     *
     * @param string $memoryUsed
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
     * @return string
     */
    public function getRunningCpu()
    {
        return $this->runningCpu;
    }

    /**
     * Sets a new runningCpu
     *
     * @param string $runningCpu
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
     * @return string
     */
    public function getRunningCpuUsed()
    {
        return $this->runningCpuUsed;
    }

    /**
     * Sets a new runningCpuUsed
     *
     * @param string $runningCpuUsed
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
     * @return string
     */
    public function getRunningMemory()
    {
        return $this->runningMemory;
    }

    /**
     * Sets a new runningMemory
     *
     * @param string $runningMemory
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
     * @return string
     */
    public function getRunningMemoryUsed()
    {
        return $this->runningMemoryUsed;
    }

    /**
     * Sets a new runningMemoryUsed
     *
     * @param string $runningMemoryUsed
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
     * @return string
     */
    public function getRunningVms()
    {
        return $this->runningVms;
    }

    /**
     * Sets a new runningVms
     *
     * @param string $runningVms
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
     * @return string
     */
    public function getRunningVmsUsed()
    {
        return $this->runningVmsUsed;
    }

    /**
     * Sets a new runningVmsUsed
     *
     * @param string $runningVmsUsed
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
     * @return string
     */
    public function getSystemDiskSize()
    {
        return $this->systemDiskSize;
    }

    /**
     * Sets a new systemDiskSize
     *
     * @param string $systemDiskSize
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
     * @return string
     */
    public function getSystemDiskSizeUsed()
    {
        return $this->systemDiskSizeUsed;
    }

    /**
     * Sets a new systemDiskSizeUsed
     *
     * @param string $systemDiskSizeUsed
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
     * @return string
     */
    public function getVms()
    {
        return $this->vms;
    }

    /**
     * Sets a new vms
     *
     * @param string $vms
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
     * @return string
     */
    public function getVmsUsed()
    {
        return $this->vmsUsed;
    }

    /**
     * Sets a new vmsUsed
     *
     * @param string $vmsUsed
     * @return self
     */
    public function setVmsUsed($vmsUsed)
    {
        $this->vmsUsed = $vmsUsed;
        return $this;
    }


}

