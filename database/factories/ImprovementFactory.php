<?php

namespace Database\Factories;

use App\Models\Improvement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Improvement>
 */
class ImprovementFactory extends Factory
{
    protected $model = Improvement::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weakness' => fake()->sentence(),
            'opportunity' => fake()->sentence(),
            'why_it_matters' => fake()->paragraph(),
            'suggested_action' => fake()->paragraph(),
            'status' => fake()->randomElement(['pending', 'applied']),
        ];
    }
}
