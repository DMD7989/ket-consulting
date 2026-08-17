<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->where('is_published', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('created_at')
            ->get();

        return view('realisations', ['projects' => $projects]);
    }
}
