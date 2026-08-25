<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured()
            ->ordered()
            ->get();

        $skills = Skill::ordered()
            ->get()
            ->groupBy('category');

        return view('home', compact('featuredProjects', 'skills'));
    }

    public function switchLocale(string $locale)
    {
        if (! in_array($locale, ['fa', 'en'])) {
            abort(404);
        }

        session()->put('locale', $locale);

        return back();
    }
}
