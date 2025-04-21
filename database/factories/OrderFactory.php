<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;
use App\Models\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id'             => User::inRandomOrder()->first()->id,
            'shipping_address_id' => Address::inRandomOrder()->first()->id,
            'total'               => $this->faker->randomFloat(2, 20, 1000),
            'status'              => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
        ];
    }
}
