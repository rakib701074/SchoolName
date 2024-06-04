<!DOCTYPE html>
<html lang="en" class="app">
<!-- Mirrored from flatfull.com/themes/note/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 14:35:50 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Students | SchoolWeb</title>
    <meta name="description"
        content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ url('frontend/css/font.css') }}" type="text/css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />> --}}
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

    <link rel="stylesheet" href="{{ url('frontend/js/calendar/bootstrap_calendar.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('frontend/css/app.v1.css') }}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
        <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs"
                data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a> <a
                href="#" class="navbar-brand" data-toggle="fullscreen"><img
                    src="{{ url('frontend/images/logo.png') }}" class="m-r-sm">SCHOOL
                NAME</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i
                    class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
            <li class="hidden-xs">



                <section class="dropdown-menu aside-xl">
                    <section class="panel bg-white">

                    </section>
                </section>
            </li>
            <li class="dropdown hidden-xs">



                <section class="dropdown-menu aside-xl animated fadeInUp">
                    <section class="panel bg-white">
                        <form role="search">
                            <div class="form-group wrapper m-b-none">
                                <div class="input-group"> <input type="text" class="form-control"
                                        placeholder="Search"> <span class="input-group-btn"> <button type="submit"
                                            class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                                    </span> </div>
                            </div>
                        </form>
                    </section>
                </section>
            </li>


            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span
                        class="thumb-sm avatar pull-left"> <img src="{{ url('frontend/images/avatarr.jpg') }}">
                    </span>
                    Students <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span>
                    <li> <a href="#">Settings</a> </li>
                    <li> <a href="{{url('profile')}}">Profile</a> </li>

                    <li class="divider"></li>
                    <li> <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form> </li>
                </ul>
            </li>
        </ul>
    </header>




