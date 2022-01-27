<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'image' => 'https://loremflickr.com/680/480/dog',
            'description'=> $this->faker->text(),
            'date' => $this->faker->date(),
            'hour'=> $this->faker->time(),
            'current_capacity'=> $this->faker->numberBetween(10,100) ,
            'max_capacity'=> $this->faker->numberBetween(10,100),
            'location_id'=> Location::factory()->create()->id,
     
    
        ];
    }
}
