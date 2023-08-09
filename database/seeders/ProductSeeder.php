<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Fake Data
        $products = [
            [
                'name' => 'Apple 12',
                'description' =>
                    "he iPhone 12 features a stunning Super Retina OLED display and Face ID recognition technology. It's powered by the A11 Bionic chip and runs on iOS.",
                'price' => 1799.99,
                'image' => 'product1.jpg',
                'stock_quantity' => 50,
                'model' => 'ABC123',
                'brand' => 'Brand A',
                'rating' => 4,
                'reviews' => 25,
            ],
            [
                'name' => 'Apple 13',
                'description' =>
                    "he iPhone 13 features a stunning Super Retina OLED display and Face ID recognition technology. It's powered by the A11 Bionic chip and runs on iOS.",
                'price' => 1549.5,
                'image' => 'product2.jpg',
                'stock_quantity' => 30,
                'model' => 'XYZ456',
                'brand' => 'Brand B',
                'rating' => 5,
                'reviews' => 42,
            ],
            [
                'name' => 'Apple 14',
                'description' =>
                    "he iPhone 14 features a stunning Super Retina OLED display and Face ID recognition technology. It's powered by the A11 Bionic chip and runs on iOS.",
                'price' => 1199.75,
                'image' => 'product3.jpg',
                'stock_quantity' => 40,
                'model' => 'DEF789',
                'brand' => 'Brand C',
                'rating' => 3,
                'reviews' => 10,
            ],
            [
                'name' => 'Apple 15',
                'description' =>
                    "he iPhone 14 features a stunning Super Retina OLED display and Face ID recognition technology. It's powered by the A11 Bionic chip and runs on iOS.",
                'price' => 1299.75,
                'image' => 'product3.jpg',
                'stock_quantity' => 60,
                'model' => 'DEF789',
                'brand' => 'Brand C',
                'rating' => 1,
                'reviews' => 10,
            ],
        ];

        DB::table('products_list')->insert($products);
    }
}
