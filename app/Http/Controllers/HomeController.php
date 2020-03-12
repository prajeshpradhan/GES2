<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use App\User;
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
        $categories = Category::all();
        $projects = Project::all();
        $data = [
            "user"=>User::findOrFail(1),
            "categories"=>$categories,
            "projects"=>$projects,
        ];
        return view('home')->with($data);
    }

    public function services()
    {
        // $services = Service::all();
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = Project::all();
        $categories = Category::all();
        $data = [
            'projects'=>$projects,
            'categories'=>$categories,
        ];
        return view('projects')->with($data);
    }

}
