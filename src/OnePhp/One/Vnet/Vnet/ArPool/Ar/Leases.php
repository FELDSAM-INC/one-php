<?php

namespace One\Vnet\Vnet\ArPool\Ar;

/**
 * Class representing Leases
 */
class Leases
{

    /**
     * @var \One\Vnet\Vnet\ArPool\Ar\Leases\Lease[] $lease
     */
    private $lease = [
        
    ];

    /**
     * Adds as lease
     *
     * @return self
     * @param \One\Vnet\Vnet\ArPool\Ar\Leases\Lease $lease
     */
    public function addToLease(\One\Vnet\Vnet\ArPool\Ar\Leases\Lease $lease)
    {
        $this->lease[] = $lease;
        return $this;
    }

    /**
     * isset lease
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLease($index)
    {
        return isset($this->lease[$index]);
    }

    /**
     * unset lease
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLease($index)
    {
        unset($this->lease[$index]);
    }

    /**
     * Gets as lease
     *
     * @return \One\Vnet\Vnet\ArPool\Ar\Leases\Lease[]
     */
    public function getLease()
    {
        return $this->lease;
    }

    /**
     * Sets a new lease
     *
     * @param \One\Vnet\Vnet\ArPool\Ar\Leases\Lease[] $lease
     * @return self
     */
    public function setLease(array $lease)
    {
        $this->lease = $lease;
        return $this;
    }


}

