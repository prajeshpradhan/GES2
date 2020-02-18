<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $projects = Project::all();
        $data = [
            "categories"=>$category,
            "projects"=>$projects,
        ];
        return view('home')->with($data);
    }
}
