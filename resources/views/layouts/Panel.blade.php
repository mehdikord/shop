<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('manage/images/dashboard/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('manage/images/dashboard/favicon.png')}}" type="image/x-icon">
    <title>مدیریت سوگل شاپ</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/fontawesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/flag-icon.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/icofont.css')}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/prism.css')}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/chartist.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('manage/css/admin.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/css/font.css')}}">

    @yield('head')

</head>

<body class="rtl">

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="blur-up lazyloaded" src="{{asset('manage/images/dashboard/multikart-logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <a href="#">
                            <i id="sidebar-toggle" data-feather="align-left"></i>
                        </a>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">

                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="جستجو کردن..">
                                <span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li>
                        <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                            <i data-feather="maximize-2"></i>
                        </a>
                    </li>

                    <li class="onhover-dropdown">
                        <i data-feather="bell"></i>
                        <span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>اعلان ها <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0">
                                            <span><i class="shopping-color" data-feather="shopping-bag"></i></span>سفارش شما برای کشتی آماده
                                            است ..!</h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="txt-dark"><a href="#">همه</a> اعلان ها</li>
                        </ul>
                    </li>

                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{asset('manage/images/default/admin.svg')}}" alt="header-user">
                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="#"><i data-feather="user"></i>ویرایش نمایه</a></li>
                            <li><a href="#"><i data-feather="settings"></i>تنظیمات</a></li>
                            <li><a href="{{route('logout')}}"><i data-feather="log-out"></i>خروج</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper">
                    <a href="">
                        <img class="blur-up lazyloaded" src="{{asset('manage/images/dashboard/multikart-logo.png')}}" alt="">
                    </a>
                </div>
            </div>

            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div>
                        <img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('manage/images/default/admin.svg')}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{ auth()->user()->name }}</h6>
                    <p> @if(!empty(auth()->user()->role_id)) {{auth()->user()->role->role}} @endif</p>
                </div>
                <ul class="sidebar-menu">
                    @include('layouts.partials.panel_menu')
                </ul>
            </div>

        </div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>
                                    {{$title ?? ''}}
                                    <small>{{$subtitle ?? ''}}</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{ route('panel_dashboard') }}"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active">{{$breadcrumb ?? ''}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">کپی رایت 2019 © سوگل شاپ - (SogolShop.ir) همه حقوق محفوظ است.</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="{{asset('manage/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{assert('manage/js/popper.min.js')}}"></script>
<script src="{{asset('manage/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('manage/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('manage/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('manage/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{asset('manage/js/chart/chartist/chartist.js')}}"></script>

<!--chartjs js-->
<script src="{{asset('manage/js/chart/chartjs/chart.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('manage/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{asset('manage/js/prism/prism.min.js')}}"></script>
<script src="{{asset('manage/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{assert('manage/js/custom-card/custom-card.js')}}"></script>

<!--counter js-->
<script src="{{asset('manage/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('manage/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('manage/js/counter/counter-custom.js')}}"></script>

<!--peity chart js-->
<script src="{{asset('manage/js/chart/peity-chart/peity.jquery.js')}}"></script>

<!--sparkline chart js-->
<script src="{{asset('manage/js/chart/sparkline/sparkline.js')}}"></script>

<!--Customizer admin-->
{{--<script src="{{asset('manage/js/admin-customizer.js')}}"></script>--}}

<!--dashboard custom js-->
<script src="{{asset('manage/js/dashboard/default.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('manage/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{asset('manage/js/height-equal.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('manage/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{asset('manage/js/admin-script.js')}}"></script>

@yield('script')

</body>

</html>
