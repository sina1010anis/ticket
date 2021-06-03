<?php

namespace Database\Factories;

use App\Models\sub_product_test;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubProductTestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sub_product_test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_test_id' => rand(1,10),
            'price' => rand(1000,100000),
            'size' => rand(5,8),
        ];
    }
}
