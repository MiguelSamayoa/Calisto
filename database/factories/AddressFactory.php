<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Address::class;

    public function definition()
    {
        return [
            'user_id'         => User::inRandomOrder()->first()->id,
            'address_line_1'  => $this->faker->streetAddress,
            'address_line_2'  => $this->faker->optional()->secondaryAddress,
            'city'            => $this->faker->city,
            'state'           => $this->faker->state,
            'postal_code'     => $this->faker->postcode,
            'country'         => $this->faker->country,
            'phone'           => $this->faker->phoneNumber,
            'is_default'      => $this->faker->boolean(50),
        ];
    }
}
