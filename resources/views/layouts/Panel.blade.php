<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="mehdikord">
    <title>Shop Panel</title>
    <link rel="apple-touch-icon" href="{{ asset('manage/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('manage/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/vendors/css/forms/select/select2.min.css') }}">


    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/themes/semi-dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/custom-rtl.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('manage/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="{{ asset('fonts/css/font.css') }}">
    @yield('head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li>
                            <span class="text-dark font-14 text-bold-3">{{ \Morilog\Jalali\Jalalian::now()->format("Y/m/d") }}</span>
                            <i class="bx bx-calendar text-primary font-25"></i>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search">
                        <a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="جستجو در مدیریت ..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name">{{ auth()->user()->name }}</span>
                                <span class="user-status text-muted">{{ !empty(auth()->user()->role_id)?  auth()->user()->role->role : '' }}</span>
                            </div>
                            <span><img class="round" src="{{ asset('manage/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                            <a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a>
                            <a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a>
                            <a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="">
                    <div class="brand-logo">
                        <svg class="logo" width="26px" height="26px" viewbox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>icon</title>
                            <defs>
                                <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%" y2="100%">
                                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                                    <stop stop-color="#699AF9" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop stop-color="#FDAC41" offset="0%"></stop>
                                    <stop stop-color="#E38100" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Sprite" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="sprite" transform="translate(-69.000000, -61.000000)">
                                    <g id="Group" transform="translate(17.000000, 15.000000)">
                                        <g id="icon" transform="translate(52.000000, 46.000000)">
                                            <path id="Combined-Shape"
                                                  d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z">
                                            </path>
                                            <path id="Combined-Shape"
                                                  d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5378966 4.74673291,13.1939746 4.7846258,12.8556254 L8.55057141,12.8560055 C8.48653249,13.1896162 8.45300462,13.5340745 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.529522,8.45300462 13.180715,8.48740462 12.8430777,8.55306931 L12.8426531,4.78608796 C13.1851829,4.7472336 13.5334422,4.72727273 13.8863636,4.72727273 Z"
                                                  fill="#4880EA"></path>
                                            <path id="Combined-Shape"
                                                  d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                  fill="url(#linearGradient-1)"></path>
                                            <rect id="Rectangle" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                                            <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818"
                                                  height="7.68181818"></rect>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2 class="brand-text mb-0">Shop Panel</h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                    <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          @include('layouts.partials.panel.menu')
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="breadcrumbs-top">
                    <h6 class="content-header-title float-left pr-1 mb-0 text-danger font-16 text-bold-3">{{ $title??'' }}</h6>
                    <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                            <li class="breadcrumb-item font-14">{{ $subtitle??'' }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body pt-1">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
{{--<div class="customizer d-none d-md-block"><a class="customizer-toggle" href="javascript:void(0);"><i class="bx bx-cog bx bx-spin white"></i></a>--}}
{{--    <div class="customizer-content p-2">--}}
{{--        <h4 class="text-uppercase mb-0">Theme Customizer</h4>--}}
{{--        <small>Customize & Preview in Real Time</small>--}}
{{--        <a href="javascript:void(0)" class="customizer-close">--}}
{{--            <i class="bx bx-x"></i>--}}
{{--        </a>--}}
{{--        <hr>--}}
{{--        <!-- Theme options starts -->--}}
{{--        <h5 class="mt-1">Theme Layout</h5>--}}
{{--        <div class="theme-layouts">--}}
{{--            <div class="d-flex justify-content-start">--}}
{{--                <div class="mx-50">--}}
{{--                    <fieldset>--}}
{{--                        <div class="radio">--}}
{{--                            <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name"--}}
{{--                                   data-layout="" checked>--}}
{{--                            <label for="radio-light">Light</label>--}}
{{--                        </div>--}}
{{--                    </fieldset>--}}
{{--                </div>--}}
{{--                <div class="mx-50">--}}
{{--                    <fieldset>--}}
{{--                        <div class="radio">--}}
{{--                            <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"--}}
{{--                                   data-layout="dark-layout">--}}
{{--                            <label for="radio-dark">Dark</label>--}}
{{--                        </div>--}}
{{--                    </fieldset>--}}
{{--                </div>--}}
{{--                <div class="mx-50">--}}
{{--                    <fieldset>--}}
{{--                        <div class="radio">--}}
{{--                            <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark" class="layout-name"--}}
{{--                                   data-layout="semi-dark-layout">--}}
{{--                            <label for="radio-semi-dark">Semi Dark</label>--}}
{{--                        </div>--}}
{{--                    </fieldset>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Theme options starts -->--}}
{{--        <hr>--}}

{{--        <!-- Menu Colors Starts -->--}}
{{--        <div id="customizer-theme-colors">--}}
{{--            <h5>Menu Colors</h5>--}}
{{--            <ul class="list-inline unstyled-list">--}}
{{--                <li class="color-box bg-primary selected" data-color="theme-primary"></li>--}}
{{--                <li class="color-box bg-success" data-color="theme-success"></li>--}}
{{--                <li class="color-box bg-danger" data-color="theme-danger"></li>--}}
{{--                <li class="color-box bg-info" data-color="theme-info"></li>--}}
{{--                <li class="color-box bg-warning" data-color="theme-warning"></li>--}}
{{--                <li class="color-box bg-dark" data-color="theme-dark"></li>--}}
{{--            </ul>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <!-- Menu Colors Ends -->--}}
{{--        <!-- Menu Icon Animation Starts -->--}}
{{--        <div id="menu-icon-animation">--}}
{{--            <div class="d-flex justify-content-between align-items-center">--}}
{{--                <div class="icon-animation-title">--}}
{{--                    <h5 class="pt-25">Icon Animation</h5>--}}
{{--                </div>--}}
{{--                <div class="icon-animation-switch">--}}
{{--                    <div class="custom-control custom-switch">--}}
{{--                        <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">--}}
{{--                        <label class="custom-control-label" for="icon-animation-switch"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <!-- Menu Icon Animation Ends -->--}}
{{--        <!-- Collapse sidebar switch starts -->--}}
{{--        <div class="collapse-sidebar d-flex justify-content-between align-items-center">--}}
{{--            <div class="collapse-option-title">--}}
{{--                <h5 class="pt-25">Collapse Menu</h5>--}}
{{--            </div>--}}
{{--            <div class="collapse-option-switch">--}}
{{--                <div class="custom-control custom-switch">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">--}}
{{--                    <label class="custom-control-label" for="collapse-sidebar-switch"></label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Collapse sidebar switch Ends -->--}}
{{--        <hr>--}}

{{--        <!-- Navbar colors starts -->--}}
{{--        <div id="customizer-navbar-colors">--}}
{{--            <h5>Navbar Colors</h5>--}}
{{--            <ul class="list-inline unstyled-list">--}}
{{--                <li class="color-box bg-white border selected" data-navbar-default=""></li>--}}
{{--                <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>--}}
{{--                <li class="color-box bg-success" data-navbar-color="bg-success"></li>--}}
{{--                <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>--}}
{{--                <li class="color-box bg-info" data-navbar-color="bg-info"></li>--}}
{{--                <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>--}}
{{--                <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>--}}
{{--            </ul>--}}
{{--            <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <!-- Navbar colors starts -->--}}
{{--        <!-- Navbar Type Starts -->--}}
{{--        <h5>Navbar Type</h5>--}}
{{--        <div class="navbar-type d-flex justify-content-start">--}}
{{--            <div class="hidden-ele mx-50">--}}
{{--                <fieldset>--}}
{{--                    <div class="radio">--}}
{{--                        <input type="radio" name="navbarType" value="false" id="navbar-hidden">--}}
{{--                        <label for="navbar-hidden">Hidden</label>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--            <div class="mx-50">--}}
{{--                <fieldset>--}}
{{--                    <div class="radio">--}}
{{--                        <input type="radio" name="navbarType" value="false" id="navbar-static">--}}
{{--                        <label for="navbar-static">Static</label>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--            <div class="mx-50">--}}
{{--                <fieldset>--}}
{{--                    <div class="radio">--}}
{{--                        <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>--}}
{{--                        <label for="navbar-sticky">Fixed</label>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr>--}}
{{--        <!-- Navbar Type Starts -->--}}

{{--        <!-- Footer Type Starts -->--}}
{{--        <h5>Footer Type</h5>--}}
{{--        <div class="footer-type d-flex justify-content-start">--}}
{{--            <div class="mx-50">--}}
{{--                <fieldset>--}}
{{--                    <div class="radio">--}}
{{--                        <input type="radio" name="footerType" value="false" id="footer-hidden">--}}
{{--                        <label for="footer-hidden">Hidden</label>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--            <div class="mx-50">--}}
{{--                <fieldset>--}}
{{--                    <div class="radio">--}}
{{--                        <input type="radio" name="footerType" value="false" id="footer-static" checked>--}}
{{--                        <label for="footer-static">Static</label>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--            <div class="mx-50">--}}
{{--                <fieldset>--}}
{{--                    <div class="radio">--}}
{{--                        <input type="radio" name="footerType" value="false" id="footer-sticky">--}}
{{--                        <label for="footer-sticky" class="">Sticky</label>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Footer Type Ends -->--}}
{{--        <hr>--}}

{{--        <!-- Card Shadow Starts-->--}}
{{--        <div class="card-shadow d-flex justify-content-between align-items-center py-25">--}}
{{--            <div class="hide-scroll-title">--}}
{{--                <h5 class="pt-25">Card Shadow</h5>--}}
{{--            </div>--}}
{{--            <div class="card-shadow-switch">--}}
{{--                <div class="custom-control custom-switch">--}}
{{--                    <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">--}}
{{--                    <label class="custom-control-label" for="card-shadow-switch"></label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Card Shadow Ends-->--}}
{{--        <hr>--}}

{{--        <!-- Hide Scroll To Top Starts-->--}}
{{--        <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">--}}
{{--            <div class="hide-scroll-title">--}}
{{--                <h5 class="pt-25">Hide Scroll To Top</h5>--}}
{{--            </div>--}}
{{--            <div class="hide-scroll-top-switch">--}}
{{--                <div class="custom-control custom-switch">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">--}}
{{--                    <label class="custom-control-label" for="hide-scroll-top-switch"></label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Hide Scroll To Top Ends-->--}}
{{--    </div>--}}

{{--</div>--}}
<!-- End: Customizer-->


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; Shop </span><span
            class="float-right d-sm-inline-block d-none">Crafted with<i
                class="bx bxs-heart pink mx-50 font-small-3"></i> by <a class="text-uppercase" href="https://mehdikord.ir" target="_blank">Mehdi Kord</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('manage/app-assets/vendors/js/vendors.min.js') }}"></script>

<script src="manage/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="manage/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="manage/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->
<script src="{{ asset('manage/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>


<!-- BEGIN: Theme JS-->
<script src="{{ asset('manage/app-assets/js/scripts/configs/vertical-menu-dark.min.js') }}"></script>
<script src="{{ asset('manage/app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('manage/app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('manage/app-assets/js/scripts/components.min.js') }}"></script>
<script src="{{ asset('manage/app-assets/js/scripts/footer.min.js') }}"></script>
<script src="{{ asset('manage/app-assets/js/scripts/customizer.min.js') }}"></script>

<script src="{{ asset('manage/app-assets/js/scripts/forms/select/form-select2.min.js') }}"></script>

<!-- END: Theme JS-->
@yield('script')
</body>
<!-- END: Body-->

</html>
