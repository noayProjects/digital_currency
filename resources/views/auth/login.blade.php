<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontiran.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <title></title>
</head>
<body>
<div class=" container-fluid">
    <div class="row">
        <div class="col-sm-6 right_section">
            <div class="logo-des  ">
                <img  class="logo" src="img/logo.png">
                <p class="slogan">امن ترین پلتفرم معاملات ارزهای دیجیتال</p>
            </div>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">

                    <input name="email" type="email" class="form-control email" id="email" placeholder="ایمیل" required>
                </div>
                <div class="form-group">

                    <input name="password" type="password" class="form-control tell" placeholder="رمز عبور"  required>
                </div>
                <div class="buttons">
                    <a href="{{route('register')}}" class="btn btn-primary  signin-btn" >ثبت نام</a>
                    <button type="submit" class="btn btn-primary  login-btn">ورود</button>
                </div>
            </form>

        </div>
        <div class="col-sm-6 left_section">
            <img src="{{asset('img/loginpicture.png')}}">
        </div>

    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>