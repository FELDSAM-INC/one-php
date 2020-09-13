<?php

namespace One\UserPool\UserPool;

/**
 * Class representing User
 */
class User
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var int $gid
     */
    private $gid = null;

    /**
     * @var int[] $groups
     */
    private $groups = null;

    /**
     * @var string $gname
     */
    private $gname = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $password
     */
    private $password = null;

    /**
     * @var string $authDriver
     */
    private $authDriver = null;

    /**
     * @var int $enabled
     */
    private $enabled = null;

    /**
     * @var \One\UserPool\UserPool\User\LoginToken[] $loginToken
     */
    private $loginToken = [
        
    ];

    /**
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as gid
     *
     * @return int
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Sets a new gid
     *
     * @param int $gid
     * @return self
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToGroups($id)
    {
        $this->groups[] = $id;
        return $this;
    }

    /**
     * isset groups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroups($index)
    {
        return isset($this->groups[$index]);
    }

    /**
     * unset groups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroups($index)
    {
        unset($this->groups[$index]);
    }

    /**
     * Gets as groups
     *
     * @return int[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets a new groups
     *
     * @param int[] $groups
     * @return self
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * Gets as gname
     *
     * @return string
     */
    public function getGname()
    {
        return $this->gname;
    }

    /**
     * Sets a new gname
     *
     * @param string $gname
     * @return self
     */
    public function setGname($gname)
    {
        $this->gname = $gname;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as authDriver
     *
     * @return string
     */
    public function getAuthDriver()
    {
        return $this->authDriver;
    }

    /**
     * Sets a new authDriver
     *
     * @param string $authDriver
     * @return self
     */
    public function setAuthDriver($authDriver)
    {
        $this->authDriver = $authDriver;
        return $this;
    }

    /**
     * Gets as enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Sets a new enabled
     *
     * @param int $enabled
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Adds as loginToken
     *
     * @return self
     * @param \One\UserPool\UserPool\User\LoginToken $loginToken
     */
    public function addToLoginToken(\One\UserPool\UserPool\User\LoginToken $loginToken)
    {
        $this->loginToken[] = $loginToken;
        return $this;
    }

    /**
     * isset loginToken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoginToken($index)
    {
        return isset($this->loginToken[$index]);
    }

    /**
     * unset loginToken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoginToken($index)
    {
        unset($this->loginToken[$index]);
    }

    /**
     * Gets as loginToken
     *
     * @return \One\UserPool\UserPool\User\LoginToken[]
     */
    public function getLoginToken()
    {
        return $this->loginToken;
    }

    /**
     * Sets a new loginToken
     *
     * @param \One\UserPool\UserPool\User\LoginToken[] $loginToken
     * @return self
     */
    public function setLoginToken(array $loginToken)
    {
        $this->loginToken = $loginToken;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \OnePhp\AnyType
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \OnePhp\AnyType $template
     * @return self
     */
    public function setTemplate(\OnePhp\AnyType $template)
    {
        $this->template = $template;
        return $this;
    }


}

