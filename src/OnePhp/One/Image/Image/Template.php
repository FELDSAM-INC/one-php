<?php

namespace One\Image\Image;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $vcenterImported
     */
    private $vcenterImported = null;

    /**
     * Gets as vcenterImported
     *
     * @return string
     */
    public function getVcenterImported()
    {
        return $this->vcenterImported;
    }

    /**
     * Sets a new vcenterImported
     *
     * @param string $vcenterImported
     * @return self
     */
    public function setVcenterImported($vcenterImported)
    {
        $this->vcenterImported = $vcenterImported;
        return $this;
    }


}

