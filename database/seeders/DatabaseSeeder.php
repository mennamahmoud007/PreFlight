<?php

namespace Database\Seeders;

use App\Models\Analysis;
use App\Models\PitchSection;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $demoDeviceId = '550e8400-e29b-41d4-a716-446655440000';
        Project::factory(10)
            ->create([
                'device_id' => $demoDeviceId,
            ])
            ->each(function ($project) {
                $project->analysis()->create(
                    Analysis::factory()->make()->toArray()
                );

                $project->pitchSection()->createMany(
                    PitchSection::factory(5)->make()->toArray()
                );
            });
    }
}
