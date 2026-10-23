<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Gaming ROG',
                'slug' => Str::slug('Laptop Gaming ROG'),
                'description' => 'Laptop gaming high performance dengan RTX 4060',
                'category_id' => 1,
                'price' => 25000000,
                'img' => 'products/laptop.jpg',
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}