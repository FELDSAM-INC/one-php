<?php

namespace One\Group\Group\DefaultGroupQuotas;

/**
 * Class representing ImageQuota
 */
class ImageQuota
{

    /**
     * @var \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image[] $image
     */
    private $image = [
        
    ];

    /**
     * Adds as image
     *
     * @return self
     * @param \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image $image
     */
    public function addToImage(\One\Group\Group\DefaultGroupQuotas\ImageQuota\Image $image)
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
     * @return \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \One\Group\Group\DefaultGroupQuotas\ImageQuota\Image[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }


}

