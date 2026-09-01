<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // get api/projects
    public function index(Request $request)
    {
        $query = Project::where('device_id', $request->device_id);

        if ($request->filled('search')) {
            $query->where(function ($query) use ($request) {
                $query->where('name', 'like', '%'.$request->search.'%')
                    ->orWhere('description', 'like', '%'.$request->search.'%');
            });
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $projects = $query->latest()->get();

        return ProjectResource::collection($projects);

    }

    /**
     * Store a newly created resource in storage.
     */
    // post api/projects
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // get api/projects/{project}
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // patch api/projects/{project}
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // delete api/projects/{project}
    public function destroy(string $id)
    {
        //
    }
}
