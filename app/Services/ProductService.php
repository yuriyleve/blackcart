<?php

namespace App\Services;

use App\Models\ShopifyProduct;
use App\Models\Store;
use App\Models\WoocommerceProduct;

class ProductService
{
    public function getProductsByStoreId(int $storeID)
    {
        $store = Store::findOrFail($storeID);

        return $this->getProductsByPlatform($store->platform);
    }

    private function getProductsByPlatform(string $platform)
    {
        switch ($platform) {
            case 'shopify':
                return ShopifyProduct::all();
            case 'woocommerce':
                return WoocommerceProduct::all();
            default:
                throw new \InvalidArgumentException("Unsupported platform: {$platform}");
        }
    }
}
