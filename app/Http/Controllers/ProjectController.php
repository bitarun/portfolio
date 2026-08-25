<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $categories = ['main', 'specialized', 'practice', 'package'];

        $projects = Project::ordered()->get()->groupBy('category');

        foreach ($categories as $category) {
            if (! $projects->has($category)) {
                $projects[$category] = collect();
            }
        }

        return view('projects', compact('projects', 'categories'));
    }
}
