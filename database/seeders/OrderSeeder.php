<?php

namespace Database\Seeders;

use App\Models\{Order, Product};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Order::factory(10)->hasAttached(
            Product::factory()->count(3),
            ['price' => 1000, 'quantity' => 5]
        )->create();
    }
}
