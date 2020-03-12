@extends('layouts.master')

@section('title','Home')

@section('css')
<style>
textarea{
    background: transparent;
}

.edit-textarea{
    resize: none;
    border-radius: 5px;
    border: none;
    margin: 0px;
    overflow: hidden;
    width: 300px;
}
</style>
@endsection

@section('content')
    <div class="main-banner" style="background: url('{{asset('storage/cover.jpg')}}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;">
        <div class="main-banner-txt" id="banner-txt">
            <h1>{{$user->tagline}}</h1>
            <p>{{$user->subtag}}</p>
            <div class="banner-btn">
                <button class="bn-btn blue-bg left">Button</button>
                <button class="bn-btn red-bg right">Second Button </button>
            </div>
            @auth
                <div onclick="displayDiv()" id="bannerText-edit" class="edit-btn upw">
                    <span>Edit Banner Text <i class="fa fa-edit"></i> </span>
                </div>
        </div>
        <div class="main-banner-txt" id="banner-txt-edit" style="display: none">
            <form action="{{route('editTagline')}}" method="post">
            @csrf
            <h1>
            <textarea name="tagline" class="edit-textarea" >{{$user->tagline}}</textarea>
            </h1>
            <p>
            <textarea name="subtag" class="edit-textarea">{{$user->subtag}}</textarea>
            </p>
            <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div onclick="displayCoverModal()" id="cover-edit" class="edit-btn top-right">
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
                        <h3>Project {{$category->name}}</h3>
                        <div class="project-detail">
                        @foreach($projects as $project)
                            @if($project->category_id == $category->id)
                                <div class="project">
                                    <img src="{{url('uploads/'.$project->photo)}}" class="img-responsive">
                                    <h4>{{$project->title}}</h4>
                                    <p>{{$project->description}}</p>
                                    @auth
                                        <a onclick="editProject({{$project->id}})" class="edit-btn  project-tr">
                                            <span><i class="fa fa-edit"></i> </span>
                                        </a>
                                    @endauth
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
            @endforeach
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
    @auth

    <div class="modal fade" id="coverUpdate" role="dialog">
        <div class="modal-dialog width70" >
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Update Cover Picture</h3>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="close cl-ed" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body" style="height: auto">
                    <div class="" style="border: 1px solid lightgray; padding: 10px; box-shadow: 0 10px 15px rgba(0,0,0,0.6)">
                        <form action="{{route('addCoverImage')}}" method="POST" id="submit-cover" enctype="multipart/form-data">
                        @csrf
                        <div class="upl-new-container">
                            <div class="upl-innner">
                                <input type="file" name="image" id="banner-update" onchange="addclearfile()" style="width:100%;height:100%">
                                <div id="clear-file">

                                </div>
                            </div>
                        </div>
                        <!-- <div class="existing-container">
                            <h3>Choose existing image:</h3> 
                            <div class="exsisting-opt">
                                
                            </div>
                            <input type="submit" onclick="return checkform()" id="banner-submit" class="btn update-button width100" name="submit-banner" value="Submit" >
                        </div> -->
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submitFormModal" class="btn btn-primary" type="submit" form="submit-cover">Submit</button>
                </div>
            </div>

        </div>
    </div>
    @endauth



@endsection

@section('js')

    <script>
    
    $(window).scroll(testScroll);
    var viewed = false;

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        console.log("here");
        console.log(elemTop);
        console.log(elemBottom);

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function testScroll() {
        var test= isScrolledIntoView($(".count-container"));
        console.log("test"+test+"test");
        if (test && !viewed) {
            viewed = true;

            console.log("there");
            $('#counter1').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 5
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            $('#counter2').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 10
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            $('#counter3').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: 50
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        }
    }
        
@auth
        function addclearfile() {
            $('#clear-file').empty();
            $('#clear-file').append('<p onclick="clearfile()" style="position:absolute;right:15px;top:10px">Clear File</p>');
        }


        
        function displayCoverModal(){
            $('#coverUpdate').modal({show:true});
        }

        function clearfile() {
        $('input[name=banner]').val('');
        $('#clear-file').empty();
    }

        function displayDiv(){
            $('#banner-txt-edit').show();
            $('#banner-txt').hide();
        }

       

        function editProject(id) {
            $.getJSON('{{route('project')}}/'+id,function (response) {
                // console.log(response.title);
                $('#project-form').attr('action','{{route('updateProject')}}/'+id);
                $('.temp').remove();
                $('#project-form').prepend('<input class="temp" type="hidden" name="_method" value="PUT"/>');
                $('#modal-title').text('Edit Project');
                $('#title').val(response.title);
                $('#description').val(response.description);
                $('#categories').val(response.category);
                $('#submitFormModal').text('Update');
                $('#Project .modal-dialog .modal-content .modal-header').append('<form class="temp" id="project-delete" method="POST" action="{{route('deleteProject')}}/'+id+'">@csrf @method('delete')');
                $('#Project .modal-dialog .modal-content .modal-footer').append('<button class="btn btn-danger temp" type="submit" form="project-delete">Delete</button>');
                displayDiv();
            })
        }
@endauth
    </script>

@endsection
