<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnalysisResource;
use App\Models\Project;
use Illuminate\Http\Request;

class StressTestController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $project = Project::where('device_id', $request->device_id)
            ->findOrFail($project->id);

        $analysis = $project->analysis;
        if (! $analysis) {
            return response()->json([
                'message' => 'Stress test not found for this project.',
            ], 404);
        }

        $project->update([
            'status' => 'stress-tested',
            'last_checked_at' => now(),
        ]);

        return new AnalysisResource($analysis);

    }
}
