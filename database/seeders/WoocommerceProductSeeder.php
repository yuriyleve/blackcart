<?php

namespace Database\Seeders;

use App\Models\WoocommerceProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WoocommerceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WoocommerceProduct::insert([
            [
                'name' => 'Yoga Mat',
                'prices' => json_encode(['USD' => 59.99, 'EUR' => 50]),
                'inventory_level' => 25,
                'variations' => json_encode(['color' => 'Green']),
                'weight' => 1.2,
            ],
            [
                'name' => 'Water Bottle',
                'prices' => json_encode(['USD' => 19.99, 'EUR' => 17]),
                'inventory_level' => 50,
                'variations' => json_encode(['color' => 'Blue']),
                'weight' => 0.4,
            ],
            [
                'name' => 'Backpack',
                'prices' => json_encode(['USD' => 69.99, 'EUR' => 60]),
                'inventory_level' => 20,
                'variations' => json_encode(['color' => 'Grey']),
                'weight' => 0.9,
            ],
            [
                'name' => 'Sunglasses',
                'prices' => json_encode(['USD' => 89.99, 'EUR' => 80]),
                'inventory_level' => 40,
                'variations' => json_encode(['color' => 'Black']),
                'weight' => 0.1,
            ],
            [
                'name' => 'Denim Jeans',
                'prices' => json_encode(['USD' => 79.99, 'EUR' => 70]),
                'inventory_level' => 10,
                'variations' => json_encode(['size' => '32', 'color' => 'Navy']),
                'weight' => 1.5,
            ],
        ]);
    }
}
