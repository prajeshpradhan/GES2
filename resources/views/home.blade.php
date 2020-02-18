@extends('layouts.master')

@section('content')
    <div class="main-banner">
        <div class="main-banner-txt">
            <h1>Place Your Tagline Here</h1>
            <p>Place your supporting text or any brief detail about your consultancy here</p>
            <div class="banner-btn">
                <button class="bn-btn blue-bg left">Button</button>
                <button class="bn-btn red-bg right">Second Button </button>
            </div>
            @auth
                <div id="bannerText-edit" class="edit-btn upw">
                    <span>Edit Banner Text <i class="fa fa-edit"></i> </span>
                </div>
        </div>
        <div id="cover-edit" class="edit-btn top-right">
            <span>Edit Cover Image <i class="fa fa-edit"></i> </span>
            @endauth
        </div>

    </div>

    <div class="services-container">
        <h2 class="section-title white">
            Our Services
        </h2>
        <div class="service-detail">
            <div class="service-block">
                <div class="service-icon">
                    <i class="fa fa-wrench"></i>
                </div>
                <h3>Service Name</h3>
                <p>
                    This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name.
                </p>
                <button class="sercive-btn">Learn More</button>
                @auth
                    <div class="edit-btn service-tr">
                        <span> <i class="fa fa-edit"></i> </span>
                    </div>
                @endauth
            </div>
            <div class="service-block">
                <div class="service-icon">
                    <i class="fa fa-home"></i>
                </div>
                <h3>Service Name</h3>
                <p>
                    This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name.                     This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name.

                </p>
                <button class="sercive-btn">Learn More</button>
                @auth
                    <div class="edit-btn service-tr">
                        <span> <i class="fa fa-edit"></i> </span>
                    </div>
                @endauth

            </div>
            <div class="service-block">
                <div class="service-icon">
                    <i class="fa fa-map"></i>
                </div>
                <h3>Service Name</h3>
                <p>
                    This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name. This section contains brief description of service name.
                </p>
                <button class="sercive-btn">Learn More</button>
                @auth
                    <div class="edit-btn service-tr">
                        <span> <i class="fa fa-edit"></i> </span>
                    </div>
                @endauth
            </div>
        </div>
    </div>
    <div id="project" class="project-container">
        <h1 class="head-color section-title"> Our projects</h1>
        <ul class="nav nav-tabs">
            @foreach($categories as $category)
                @if($loop->first)
                    <li class="active"><a data-toggle="tab" href="#{{$category->id}}">{{$category->name}}</a></li>
                @else
                    <li><a data-toggle="tab" href="#{{$category->id}}">{{$category->name}}</a></li>
                @endif
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach($categories as $category)
                @if($loop->first)
                    <div id="{{$category->id}}" class="tab-pane fade in active">
                        @else
                            <div id="{{$category->id}}" class="tab-pane fade">
                                @endif
                                <h3>project category A</h3>
                                <div class="project-detail">
                                    @foreach($projects as $project)
                                        @if($project->category_id == $category->id)
                                            <div class="project">
                                                <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                                                <h4>{{$project->name}}</h4>
                                                <p>{{$project->description}}</p>
                                                @auth
                                                    <div class="edit-btn  project-tr">
                                                        <span><i class="fa fa-edit"></i> </span>
                                                    </div>
                                                @endauth
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                    </div>
                    @auth
                        <div class="edit-btn  project-tr"><a onclick="displayDiv()">
                            <span>Add New Project <i class="fa fa-plus"></i> </span>
                            </a>
                        </div>
                    @endauth
        </div>
    </div>
    <div id="count" class="count-container">
        <div class="count-wrapper">
            <h2 class="section-title white">Demographics</h2>
            <div class="count-detail">
                <div class="count">
                    <i class="fa fa-file-alt"></i>
                    <p><span class="counter" id="counter1">0</span> <span class="plus">+</span></p>
                    <p>Heading A</p>
                </div>
                <div class="count">
                    <i class="fa fa-eye"></i>
                    <p><span class="counter" id="counter2">0</span> <span class="plus">+</span></p>
                    <p>Heading B</p>
                </div>
                <div class="count">
                    <i class="fa fa-thumbs-up"></i>
                    <p><span class="counter" id="counter3">0</span> <span class="plus">+</span></p>
                    <p>Heading C</p>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('modal')

    <div class="modal fade" id="addProject" role="dialog">
        <div class="modal-dialog width70" >
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Add Project</h3>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="close cl-ed" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="height: auto">
                    <form action="{{route('addProject')}}" method="POST" id="project-form">
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
                            <button class="btn btn-primary" type="submit" form="project-form">Submit</button>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="editProject" role="dialog">
        <div class="modal-dialog width70" >
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Edit Project</h3>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="close cl-ed" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="height: auto">
                    <form action="{{route('addProject')}}" method="POST" id="project-form">
                        @csrf
                        <div class="form-group">
                            <label class="col-form-label" for="title">Title</label><input class="form-control" type="text" id="title" name="title" ><br>
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
                    <button class="btn btn-primary" type="submit" form="project-form">Submit</button>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('js')

    <script>
        function displayDiv(){
            $('#addProject').modal({show:true});
        }
    </script>

@endsection
