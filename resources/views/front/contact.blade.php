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
                        <h5 class="primaryFont">Inquiries</h5>
                        <h2> Send us a <span class="colorPrimary fontWeight400">Message</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment_area">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="appointment_form">
                                    <form action="#" method="post" class="row" id="contact_form">
{{--                                        <div class="input-field col-lg-6">--}}
{{--                                            <input class="required" type="text" name="name" placeholder="Name">--}}
{{--                                        </div>--}}
{{--                                        <div class="input-field col-lg-6">--}}
{{--                                            <input class="required" type="email" name="email" placeholder="E-mail">--}}
{{--                                        </div>--}}
{{--                                        <div class="input-field col-lg-6">--}}
{{--                                            <input type="number" name="con_phone" placeholder="Téléphone">--}}
{{--                                        </div>--}}
{{--                                        <div class="input-field col-lg-6">--}}
{{--                                            <input type="text" name="selec" placeholder="SUbject">--}}
{{--                                        </div>--}}
{{--                                        <div class="input-field col-lg-6 select-area">--}}
{{--                                            <select class="required" name="selec">--}}
{{--                                                <option selected="selected">Sélectionnez le sujet</option>--}}
{{--                                                @foreach($categories as $cat)--}}
{{--                                                    <option value="{{$cat->name}}">{{$cat->name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
                                        <div class="input-field col-lg-12">
                                            <textarea class="required" name="con_message" placeholder="Your Inquiries"></textarea>
                                        </div>
                                        <div class="input-field col-lg-12" style="margin-top: 20px;">
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
