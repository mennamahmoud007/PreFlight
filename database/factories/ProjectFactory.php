<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement([
            'checking',
            'analyzed',
            'stress_tested',
            'improving',
            'pitching',
            'launch_ready',
        ]);

        return [
            'device_id' => fake()->uuid(),
            'name' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'target_audience' => fake()->sentence(3),
            'industry' => fake()->randomElement([
                'Technology',
                'Healthcare',
                'FinTech',
                'Education',
                'Food',
            ]),
            'status' => $status,
            'score' => $status === 'checking'
             ? null
            : fake()->numberBetween(50, 95),
            'last_checked_at' => $status === 'checking'
             ? null
            : fake()->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
