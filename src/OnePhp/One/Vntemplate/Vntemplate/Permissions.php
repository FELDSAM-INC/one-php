<?php

namespace One\Vntemplate\Vntemplate;

/**
 * Class representing Permissions
 */
class Permissions
{

    /**
     * @var int $ownerU
     */
    private $ownerU = null;

    /**
     * @var int $ownerM
     */
    private $ownerM = null;

    /**
     * @var int $ownerA
     */
    private $ownerA = null;

    /**
     * @var int $groupU
     */
    private $groupU = null;

    /**
     * @var int $groupM
     */
    private $groupM = null;

    /**
     * @var int $groupA
     */
    private $groupA = null;

    /**
     * @var int $otherU
     */
    private $otherU = null;

    /**
     * @var int $otherM
     */
    private $otherM = null;

    /**
     * @var int $otherA
     */
    private $otherA = null;

    /**
     * Gets as ownerU
     *
     * @return int
     */
    public function getOwnerU()
    {
        return $this->ownerU;
    }

    /**
     * Sets a new ownerU
     *
     * @param int $ownerU
     * @return self
     */
    public function setOwnerU($ownerU)
    {
        $this->ownerU = $ownerU;
        return $this;
    }

    /**
     * Gets as ownerM
     *
     * @return int
     */
    public function getOwnerM()
    {
        return $this->ownerM;
    }

    /**
     * Sets a new ownerM
     *
     * @param int $ownerM
     * @return self
     */
    public function setOwnerM($ownerM)
    {
        $this->ownerM = $ownerM;
        return $this;
    }

    /**
     * Gets as ownerA
     *
     * @return int
     */
    public function getOwnerA()
    {
        return $this->ownerA;
    }

    /**
     * Sets a new ownerA
     *
     * @param int $ownerA
     * @return self
     */
    public function setOwnerA($ownerA)
    {
        $this->ownerA = $ownerA;
        return $this;
    }

    /**
     * Gets as groupU
     *
     * @return int
     */
    public function getGroupU()
    {
        return $this->groupU;
    }

    /**
     * Sets a new groupU
     *
     * @param int $groupU
     * @return self
     */
    public function setGroupU($groupU)
    {
        $this->groupU = $groupU;
        return $this;
    }

    /**
     * Gets as groupM
     *
     * @return int
     */
    public function getGroupM()
    {
        return $this->groupM;
    }

    /**
     * Sets a new groupM
     *
     * @param int $groupM
     * @return self
     */
    public function setGroupM($groupM)
    {
        $this->groupM = $groupM;
        return $this;
    }

    /**
     * Gets as groupA
     *
     * @return int
     */
    public function getGroupA()
    {
        return $this->groupA;
    }

    /**
     * Sets a new groupA
     *
     * @param int $groupA
     * @return self
     */
    public function setGroupA($groupA)
    {
        $this->groupA = $groupA;
        return $this;
    }

    /**
     * Gets as otherU
     *
     * @return int
     */
    public function getOtherU()
    {
        return $this->otherU;
    }

    /**
     * Sets a new otherU
     *
     * @param int $otherU
     * @return self
     */
    public function setOtherU($otherU)
    {
        $this->otherU = $otherU;
        return $this;
    }

    /**
     * Gets as otherM
     *
     * @return int
     */
    public function getOtherM()
    {
        return $this->otherM;
    }

    /**
     * Sets a new otherM
     *
     * @param int $otherM
     * @return self
     */
    public function setOtherM($otherM)
    {
        $this->otherM = $otherM;
        return $this;
    }

    /**
     * Gets as otherA
     *
     * @return int
     */
    public function getOtherA()
    {
        return $this->otherA;
    }

    /**
     * Sets a new otherA
     *
     * @param int $otherA
     * @return self
     */
    public function setOtherA($otherA)
    {
        $this->otherA = $otherA;
        return $this;
    }


}

