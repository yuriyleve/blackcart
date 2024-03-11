<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopifyProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prices',
        'inventory_level',
        'variations',
        'weight',
    ];

    protected $casts = [
        'prices' => 'array',
        'variations' => 'array',
    ];
}
