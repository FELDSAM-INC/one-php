<?php

namespace One\Vntemplate\Vntemplate;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $vnMad
     */
    private $vnMad = null;

    /**
     * Gets as vnMad
     *
     * @return string
     */
    public function getVnMad()
    {
        return $this->vnMad;
    }

    /**
     * Sets a new vnMad
     *
     * @param string $vnMad
     * @return self
     */
    public function setVnMad($vnMad)
    {
        $this->vnMad = $vnMad;
        return $this;
    }


}

