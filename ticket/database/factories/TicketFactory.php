<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => rand(15000,10000000),
            'city_id_back' => rand(1,20),
            'city_id_next' =>  rand(1,20),
            'way' => rand(1,2),
            'date_went' => '1400-'.rand(1,12).'-'.rand(1,31),
            'date_return' => '1400-'.rand(1,12).'-'.rand(1,31),
            'ticket_type' =>rand(1,2),
            'transportation_type' =>rand(1,3),
        ];
    }
}
