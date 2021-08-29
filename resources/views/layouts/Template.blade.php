 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('template/css/bootstrap.rtl.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/icofont.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/rtl.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/css/font.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/custom.css')}}">
    <title>فروشگاه آنلاین لوازم آرایشی و لباس زیر</title>
    <link rel="icon" type="image/png" href="template/img/favicon.png">
</head>

<body>

<div class="preloader-area">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <ul class="social-links">
                    <li>مارا دنبال کنید:</li>
                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-7">
                <ul class="header-info">
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">سوالات متداول</a></li>
                    <li><a href="#">قوانین و مقررات</a></li>
                    <li>آدرس : ایران ، گلستان ، گرگان</li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="modal right fade sidebarModal" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="logo"><a class="text-aviny font-40" href="{{ route('front_index') }}">سوگل<span> شاپ </span></a></div>
                <p>                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
                <ul class="modal-contact-info">
                    <li><i class="icofont-google-map"></i> <b>استان گلستان</b>گرگان، خیابان ولیعصر </li>
                    <li><i class="icofont-ui-call"></i> <b>0911-792-69-50</b>پشتیبانی</li>
                    <li><i class="icofont-envelope"></i> <b>
                            <a href="mailto:mehdi.kord171@Gmail.com" class="" >mehdi.kord171@Gmail.com</a></b>24/7
                        آدرس ایمیل</li>
                </ul>
                <p class="mt-3 mb-3 text-orange font-18">ارتباط سریع باما در شبکه های اجتماعی</p>
                <ul class="social-links">
                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <a class="navbar-brand text-aviny font-35" href="{{ route('front_index') }}">سوگل <span>شاپ</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{ route('front_index') }}">صفحه اصلی</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                لوازم آرایشی
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">دسته بندی</a>
                                <a class="dropdown-item" href="">دسته بندی</a>
                                <a class="dropdown-item" href="">دسته بندی</a>
                                <a class="dropdown-item" href="">دسته بندی</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                لباس زیر
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">دسته بندی</a>
                                <a class="dropdown-item" href="">دسته بندی</a>
                                <a class="dropdown-item" href="">دسته بندی</a>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="">پیگیری سفارش</a></li>
                        <li class="nav-item"><a class="nav-link" href="">تماس باما</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="navbar-right-side">
                    <div class="lang">
                        <a class="btn btn-primary btn-sm btn-login" href="">حساب کاربری</a>
                    </div>
                    <h5>پشتیبانی : <a href="tel:09117926950">0911-792-6950</a></h5>
                    <div class="modal-taggle-button">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>




<footer class="footer-area bg-fbf9f8">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a class="text-aviny font-45" href="{{ route('front_index') }}">سوگل <span> شاپ </span></a>
                    </div>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                    </p>
                    <ul class="social-links">
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>دسته بندی محصولات</h3>
                    <ul class="services-list">
                        <li><a href="">لوازم آرایشی</a></li>
                        <li><a href="">لباس زیر</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>لینک های مفید</h3>
                    <ul class="usefull-links">
                        <li><a href="">لینک</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>ارتباط با ما</h3>
                    <ul class="contact-list">
                        <li><span>تلفن ۱ :</span> <a href="tel:09117715345" class="text-orange">0911-771-5345</a></li>
                        <li><span>تلفن ۲ :</span> <a href="tel:09117926950" class="text-orange">0911-792-6950</a></li>
                        <li><span>آدرس ایمیل:</span>
                            <a href="mailto:mehdi.kord171@Gmail.com" class="text-orange">
                                mehdi.kord171@Gmail.com
                            </a>
                        </li>
                        <li><span></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <ul>
                        <li><a href="#">قوانین و مقررات</a></li>
                        <li><a href="#">حفظ حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 text-end">
                    <p>تمام منابع برای سوگل شاپ محفوظ است @ 1400 </p>
                    <p class="mt-2">طراحی، توسعه و پشتیبانی : <a href="https://mehdikord.ir" class="text-light">Mehdi Kord</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="go-top"><i class="icofont-stylish-up"></i></div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('template/js/jquery.min.js')}}"></script>

<script src="{{assert('template/js/popper.min.js')}}"></script>

<script src="{{asset('template/js/bootstrap.min.js')}}"></script>

<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('template/js/owl.carousel2.thumbs.min.js')}}"></script>

<script src="{{asset('template/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('template/js/jquery.mixitup.min.js')}}"></script>

<script src="{{asset('template/js/waypoints.min.js')}}"></script>

<script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>

<script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('template/js/form-validator.min.js')}}"></script>

<script src="{{asset('template/js/contact-form-script.js')}}"></script>

<script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>
