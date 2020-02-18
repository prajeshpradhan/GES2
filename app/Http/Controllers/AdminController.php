<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addProject(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $category = $request->category;
        $project = new Project();
        $project->title = $title;
        $project->description = $description;
        $project->category_id = $category;
        $project->photo= "noth";
        if($project->save()){
            return back();
        }

    }
}

