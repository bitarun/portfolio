<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class CvController extends Controller
{
    public function index()
    {
        $projects = Project::whereIn('category', ['main', 'specialized'])
            ->ordered()
            ->take(5)
            ->get();

        $skills = Skill::ordered()->get()->groupBy('category');

        return view('cv', compact('projects', 'skills'));
    }
}
