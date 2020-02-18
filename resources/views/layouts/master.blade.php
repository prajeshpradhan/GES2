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

@yield('content')

@include('layouts.footer')

@yield('modal')

@yield('js')
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