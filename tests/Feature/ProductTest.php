<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
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
