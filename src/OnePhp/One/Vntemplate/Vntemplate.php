<?php

namespace One\Vntemplate;

/**
 * Class representing Vntemplate
 */
class Vntemplate
{

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var int $uid
     */
    private $uid = null;

    /**
     * @var int $gid
     */
    private $gid = null;

    /**
     * @var string $uname
     */
    private $uname = null;

    /**
     * @var string $gname
     */
    private $gname = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \One\Vntemplate\Vntemplate\Lock $lock
     */
    private $lock = null;

    /**
     * @var \One\Vntemplate\Vntemplate\Permissions $permissions
     */
    private $permissions = null;

    /**
     * @var int $regtime
     */
    private $regtime = null;

    /**
     * @var \One\Vntemplate\Vntemplate\Template $template
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
     * Gets as uid
     *
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * @param int $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
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
     * Gets as uname
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Sets a new uname
     *
     * @param string $uname
     * @return self
     */
    public function setUname($uname)
    {
        $this->uname = $uname;
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
     * Gets as lock
     *
     * @return \One\Vntemplate\Vntemplate\Lock
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Sets a new lock
     *
     * @param \One\Vntemplate\Vntemplate\Lock $lock
     * @return self
     */
    public function setLock(\One\Vntemplate\Vntemplate\Lock $lock)
    {
        $this->lock = $lock;
        return $this;
    }

    /**
     * Gets as permissions
     *
     * @return \One\Vntemplate\Vntemplate\Permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * @param \One\Vntemplate\Vntemplate\Permissions $permissions
     * @return self
     */
    public function setPermissions(\One\Vntemplate\Vntemplate\Permissions $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Gets as regtime
     *
     * @return int
     */
    public function getRegtime()
    {
        return $this->regtime;
    }

    /**
     * Sets a new regtime
     *
     * @param int $regtime
     * @return self
     */
    public function setRegtime($regtime)
    {
        $this->regtime = $regtime;
        return $this;
    }

    /**
     * Gets as template
     *
     * @return \One\Vntemplate\Vntemplate\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \One\Vntemplate\Vntemplate\Template $template
     * @return self
     */
    public function setTemplate(\One\Vntemplate\Vntemplate\Template $template)
    {
        $this->template = $template;
        return $this;
    }


}

