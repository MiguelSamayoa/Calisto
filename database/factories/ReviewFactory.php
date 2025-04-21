<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'product_id' => Product::inRandomOrder()->first()->id,
            'user_id'    => User::inRandomOrder()->first()->id,
            'rating'     => $this->faker->numberBetween(1, 5),
            'comment'    => $this->faker->sentence,
        ];
    }
}
