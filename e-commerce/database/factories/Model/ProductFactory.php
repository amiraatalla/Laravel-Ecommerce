<?php

namespace Database\Factories\Model;

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
            'name' => $this->faker->word,
            'details' => $this->faker->paragraph,
            'price' => $this->numberBetween(100, 1000),
            'stock' => $this->faker->randomDigit,
            'discount' => $this->numberBetween(2, 30),
        ];
    }
}
