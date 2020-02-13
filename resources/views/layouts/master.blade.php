<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edu Consult | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">

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
        @endauth
    </div>
    <div id="cover-edit" class="edit-btn top-right">
        <span>Edit Cover Image <i class="fa fa-edit"></i> </span>
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
            <div class="edit-btn service-tr">
                <span> <i class="fa fa-edit"></i> </span>
            </div>

        </div>
    </div>
</div>
<div id="project" class="project-container">
    <h1 class="head-color section-title"> Our projects</h1>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Cat A</a></li>
        <li><a data-toggle="tab" href="#menu1">Cat B</a></li>
        <li><a data-toggle="tab" href="#menu2">Cat C</a></li>
        <li><a data-toggle="tab" href="#menu3">Cat D</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>project category A</h3>
            <div class="project-detail">
                <div class="project">
                    <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/service-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>project category B</h3>
            <div class="project-detail">
                <div class="project">
                    <img src="images/banner/service-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/service-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/service-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>project category C</h3>
            <div class="project-detail">
                <div class="project">
                    <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
            </div>

        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>project category D</h3>
            <div class="project-detail">
                <div class="project">
                    <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/service-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
                <div class="project">
                    <img src="images/banner/consult-main-banner.jpg" class="img-responsive">
                    <h4>project Title</h4>
                    <p>Brief description on project here. Brief description on project here.</p>
                    <div class="edit-btn  project-tr">
                        <span><i class="fa fa-edit"></i> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edit-btn  project-tr">
        <span>Add New Project <i class="fa fa-plus"></i> </span>
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