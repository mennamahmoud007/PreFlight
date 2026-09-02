<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnalysisResource;
use App\Models\Project;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    // POST api/projects/{project}/analysis
    public function store(Request $request, Project $project)
    {
        $project = Project::where('device_id', $request->device_id)
            ->findOrFail($project->id);

        $analysis = $project->analysis()->updateOrCreate(
            [],
            ['project_id' => $project->id]
        );
        if (! $analysis) {
            return response()->json([
                'message' => 'Analysis not found for this project.',
            ], 404);
        }

        $project->update([
            'status' => 'analyzed',
            'score' => $analysis->overall_score,
            'last_checked_at' => now(),
        ]);

        return new AnalysisResource($analysis);
    }
}
