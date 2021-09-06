@extends('layouts.Template')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">خانه</a></li>
                            <li>حساب کاربری</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 mt-4">
                    @include('layouts.partials.errors')
                </div>
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>ورود</h2>
                        <form action="{{ route('front_auth_login') }}" method="post">
                            @csrf
                            <p>
                                <label>شماره موبایل <span>*</span></label>
                                <input name="phone" required type="number">
                            </p>
                            <p>
                                <label>رمز عبور <span>*</span></label>
                                <input name="password" required type="password">
                            </p>
                            <div class="login_submit">
                                <a href="#">رمز عبور خود را فراموش کرده اید؟</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox"> به خاطر سپاری
                                </label>
                                <button type="submit">ورود</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>ثبت نام</h2>
                        <form method="post" action="{{ route('auth_register') }}">
                            @csrf
                            <p>
                                <label>نام کامل <span>*</span></label>
                                <input name="name" required type="text" value="{{old('name')}}">
                            </p>
                            <p>
                                <label>شماره موبایل <span>*</span></label>
                                <input name="phone" required type="text" value="{{old('phone')}}">
                            </p>
                            <p>
                                <label>رمز عبور <span>*</span></label>
                                <input required name="password" type="password">
                            </p>
                            <p>
                                <label>تکرار رمز عبور <span>*</span></label>
                                <input required name="password_confirmation" type="password">
                            </p>
                            <div class="login_submit">
                                <button type="submit">ثبت نام</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection
