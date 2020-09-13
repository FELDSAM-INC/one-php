<?php

namespace One\GroupPool;

/**
 * Class representing GroupPool
 */
class GroupPool
{

    /**
     * @var \One\GroupPool\GroupPool\Group[] $group
     */
    private $group = [
        
    ];

    /**
     * @var \One\GroupPool\GroupPool\Quotas[] $quotas
     */
    private $quotas = [
        
    ];

    /**
     * @var \One\GroupPool\GroupPool\DefaultGroupQuotas $defaultGroupQuotas
     */
    private $defaultGroupQuotas = null;

    /**
     * Adds as group
     *
     * @return self
     * @param \One\GroupPool\GroupPool\Group $group
     */
    public function addToGroup(\One\GroupPool\GroupPool\Group $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * @return \One\GroupPool\GroupPool\Group[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \One\GroupPool\GroupPool\Group[] $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Adds as quotas
     *
     * @return self
     * @param \One\GroupPool\GroupPool\Quotas $quotas
     */
    public function addToQuotas(\One\GroupPool\GroupPool\Quotas $quotas)
    {
        $this->quotas[] = $quotas;
        return $this;
    }

    /**
     * isset quotas
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuotas($index)
    {
        return isset($this->quotas[$index]);
    }

    /**
     * unset quotas
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuotas($index)
    {
        unset($this->quotas[$index]);
    }

    /**
     * Gets as quotas
     *
     * @return \One\GroupPool\GroupPool\Quotas[]
     */
    public function getQuotas()
    {
        return $this->quotas;
    }

    /**
     * Sets a new quotas
     *
     * @param \One\GroupPool\GroupPool\Quotas[] $quotas
     * @return self
     */
    public function setQuotas(array $quotas)
    {
        $this->quotas = $quotas;
        return $this;
    }

    /**
     * Gets as defaultGroupQuotas
     *
     * @return \One\GroupPool\GroupPool\DefaultGroupQuotas
     */
    public function getDefaultGroupQuotas()
    {
        return $this->defaultGroupQuotas;
    }

    /**
     * Sets a new defaultGroupQuotas
     *
     * @param \One\GroupPool\GroupPool\DefaultGroupQuotas $defaultGroupQuotas
     * @return self
     */
    public function setDefaultGroupQuotas(\One\GroupPool\GroupPool\DefaultGroupQuotas $defaultGroupQuotas)
    {
        $this->defaultGroupQuotas = $defaultGroupQuotas;
        return $this;
    }


}

