<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $productTypes = ['electronics', 'clothing', 'home', 'jewelry', 'toys'];
        $type = $this->faker->randomElement($productTypes);

        $attributes = null;
        if($type === 'jewelry'){
            $attributes = [
                'material' => $this->faker->randomElement(['gold', 'silver', 'platinum']),
                'gem'      => $this->faker->randomElement(['diamond', 'ruby', 'sapphire', 'emerald']),
            ];
        } else if($type === 'electronics'){
            $attributes = [
                'brand'       => $this->faker->company,
                'model'       => $this->faker->bothify('??-###'),
                'warranty'    => $this->faker->numberBetween(1, 3) . ' years',
            ];
        } else if($type === 'clothing'){
            $attributes = [
                'size'        => $this->faker->randomElement(['S','M','L','XL']),
                'color'       => $this->faker->safeColorName,
                'material'    => $this->faker->randomElement(['cotton', 'polyester', 'wool']),
            ];
        } else {
            $attributes = [
                'specs' => $this->faker->words(3, true),
            ];
        }

        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'product_type'=> $type,
            'name'        => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price'       => $this->faker->randomFloat(2, 10, 500),
            'stock'       => $this->faker->numberBetween(0, 100),
            'attributes'  => $attributes,
        ];
    }
}
