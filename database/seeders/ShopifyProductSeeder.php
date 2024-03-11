<?php

namespace Database\Seeders;

use App\Models\ShopifyProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ShopifyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShopifyProduct::insert([
            [
                'name' => 'Classic Tee',
                'prices' => json_encode(['USD' => 29.99, 'EUR' => 25]),
                'inventory_level' => 15,
                'variations' => json_encode(['size' => 'M', 'color' => 'Black']),
                'weight' => 0.5,
            ],
            [
                'name' => 'Running Sneakers',
                'prices' => json_encode(['USD' => 120, 'EUR' => 100]),
                'inventory_level' => 20,
                'variations' => json_encode(['size' => '10', 'color' => 'Blue']),
                'weight' => 1,
            ],
            [
                'name' => 'Baseball Cap',
                'prices' => json_encode(['USD' => 24.99, 'EUR' => 20]),
                'inventory_level' => 30,
                'variations' => json_encode(['size' => 'L', 'color' => 'Red']),
                'weight' => 0.2,
            ],
            [
                'name' => 'Leather Wallet',
                'prices' => json_encode(['USD' => 49.99, 'EUR' => 45]),
                'inventory_level' => 10,
                'variations' => json_encode(['color' => 'Brown']),
                'weight' => 0.3,
            ],
            [
                'name' => 'Smart Watch',
                'prices' => json_encode(['USD' => 199.99, 'EUR' => 175]),
                'inventory_level' => 5,
                'variations' => json_encode(['color' => 'Black']),
                'weight' => 0.25,
            ],
        ]);
    }
}
