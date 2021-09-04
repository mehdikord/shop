<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rael="icon" href="manage/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="manage/images/dashboard/favicon.png" type="image/x-icon">
    <title>مالتی کارت -قالب</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="manage/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="manage/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="manage/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="manage/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="manage/css/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="manage/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="manage/css/admin.css">
</head>

<body class="rtl">

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded"
                                                                    src="manage/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle"
                                                         data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="جستجو کردن.."><span
                                    class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                            <h6>زبان</h6>
                        </a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> انگلیسی</a></li>
                            <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> اسپانیایی</a></li>
                            <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> پرتغالی</a></li>
                            <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> فرانسوی</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span
                            class="badge badge-pill badge-primary pull-right notification-badge">3</span><span
                            class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>اعلان ها <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0"><span><i class="shopping-color"
                                                                  data-feather="shopping-bag"></i></span>سفارش شما برای کشتی آماده
                                            است ..!</h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                                                                              data-feather="download"></i></span>بارگیری کامل شد</h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                                                                             data-feather="alert-circle"></i></span>250 مگابایت پرونده زباله
                                        </h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="txt-dark"><a href="#">همه</a> اعلان ها</li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span
                                class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img
                                class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded"
                                src="manage/images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span
                                    class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="#"><i data-feather="user"></i>ویرایش نمایه</a></li>
                            <li><a href="#"><i data-feather="mail"></i>صندوق ورودی</a></li>
                            <li><a href="#"><i data-feather="lock"></i>قفل صفحه</a></li>
                            <li><a href="#"><i data-feather="settings"></i>تنظیمات</a></li>
                            <li><a href="#"><i data-feather="log-out"></i>خروج</a></li>
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
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded"
                                                                    src="manage/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up"
                              src="manage/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">جان</h6>
                    <p>مدیر کل.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.html"><i
                                data-feather="home"></i><span>داشبورد</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>محصولات</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>فیزیکی</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category.html"><i class="fa fa-circle"></i>دسته بندی</a></li>
                                    <li><a href="category-sub.html"><i class="fa fa-circle"></i>زیر مجموعه</a></li>
                                    <li><a href="product-list.html"><i class="fa fa-circle"></i>لیست محصولات</a>
                                    </li>
                                    <li><a href="product-detail.html"><i class="fa fa-circle"></i>جزئیات محصول</a>
                                    </li>
                                    <li><a href="add-product.html"><i class="fa fa-circle"></i>اضافه کردن محصول</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>دیجیتال</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.html"><i class="fa fa-circle"></i>دسته بندی</a>
                                    </li>
                                    <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>زیر
                                            مجموعه</a></li>
                                    <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>لیست
                                            محصولات</a></li>
                                    <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>اضافه کردن
                                            محصول</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>فروش</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.html"><i class="fa fa-circle"></i>سفارشات</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>معاملات</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>تخفیف</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="coupon-list.html"><i class="fa fa-circle"></i>لیست تخفیف</a></li>
                            <li><a href="coupon-create.html"><i class="fa fa-circle"></i>ایجاد تخفیف </a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>صفحات</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.html"><i class="fa fa-circle"></i>لیست صفحات</a></li>
                            <li><a href="page-create.html"><i class="fa fa-circle"></i>درج صفحات</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>رسانه
                                    ها</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>منوها</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="menu-list.html"><i class="fa fa-circle"></i>لیست منو</a></li>
                            <li><a href="create-menu.html"><i class="fa fa-circle"></i>ایجاد منو</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>کاربران</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html"><i class="fa fa-circle"></i>لیست کاربران</a></li>
                            <li><a href="create-user.html"><i class="fa fa-circle"></i>ایجاد کاربر</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>فروشندگان</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.html"><i class="fa fa-circle"></i>لیست فروشنده</a></li>
                            <li><a href="create-vendors.html"><i class="fa fa-circle"></i>فروشنده را ایجاد کنید</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>بومی سازی</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="translations.html"><i class="fa fa-circle"></i>ترجمه ها</a></li>
                            <li><a href="currency-rates.html"><i class="fa fa-circle"></i>نرخ ارز</a></li>
                            <li><a href="taxes.html"><i class="fa fa-circle"></i>مالیات</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>گزارش
                                    ها</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>تنظیمات</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.html"><i class="fa fa-circle"></i>مشخصات</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="invoice.html"><i
                                data-feather="archive"></i><span>صورتحساب</span></a>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>وارد
                                    شدن</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">لیست دوستان</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="جستجوی دوست"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">وینسنت پورتر
                                        </div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">عین چاوز</div>
                                        <div class="status"> 28 دقیقه پیش
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">کوری توماس
                                        </div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">اریکا هیوز
                                        </div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">زنجبیل جانستون</div>
                                        <div class="status"> 2 دقیقه پیش</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">پرستانش آناند
                                        </div>
                                        <div class="status"> 2 ساعت پیش
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image"
                                                          src="manage/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">هری جیسون</div>
                                        <div class="status"> آنلاین</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>داشبورد
                                    <small>پنل مدیریت چندکاره</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item active">داشبورد</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="navigation"
                                                                                      class="font-warning"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">درآمد</span>
                                        <h3 class="mb-0">تومان<span class="counter">6,659</span><small> این
                                                ماه</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="box"
                                                                                      class="font-secondary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">محصولات</span>
                                        <h3 class="mb-0">تومان<span class="counter">9,856</span><small> این
                                                ماه</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="message-square"
                                                                                      class="font-primary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">پیام ها
                                            </span>
                                        <h3 class="mb-0">تومان<span class="counter">893</span><small> این
                                                ماه</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-danger card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="users"
                                                                                      class="font-danger"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">فروشندگان جدید</span>
                                        <h3 class="mb-0">تومان <span class="counter">45,631</span><small> این
                                                ماه</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>ارزش بازار</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="market-chart"></div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head">
&lt;div class="market-chart"&gt;&lt;/div&gt;
</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>آخرین سفارشات
                                </h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive latest-order-table">
                                    <table class="table table-bordernone">
                                        <thead>
                                        <tr>
                                            <th scope="col">شماره سفارش</th>
                                            <th scope="col">قیمت</th>
                                            <th scope="col">روش پرداخت </th>
                                            <th scope="col">وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="digits">120,000 تومان</td>
                                            <td class="font-danger">نقل و انتقالات بانکی </td>
                                            <td class="digits">درحال بررسی</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="digits">90,000 تومان</td>
                                            <td class="font-secondary">کیف پول</td>
                                            <td class="digits">تحویل داده شده
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="digits">240,000 تومان</td>
                                            <td class="font-warning">پول نقد </td>
                                            <td class="digits">تحویل داده شده
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="digits">120,000 تومان</td>
                                            <td class="font-primary">پرداخت مستقیم </td>
                                            <td class="digits">درحال بررسی</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="digits">50,000 تومان</td>
                                            <td class="font-primary">نقل و انتقالات بانکی </td>
                                            <td class="digits">تحویل داده شده
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="order.html" class="btn btn-primary">مشاهده همه سفارشات</a>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head1" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
    &lt;table class="table table-bordernone"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;شماره سفارش&lt;/th&gt;
                &lt;th scope="col"&gt;قیمت&lt;/th&gt;
                &lt;th scope="col"&gt;روش پرداخت&lt;/th&gt;
                &lt;th scope="col"&gt;وضعیت&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;1&lt;/td&gt;
                &lt;td class="digits"&gt;120,000 تومان&lt;/td&gt;
                &lt;td class="font-secondary"&gt;نقل و انتقالات بانکی&lt;/td&gt;
                &lt;td class="digits"&gt;تحویل داده شده&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;2&lt;/td&gt;
                &lt;td class="digits"&gt;90,000 تومان&lt;/td&gt;
                &lt;td class="font-secondary"&gt;کیف پول&lt;/td&gt;
                &lt;td class="digits"&gt;تحویل داده شده&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;3&lt;/td&gt;
                &lt;td class="digits"&gt;240,000 تومان&lt;/td&gt;
                &lt;td class="font-secondary"&gt;پول نقد&lt;/td&gt;
                &lt;td class="digits"&gt;تحویل داده شده&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;4&lt;/td&gt;
                &lt;td class="digits"&gt;120,000 تومان&lt;/td&gt;
                &lt;td class="font-primary"&gt;پرداخت مستقیم&lt;/td&gt;
                &lt;td class="digits"&gt;تحویل داده شده&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;5&lt;/td&gt;
                &lt;td class="digits"&gt;50,000 تومان&lt;/td&gt;
                &lt;td class="font-primary"&gt;نقل و انتقالات بانکی&lt;/td&gt;
                &lt;td class="digits"&gt;تحویل داده شده&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>فروش کل
                                </h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>فروش ماه گذشته</span>
                                        <h2 class="mb-0">9054</h2>
                                        <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">فروش ناخالص شهریور</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    </div>
                                    <div class="bg-primary b-r-8">
                                        <div class="small-box">
                                            <i data-feather="briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>کل خرید</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>خرید این ماه</span>
                                        <h2 class="mb-0">2154</h2>
                                        <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">خرید ناخالص</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    </div>
                                    <div class="bg-secondary b-r-8">
                                        <div class="small-box">
                                            <i data-feather="credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>کل معامله نقدی
                                </h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>پول دستی</span>
                                        <h2 class="mb-0">4672</h2>
                                        <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">جزئیات مربوط به پول نقد
                                        </h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    </div>
                                    <div class="bg-warning b-r-8">
                                        <div class="small-box">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>سپرده های روزانه
                                </h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                            <span>سپرده های امنیتی
                                            </span>
                                        <h2 class="mb-0">0782</h2>
                                        <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">فروش ناخالص شهریور</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    </div>
                                    <div class="bg-danger b-r-8">
                                        <div class="small-box">
                                            <i data-feather="calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>خرید/ فروش
                                </h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body sell-graph">
                                <canvas id="myGraph"></canvas>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head3" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head3">&lt;div class="card-body sell-graph"&gt;
   &lt;canvas id="myGraph"&gt;&lt;/canvas&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>بازگشت کالا
                                </h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive products-table">
                                    <table class="table table-bordernone mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">جزئیات</th>
                                            <th scope="col">تعداد</th>
                                            <th scope="col">وضعیت</th>
                                            <th scope="col">قیمت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">1</td>
                                            <td class="font-primary">در انتظار </td>
                                            <td class="digits">65,300 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">5</td>
                                            <td class="font-secondary">لغو</td>
                                            <td class="digits">165,300 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">10</td>
                                            <td class="font-secondary">لغو</td>
                                            <td class="digits">605,300 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">9</td>
                                            <td class="font-primary">برگشت</td>
                                            <td class="digits">68,300 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">8</td>
                                            <td class="font-primary">در انتظار </td>
                                            <td class="digits">75,300 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">3</td>
                                            <td class="font-secondary">لغو</td>
                                            <td class="digits">650,300 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>لورم ایپسوم متن</td>
                                            <td class="digits">8</td>
                                            <td class="font-primary">برگشت</td>
                                            <td class="digits">65,300 تومان</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head4" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head4">
&lt;div class="user-status table-responsive products-table"&gt;
    &lt;table class="table table-bordernone mb-0"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;جزئیات&lt;/th&gt;
                &lt;th scope="col"&gt;تعداد&lt;/th&gt;
                &lt;th scope="col"&gt;وضعیت&lt;/th&gt;
                &lt;th scope="col"&gt;قیمت&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;1&lt;/td&gt;
                &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
                &lt;td class="digits"&gt;65,300 تومان&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;5&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;650,300 تومان&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;10&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;605,300 تومان&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;9&lt;/td&gt;
                &lt;td class="font-primary"&gt;برگشت&lt;/td&gt;
                &lt;td class="digits"&gt;69,300 تومان&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;8&lt;/td&gt;
                &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
                &lt;td class="digits"&gt;65,500 تومان&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;3&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;655,300 تومان&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;لورم ایپسوم متن&lt;/td&gt;
                &lt;td class="digits"&gt;8&lt;/td&gt;
                &lt;td class="font-primary"&gt;برگشت&lt;/td&gt;
                &lt;td class="digits"&gt;65,300 تومان&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 xl-100">
                        <div class="card height-equal">
                            <div class="card-header">
                                <h5>وضعیت کارمندان</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive products-table">
                                    <table class="table table-bordernone mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">نام</th>
                                            <th scope="col">شغل</th>
                                            <th scope="col">سطح مهارت </th>
                                            <th scope="col">تجربه</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img
                                                        class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                        src="manage/images/dashboard/user2.jpg" alt=""
                                                        data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>جان دئو <span class="text-muted digits">(14+
                                                                        آنلاین)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>طراح</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                             style="width: 30%" aria-valuenow="50"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">2 سال</td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img
                                                        class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                        src="manage/images/dashboard/user1.jpg" alt=""
                                                        data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>هالیو ماکو <span class="text-muted digits">(250+
                                                                        آنلاین)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>توسعه دهنده
                                            </td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary"
                                                             role="progressbar" style="width: 70%"
                                                             aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">3 سال
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img
                                                        class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                        src="manage/images/dashboard/man.png" alt=""
                                                        data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>محبی لارا <span class="text-muted digits">(250+
                                                                        آنلاین)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>آزمایش کننده
                                            </td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                             style="width: 60%" aria-valuenow="50"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">5 ماه
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img
                                                        class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                        src="manage/images/dashboard/user.png" alt=""
                                                        data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>چان <span class="text-muted digits">(150+
                                                                        آنلاین)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>طراح</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary"
                                                             role="progressbar" style="width: 30%"
                                                             aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">3 ماه
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bd-t-none u-s-tb">
                                                <div class="align-middle image-sm-size"><img
                                                        class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded"
                                                        src="manage/images/dashboard/designer.jpg" alt=""
                                                        data-original-title="" title="">
                                                    <div class="d-inline-block">
                                                        <h6>محبی <span class="text-muted digits">(14+
                                                                        آنلاین)</span></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>طراح</td>
                                            <td>
                                                <div class="progress-showcase">
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                             style="width: 90%" aria-valuenow="50"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="digits">5 سال
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head5" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head5">

&lt;div class="user-status table-responsive products-table"&gt;
    &lt;table class="table table-bordernone mb-0"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;نام&lt;/th&gt;
                &lt;th scope="col"&gt;شغل&lt;/th&gt;
                &lt;th scope="col"&gt;سطح مهارت&lt;/th&gt;
                &lt;th scope="col"&gt;تجربه&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td class="bd-t-none u-s-tb"&gt;
                        &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="manage/images/dashboard/user2.jpg" alt="" data-original-title="" title=""&gt;
                        &lt;div class="d-inline-block"&gt;
                        &lt;h6&gt;جان دئو &lt;span class="text-muted digits"&gt;(14+ آنلاین)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;طراح&lt;/td&gt;
                    &lt;td&gt;
                        &lt;div class="progress-showcase"&gt;
                        &lt;div class="progress" style="height: 8px;"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td class="digits"&gt;2 سال
&lt;/td&gt;
                &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="manage/images/dashboard/user1.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;هالیو ماکو &lt;span class="text-muted digits"&gt;(250+ آنلاین)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;توسعه دهنده
&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;3 سال
&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="manage/images/dashboard/man.png" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;محبی لارا&lt;span class="text-muted digits"&gt;(99+ آنلاین)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;آزمایش کننده
&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;5 ماه&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="manage/images/dashboard/user.png" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;جان &lt;span class="text-muted digits"&gt;(150+ آنلاین)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;طراح&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;3 ماه
&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="manage/images/dashboard/designer.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;محبی&lt;span class="text-muted digits"&gt;(14+ آنلاین)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;طراح&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;5 سال&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>وضعیت فروش
                                </h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 xl-50">
                                        <div class="order-graph">
                                            <h6>سفارشات بر اساس موقعیت مکانی
                                            </h6>
                                            <div class="chart-block chart-vertical-center">
                                                <canvas id="myDoughnutGraph"></canvas>
                                            </div>
                                            <div class="order-graph-bottom">
                                                <div class="media">
                                                    <div class="order-color-primary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">سنت لوسیا <span class="pull-right">157,000
                                                                    تومان</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-secondary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">کنیا <span class="pull-right">107,000
                                                                    تومان</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-danger"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">لیبریا<span class="pull-right">257,000
                                                                    تومان</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-warning"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">جزیره کریسمس<span
                                                                class="pull-right">100,000 تومان</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-success"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">سنت هلنا <span class="pull-right">357,000
                                                                    تومان</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 xl-50">
                                        <div class="order-graph sm-order-space">
                                            <h6>فروش براساس موقعیت مکانی
                                            </h6>
                                            <div class="peity-chart-dashboard text-center">
                                                <span class="pie-colours-1">4,7,6,5</span>
                                            </div>
                                            <div class="order-graph-bottom sales-location">
                                                <div class="media">
                                                    <div class="order-shape-primary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mr-0">آلمان <span
                                                                class="pull-right">25%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-secondary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mr-0">برزیل <span
                                                                class="pull-right">10%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-danger"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mr-0">انگلستان<span
                                                                class="pull-right">34%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-warning"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mr-0">استرالیا<span
                                                                class="pull-right">5%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-success"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mr-0">کانادا <span
                                                                class="pull-right">25%</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 xl-100">
                                        <div class="order-graph xl-space">
                                            <h6>درآمد ماه گذشته
                                            </h6>
                                            <div class="ct-4 flot-chart-container"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head2" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head2">&lt;div class="row"&gt;
   &lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
      &lt;div class="order-graph"&gt;
         &lt;h6&gt;سفارشات بر اساس موقعیت مکانی
&lt;/h6&gt;
         &lt;div class="chart-block chart-vertical-center"&gt;
            &lt;canvas id="myDoughnutGraph"&gt;&lt;/canvas&gt;
         &lt;/div&gt;
         &lt;div class="order-graph-bottom"&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-primary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;سنت لوسیا &lt;span class="pull-right"&gt;157,000 تومان
&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-secondary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;کنیا &lt;span class="pull-right"&gt;107,000 تومان
&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-danger"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;لیبریا&lt;span class="pull-right"&gt;257,000 تومان&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-warning"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;جزیره کریسمس&lt;span class="pull-right"&gt;100,000 تومان
&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-success"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;سنت هلنا &lt;span class="pull-right"&gt;357,000 تومان
&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
      &lt;div class="order-graph sm-order-space"&gt;
         &lt;h6&gt;فروش براساس موقعیت مکانی
&lt;/h6&gt;
         &lt;div class="peity-chart-dashboard text-center"&gt;
            &lt;span class="pie-colours-1"&gt;4,7,6,5&lt;/span&gt;
         &lt;/div&gt;
         &lt;div class="order-graph-bottom sales-location"&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-primary"&gt;&lt;/div&gt;
                  &lt;div class="media-body"&gt;
                     &lt;h6 class="mb-0 mr-0"&gt;آلمان &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
                  &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-secondary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 mr-0"&gt;برزیل &lt;span class="pull-right"&gt;10%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-danger"&gt;&lt;/div&gt;
                  &lt;div class="media-body"&gt;
                     &lt;h6 class="mb-0 mr-0"&gt;انگلستان&lt;span class="pull-right"&gt;34%&lt;/span&gt;&lt;/h6&gt;
                  &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-warning"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 mr-0"&gt;استرالیا&lt;span class="pull-right"&gt;5%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-success"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 mr-0"&gt;کانادا &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-6 xl-100"&gt;
      &lt;div class="order-graph xl-space"&gt;
         &lt;h6&gt;درآمد ماه گذشته
&lt;/h6&gt;
         &lt;div class="ct-4 flot-chart-container"&gt;&lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">کپی رایت 2019 © setin همه حقوق محفوظ است.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">طراحی توسط ستین<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="manage/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="manage/js/popper.min.js"></script>
<script src="manage/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="manage/js/icons/feather-icon/feather.min.js"></script>
<script src="manage/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="manage/js/sidebar-menu.js"></script>

<!--chartist js-->
<script src="manage/js/chart/chartist/chartist.js"></script>

<!--chartjs js-->
<script src="manage/js/chart/chartjs/chart.min.js"></script>

<!-- lazyload js-->
<script src="manage/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="manage/js/prism/prism.min.js"></script>
<script src="manage/js/clipboard/clipboard.min.js"></script>
<script src="manage/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="manage/js/counter/jquery.waypoints.min.js"></script>
<script src="manage/js/counter/jquery.counterup.min.js"></script>
<script src="manage/js/counter/counter-custom.js"></script>

<!--peity chart js-->
<script src="manage/js/chart/peity-chart/peity.jquery.js"></script>

<!--sparkline chart js-->
<script src="manage/js/chart/sparkline/sparkline.js"></script>

<!--Customizer admin-->
<script src="manage/js/admin-customizer.js"></script>

<!--dashboard custom js-->
<script src="manage/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="manage/js/chat-menu.js"></script>

<!--height equal js-->
<script src="{{asset('manage/js/height-equal.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('manage/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{asset('manage/js/admin-script.js')}}"></script>

</body>

</html>
