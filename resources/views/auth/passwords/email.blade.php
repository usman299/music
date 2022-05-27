@extends('layouts.front1')

@section('content')

    <!-- Begin:: Account Section -->
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="authWrap authLogin">
                        <h2 class="authTitle" style="text-align: center!important;">Forget Password</h2>
                        <form method="POST" action="{{ route('password.email') }}">
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
                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" value="Log in">
                                        <i class="icofont-unlock"></i> {{ __('Send Password Reset Link') }}
                                    </button>
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


