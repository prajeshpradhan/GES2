<?php

namespace App\Http\Controllers;

use App\Category;
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
        return view('layouts.master')->with('categories',$category);
    }
}
