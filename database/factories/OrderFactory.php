<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::get('id')->random(),
            'order_date' => $this->faker->date(),
            'total_amount' => $this->faker->randomFloat(3, 0 , 999999),
            'tax_rate' => $this->faker->randomFloat(2,0,30),
            'tax_amount' => $this->faker->randomFloat(3, 0 ,999999),
        ];
    }
}
