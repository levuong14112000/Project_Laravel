
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/anima.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top "  id="menu">
    <div class="container">
        <div class="navbar-header" >
            <a class="navbar-brand" href="#"><img class="logo-custom" src="{{asset('picture/logo1.png')}}" alt=""  /></a>
        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="#home">HOME</a></li>
                <li><a href="#features-sec">FEATURES</a></li>
                <li><a href="#faculty-sec">FACULTY</a></li>
                <li><a href="#course-sec">COURSES</a></li>
                <li><a href="#contact-sec">CONTACT</a></li>
            </ul>
        </div>

    </div>
</div>
<div style="margin-top: 70px"></div>
@foreach($ds as $n)
    @if($n->course_id == 1)
            <div id="course-sec" class="container-fluid">
        <div class="col"  >
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <h3 class="text-center">{{$n->subject_name}}</h3>
                    <hr />
                    <p class="text-center content-detail">{{($n->content)}} </p>
                </div>
            </div>
        </div>
        </div
        ></div>
    @endif
@endforeach
<div id="footer">
    <div class="text-center">
        <a  href="#">  <img style="width: 30px;" src="{{asset('img/Social/facebook.png')}}" alt="" /> </a>
        <a  href="#"> <img style="width: 30px;" src="{{asset('img/Social/google-plus.png')}}" alt="" /></a>
        <a  href="#"> <img style="width: 30px;" src="{{asset('img/Social/twitter.png')}}" alt="" /></a>
    </div>
    &copy 2014 | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : classes-team</a>
</div>
<script  href="{{ asset('js/bootstrap.js') }}"></script>
<script  href="{{ asset('js/custom.js') }}"></script>
<script  href="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script  href="{{ asset('js/jquery.easing.min.js') }}"></script>
<script  href="{{ asset('js/jquery.flexslider.js') }}"></script>
<script  href="{{ asset('js/scrollReveal.js') }}"></script>
</body>
</html>
