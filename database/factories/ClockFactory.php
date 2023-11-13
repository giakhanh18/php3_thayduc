<?php

namespace Database\Factories;

use App\Models\Clock;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clock>
 */
class ClockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dongho= collect([
            Clock::CL,
            Clock::CB,
        ])->random(1)[0];
        return [
            'image'=>fake()->imageUrl(),
            'ten'=>fake()->name,
            'price'=>'500',
            'price_sale'=>'400',
            'status'=>$dongho,
        ];
    }
}
