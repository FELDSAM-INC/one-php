<?php

namespace One\VntemplatePool;

/**
 * Class representing VntemplatePool
 */
class VntemplatePool
{

    /**
     * @var \One\Vntemplate[] $vntemplate
     */
    private $vntemplate = [
        
    ];

    /**
     * Adds as vntemplate
     *
     * @return self
     * @param \One\Vntemplate $vntemplate
     */
    public function addToVntemplate(\One\Vntemplate $vntemplate)
    {
        $this->vntemplate[] = $vntemplate;
        return $this;
    }

    /**
     * isset vntemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVntemplate($index)
    {
        return isset($this->vntemplate[$index]);
    }

    /**
     * unset vntemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVntemplate($index)
    {
        unset($this->vntemplate[$index]);
    }

    /**
     * Gets as vntemplate
     *
     * @return \One\Vntemplate[]
     */
    public function getVntemplate()
    {
        return $this->vntemplate;
    }

    /**
     * Sets a new vntemplate
     *
     * @param \One\Vntemplate[] $vntemplate
     * @return self
     */
    public function setVntemplate(array $vntemplate)
    {
        $this->vntemplate = $vntemplate;
        return $this;
    }


}

