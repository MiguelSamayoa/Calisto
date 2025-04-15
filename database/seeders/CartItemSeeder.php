<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CartItem;

class CartItemsTableSeeder extends Seeder
{
    public function run()
    {
        CartItem::factory()->count(30)->create();
    }
}
