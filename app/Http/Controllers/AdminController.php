<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        $pic = $request->file('photo');
        $extension = $pic->getClientOriginalExtension();
        Storage::disk('public')->put($pic->getFilename().'.'.$extension, File::get($pic));
        $project->photo= $pic->getFilename().'.'.$extension;
        if($project->save()){
            return back();
        }

    }

    public function showProject($id){
        $project = Project::where('id',$id)->first();
        return response()->json([
            "id"=>$project->id,
            "title"=>$project->title,
            "description"=>$project->description,
            "photo"=>$project->photo,
            "category"=>$project->category_id]);
    }

    public function updateProject($id, Request $request){
        $project = Project::where('id',$id)->first();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->category_id = $request->category;
        $pic = $request->file('photo');
        if($pic) {
            $extension = $pic->getClientOriginalExtension();

            Storage::disk('public')->put($pic->getFilename() . '.' . $extension, File::get($pic));
            $project->photo = $pic->getFilename() . '.' . $extension;
        }
        if($project->update()){
            return back();
        }
    }

    public function deleteProject($id){
        $project = Project::find($id);
        if($project->delete()){
            return back();
        };
    }
}