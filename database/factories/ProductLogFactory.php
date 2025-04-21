<?php

namespace Database\Factories;

use App\Models\ProductLog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductLogFactory extends Factory
{
    protected $model = ProductLog::class;

    public function definition()
    {
        return [
            'product_id'  => Product::inRandomOrder()->first()->id,
            'changed_by'  => User::inRandomOrder()->first()->id,
            'change_type' => $this->faker->randomElement(['price_update', 'stock_adjustment', 'description_update']),
            'description' => $this->faker->paragraph,
            'changed_at'  => $this->faker->dateTime,
        ];
    }
}
