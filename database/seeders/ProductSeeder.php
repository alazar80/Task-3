<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['name' => 'Laptop', 'price' => 1200.00]);
        Product::create(['name' => 'Mouse', 'price' => 25.50]);
        Product::create(['name' => 'Keyboard', 'price' => 45.00]);
    }
}
