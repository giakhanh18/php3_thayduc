<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image'=>fake()->imageUrl(),
            'name'=>fake()->name,
            'date'=>fake()->date,
            'gmail'=>'abc@gmail.com',
            'phone'=>fake()->phoneNumber,
            'country'=>fake()->country,
            'oder'=>'1',
        ];
    }
}
