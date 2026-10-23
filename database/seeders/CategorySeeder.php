<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Makanan & Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Olahraga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}