<?php

namespace One\UserPool;

/**
 * Class representing UserPool
 */
class UserPool
{

    /**
     * @var \One\UserPool\UserPool\User[] $user
     */
    private $user = [
        
    ];

    /**
     * @var \One\UserPool\UserPool\Quotas[] $quotas
     */
    private $quotas = [
        
    ];

    /**
     * @var \One\UserPool\UserPool\DefaultUserQuotas $defaultUserQuotas
     */
    private $defaultUserQuotas = null;

    /**
     * Adds as user
     *
     * @return self
     * @param \One\UserPool\UserPool\User $user
     */
    public function addToUser(\One\UserPool\UserPool\User $user)
    {
        $this->user[] = $user;
        return $this;
    }

    /**
     * isset user
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUser($index)
    {
        return isset($this->user[$index]);
    }

    /**
     * unset user
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUser($index)
    {
        unset($this->user[$index]);
    }

    /**
     * Gets as user
     *
     * @return \One\UserPool\UserPool\User[]
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \One\UserPool\UserPool\User[] $user
     * @return self
     */
    public function setUser(array $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Adds as quotas
     *
     * @return self
     * @param \One\UserPool\UserPool\Quotas $quotas
     */
    public function addToQuotas(\One\UserPool\UserPool\Quotas $quotas)
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
     * @return \One\UserPool\UserPool\Quotas[]
     */
    public function getQuotas()
    {
        return $this->quotas;
    }

    /**
     * Sets a new quotas
     *
     * @param \One\UserPool\UserPool\Quotas[] $quotas
     * @return self
     */
    public function setQuotas(array $quotas)
    {
        $this->quotas = $quotas;
        return $this;
    }

    /**
     * Gets as defaultUserQuotas
     *
     * @return \One\UserPool\UserPool\DefaultUserQuotas
     */
    public function getDefaultUserQuotas()
    {
        return $this->defaultUserQuotas;
    }

    /**
     * Sets a new defaultUserQuotas
     *
     * @param \One\UserPool\UserPool\DefaultUserQuotas $defaultUserQuotas
     * @return self
     */
    public function setDefaultUserQuotas(\One\UserPool\UserPool\DefaultUserQuotas $defaultUserQuotas)
    {
        $this->defaultUserQuotas = $defaultUserQuotas;
        return $this;
    }


}

