<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testGetProductsByStoreId()
    {
        $storeID = 1;

        $response = $this->getJson("/stores/{$storeID}/products");

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'Products found',
            ])
            ->assertJsonStructure([
                'status',
                'message',
                'result' => [
                    '*' => [
                        'id',
                        'name',
                    ],
                ],
            ]);
    }
}
