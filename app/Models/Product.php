<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'price',
        'sale_price',
        'stock',
        'in_stock',
        'sku',
        'image',
        'is_active',
        // 'category_id',
    ];

    protected $casts = [
        'price' => 'float',
        'sale_price' => 'float',
        'in_stock' => 'boolean',
        'is_active' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // public function category() {
    //     return $this->belongsTo(Category::class);
    // }

}
