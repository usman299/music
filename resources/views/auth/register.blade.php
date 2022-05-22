@extends('layouts.front1')
<style>
    .authWrap {
        background: #ffd403!important;
    }
    input[type="date"]{
        display: block;
        width: 100%;
        height: 60px;
        background: #fff;
        padding: 0 25px;
        border: none;
        border-radius: 0;
        font-size: 14px;
        line-height: 60px;
        margin: 0 0 20px;
        color: #879296;
        -webkit-filter: drop-shadow( -1px 2px 5px rgba(255, 246, 244, 1));
        -moz-filter: drop-shadow( -1px 2px 5px rgba(255, 246, 244, 1));
        filter: drop-shadow( -1px 2px 5px rgba(255, 246, 244, 1));
    }
</style>
@section('content')

    <!-- Begin:: Account Section -->
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">

                    <div class="authWrap authLogin">
                        <h1 class="authTitle" style="text-align: center">Create Student Account!</h1>
                        <form action="{{route('student.register')}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input placeholder="Name" type="text" class="@error('fname') is-invalid @enderror" name="fname" required value="">
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input  type="date" class="@error('dob') is-invalid @enderror" name="dob" required value="">
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email" required value="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Telephone" type="text" class="@error('phone') is-invalid @enderror" name="phone" required value="">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Address" type="text" class="@error('address') is-invalid @enderror" name="address" required value="">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <input placeholder="Pasword" class="@error('password') is-invalid @enderror" type="password" required name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Confirm Password" class="@error('confirm_password') is-invalid @enderror" type="password" required name="password_confirmation" >
                                </div>

                                <div class="col-sm-12" style="margin-top: 20px;">
                                <h1 class="authTitle" style="text-align: center">Course to Avail!</h1>
                                </div>
                                <div class="col-sm-12" >
                                    <select name="course"  >
                                        <option value="Piano" >Piano </option>
                                        <option value="Voice">Voice </option>
                                        <option value="Guitar">Guitar </option>
                                        <option value="Ukelele" >Ukelele </option>
                                        <option value="Violen">Violen </option>
                                        <option value="Music Theory">Music Theory </option>

                                    </select>

                                </div>
                                <div class="col-sm-6" style="margin-top: 15px;">
                                    <select name="package" >
                                        <option value="1" >1 Sesstion/Walk </option>
                                        <option value="10">10 Sesstion </option>

                                    </select>

                                </div>
                                <div class="col-sm-6" style="margin-top: 15px;">
                                    <select name="duration"  >
                                        <option value="30" >30 Minutes </option>
                                        <option value="45">45 Minutes-1h </option>

                                    </select>

                                </div>
                                <div class="col-sm-12" style="margin-top: 10px;">
                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" >
                                        <i class="icofont-unlock"></i>Register
                                    </button><br>

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
