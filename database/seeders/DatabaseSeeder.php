<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'name' => 'Gat',
            'image' => 'img/kitkat.jpg',
            'price' => 12000,
        ]);

        \App\Models\Product::create([
            'name' => 'Place Order Box',
            'image' => 'img/placeorder.png',
            'price' => 25000,
        ]);
    }
}
