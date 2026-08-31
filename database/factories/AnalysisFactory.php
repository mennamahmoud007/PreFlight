<?php

namespace Database\Factories;

use App\Models\Analysis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Analysis>
 */
class AnalysisFactory extends Factory
{
    protected $model = Analysis::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => null, // You can set this to a valid project ID if needed

            'problem_score' => fake()->numberBetween(50, 100),
            'target_score' => fake()->numberBetween(50, 100),
            'value_score' => fake()->numberBetween(50, 100),
            'feasability_score' => fake()->numberBetween(50, 100),
            'differentiation_score' => fake()->numberBetween(50, 100),
            'overall_score' => fake()->numberBetween(50, 100),

            'summary' => fake()->paragraph(),

            'strengths' => [
                fake()->sentence(),
                fake()->sentence(),
                fake()->sentence(),
            ],
            'weaknesses' => [
                fake()->sentence(),
                fake()->sentence(),
            ],
            'risks' => [
                fake()->sentence(),
                fake()->sentence(),
            ],
            'critical_questions' => [
                fake()->sentence(),
                fake()->sentence(),
            ],
            'improvements' => [
                fake()->sentence(),
                fake()->sentence(),
            ],
        ];
    }
}
