<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(int $storeID)
    {
        $products = $this->productService->getProductsByStoreId($storeID);

        return response()->json([
            'status' => true,
            'message' => 'Products found',
            'result' => $products
        ]);
    }
}
