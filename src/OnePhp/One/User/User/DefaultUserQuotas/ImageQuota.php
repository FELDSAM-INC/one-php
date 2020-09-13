<?php

namespace One\User\User\DefaultUserQuotas;

/**
 * Class representing ImageQuota
 */
class ImageQuota
{

    /**
     * @var \One\User\User\DefaultUserQuotas\ImageQuota\Image[] $image
     */
    private $image = [
        
    ];

    /**
     * Adds as image
     *
     * @return self
     * @param \One\User\User\DefaultUserQuotas\ImageQuota\Image $image
     */
    public function addToImage(\One\User\User\DefaultUserQuotas\ImageQuota\Image $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * @return \One\User\User\DefaultUserQuotas\ImageQuota\Image[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \One\User\User\DefaultUserQuotas\ImageQuota\Image[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }


}

