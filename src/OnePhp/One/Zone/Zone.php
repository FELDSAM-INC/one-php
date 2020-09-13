<?php

namespace One\Zone;

/**
 * Class representing Zone
 */
class Zone
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
     * @var \One\Zone\Zone\Template $template
     */
    private $template = null;

    /**
     * @var \One\Zone\Zone\ServerPool\Server[] $serverPool
     */
    private $serverPool = null;

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
     * @return \One\Zone\Zone\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * @param \One\Zone\Zone\Template $template
     * @return self
     */
    public function setTemplate(\One\Zone\Zone\Template $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * Adds as server
     *
     * @return self
     * @param \One\Zone\Zone\ServerPool\Server $server
     */
    public function addToServerPool(\One\Zone\Zone\ServerPool\Server $server)
    {
        $this->serverPool[] = $server;
        return $this;
    }

    /**
     * isset serverPool
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServerPool($index)
    {
        return isset($this->serverPool[$index]);
    }

    /**
     * unset serverPool
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServerPool($index)
    {
        unset($this->serverPool[$index]);
    }

    /**
     * Gets as serverPool
     *
     * @return \One\Zone\Zone\ServerPool\Server[]
     */
    public function getServerPool()
    {
        return $this->serverPool;
    }

    /**
     * Sets a new serverPool
     *
     * @param \One\Zone\Zone\ServerPool\Server[] $serverPool
     * @return self
     */
    public function setServerPool(array $serverPool)
    {
        $this->serverPool = $serverPool;
        return $this;
    }


}

