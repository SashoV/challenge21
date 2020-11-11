<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('home', ['title' => 'Home Page', 'projects' => $projects]);
    }
}
