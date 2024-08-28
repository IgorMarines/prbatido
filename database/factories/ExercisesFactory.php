<?php

namespace Database\Factories;

use App\Models\Exercises;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExercisesFactory extends Factory
{
    protected $model = Exercises::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->word(),
        ];
    }
}
