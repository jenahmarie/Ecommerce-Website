<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category' => 'eyeglasses',
                'name' => 'EG1',
                'image_url' => 'images/eyeglass 3.jpg', // Path to your image
                'price' => 39,
                'discount_price' => 35,
                'rating' => 4.3,
            ],
            [
                'category' => 'sunglasses',
                'name' => 'SG1',
                'image_url' => 'images/eyeglass 2.jpg', // Path to your image
                'price' => 39,
                'discount_price' => 35,
                'rating' => 4.3,
            ],
            [
                'category' => 'eyeglasses',
                'name' => 'EG2',
                'image_url' => 'images/eyeglass 1.jpg', // Path to your image
                'price' => 39,
                'discount_price' => 35,
                'rating' => 4.3,
            ],
            [
                'category' => 'eyeglasses',
                'name' => 'EG3',
                'image_url' => 'images/eyeglass 4.jpg', // Path to your image
                'price' => 39,
                'discount_price' => 35,
                'rating' => 4.3,
            ],
        ]);
    }
}
