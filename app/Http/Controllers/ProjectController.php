<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()->orderBy('id', 'desc')->get();

        return view('projects.index', ['projects' => $projects]);
    }

    public function show(string $slug)
    {
        $project = Project::query()->where('slug', $slug)->firstOrFail();

        return view('projects.show', ['project' => $project]);
    }
}
