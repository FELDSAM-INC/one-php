<?php

namespace One\VmGroup\VmGroup;

/**
 * Class representing Roles
 */
class Roles
{

    /**
     * @var \One\VmGroup\VmGroup\Roles\Role[] $role
     */
    private $role = [
        
    ];

    /**
     * Adds as role
     *
     * @return self
     * @param \One\VmGroup\VmGroup\Roles\Role $role
     */
    public function addToRole(\One\VmGroup\VmGroup\Roles\Role $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * @return \One\VmGroup\VmGroup\Roles\Role[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * @param \One\VmGroup\VmGroup\Roles\Role[] $role
     * @return self
     */
    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }


}

