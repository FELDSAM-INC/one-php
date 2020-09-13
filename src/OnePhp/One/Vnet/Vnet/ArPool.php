<?php

namespace One\Vnet\Vnet;

/**
 * Class representing ArPool
 */
class ArPool
{

    /**
     * @var \One\Vnet\Vnet\ArPool\Ar[] $ar
     */
    private $ar = [
        
    ];

    /**
     * Adds as ar
     *
     * @return self
     * @param \One\Vnet\Vnet\ArPool\Ar $ar
     */
    public function addToAr(\One\Vnet\Vnet\ArPool\Ar $ar)
    {
        $this->ar[] = $ar;
        return $this;
    }

    /**
     * isset ar
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAr($index)
    {
        return isset($this->ar[$index]);
    }

    /**
     * unset ar
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAr($index)
    {
        unset($this->ar[$index]);
    }

    /**
     * Gets as ar
     *
     * @return \One\Vnet\Vnet\ArPool\Ar[]
     */
    public function getAr()
    {
        return $this->ar;
    }

    /**
     * Sets a new ar
     *
     * @param \One\Vnet\Vnet\ArPool\Ar[] $ar
     * @return self
     */
    public function setAr(array $ar)
    {
        $this->ar = $ar;
        return $this;
    }


}

