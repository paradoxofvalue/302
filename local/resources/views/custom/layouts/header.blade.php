<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    {{--<meta name="author" content="Dwij IT Solutions">--}}

    <meta property="og:title" content="{{ LAConfigs::getByKey('sitename') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ LAConfigs::getByKey('site_description') }}" />

    <meta property="og:url" content="http://laraadmin.com/" />
    <meta property="og:sitename" content="laraAdmin" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/LaraAdmin-600x600.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    {{--<meta name="twitter:site" content="@laraadmin" />--}}
    {{--<meta name="twitter:creator" content="@laraadmin" />--}}

    <title>{{ LAConfigs::getByKey('sitename') }}</title>

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ URL::asset('custom-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('custom-assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('custom-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('custom-assets/css/jquery.bxslider.css') }}">
    <script src="{{ URL::asset('custom-assets/js/modernizr.custom.js') }}"></script>
    <!--[if IE]>
    <script src="{{ URL::asset('http://html5shiv.googlecode.com/svn/trunk/html5.js') }}"></script>
    <![endif]-->
</head>
<body>
<div class="loader">
    <div class="project-loader">
        <div class="bubblingG">
            <span id="bubblingG_1"></span>
            <span id="bubblingG_2"></span>
            <span id="bubblingG_3"></span>
        </div>
    </div>
</div>
<div class="loading" id="wrapper">
    <!-- Fixed navbar -->
    <div class="navbar navbar-smak navbar-fixed-top " id="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
                <a class="navbar-brand animate" href="#"><img src="{{ URL::asset('custom-assets/img/logo.png') }}" alt="logo1"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right animate">
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#services">Должности</a></li>
                    {{--<li><a href="#portfolio">Учебные планы</a></li>--}}
                    {{--<li><a href="#about">Кем работать</a></li>--}}
                    <li><a href="#clients">Предподаватели</a></li>
                    <li><a href="#spec">Специальности</a></li>
                    <li><a href="#contact">Контакты</a></li>
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<!--<li><a href="{{ url('/register') }}">Register</a></li>-->--}}
                        {{--@else--}}
                            {{--<li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>