<?php

namespace One\Zone\Zone\ServerPool;

/**
 * Class representing Server
 */
class Server
{

    /**
     * @var string $endpoint
     */
    private $endpoint = null;

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $state
     */
    private $state = null;

    /**
     * @var int $term
     */
    private $term = null;

    /**
     * @var int $votedfor
     */
    private $votedfor = null;

    /**
     * @var int $commit
     */
    private $commit = null;

    /**
     * @var int $logIndex
     */
    private $logIndex = null;

    /**
     * @var int $fedlogIndex
     */
    private $fedlogIndex = null;

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
     * Gets as state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param int $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as term
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * @param int $term
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as votedfor
     *
     * @return int
     */
    public function getVotedfor()
    {
        return $this->votedfor;
    }

    /**
     * Sets a new votedfor
     *
     * @param int $votedfor
     * @return self
     */
    public function setVotedfor($votedfor)
    {
        $this->votedfor = $votedfor;
        return $this;
    }

    /**
     * Gets as commit
     *
     * @return int
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * Sets a new commit
     *
     * @param int $commit
     * @return self
     */
    public function setCommit($commit)
    {
        $this->commit = $commit;
        return $this;
    }

    /**
     * Gets as logIndex
     *
     * @return int
     */
    public function getLogIndex()
    {
        return $this->logIndex;
    }

    /**
     * Sets a new logIndex
     *
     * @param int $logIndex
     * @return self
     */
    public function setLogIndex($logIndex)
    {
        $this->logIndex = $logIndex;
        return $this;
    }

    /**
     * Gets as fedlogIndex
     *
     * @return int
     */
    public function getFedlogIndex()
    {
        return $this->fedlogIndex;
    }

    /**
     * Sets a new fedlogIndex
     *
     * @param int $fedlogIndex
     * @return self
     */
    public function setFedlogIndex($fedlogIndex)
    {
        $this->fedlogIndex = $fedlogIndex;
        return $this;
    }


}

