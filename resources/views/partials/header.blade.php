<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>{{ config('app.name', 'PlayLearnKids') }} - {{ $pageTitle }}</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('pages/images/favicon.png') }}" type="image/png">

    <!--====== Slick css ======
    <link rel="stylesheet" href="../pages/css/slick.css"> -->
    <link rel="stylesheet" href="{{ asset('pages/css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/animate.css') }}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/nice-select.css') }}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/jquery.nice-number.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/magnific-popup.css') }}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/bootstrap.min.css') }}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/font-awesome.min.css') }}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/default.css') }}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/style.css') }}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('pages/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('pages/dist/css/index.css') }}">
  
  
</head>

<body>
    <!--====== HEADER PART START ======-->
    <div class="navigation">
            <div class="container">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('pages/dist/images/playlearnkids.png') }}" alt="Logo" id="logo">
                        </a>
                    </div>
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/About')}}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/Courses')}}">Academics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/Blog')}}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/Shop')}}">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/Contact')}}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}">Sign In</a>
                                        <!--<ul class="sub-menu">
                                            <li><a href="{{ asset('pages/users/student/studentSignin.html') }}">Student</a></li>
                                            <li><a href="{{ asset('pages/users/tutor/tutorSignin.html') }}">Tutor</a></li>
                                            <li><a href="{{ asset('pages/users/admin/adminSignin.html') }}">Admin</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                <div class="support-button float-right d-none d-md-block right">
                    <div class="support float-left">
                        <div class="icon">
                            <img src="{{ asset('pages/images/all-icon/support.png') }}" alt="icon">
                        </div>
                        <div class="cont">
                            <p>Need Help? call us free</p>
                            <span>+256 325 5678</span>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>