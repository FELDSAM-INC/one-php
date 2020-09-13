<?php

namespace One\VrouterPool;

/**
 * Class representing VrouterPool
 */
class VrouterPool
{

    /**
     * @var \One\Vrouter[] $vrouter
     */
    private $vrouter = [
        
    ];

    /**
     * Adds as vrouter
     *
     * @return self
     * @param \One\Vrouter $vrouter
     */
    public function addToVrouter(\One\Vrouter $vrouter)
    {
        $this->vrouter[] = $vrouter;
        return $this;
    }

    /**
     * isset vrouter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVrouter($index)
    {
        return isset($this->vrouter[$index]);
    }

    /**
     * unset vrouter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVrouter($index)
    {
        unset($this->vrouter[$index]);
    }

    /**
     * Gets as vrouter
     *
     * @return \One\Vrouter[]
     */
    public function getVrouter()
    {
        return $this->vrouter;
    }

    /**
     * Sets a new vrouter
     *
     * @param \One\Vrouter[] $vrouter
     * @return self
     */
    public function setVrouter(array $vrouter)
    {
        $this->vrouter = $vrouter;
        return $this;
    }


}

