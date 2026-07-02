<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        session()->forget('is_admin_logged_in');

        $projects = Project::latest()->get();

        return view('home', compact('projects'));
    }
}