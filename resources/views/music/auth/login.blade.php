<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .tab-switch-button.active {
            color: #fff;
            background-color: #ddf00f!important;
            cursor: auto;
        }
        .tab-switch-button {
            width: 180px;
            height: 54px;
            border: 1px solid #2ba033!important;
            color: #1d2333;
            font-size: 1rem;
            font-weight: 700;
            line-height: 54px;
            text-align: center;
            cursor: pointer;
            transition: background-color .3s ease-in-out,color .3s ease-in-out;
        }
        .form-box {
            width: 484px;
            padding: 64px;
            border-radius: 12px;
            background-color: #ddf00f!important;
            box-shadow: 0 0 60px 0 rgb(0 0 0 / 12%);
            position: relative;
        }
        input[type=password], input[type=text], select, textarea {
            background-color: #2ba033!important;
            border: 1px solid #2ba033!important;
            color: #fff;
            transition: border-color .2s ease-in-out;
        }
        input[type=date]{
            height: 54px;
            padding: 0 18px;
            width: 100%!important;
        }
        .form-box {
            width: 665px!important;
            padding: 64px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="{{asset('music/css/vendor/bootstrap.min.css')}}">
    <!-- styles -->
    <link rel="stylesheet" href="{{asset('music/css/styles.min.css')}}">
    <!-- favicon -->
    <link rel="icon" href="{{asset('music/logo.jpeg')}}">
    <title> EJAY STUDIO| LOGIN</title>
</head>
<body>

<!-- LANDING -->
<div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->
    <div class="landing-info">
        <!-- LOGO -->
        <div class="logo">
            <!-- ICON LOGO VIKINGER -->
            <img src="{{asset('music/logo.jpeg')}}" class="form-box-decoration overflowing" style="width: 120px; height: 120px;">
{{--            <svg class="icon-logo-vikinger">--}}
{{--                <use xlink:href="#svg-logo-vikinger"></use>--}}
{{--            </svg>--}}
            <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->

        <!-- LANDING INFO PRETITLE -->
        <h2 class="landing-info-pretitle">Welcome to</h2>
        <!-- /LANDING INFO PRETITLE -->

        <!-- LANDING INFO TITLE -->
        <h1 class="landing-info-title">Ejay Studio</h1>
        <!-- /LANDING INFO TITLE -->


        <!-- TAB SWITCH -->
        <div class="tab-switch">
            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">Login</p>
            <!-- /TAB SWITCH BUTTON -->

            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">Register</p>
            <!-- /TAB SWITCH BUTTON -->
        </div>
        <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    <!-- LANDING FORM -->
    <div class="landing-form">
        <!-- FORM BOX -->
        <div class="form-box login-register-form-element">
            <!-- FORM BOX DECORATION -->
            <img class="form-box-decoration overflowing" src="{{asset('music/img/landing/rocket.png')}}" alt="rocket">
            <!-- /FORM BOX DECORATION -->

            <!-- FORM BOX TITLE -->
            <h2 class="form-box-title">Account Login</h2>
            <!-- /FORM BOX TITLE -->

            <!-- FORM -->
            <form action="{{route('login')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                @csrf

                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="login-username"> Email</label>
                            <input type="text" class="@error('email') is-invalid @enderror" id="login-username1" name="email">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                        <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="login-password">Password</label>
                            <input type="password" class="@error('password') is-invalid @enderror" id="login-password1" name="password">
                        </div>
                        <!-- /FORM INPUT -->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row space-between">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- CHECKBOX WRAP -->
                        <div class="checkbox-wrap">
                            <input type="checkbox" id="login-remember1" name="login_remember" checked>
                            <!-- CHECKBOX BOX -->
                            <div class="checkbox-box">
                                <!-- ICON CROSS -->
                                <svg class="icon-cross">
                                    <use xlink:href="#svg-cross"></use>
                                </svg>
                                <!-- /ICON CROSS -->
                            </div>
                            <!-- /CHECKBOX BOX -->
                            <label for="login-remember">Remember Me</label>
                        </div>
                        <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ITEM -->
{{--                    <div class="form-item">--}}
{{--                      --}}
{{--                    </div>--}}
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- BUTTON -->
                        <button type="submit" id="submitlogin" class="button medium secondary">Login to your Account!</button>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
            </form>
            <!-- /FORM -->

            <!-- LINED TEXT -->
            <p class="lined-text">  <!-- FORM LINK -->
                <a class="form-link" href="#">Forgot Password?</a>
                <!-- /FORM LINK --> </p>
            <!-- /LINED TEXT -->

{{--            <!-- SOCIAL LINKS -->--}}
{{--            <div class="social-links">--}}
{{--                <!-- SOCIAL LINK -->--}}
{{--                <a class="social-link facebook" href="#">--}}
{{--                    <!-- ICON FACEBOOK -->--}}
{{--                    <svg class="icon-facebook">--}}
{{--                        <use xlink:href="#svg-facebook"></use>--}}
{{--                    </svg>--}}
{{--                    <!-- /ICON FACEBOOK -->--}}
{{--                </a>--}}
{{--                <!-- /SOCIAL LINK -->--}}

{{--                <!-- SOCIAL LINK -->--}}
{{--                <a class="social-link twitter" href="#">--}}
{{--                    <!-- ICON TWITTER -->--}}
{{--                    <svg class="icon-twitter">--}}
{{--                        <use xlink:href="#svg-twitter"></use>--}}
{{--                    </svg>--}}
{{--                    <!-- /ICON TWITTER -->--}}
{{--                </a>--}}
{{--                <!-- /SOCIAL LINK -->--}}

{{--                <!-- SOCIAL LINK -->--}}
{{--                <a class="social-link twitch" href="#">--}}
{{--                    <!-- ICON TWITCH -->--}}
{{--                    <svg class="icon-twitch">--}}
{{--                        <use xlink:href="#svg-twitch"></use>--}}
{{--                    </svg>--}}
{{--                    <!-- /ICON TWITCH -->--}}
{{--                </a>--}}
{{--                <!-- /SOCIAL LINK -->--}}

{{--                <!-- SOCIAL LINK -->--}}
{{--                <a class="social-link youtube" href="#">--}}
{{--                    <!-- ICON YOUTUBE -->--}}
{{--                    <svg class="icon-youtube">--}}
{{--                        <use xlink:href="#svg-youtube"></use>--}}
{{--                    </svg>--}}
{{--                    <!-- /ICON YOUTUBE -->--}}
{{--                </a>--}}
{{--                <!-- /SOCIAL LINK -->--}}
{{--            </div>--}}
{{--            <!-- /SOCIAL LINKS -->--}}
        </div>
        <!-- /FORM BOX -->

        <!-- FORM BOX -->
        <div class="form-box login-register-form-element" >
            <!-- FORM BOX DECORATION -->
            <img class="form-box-decoration" src="{{asset('music/img/landing/rocket.png')}}" alt="rocket">
            <!-- /FORM BOX DECORATION -->

            <!-- FORM BOX TITLE -->
            <h2 class="form-box-title">Create Student Account!</h2><br>
            <!-- /FORM BOX TITLE -->

            <!-- FORM -->
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div col-md-5>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="register-username4">Name</label>
                                    <input type="text" id="register-username4" name="fname">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>  &nbsp; &nbsp; &nbsp; &nbsp;
                    <div col-md-5>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="register-email2">Your Email</label>
                                    <input type="text" id="register-email2" name="email">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>
                </div><br>
                <div class="row">

                    <div col-md-5>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="phone">Phone#</label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>&nbsp; &nbsp; &nbsp; &nbsp;
                    <div col-md-5>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>
                </div><br>
                <div class="row">

                    <div col-md-6>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">

                                    <input type="date" id="dob" style="background-color: #2ba033;" name="dob">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>&nbsp; &nbsp; &nbsp; &nbsp;
                    <div col-md-6>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <label for="register-password3">Password</label>
                                    <input type="password" id="register-password3" name="password">
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div col-md-6>
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input">
                                <label for="register-password-repeat2">Repeat Password</label>
                                <input type="password" id="register-password-repeat2" name="password_confirmation">
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    </div>&nbsp; &nbsp; &nbsp; &nbsp;

                </diV>
               <br>
                <!-- FORM BOX TITLE -->
                <h2 class="form-box-title">Course tO Avail</h2><br>
                <!-- /FORM BOX TITLE -->
                <div class="row">

                    <div col-md-6>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <input type="hidden" name="lname" value="1" >

                        <select name="course" style="width: 230px; height: 50px;" >
                            <option value="Piano" >Piano </option>
                            <option value="Voice">Voice </option>
                            <option value="Guitar">Guitar </option>
                            <option value="Ukelele" >Ukelele </option>
                            <option value="Violen">Violen </option>
                            <option value="Music Theory">Music Theory </option>

                        </select>

                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>&nbsp; &nbsp; &nbsp; &nbsp;
                    <div col-md-6>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <select name="package" style="width: 230px; height: 50px;" >
                                        <option value="1" >1 Sesstion/Walk </option>
                                        <option value="10">10 Sesstion </option>

                                    </select>
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div col-md-6>
                        <div class="form-row">
                            <!-- FORM ITEM -->
                            <div class="form-item">
                                <!-- FORM INPUT -->
                                <div class="form-input">
                                    <select name="duration" style="width: 230px; height: 50px;" >
                                        <option value="30" >30 Minutes </option>
                                        <option value="45">45 Minutes-1h </option>

                                    </select>
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                    </div>&nbsp; &nbsp; &nbsp; &nbsp;

                </diV><br>

                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- BUTTON -->
                        <button type="submit" id="submitregister" class="button medium primary">Register Now!</button>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>

                <!-- /FORM ROW -->
            </form>

        </div>
        <!-- /FORM BOX -->
    </div>
    <!-- /LANDING FORM -->
</div>
<!-- /LANDING -->

<!-- app -->
<script src="{{asset('music/js/utils/app.js')}}"></script>
<!-- XM_Plugins -->
<script src="{{asset('music/js/vendor/xm_plugins.min.js')}}"></script>
<!-- form.utils -->
<script src="{{asset('music/js/form/form.utils.js')}}"></script>
<!-- landing.tabs -->
<script src="{{asset('music/js/landing/landing.tabs.js')}}"></script>
<!-- SVG icons -->
<script src="{{asset('music/js/utils/svg-loader.js')}}"></script>
</body>
</html>
