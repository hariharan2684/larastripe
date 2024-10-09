<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::insert([
            [
                'name' => 'Iphone 15',
                'price' => 900.00,
                'description' => 'This is a description for Iphone 15.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S23',
                'price' => 1100.00,
                'description' => 'This is a description for Samsung Galaxy S23.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Google Pixel 7',
                'price' => 600.00,
                'description' => 'This is a description for Google Pixel 7.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
