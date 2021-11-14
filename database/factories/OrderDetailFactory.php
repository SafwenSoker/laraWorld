<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::get('id')->random(),
            'order_id' => Order::get('id')->random(),
            'price' => $this->faker->randomFloat(3, 0, 999999),
            'quantity' => $this->faker->randomDigit()
        ];
    }
}
