<?php

namespace Database\Factories;

use App\Models\product_test;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product_test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'des' => $this->faker->text,
            'price' => rand(1000,100000),
            'size' => rand(5,8),
        ];
    }
}
