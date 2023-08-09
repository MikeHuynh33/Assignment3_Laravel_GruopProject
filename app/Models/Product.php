<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products_list';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock_quantity',
        'model',
        'brand',
        'rating',
        'reviews',
    ];
}
