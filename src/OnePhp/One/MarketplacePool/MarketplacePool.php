<?php

namespace One\MarketplacePool;

/**
 * Class representing MarketplacePool
 */
class MarketplacePool
{

    /**
     * @var \One\Marketplace[] $marketplace
     */
    private $marketplace = [
        
    ];

    /**
     * Adds as marketplace
     *
     * @return self
     * @param \One\Marketplace $marketplace
     */
    public function addToMarketplace(\One\Marketplace $marketplace)
    {
        $this->marketplace[] = $marketplace;
        return $this;
    }

    /**
     * isset marketplace
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketplace($index)
    {
        return isset($this->marketplace[$index]);
    }

    /**
     * unset marketplace
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketplace($index)
    {
        unset($this->marketplace[$index]);
    }

    /**
     * Gets as marketplace
     *
     * @return \One\Marketplace[]
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * Sets a new marketplace
     *
     * @param \One\Marketplace[] $marketplace
     * @return self
     */
    public function setMarketplace(array $marketplace)
    {
        $this->marketplace = $marketplace;
        return $this;
    }


}

