<?php

namespace One\AclPool;

/**
 * Class representing AclPool
 */
class AclPool
{

    /**
     * @var \One\AclPool\AclPool\Acl[] $acl
     */
    private $acl = [
        
    ];

    /**
     * Adds as acl
     *
     * @return self
     * @param \One\AclPool\AclPool\Acl $acl
     */
    public function addToAcl(\One\AclPool\AclPool\Acl $acl)
    {
        $this->acl[] = $acl;
        return $this;
    }

    /**
     * isset acl
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcl($index)
    {
        return isset($this->acl[$index]);
    }

    /**
     * unset acl
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcl($index)
    {
        unset($this->acl[$index]);
    }

    /**
     * Gets as acl
     *
     * @return \One\AclPool\AclPool\Acl[]
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * Sets a new acl
     *
     * @param \One\AclPool\AclPool\Acl[] $acl
     * @return self
     */
    public function setAcl(array $acl)
    {
        $this->acl = $acl;
        return $this;
    }


}

