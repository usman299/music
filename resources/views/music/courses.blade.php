@extends('layouts.front')
<style>
    .appointment_form .mo_btn {
        background: #ffd403 !important;
    }
    .icon_box_03 i {

        background: #ffd403!important;
    }
</style>
@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Begin:: Contact Form Section -->
    <section class="contactSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="{{asset('front/images/icons/2.png')}}" alt="">
                        <h5 class="primaryFont">Available new </h5>
                        <h2> Courses <span class="colorPrimary fontWeight400">Package Info</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment_area">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="appointment_form">
                                    <form action="{{route('available.course')}}" method="post" class="row" id="contact_form">
@csrf
                                        <div class="input-field col-lg-10 select-area">
                                            <label style="font-size: 18px">Course<b style="color:yellow">*</b></label>
                                            <select name="course"  >
                                                <option value="Piano" >Piano </option>
                                                <option value="Voice">Voice </option>
                                                <option value="Guitar">Guitar </option>
                                                <option value="Ukelele" >Ukelele </option>
                                                <option value="Violen">Violen </option>
                                                <option value="Music Theory">Music Theory </option>

                                            </select>
                                        </div><br><br>
                                        <div class="input-field col-lg-10 select-area">
                                            <label style="font-size: 18px">Package<b style="color:yellow">*</b></label>
                                            <select name="package"  >
                                                <option value="1" >1 Sesstion/Walk </option>
                                                <option value="10">10 Sesstion </option>

                                            </select>
                                        </div><br><br>
                                        <div class="input-field col-lg-10 select-area">
                                            <label style="font-size: 18px">Duration<b style="color:yellow">*</b></label>
                                            <select name="duration"  >
                                                <option value="30" >30 Minutes </option>
                                                <option value="45">45 Minutes-1h </option>

                                            </select>
                                        </div><br>

                                        <div class="input-field col-lg-10">
                                            <button type="submit" class="mo_btn mob_lg"><i class="icofont-calendar"></i>Submit</button>
                                            <div class="con_message"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 noPaddingLeft noPaddingRight">
                                <div class="icon_box_03">
                                    <i class="icofont-location-pin"></i>
                                    <h4>Bulles en douc'heure</h4>
                                    <p>
                                        {{$content->address}}<br>
                                        {{$content->phone}}<br/>
                                        {{$content->email}}
                                    </p>
                                </div>
                                <div class="icon_box_03">
                                    <i class="icofont-clock-time"></i>
                                    <h4>Horaires d'ouvertures</h4>
                                    <p>
                                        {{$content->time}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Contact Form Section -->

@endsection
