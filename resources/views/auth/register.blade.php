@extends('layouts.app')
@section('content')


    <div class="container-fluid no-gutters m-0">
        <div class="row h-100">
            <div class="col-md-6 pb-3 pt-2 p-sm-5">
                <div class="d-flex flex-column w-75 m-auto sign-form-container">
                    <div class="text-center">
                        <img class="logo" src="img/logo.png">
                        <p class="slogan">امن ترین پلتفرم معاملات ارزهای دیجیتال</p>
                    </div>
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="form-group">

                            <input name="email" type="email" class="form-control email" id="email" placeholder="ایمیل" required>
                        </div>

                        <div class="form-group">

                            <input name="first_name" type="text" class="form-control tell" placeholder="نام" required>
                        </div>

                        <div class="form-group">

                            <input name="last_name" type="text" class="form-control tell" placeholder="نام خانوادگی" required>
                        </div>

                        <div class="form-group">

                            <input name="phone" type="tel" class="form-control tell" id="tell" placeholder="شماره همراه"
                                   required>
                        </div>

                        <div class="form-group">

                            <input name="password" type="password" class="form-control tell" placeholder="رمز عبور" required>
                        </div>

                        <div class="form-group">

                            <input name="password_confirmation" type="password" class="form-control tell"
                                   placeholder="تکرار رمز عبور" required>
                        </div>

                        <div class="buttons">
                            <button type="submit" class="btn btn-primary  btn-main">
                                <i class="fa fa-user-plus"></i>
                                ثبت نام
                            </button>
                            <a href="{{route('login')}}" class="btn btn-primary  btn-main">
                                <i class="fa fa-sign-in"></i>
                                ورود
                            </a>

                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-6 left-section d-none d-md-block text-center">
                <div class="img-container">
                    <img src="{{asset('img/loginpicture.png')}}" alt="hero">
                </div>
            </div>
        </div>
    </div>
@stop
