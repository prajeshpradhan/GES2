@extends('layouts.master')
@section('content')
<div id="project" class="project-container">
    <h1>Projects</h1>
    <div class="tab-content">
    <div class="project-detail">
    @foreach($projects as $project)
    <div class="project">
        <img src="{{url('uploads/'.$project->photo)}}" class="img-responsive">
        <h4>{{$project->title}}</h4>
        <p>{{$project->description}}</p>
    </div>
    @endforeach
    </div>
    </div>
    @auth
        <a onclick="addProject()" class="edit-btn  ">
            <span>Add New Project <i class="fa fa-plus"></i> </span>
        </a>
    @endauth
</div>
@endsection

@section('modal')

@auth

    
<div class="modal fade" id="Project" role="dialog">
        <div class="modal-dialog width70" >
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 id="modal-title">Add Project</h3>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="close cl-ed" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="height: auto">
                    <form action="" method="POST" id="project-form" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label class="col-form-label" for="title">Title</label><input class="form-control" type="text" id="title" name="title"><br>
                            </div>
                            <div class="form-group">
                            <label class="col-form-label" for="description">Description</label><textarea class="form-control" id="description" name="description" placeholder="Type Description here"></textarea><br>
                            </div>
                            <div class="form-group">
                            <label class="col-form-label" for="photo">Photo</label><input class="form-control" id="photo" type="file" name="photo"><br>
                            </div>
                            <div class="form-group">
                            <label class="col-form-label" for="categories">Categories</label><select class="form-control" id="categories" name="category" >
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                </select></div>
                    </form>

                </div>
                <div class="modal-footer">
                            <button id="submitFormModal" class="btn btn-primary" type="submit" form="project-form">Submit</button>
                </div>
            </div>

        </div>
    </div>


@endauth

@endsection

@section('js')
<script>

function addProject() {
            $('#project-form').attr('action','{{route('addProject')}}');
            $('.temp').remove();
            $('#modal-title').text('Add Project');
            $('#title').val('');
            $('#description').val('');
            $('#categories').val('');
            $('#submitFormModal').text('Submit');
            displayDiv();
        }
    function displayDiv(){
            $('#Project').modal({show:true});
        }
</script>

@endsection