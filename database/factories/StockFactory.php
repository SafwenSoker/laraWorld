<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stockName' => $this->faker->word(),
            'stockPrice' => $this->faker->randomFloat(10,0,999.999),
            'stockYear' => $this->faker->randomNumber(4),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
