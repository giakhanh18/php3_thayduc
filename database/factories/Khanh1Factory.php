<?php

namespace Database\Factories;

use App\Models\Khanh1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Khanh>
 */
class Khanh1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->text(),
            'image'=>fake()->imageUrl,
            'descrip'=>fake()->text,
            'status'=>collect([
                Khanh1:: STATUS_DRAFT,
                khanh1:: STATUS_PUBLISHED,
            ])->random(1)[0],
        ];
    }
}
