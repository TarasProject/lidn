<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $projects = Project::get();
        $attributes = Attribute::get();
        return view('index', compact('projects','attributes'));
    }
}
