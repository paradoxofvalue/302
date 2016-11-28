<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smak -Free Single page html template by GraphBerry</title>
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>