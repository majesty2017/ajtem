<!DOCTYPE html>
<html lang="en">
<head>
    <title>Copy Editor - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('editorialboard/login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('editorialboard/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('editorialboard/login/images/img-01.jpg')}}');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form class="login100-form validate-form" action="{{ route('copyeditor.login.submit') }}" method="post">
                <div class="login100-form-avatar">
                    <img src="{{ asset('editorialboard/login/images/icons/logo.jpeg')}}" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
						AJTEM - Copy Editor
					</span>

                @csrf

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>



                <div class="wrap-input100 m-b-10">
                    <input type="checkbox" name="remember" id="remember">
                    Remember Me
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>

                <div class="text-center w-full p-t-25 p-b-230">
                    <a href="#" class="txt1">
                        Forgot Username / Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{ asset('editorialboard/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('editorialboard/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{ asset('editorialboard/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('editorialboard/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('editorialboard/login/js/main.js')}}"></script>

</body>
</html>
