@extends('layouts.front')
@section('content')
    <!-- Begin:: Slider Section -->
    <section class="slider_01" style="background-color: #ffd403">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <div class="tp-caption"
                             data-x="['left', 'left', 'center', 'center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['-180','-180','-170','-150']"

                             data-width="['100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-type="image"

                             data-frames='[{"delay":1200,"speed":600,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                             data-textAlign="['left', 'left', 'center', 'center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,25]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[80,50,0,25]"

                        ><img src="{{asset('music/images/bg/layer.png')}}" alt="Layer" width="203" height="43"></div>
                        <div class="tp-caption headFont ws_nowrap"
                             data-x="['left', 'left', 'center', 'center']"
                             data-hoffset="['-3', '-3', '0', '0']"

                             data-y="['middle']"
                             data-voffset="['-40','-40','-45','-25']"

                             data-fontsize="['60','60','60','45']"
                             data-fontweight="900"
                             data-lineheight="['70', '70', '70', '55']"
                             data-width="['500','500','100%', '100%']"
                             data-height="['auto']"
                             data-whitesapce="normal"
                             data-color="['#252525']"

                             data-type="text"
                             data-responsive_offset="off"

                             data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                             data-textAlign="['left', 'left', 'center', 'center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,25,25]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[80,50,25,25]"

                        >Hello {{Auth::user()->fname}}  <span class="colorPrimary fontWeight400" style="color: #f7a392">Welcome back</span>
                        </div>
                        <div class="tp-caption ws_nowrap"
                             data-x="['left', 'left', 'center', 'center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['95','95','75','70']"

                             data-fontsize="['14','14','14','14']"
                             data-fontweight="['400', '400', '400', '400']"
                             data-lineheight="['26']"
                             data-width="['570','400','100%','100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-color="['#252525']"

                             data-type="text"
                             data-responsive_offset="off"

                             data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                             data-textAlign="['left', 'left', 'center', 'center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,30]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[80,50,0,30]"

                        >There are many variations
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['left', 'left', 'center', 'center']"
                             data-hoffset="['0']"

                             data-y="['middle']"
                             data-voffset="['160','160','150','120']"

                             data-fontsize="['14'"
                             data-fontweight="400"
                             data-lineheight=".8"
                             data-width="['100%']"
                             data-height="['auto']"
                             data-whitesapce="['normal']"
                             data-color="['#01d85f']"

                             data-type="text"
                             data-responsive_offset="off"

                             data-frames='[{"delay":1700,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                             data-textAlign="['left', 'left', 'center', 'center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[80,50,0,0]"

                        ><a href="booking.html" class="mo_btn mob_lg"><i class="icofont-cart-alt"></i>Ejay Studio</a>
                        </div>
                        <div class="tp-caption d-md-none d-sm-none d-xs-none d-lg-block"
                             data-frames='[{"delay":2000,"speed":700,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                             data-type="text"
                             data-x="right"
                             data-y="top"
                             data-hoffset="['-250','-150','0','0']"
                             data-voffset="['-170','-146','0','0']"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-visibility="['on', 'on', 'off', 'off']"

                        ><div class="round_anim"></div></div>
                        <div class="tp-caption d-md-none d-sm-none d-xs-none d-lg-block cusLayer"
                             data-frames='[{"delay":2400,"speed":700,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'

                             data-type="image"
                             data-x="right"
                             data-y="bottom"
                             data-hoffset="['-320','-320','0','0']"
                             data-voffset="['-170','-146','0','0']"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-visibility="['on', 'on', 'off', 'off']"

                        ><img src="{{asset('music/images/home_01/layer.png')}}" alt="App Store"></div>
                        <div class="tp-caption d-md-none d-sm-none d-xs-none"
                             data-frames='[{"delay":2800,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                             data-type="image"
                             data-x="left"
                             data-y="bottom"
                             data-hoffset="['-320','-320','0','0']"
                             data-voffset="['-170','-146','0','0']"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-visibility="['on', 'off', 'off', 'off']"

                        ><img src="{{asset('music/images/bg/page_layer.png')}}" alt="App Store"></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End:: Slider Section -->
    <div class="w3-content w3-display-container mobileslider">
        <img class="mySlides" src="{{asset($content->simage1)}}" style="width:100%; height: 400px">
        <img class="mySlides" src="{{asset($content->simage2)}}" style="width:100%; height: 400px">
        <img class="mySlides" src="{{asset($content->simage3)}}" style="width:100%; height: 400px">

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <!-- Begin:: Welcome Section -->
    <section class="commonSection welcomeSection" id="mission">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="{{asset('front/images/icons/1.png')}}" alt=""/>
                        <h5 class="primaryFont">{{$content->offer_title1}}</h5>
                        <h2>Ejay Studio <span class="colorPrimary fontWeight400">{{$content->mtitle2}}</span></h2>
                        <p>
                            Guitar Band Music School offers comprehensive guitar lessons that start with the fundamentals, including scales, chords, tuning, arpeggios, and rhythm adapted to various skill levels.
                        </p>
                    </div>
                </div>
            </div>
            <div  class="row">
                <div class="col-md-6">
                    <div >
                     <img src="{{asset('gal/grid-blog-2-571x353.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div >
                        <img src="{{asset('gal/grid.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Welcome Section -->

    <!-- Begin:: Service Section -->
    <div class="commonSection serviceSection hasBeforeDecoration hasAfterDecoration" id="offers">
        <div class="layer_img l_01 move_anim">
            <img src="{{asset('front/images/bg/12.png')}}" alt=""/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="{{asset('front/images/icons/2.png')}}" alt=""/>
                        <h5 class="primaryFont">Our Coaches</h5>
                        <h2>{{$content->offer_title}}</h2>
                        <p>
                            {{$content->offer_description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="serviceItem_01 text-center">
                       <img src="{{asset("gal/team-1-270x273.jpg")}}" style="width: 100%;">
                        <a href="#" class="btn btn-default" style="background-color: #ffd403;width: 233px;">Nathalie Porter</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="serviceItem_01 text-center">
                        <img src="{{asset("gal/team-2-270x273.jpg")}}" style="width: 100%;">
                        <a href="#" class="btn btn-default" style="background-color: #ffd403;width: 233px;">John Thompson</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="serviceItem_01 text-center">
                        <img src="{{asset("gal/team-3-270x273.jpg")}}" style="width: 100%;">
                        <a href="#" class="btn btn-default" style="background-color: #ffd403;width: 233px;">Mary Williams</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="serviceItem_01 text-center">
                        <img src="{{asset("gal/team-4-270x273.jpg")}}" style="width: 100%;">
                        <a href="#" class="btn btn-default" style="background-color: #ffd403;width: 233px;">Sam Clarke</a>
                    </div>
                </div>



            </div>
        </div>
        <div class="layer_img l_02 move_anim_two">
            <img src="{{asset('front/images/bg/11.png')}}" alt=""/>
        </div>
    </div>
    <!-- End:: Service Section -->

    @guest
        <!-- Begin:: Espace Section -->
        <section class="commonSection aboutSection" id="espace">
            <div class="layer_img move_anim">
                <img src="{{asset('front/images/bg/7.png')}}" alt=""/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 noPaddingRight clearfix">
                        <div class="aboutImg float-right clearfix">
                            <div class="shape1">
                                <img src="{{asset('front/images/bg/4.png')}}" alt=""/>
                            </div>
                            <div class="shape2">
                                <img src="{{asset('front/images/bg/5.png')}}" alt=""/>
                            </div>
                            <div class="shape3 move_anim_two">
                                <img src="{{asset('front/images/bg/6.png')}}" alt=""/>
                            </div>
                            <div class="abImg float-right">
                                <img src="{{asset($content->image)}}" alt="Makeover"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="abContent">
                            <h2>
                                Connectez-vous à <span class="fontWeight400 colorPrimary">Votre Compte</span>
                            </h2>
                            <p>
                                Espace prive
                            </p>
                            <a href="{{route('login')}}" class="mo_btn mob_lg mob_shadow"><i class="icofont-long-arrow-right"></i>Connexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Espace Section -->
    @endguest


    <!-- Begin:: Appointment Section -->
    <section class="commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="video_banner">
                            <img style="width: 100%" src="{{asset("gal/vid2.jpg")}}" alt=""/>

                            <a href="https://www.youtube.com/embed/yUur1wuhP88" class="popup_video"><i class="icofont-play"  id="myBtn" class="mybutton1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Appointment Section -->


    <!-- Begin:: About Section -->
    <section class="commonSection aboutSection" id="about">
        <div class="layer_img move_anim">
            <img src="{{asset('front/images/bg/7.png')}}" alt=""/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 noPaddingRight clearfix">
                    <div class="float-right clearfix">
                        <div class=" float-right">
                            <img src="{{asset('gal/large-features-1-570x368.jpg')}}" alt="Makeover"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="abContent">
                        <h2>
                            Welcome to

                            <span class="fontWeight400 colorPrimary">Ejay Studio</span>
                        </h2>
                        <p>
                            Guitar Band Music School offers comprehensive guitar lessons that start with the fundamentals, including scales, chords, tuning, arpeggios, and rhythm adapted to various skill levels.

                            Our core philosophy is that the best way for students to gain musical proficiency is through performance-based music education. All of our lessons for guitar students include a performance aspect.
                        </p>
                        <a href="#" class="mo_btn mob_lg mob_shadow"><i class="icofont-long-arrow-right"></i>Ejay Studio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Begin:: Service Section -->
{{--    <div class="commonSection serviceSection hasBeforeDecoration hasAfterDecoration" id="offers">--}}
{{--        <div class="layer_img l_01 move_anim">--}}
{{--            <img src="{{asset('front/images/bg/12.png')}}" alt=""/>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-10 offset-lg-1">--}}
{{--                    <div class="sectionTitle text-center">--}}
{{--                        <img src="{{asset('front/images/icons/2.png')}}" alt=""/>--}}
{{--                        <h5 class="primaryFont">Communauté</h5>--}}
{{--                        <h2>{{$content->package_title}}</h2>--}}
{{--                        <p>--}}
{{--                            {{$content->package_description}}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($pkg as $row)--}}
{{--                    <div class="col-lg-4  col-md-6">--}}
{{--                        <div class="serviceItem_01 text-center">--}}
{{--                            <img src="{{asset($row->image)}}" style="width: 100%; ">--}}
{{--                            <p style="margin-top: 20px;">--}}
{{--                                <h5>{{$row->title}}</h5>--}}
{{--                                <b> {{$row->price}}€({{$row->discount}}% de remise)</b>--}}
{{--                            </p><br>--}}
{{--                            <a href="#" class="btn btn-default">Réserve</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="layer_img l_02 move_anim_two">--}}
{{--            <img src="{{asset('front/images/bg/11.png')}}" alt=""/>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End:: Service Section -->
    <!-- End:: About Section -->
    <!-- Begin:: Blog Section -->
{{--    <section class="commonSection blogSection" id="blog">--}}
{{--        <div class="layer_img l_04 move_anim">--}}
{{--            <img src="{{asset('front/images/bg/16.png')}}" alt=""/>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-10 offset-lg-1">--}}
{{--                    <div class="sectionTitle text-center">--}}
{{--                        <img src="{{asset('front/images/icons/2.png')}}" alt="">--}}
{{--                        <h2>Galerie <span class="colorPrimary fontWeight400"></span></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($blogs as $blog)--}}
{{--                    <div class="col-lg-4 col-md-6">--}}
{{--                        <div class="blog_item_01">--}}
{{--                            <img src="{{asset("gal/team-1-270x273.jpg")}}" alt=""/>--}}
{{--                            <div class="bp_content">--}}

{{--                                <h3><a href="#">{{$blog->title}}</a></h3>--}}
{{--                                <a class="lr_more" href="{{route('blog.view', ['id' => $blog->id])}}">--}}
{{--                                    Apprendre encore plus--}}
{{--                                    <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">--}}
{{--                                        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End:: Blog Section -->

@endsection
