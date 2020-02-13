<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edu Consult | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/index.css')}}">

    <link rel="stylesheet" href="{{asset('style/css/animate.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <script src="{{asset('style/js/jquery.min.js')}}"></script>

    <script src='{{asset('style/js/bootstrap.min.js')}}'></script>

    <script src="{{asset('style/js/jquery.livequery.min.js')}}"></script>


</head>
<body>
@include('layouts.header')
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
                                <div class="edit-btn  project-tr">
                                    <span><i class="fa fa-edit"></i> </span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
            </div>
        @endforeach
    </div>
    <div class="edit-btn  project-tr">
        <span>Add New Project <i class="fa fa-plus"></i> </span>
    </div>
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


@include('layouts.footer')
<script>

    window.onscroll = function() {myFunction()};

    var header = document.getElementById("Header");
    var sticky = header.offsetTop + 500;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

</script>
<script>



    var project = document.getElementById('project').offsetTop;

    $(window).scroll(function(){

        if ($(this).scrollTop() > project -50){
            console.log("reached");

            $('.project-title').addClass('delay2s text-focus-in ');
            $('.project-container .nav-tabs').addClass(' text-focus-in ');
            $('.project-container h3').addClass('text-focus-in ');
            $('.project').addClass('swing-in-top-fwd');
        }
//        console.log("count"+count);

    });
</script>
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

</script>
<script>
    $('.main-banner').hover(
            function () {
                $('#cover-edit',this).stop(true,true).fadeIn("fast");
                $(this).toggleClass('open');
                $('#bannerText-edit').show();

            },
            function () {
                $('#cover-edit',this).stop(true,true).fadeOut("fast");
                $(this).toggleClass('open');
                $('#bannerText-edit').hide();


            }

    );
</script>

</body>
</html>