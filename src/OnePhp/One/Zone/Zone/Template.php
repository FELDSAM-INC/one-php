<?php

namespace One\Zone\Zone;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $endpoint
     */
    private $endpoint = null;

    /**
     * Gets as endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * @param string $endpoint
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }


}

