<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('admin/logscreen/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/logscreen/css/main.css')}}">
    <!--===============================================================================================-->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('front/css/styles.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('admin/adminpanel/css/admin.css') }}">
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js')}}" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>
<body>
<div class="login-dik">
    <div class="mavi-Logo">
    </div>
    <img class="pattern" src="{{asset("admin/logscreen/images/login.png")}}" alt="">
    <form  method="post" action="{{route('admin.login.post')}}"class="login100-form validate-form">
        @csrf


        <div class="form-logo">
            <img src="{{asset("admin/adminpanel/admin-images/logoWhite.png")}}" alt="">
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
        </div>


        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Login
            </button>
        </div>

    </form>
</div>
</body>
</html>
