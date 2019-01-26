@extends('layouts.app')
@section('content')
    <div class="container-fluid no-gutters m-0">
        <div class="row h-100">
            <div class="col-md-6 pt-2 p-sm-5">
                <div class="right-section h-100 d-flex flex-column w-75 m-auto sign-form-container justify-content-center">
                    <div class="text-center">
                        <img class="logo" src="img/logo.png">
                        <p class="slogan">امن ترین پلتفرم معاملات ارزهای دیجیتال</p>
                    </div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">

                            <input name="email" type="email" class="form-control email" id="email" placeholder="ایمیل"
                                   required>
                        </div>
                        <div class="form-group">

                            <input name="password" type="password" class="form-control tell" placeholder="رمز عبور"
                                   required>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary  btn-main">
                                <i class="fa fa-sign-in"></i>
                                ورود
                            </button>
                            <a href="{{route('register')}}" class="btn btn-primary  btn-main">
                                <i class="fa fa-user-plus"></i>
                                ثبت نام
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 left-section d-none d-md-block text-center">
                <div class="img-container w-100 h-100 d-flex align-items-center justify-content-center">
                    <img src="{{asset('img/block-sec3.png')}}" alt="hero">

                </div>
            </div>

        </div>
    </div>
@stop