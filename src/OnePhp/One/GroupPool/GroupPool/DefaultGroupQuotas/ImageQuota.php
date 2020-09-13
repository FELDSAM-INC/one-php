<?php

namespace One\GroupPool\GroupPool\DefaultGroupQuotas;

/**
 * Class representing ImageQuota
 */
class ImageQuota
{

    /**
     * @var \One\GroupPool\GroupPool\DefaultGroupQuotas\ImageQuota\Image[] $image
     */
    private $image = [
        
    ];

    /**
     * Adds as image
     *
     * @return self
     * @param \One\GroupPool\GroupPool\DefaultGroupQuotas\ImageQuota\Image $image
     */
    public function addToImage(\One\GroupPool\GroupPool\DefaultGroupQuotas\ImageQuota\Image $image)
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
     * @return \One\GroupPool\GroupPool\DefaultGroupQuotas\ImageQuota\Image[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \One\GroupPool\GroupPool\DefaultGroupQuotas\ImageQuota\Image[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }


}

