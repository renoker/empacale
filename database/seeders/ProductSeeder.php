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
        Product::create([
            'name'  => "Maruchan Instant Lunch"
        ]);

        Product::create([
            'name'  => "Maruchan Ramen"
        ]);

        Product::create([
            'name'  => "Maruchan Bowl"
        ]);

        Product::create([
            'name'  => "Maruchan Yakisoba"
        ]);

        Product::create([
            'name'  => "Maruchan Select"
        ]);

        Product::create([
            'name'  => "Ottima Pasta"
        ]);
    }
}
