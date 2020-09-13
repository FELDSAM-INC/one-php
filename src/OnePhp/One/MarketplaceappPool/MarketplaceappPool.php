<?php

namespace One\MarketplaceappPool;

/**
 * Class representing MarketplaceappPool
 */
class MarketplaceappPool
{

    /**
     * @var \One\Marketplaceapp[] $marketplaceapp
     */
    private $marketplaceapp = [
        
    ];

    /**
     * Adds as marketplaceapp
     *
     * @return self
     * @param \One\Marketplaceapp $marketplaceapp
     */
    public function addToMarketplaceapp(\One\Marketplaceapp $marketplaceapp)
    {
        $this->marketplaceapp[] = $marketplaceapp;
        return $this;
    }

    /**
     * isset marketplaceapp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketplaceapp($index)
    {
        return isset($this->marketplaceapp[$index]);
    }

    /**
     * unset marketplaceapp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketplaceapp($index)
    {
        unset($this->marketplaceapp[$index]);
    }

    /**
     * Gets as marketplaceapp
     *
     * @return \One\Marketplaceapp[]
     */
    public function getMarketplaceapp()
    {
        return $this->marketplaceapp;
    }

    /**
     * Sets a new marketplaceapp
     *
     * @param \One\Marketplaceapp[] $marketplaceapp
     * @return self
     */
    public function setMarketplaceapp(array $marketplaceapp)
    {
        $this->marketplaceapp = $marketplaceapp;
        return $this;
    }


}

