@extends('layout.master')

@section('content')


{{-- @include('post.header') --}}
<link rel="stylesheet" href="assets/css/post.css">

<title>Website Details Page</title>


    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/">BookXchange</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="background-image"></div>
    <div class="container">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous">
        <div class="box">

            <h3>Total Users</h3>
            <p><i class="fas fa-users icon users-icon"></i>500</p>
        </div>
        <div class="box">
            <h3>Total Posts</h3>
            <p><i class="fas fa-file-alt icon posts-icon"></i>1000</p>
        </div>
        <div class="box">
            <h3>Available Locations</h3>
            <p><i class="fas fa-map-marker-alt icon locations-icon"></i>50</p>
        </div>
        <div class="box">
            <h3>Banned Users</h3>
            <p><i class="fas fa-arrow-down icon decreasing-icon"></i><span class="decreasing">5</span></p>
        </div>
    </div>
    <div class="frame">
        <!-- <h2>Cambodia</h2> -->
        <!-- <img src="https://example.com/image.jpg" alt="Cambodia"> -->
        <!-- <img src="map.png" style="width:100% ,hight:100%" > -->
        {{-- <img src="{{asset("assets/img/map.jpg")}}" alt="Map" width="100%" height="100%"> --}}

        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=ហេងសុភាព Hengsopheap&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcut Template</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>

    </div>
    <script src="scripts.js"></script>
    <script src="datatables-simple-demo.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-ID.js" crossorigin="anonymous"></script>

@endsection