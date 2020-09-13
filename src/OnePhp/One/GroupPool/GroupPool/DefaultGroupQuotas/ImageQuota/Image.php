<?php

namespace One\GroupPool\GroupPool\DefaultGroupQuotas\ImageQuota;

/**
 * Class representing Image
 */
class Image
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $rvms
     */
    private $rvms = null;

    /**
     * @var string $rvmsUsed
     */
    private $rvmsUsed = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as rvms
     *
     * @return string
     */
    public function getRvms()
    {
        return $this->rvms;
    }

    /**
     * Sets a new rvms
     *
     * @param string $rvms
     * @return self
     */
    public function setRvms($rvms)
    {
        $this->rvms = $rvms;
        return $this;
    }

    /**
     * Gets as rvmsUsed
     *
     * @return string
     */
    public function getRvmsUsed()
    {
        return $this->rvmsUsed;
    }

    /**
     * Sets a new rvmsUsed
     *
     * @param string $rvmsUsed
     * @return self
     */
    public function setRvmsUsed($rvmsUsed)
    {
        $this->rvmsUsed = $rvmsUsed;
        return $this;
    }


}

