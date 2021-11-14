<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'unit_price' => $this->faker->randomFloat(3, 0, 999999),
            'msrp' => $this->faker->randomFloat(3),
            'size' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL']),
            'color' => $this->faker->safeColorName(),
            'picture' => $this->faker->imageUrl(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
