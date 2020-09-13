<?php

namespace One\UserPool\UserPool\Quotas;

/**
 * Class representing ImageQuota
 */
class ImageQuota
{

    /**
     * @var \One\UserPool\UserPool\Quotas\ImageQuota\Image[] $image
     */
    private $image = [
        
    ];

    /**
     * Adds as image
     *
     * @return self
     * @param \One\UserPool\UserPool\Quotas\ImageQuota\Image $image
     */
    public function addToImage(\One\UserPool\UserPool\Quotas\ImageQuota\Image $image)
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
     * @return \One\UserPool\UserPool\Quotas\ImageQuota\Image[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \One\UserPool\UserPool\Quotas\ImageQuota\Image[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }


}

