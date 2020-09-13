<?php

namespace One\User\User;

/**
 * Class representing LoginToken
 */
class LoginToken
{

    /**
     * @var string $token
     */
    private $token = null;

    /**
     * @var int $expirationTime
     */
    private $expirationTime = null;

    /**
     * @var int $egid
     */
    private $egid = null;

    /**
     * Gets as token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets a new token
     *
     * @param string $token
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * Gets as expirationTime
     *
     * @return int
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Sets a new expirationTime
     *
     * @param int $expirationTime
     * @return self
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * Gets as egid
     *
     * @return int
     */
    public function getEgid()
    {
        return $this->egid;
    }

    /**
     * Sets a new egid
     *
     * @param int $egid
     * @return self
     */
    public function setEgid($egid)
    {
        $this->egid = $egid;
        return $this;
    }


}

