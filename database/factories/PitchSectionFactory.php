<?php

namespace Database\Factories;

use App\Models\PitchSection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PitchSection>
 */
class PitchSectionFactory extends Factory
{
    protected $model = PitchSection::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => null, // You can set this to a valid project ID if needed
            'section_type' => fake()->randomElement(['problem', 'solution', 'target_audience', 'value_proposition', 'business_model']),
            'content' => fake()->paragraph(),
        ];
    }
}
