<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $trangthai = collect([
            Student::CO,
            Student::KO,
        ])->random(1)[0];
        return [
            'tenlop' => 'WD18104',
            'masv'=>'ms123',
            'tensv'=>fake()->name,
            'image'=>fake()->imageUrl,
            'status'=>$trangthai,
        ];
    }
}
