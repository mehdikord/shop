<!DOCTYPE html>
<html class="no-js" lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>فروشگاه لوازم آرایشی و لباس زیر سوگل شاپ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/dist/sweetalert2.all.min.js')}}">

    @yield('head')

</head>

<body>

<!--header area start-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="support_info">
                        <p>تلفن تماس : <a class="ltr-text" href="tel:+989123456789">0911-792-6950</a></p>
                    </div>
                    <div class="top_right text-right">
                        <ul>
                            <li><a href="{{ route('front_auth') }}"> حساب کاربری </a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="search_container">
                        <form action="#">
                            <div class="hover_category">
                                <select class="select_option" name="select" id="categori">
                                    <option selected value="1">همه دسته ها</option>
                                    <option value="2">لوازم جانبی</option>
                                    <option value="3">سایر لوازم جانبی</option>
                                    <option value="4">قطعات کامپیوتر</option>
                                    <option value="5">دوربین و ویدیو </option>
                                    <option value="6">صفحه نمایش</option>
                                    <option value="7">تبلت ها</option>
                                    <option value="8">لپ تاپ ها</option>
                                    <option value="9">کیف دستی</option>
                                    <option value="10">هدفون و اسپیکر</option>
                                    <option value="11">گیاهان دارویی</option>
                                    <option value="12">سبزیجات</option>
                                    <option value="13">فروشگاه</option>
                                    <option value="14">لپ تاپ و کامپیوتر</option>
                                    <option value="15">ساعت ها</option>
                                    <option value="16">لوازم الکترونیکی</option>
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="جستجوی محصول ..." type="text">
                                <button type="submit">جستجو</button>
                            </div>
                        </form>
                    </div>

                    <div class="middel_right_info">
                        <div class="header_wishlist">
                            <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <span class="wishlist_quantity">3</span>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <i
                                    class="fa fa-angle-down"></i></a>
                            <span class="cart_quantity">2</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="cart_items_container">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                            <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                            <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>جمع اجزا:</span>
                                        <span class="price">138,000 تومان </span>
                                    </div>
                                    <div class="cart_total mt-10">
                                        <span>جمع کل:</span>
                                        <span class="price">138,000 تومان </span>
                                    </div>
                                </div>

                                <div class="mini_cart_footer">
                                    <div class="cart_button">
                                        <a href="cart.html">مشاهده سبد</a>
                                    </div>
                                    <div class="cart_button">
                                        <a href="checkout.html">پرداخت</a>
                                    </div>

                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">خانه</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">خانه 1</a></li>
                                    <li><a href="index-2.html">خانه 2</a></li>
                                    <li><a href="index-3.html">خانه 3</a></li>
                                    <li><a href="index-4.html">خانه 4</a></li>
                                    <li><a href="index-5.html">خانه 5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">فروشگاه</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">طرح های فروشگاه</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">فروشگاه</a></li>
                                            <li><a href="shop-fullwidth.html">تمام عرض</a></li>
                                            <li><a href="shop-fullwidth-list.html">تمام عرض لیست</a></li>
                                            <li><a href="shop-left-sidebar.html">نوار کناری چپ </a></li>
                                            <li><a href="shop-left-sidebar-list.html"> نوار کناری چپ لیست</a></li>
                                            <li><a href="shop-list.html">نمایش لیست</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">سایر صفحات</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">سبد خرید</a></li>
                                            <li><a href="wishlist.html">لیست علاقه‌مندی‌ها</a></li>
                                            <li><a href="checkout.html">پرداخت</a></li>
                                            <li><a href="my-account.html">حساب کاربری</a></li>
                                            <li><a href="404.html">خطای 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">انواع محصول</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.html">جزئیات محصول</a></li>
                                            <li><a href="product-sidebar.html">محصول با نوار کناری</a></li>
                                            <li><a href="product-grouped.html">محصول گروهبندی شده</a></li>
                                            <li><a href="variable-product.html">محصول متغیر</a></li>
                                            <li><a href="product-countdown.html">محصول شمارنده</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">بلاگ</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">بلاگ</a></li>
                                    <li><a href="blog-details.html">جزئیات مطلب بلاگ</a></li>
                                    <li><a href="blog-fullwidth.html">بلاگ تمام عرض</a></li>
                                    <li><a href="blog-sidebar.html">بلاگ نوار کناری راست</a></li>
                                    <li><a href="blog-no-sidebar.html">بلاگ بدون نوار کناری</a></li>
                                </ul>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">صفحات </a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">درباره ما</a></li>
                                    <li><a href="services.html">خدمات</a></li>
                                    <li><a href="privacy-policy.html">سیاست حریم خصوصی</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="contact.html">تماس</a></li>
                                    <li><a href="login.html">ورود</a></li>
                                    <li><a href="404.html">خطای 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="my-account.html">حساب کاربری</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">درباره ما</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> تماس با ما</a>
                            </li>
                        </ul>
                    </div>

                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="telegram"><a href="#"><i class="fa fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="support_info">
                            <p>تلفن تماس : <a class="ltr-text" href="tel:+989123456789">0911-792-6950</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right">
                            <ul>
                                <li><a href="{{ route('front_auth') }}"> حساب کاربری </a></li>
                                <li><a href="checkout.html"> پرداخت </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="{{ route('front_index') }}"><span class="text-aviny font-50 text-yasi">سوگل</span><span class="text-aviny font-50"> شاپ</span></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search_container">
                                <form action="#">
                                    <div class="hover_category">
                                        <select class="select_option" name="select" id="categori1">
                                            <option selected value="1">همه دسته ها</option>
                                            <option value="2">لوازم جانبی</option>
                                            <option value="3">سایر لوازم جانبی</option>
                                            <option value="4">قطعات کامپیوتر</option>
                                            <option value="5">دوربین و ویدیو </option>
                                            <option value="6">صفحه نمایش</option>
                                            <option value="7">تبلت ها</option>
                                            <option value="8">لپ تاپ ها</option>
                                            <option value="9">کیف دستی</option>
                                            <option value="10">هدفون و اسپیکر</option>
                                            <option value="11">گیاهان دارویی</option>
                                            <option value="12">سبزیجات</option>
                                            <option value="13">فروشگاه</option>
                                            <option value="14">لپ تاپ و کامپیوتر</option>
                                            <option value="15">ساعت ها</option>
                                            <option value="16">لوازم الکترونیکی</option>
                                        </select>
                                    </div>
                                    <div class="search_box">
                                        <input placeholder="جستجوی محصول ..." type="text">
                                        <button type="submit">جستجو</button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                                <div class="header_wishlist">
                                    <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    <span class="wishlist_quantity">3</span>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                                                    aria-hidden="true"></i> <i class="fa fa-angle-down"></i></a>
                                    <span class="cart_quantity">2</span>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_items_container">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product.jpg"
                                                                     alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                                    <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product2.jpg"
                                                                     alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                                    <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_total">
                                                <span>جمع اجزا:</span>
                                                <span class="price">138,000 تومان </span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>جمع کل:</span>
                                                <span class="price">138,000 تومان </span>
                                            </div>
                                        </div>

                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="cart.html">مشاهده سبد</a>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html">پرداخت</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="main_menu_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">دسته‌بندی ها</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    <li class="menu_item_children"><a href="#">لباس و پوشاک <i
                                                class="fa fa-angle-left"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li class="menu_item_children"><a href="#">لباس ها</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">زیر پیراهن</a></li>
                                                    <li><a href="">عصرانه</a></li>
                                                    <li><a href="">روزانه</a></li>
                                                    <li><a href="">ورزشی</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">کیف دستی</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">رودوشی</a></li>
                                                    <li><a href="">کیف مدرسه</a></li>
                                                    <li><a href="">کودکانه</a></li>
                                                    <li><a href="">کت ها</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">کفش ها</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">چکمه های مچ پا</a></li>
                                                    <li><a href="">صندل ها قفل دار </a></li>
                                                    <li><a href="">مخصوص دویدن</a></li>
                                                    <li><a href="">کتاب ها</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">پوشاک</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">کت و ژاکت </a></li>
                                                    <li><a href="">بارانی ها</a></li>
                                                    <li><a href="">ژاکت ها</a></li>
                                                    <li><a href="">تیشرت ها</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#"> دکور و مبلمان ها <i
                                                class="fa fa-angle-left"></i></a>
                                        <ul class="categories_mega_menu column_3">
                                            <li class="menu_item_children"><a href="#">صندلی</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">ناهارخوری</a></li>
                                                    <li><a href="">اتاق خواب</a></li>
                                                    <li><a href=""> خانه و اداره</a></li>
                                                    <li><a href="">اتاق نشیمن</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">نورپردازی</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">نورپردازی سقفی</a></li>
                                                    <li><a href="">نورپردازی دیواری</a></li>
                                                    <li><a href="">نورپردازی بیرون خانه</a></li>
                                                    <li><a href="">نورپردازی هوشمند</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">مبل</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">مبل های پارچه ای</a></li>
                                                    <li><a href="">مبل های چرمی</a></li>
                                                    <li><a href="">مبل های گوشه ای</a></li>
                                                    <li><a href="">مبل های تخت خوابی</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#"> قطعات خودرو <i
                                                class="fa fa-angle-left"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">ابزار ترمز</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">میل لنگ</a></li>
                                                    <li><a href="">قرقره</a></li>
                                                    <li><a href="">دیزل </a></li>
                                                    <li><a href="">بنزین</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">ترمز اضطراری</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">عروسک های دخترانه</a></li>
                                                    <li><a href="">ابزار آموزشی دخترانه</a></li>
                                                    <li><a href="">هنر های کودکان</a></li>
                                                    <li><a href="">بازی های ویدئویی بچگانه</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu_item_children"><a href="#"> کامپیوتر و لپ تاپ <i
                                                class="fa fa-angle-left"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">شلوار جین</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">ساختمان</a></li>
                                                    <li><a href="">لوازم الکترونیکی</a></li>
                                                    <li><a href="">اکشن فیگور </a></li>
                                                    <li><a href="">اسباب بازی های مخصوص</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">ماسین حساب ها</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">عروسک های دخترانه</a></li>
                                                    <li><a href="">ابزار آموزشی دخترانه</a></li>
                                                    <li><a href="">هنر های کودکان</a></li>
                                                    <li><a href="">بازی های ویدئویی بچگانه</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> نورپردازی</a></li>
                                    <li><a href="#"> لوازم جانبی</a></li>
                                    <li><a href="#">قطعات بدنه</a></li>
                                    <li><a href="#">لوازم خودرو</a></li>
                                    <li><a href="#"> قطعات موتور</a></li>
                                    <li id="cat_toggle" class="has-sub"><a href="#"> دسته های بیشتر</a>
                                        <ul class="categorie_sub">
                                            <li><a href="#">دسته پنهان</a></li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main_menu menu_position">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('front_index') }}">صفحه اصلی</a></li>
                                    <li><a href="{{ route('front_index') }}">تخفیف دارها</a></li>
                                    <li><a href="{{ route('front_index') }}">پیگیری سفارش</a></li>
                                    <li><a href="{{ route('front_index') }}">بلاگ</a></li>
                                    <li><a href="{{ route('front_index') }}">درباره ما</a></li>
                                    <li><a href="{{ route('front_index') }}"> تماس با ما</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<!--header area end-->

<!--sticky header area start-->
<div class="sticky_header_area sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="{{route('front_index')}}"><span class="text-aviny font-40 text-yasi">سوگل </span><span class="text-aviny font-40">شاپ</span></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="sticky_header_right menu_position">
                    <div class="main_menu">
                        <nav>
                            <ul>
                                <li><a class="active" href="index.html">خانه<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="index.html">خانه فروشگاه 1</a></li>
                                        <li><a href="index-2.html">خانه فروشگاه 2</a></li>
                                        <li><a href="index-3.html">خانه فروشگاه 3</a></li>
                                        <li><a href="index-4.html">خانه فروشگاه 4</a></li>
                                        <li><a href="index-5.html">خانه فروشگاه 5</a></li>
                                    </ul>
                                </li>
                                <li class="mega_items"><a href="shop.html">فروشگاه<i
                                            class="fa fa-angle-down"></i></a>
                                    <div class="mega_menu">
                                        <ul class="mega_menu_inner">
                                            <li><a href="#">طرح های فروشگاه</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.html">تمام عرض</a></li>
                                                    <li><a href="shop-fullwidth-list.html">تمام عرض لیست</a></li>
                                                    <li><a href="shop-left-sidebar.html">نوار کناری چپ </a></li>
                                                    <li><a href="shop-left-sidebar-list.html"> نوار کناری چپ
                                                            لیست</a></li>
                                                    <li><a href="shop-list.html">نمایش لیست</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">سایر صفحات</a>
                                                <ul>
                                                    <li><a href="cart.html">سبد خرید</a></li>
                                                    <li><a href="wishlist.html">لیست علاقه‌مندی‌ها</a></li>
                                                    <li><a href="checkout.html">پرداخت</a></li>
                                                    <li><a href="my-account.html">حساب کاربری</a></li>
                                                    <li><a href="404.html">خطای 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">انواع محصول</a>
                                                <ul>
                                                    <li><a href="product-details.html">جزئیات محصول</a></li>
                                                    <li><a href="product-sidebar.html">محصول با نوار کناری</a></li>
                                                    <li><a href="product-grouped.html">محصول گروهبندی شده</a></li>
                                                    <li><a href="variable-product.html">محصول متغیر</a></li>
                                                    <li><a href="product-countdown.html">محصول شمارنده</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">ابزارهای کامپیوتر</a>
                                                <ul>
                                                    <li><a href="shop.html">کابل و اتصال دهنده ها</a></li>
                                                    <li><a href="shop-list.html">تبلت های گرافیکی</a></li>
                                                    <li><a href="shop-fullwidth.html">پرینتر ها، جوهر و تونر</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-list.html">تبلت های دست دوم</a></li>
                                                    <li><a href="shop-left-sidebar.html">درایو های نوری</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="blog.html">بلاگ<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="blog-details.html">جزئیات مطلب بلاگ</a></li>
                                        <li><a href="blog-fullwidth.html">بلاگ تمام عرض</a></li>
                                        <li><a href="blog-sidebar.html">بلاگ نوار کناری راست</a></li>
                                        <li><a href="blog-no-sidebar.html">بلاگ بدون نوار کناری</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">صفحات <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="about.html">درباره ما</a></li>
                                        <li><a href="services.html">خدمات</a></li>
                                        <li><a href="privacy-policy.html">سیاست حریم خصوصی</a></li>
                                        <li><a href="faq.html">سوالات متداول</a></li>
                                        <li><a href="contact.html">تماس</a></li>
                                        <li><a href="login.html">ورود</a></li>
                                        <li><a href="404.html">خطای 404</a></li>
                                    </ul>
                                </li>

                                <li><a href="about.html">درباره ما</a></li>
                                <li><a href="contact.html"> تماس با ما</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="middel_right_info">
                        <div class="header_wishlist">
                            <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <span class="wishlist_quantity">3</span>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <i
                                    class="fa fa-angle-down"></i></a>
                            <span class="cart_quantity">2</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="cart_items_container">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                            <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a>
                                            <p>تعداد: 1 × <span> 60,000 تومان </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>جمع اجزا:</span>
                                        <span class="price">138,000 تومان </span>
                                    </div>
                                    <div class="cart_total mt-10">
                                        <span>جمع کل:</span>
                                        <span class="price">138,000 تومان </span>
                                    </div>
                                </div>

                                <div class="mini_cart_footer">
                                    <div class="cart_button">
                                        <a href="cart.html">مشاهده سبد</a>
                                    </div>
                                    <div class="cart_button">
                                        <a href="checkout.html">پرداخت</a>
                                    </div>

                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--sticky header area end-->

@yield('content')


<!--footer area start-->
<footer class="footer_widgets">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo mb-3">
                            <a href="{{ route('front_index') }}"><span class="text-aviny text-yasi font-60">سوگل </span><span class="text-aviny font-60">شاپ</span></a>
                        </div>
                        <div class="footer_contact">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است.</p>
                            <p><span>آدرس : </span>ایران - گلستان - گرگان خیابان ولیعصر ، عدالت ۷ ، پاساژ کاپری فروشگاه سوگل
                            </p>
                            <p><span>موبایل : </span><a class="ltr-text" href="tel:09117926950"></a>0911-792-6950 ، <a class="ltr-text" href="tel:09117715345">0911-771-5345</a>
                            </p>
                            <p><span>پشتیبانی: </span><a target="_blank" href="mailto:mehdi.kord171@gmail.com">mehdi.kord171@Gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>دسته بندی اصلی</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">دسته بندی </a></li>
                                <li><a href="about.html">دسته بندی </a></li>
                                <li><a href="about.html">دسته بندی </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>لینک های مفید</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">حساب کاربری</a></li>
                                <li><a href="#">سابقه خرید</a></li>
                                <li><a href="wishlist.html">علاقه‌مندی‌ها</a></li>
                                <li><a href="#">خبرنامه</a></li>
                                <li><a href="#">نمایندگی ها</a></li>
                                <li><a href="faq.html">سفارشات بین المللی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container newsletter">
                        <h3>ارتباط سریع باما در شبکه های اجتماعی</h3>
                        <div class="footer_social_link">
                            <ul>
                                <li><a class="facebook" href="#" title="فیسبوک"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="twitter" href="#" title="توییتر"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="instagram" href="#" title="اینستاگرام"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li><a class="telegram" href="#" title="تلگرام"><i class="fa fa-telegram"></i></a>
                                </li>
                                <li><a class="rss" href="#" title="RSS"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="subscribe_form">
                            <h4>هم اکنون عضو خبرنامه ما شوید و از تخفیف ها و جوایز آگاه شوید</h4>
                            <form id="mc-form" class="mc-form footer-newsletter" method="post">
                                <input id="mc-email" type="email" autocomplete="off"
                                       placeholder="... آدرس ایمیل شما" dir="ltr">
                                <button id="mc-submit">اشتراک!</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div>
                                <!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>ارائه شده در وب‌سایت <a href="https://www.rtl-theme.com" target="_blank">راست‌چین</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_payment text-right">
                        <a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                               aria-controls="tab1" aria-selected="false"><img
                                                    src="assets/img/product/product1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                               aria-controls="tab2" aria-selected="false"><img
                                                    src="assets/img/product/product2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"
                                               aria-controls="tab3" aria-selected="false"><img
                                                    src="assets/img/product/product3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                               aria-controls="tab4" aria-selected="false"><img
                                                    src="assets/img/product/product5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>گوشی موبایل Xiaomi Mi 9 Lite</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">6,400,000 تومان</span>
                                    <span class="old_price">7,800,000 تومان</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                        ابزارهای </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>اندازه</h2>
                                        <select class="select_option">
                                            <option selected value="1">کوچک</option>
                                            <option value="1">متوسط</option>
                                            <option value="1">بزرگ</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>رنگ</h2>
                                        <select class="select_option">
                                            <option selected value="1">بنفش</option>
                                            <option value="1">قرمز</option>
                                            <option value="1">مشکی</option>
                                            <option value="1">صورتی</option>
                                            <option value="1">نارنجی</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">افزودن به سبد</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>اشتراک گذاری این محصول</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="telegram"><a href="#"><i class="fa fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->

<!--news letter popup start (uncomment lines 763-788 in main.js to show this)-->
<div class="newletter-popup">
    <div id="boxes" class="newletter-container">
        <div id="dialog" class="window">
            <div id="popup2">
                <span class="b-close"><span>بستن</span></span>
            </div>
            <div class="box">
                <div class="newletter-title">
                    <h2>خبرنامه</h2>
                </div>
                <div class="box-content newleter-content">
                    <label class="newletter-label">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است.</label>
                    <div id="frm_subscribe">
                        <form name="subscribe" id="subscribe_popup">
                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail"
                                   placeholder="آدرس ایمیل خود را وارد کنید ...">
                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                            <div id="notification"></div>
                            <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>اشتراک</span></a>
                        </form>
                        <div class="subscribe-bottom">
                            <input type="checkbox" id="newsletter_popup_dont_show_again">
                            <label for="newsletter_popup_dont_show_again">دیگر این پاپ آپ را نشان نده</label>
                        </div>
                    </div>
                    <!-- /#frm_subscribe -->
                </div>
                <!-- /.box-content -->
            </div>
        </div>

    </div>
    <!-- /.box -->
</div>
<!--news letter popup start-->




<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
@include('layouts.partials.front_alert_message')
@include('layouts.partials.front_simple_message')

@yield('script')
</body>

</html>
