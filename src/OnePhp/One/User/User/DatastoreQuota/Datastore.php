<?php

namespace One\User\User\DatastoreQuota;

/**
 * Class representing Datastore
 */
class Datastore
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $images
     */
    private $images = null;

    /**
     * @var string $imagesUsed
     */
    private $imagesUsed = null;

    /**
     * @var string $size
     */
    private $size = null;

    /**
     * @var string $sizeUsed
     */
    private $sizeUsed = null;

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
     * Gets as images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets a new images
     *
     * @param string $images
     * @return self
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Gets as imagesUsed
     *
     * @return string
     */
    public function getImagesUsed()
    {
        return $this->imagesUsed;
    }

    /**
     * Sets a new imagesUsed
     *
     * @param string $imagesUsed
     * @return self
     */
    public function setImagesUsed($imagesUsed)
    {
        $this->imagesUsed = $imagesUsed;
        return $this;
    }

    /**
     * Gets as size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param string $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as sizeUsed
     *
     * @return string
     */
    public function getSizeUsed()
    {
        return $this->sizeUsed;
    }

    /**
     * Sets a new sizeUsed
     *
     * @param string $sizeUsed
     * @return self
     */
    public function setSizeUsed($sizeUsed)
    {
        $this->sizeUsed = $sizeUsed;
        return $this;
    }


}

