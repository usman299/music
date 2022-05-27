@extends('layouts.front1')

@section('content')

<!-- Begin:: Account Section -->
<section class="cartPage" >
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

                    <p style="color: red!important;"><b>{{$message}}</b></p>

                <h3 style="text-align: center">Welcome please login</h3>
                <div class="authWrap authLogin">
                    <h1 class="authTitle" style="text-align: center"><b>Login</b></h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email" required value="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Password" class="@error('password') is-invalid @enderror" type="password" required name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" value="Log in">
                                    <i class="icofont-unlock"></i>Login
                                </button>
                                <a href="{{route('forget.password')}}" style="font-size: 15px; color: black; " ><b style="margin-left: 250px;">Forget Password</b></a><br>
                                <div style="margin-top: 10px; text-align: center;">I do not have an account?<a href="{{route('register')}}" style="font-size: 15px; color: black;"><b>Registration</b></a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End:: Account Section -->

@endsection
