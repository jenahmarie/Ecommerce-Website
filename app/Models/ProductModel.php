<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products'; // Specify the table name if not plural

    protected $fillable = [
        'category',
        'name',
        'image_url',
        'price',
        'discount_price',
        'rating',
    ];

}
