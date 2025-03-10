<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'name'        => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price'       => $this->faker->randomFloat(2, 10, 500),
            'stock'       => $this->faker->numberBetween(0, 100),
            'material'    => $this->faker->randomElement(['gold', 'silver', 'platinum']),
            'gem'         => $this->faker->randomElement(['diamond', 'ruby', 'sapphire', 'emerald']),
        ];
    }
}
