<?php

namespace One\GroupPool\GroupPool;

/**
 * Class representing Group
 */
class Group
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \OnePhp\AnyType $template
     */
    private $template = null;

    /**
     * @var int[] $users
     */
    private $users = null;

    /**
     * @var int[] $admins
     */
    private $admins = null;

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

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToUsers($id)
    {
        $this->users[] = $id;
        return $this;
    }

    /**
     * isset users
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsers($index)
    {
        return isset($this->users[$index]);
    }

    /**
     * unset users
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsers($index)
    {
        unset($this->users[$index]);
    }

    /**
     * Gets as users
     *
     * @return int[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * @param int[] $users
     * @return self
     */
    public function setUsers(array $users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * Adds as id
     *
     * @return self
     * @param int $id
     */
    public function addToAdmins($id)
    {
        $this->admins[] = $id;
        return $this;
    }

    /**
     * isset admins
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdmins($index)
    {
        return isset($this->admins[$index]);
    }

    /**
     * unset admins
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdmins($index)
    {
        unset($this->admins[$index]);
    }

    /**
     * Gets as admins
     *
     * @return int[]
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Sets a new admins
     *
     * @param int[] $admins
     * @return self
     */
    public function setAdmins(array $admins)
    {
        $this->admins = $admins;
        return $this;
    }


}

