<!DOCTYPE html>
<html lang="en">
<?php
$gs = \App\Website::find(1);
$user = \Illuminate\Support\Facades\Auth::user();
?>
<head>
    <title>{{$gs->sitename}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clean Beauty Spa with predefined web elements which helps you to build your own site. These template is suitable for spa, beauty, care, girly, hair, health, beauty parlour, massage, skincare, saloon, make up, physiotherapy, salon, wellness, yoga website. Yoga & Meditation centers, Barbershop, Health & Wellness Centers, Medical, Physiotherapy, Cosmetic Treatment centers, ayurvedic treatments, pedicure, manicure procedures.">
    <meta name="keywords" content="spa, beauty, care, girly, hair, health, beauty parlour, massage, skincare, saloon, make up, physiotherapy, salon, wellness, yoga website. Yoga & Meditation centers, Barbershop, Health & Wellness Centers, Medical, Physiotherapy, Cosmetic Treatment centers, ayurvedic treatments, pedicure, manicure procedures">
    <meta name="author" content="ThemeWar">

    <!-- Start Include All CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/icofont.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/nounicon.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/makeover-icon.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/jquery.datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/lightcase.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/lightslider.css')}}"/>

    <!-- Revolution Slider Setting CSS -->
    <link rel="stylesheet" href="{{asset('front/css/settings.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/preset.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/ignore_for_wp.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"/>
    <!-- End Include All CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="{{asset('front/images/favicon.png')}}">
    <!-- Favicon Icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .btn-default{
            background-color: #f7a392;
            color: white;
        }
        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 20%;
            height: auto;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #f7a392;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 80%;
            border-left: none;
            height: auto;
        }
        .mobileslider{
            display: none;
        }
        .actionBox{
            position: relative;
            background: url({{asset($gs->mimage1)}}) no-repeat right bottom #f0f0f1;
            min-height: 274px;
            padding: 54px 0 65px 55px;

            transition: all ease 400ms;
            -moz-transition: all ease 400ms;
            -webkit-transition: all ease 400ms;
        }
        .abBg2{
            background: url({{asset($gs->mimage2)}}) no-repeat right bottom #e9f9fd;
        }
        .footer_01 {
            position: relative;
            overflow: hidden;
            padding: 20px 0 20px !important;
        }
        @media only screen and (max-width: 600px) {
            .slider_01{
                display: none;
            }
            .mobileslider{
                display: block;
            }
            .mySlides {display:none;}
            #mission{
                padding-top: 50px;
            }
            .tab{
                width: 100%;
            }
            .tabcontent{
                width: 100%;
            }
        }
        .mainMenu {
            position: relative;
            line-height: .8;
            padding: 37px 0 0 0px;
        }
        .header-transparent {
            background-color: rgba(0,0,0,0.7);
        }
        .mainMenu ul li a {
            display: block;
            font-size: 16px;
            line-height: .8;
            color: white !important;
            font-weight: 500;
            font-family: 'Playfair Display', serif;
            position: relative;
        }
        .header_01.fixedHeader {

            background: black !important;

        }

        @media (max-width: 1023px) {
            .header_03 .mainMenu, .mainMenu {

                background: #141313 !important;

            }
        }


    </style>
    <style>
        .info_box {

            margin: 0px 0 42px !important;
        }
        .tp-loader.spinner0, .tp-loader.spinner1{
            width: 0px !important;
            height: 0px !important;
        }
    </style>
    <style>
        #dots{
            display:none;
        }
        .section-title:before {
            background-color: #e5e5e5;
            content: "";
            height: 1px;
            left: 0;
            position: absolute;
            width: 80%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 1;
        }
        .main-nav > ul > li {
            display: inline-block;
            margin-right: 0px !important;
        }
        /* The Modal (background) */
        .modal1 {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(168, 150, 150, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content1 {
            margin: auto;
            padding: 20px;
            /*border: 1px solid #888;*/
            width: 50%;
            text-align: center;
        }

        /* The Close Button */
        .close1 {
            color: #fdfdfd;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close1:hover,
        .close1:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: inner-spin-button !important;
        }
        input[type=number]::-webkit-inner-spin-button {
            opacity: 1 !important;
        }


        .sp-area .sp-nav .sp-content .quantity {
            padding-top: 10px;
        }

        .header-middle_area .header-middle_nav {
            padding: 10px 0;
        }

        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            position: relative;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text1 {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }



        /* Fading animation */
        .fade1 {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        .mybutton {
            background-color: #060706; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 100%;
        }
        .mybutton1 {
            background-color: #000000; /* Green */
            border: none;
            color: #ffffff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .kenne-instagram_area {
            padding: 60px 0;
        }
        .banner-area-3 {
            padding: 60px 0 60px;
        }
        .minicart-btn_area a:hover{
            background-color: lightpink !important;
        }

        /*snackbar*/
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        #snackbar1 {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar1.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
        /*endsnackbar*/

        /*loader*/

        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 60px;
            height: 60px;
            margin: -76px 0 0 -76px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 }
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom {
            from{ bottom:-100px; opacity:0 }
            to{ bottom:0; opacity:1 }
        }
        /*endloader*/

        /*colors*/
        .colors ul{list-style:none; padding:0; margin: 0;}

        .colors li{margin: 0 20px 0 0; display: inline-block;}

        .colors label{cursor: pointer;}

        .colors input{display:none;}

        .colors input[type="radio"]:checked + .swatch{box-shadow: inset 0 0 0 2px white;}

        .swatch{
            display:inline-block;
            vertical-align: middle;
            height: 30px;
            width:30px;
            margin: 0 5px 0 0 ;
            border: 1px solid #d4d4d4;
        }
        #questions{
            margin-top: -100px;
        }
        .mdsdh{
            display: none;
        }
        @media only screen and (max-width: 600px) {
            .mdsdh{
                display: block;
            }
            .marge{
                margin: 10px;
            }
            .marge a{
                color:white;
            }
            #video{
                height: 200px;
                width: 300px;
            }
            .modal-content1{
                width: 100%;
            }
            #saleproduct{
                display: none;
            }
            #saleproduct1{
                display: block !important;
            }

            #questions{
                margin-top: -0px;
            }
            .mycolum{
                width: 20%;
                float: left;
            }
            .mdn{
                display: none;
            }
            #pt35{
                padding-top: 35px !important;
            }
        }

        .your-order h3 {
            border-bottom: 0px solid #e5e5e5 !important;
            font-size: 25px;
            padding-bottom: 10px;
            text-transform: uppercase;
            width: 100%;
        }
        .countdown-wrap .countdown.item-4 .countdown__item {
            border: 1px solid #080808;
            display: inline-block;
            position: relative;
            width: 70px;
            padding: 10px 0;
            text-align: center;
            margin-left: 15px;
        }
        .grid-view_area .blog-item_wrap [class*="col-"]:not(:nth-child(-n+2)) .blog-item {
            margin-top: 0px !important;
        }
        .grid-view_area {
            padding: 50px 0;
        }
        .color-list_area .color-list .single-color {
            border: 1px solid #e5e5e5;
            display: inline-block;
            margin-right: 5px;
            padding: 2px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }


        /* CSS Multiple Whatsapp Chat */
        .whatsapp-name {
            font-size: 16px;
            font-weight: 600;
            padding-bottom: 0;
            margin-bottom: 0;
            line-height: 0.5;
        }

        #whatsapp-chat {
            box-sizing: border-box !important;

            outline: none !important;
            position: fixed;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
            bottom: 90px;
            right: 30px;
            overflow: hidden;
            z-index: 99;
            animation-name: showchat;
            animation-duration: 1s;
            transform: scale(1);
        }
        a.blantershow-chat {
            /*   background: #009688; */
            background: #fff;
            color: #404040;
            position: fixed;
            display: flex;
            font-weight: 400;
            justify-content: space-between;
            z-index: 98;
            bottom: 20px;
            right: 30px;
            font-size: 15px;
            padding: 10px 20px;
            border-radius: 30px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
        }
        a.blantershow-chat svg {
            transform: scale(1.2);
            margin: 0 10px 0 0;
        }
        .header-chat {
            /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
            background: #009688;
            background: #095e54;
            color: #fff;
            padding: 20px;
        }
        .header-chat h3 {
            margin: 0 0 10px;
        }
        .header-chat p {
            font-size: 14px;
            line-height: 1.7;
            margin: 0;
        }
        .info-avatar {
            position: relative;
        }
        .info-avatar img {
            border-radius: 100%;
            width: 50px;
            float: left;
            margin: 0 10px 0 0;
        }

        a.informasi {
            padding: 20px;
            display: block;
            overflow: hidden;
            animation-name: showhide;
            animation-duration: 0.5s;
        }
        a.informasi:hover {
            background: #f1f1f1;
        }
        .info-chat span {
            display: block;
        }
        #get-label,
        span.chat-label {
            font-size: 12px;
            color: #888;
        }
        #get-nama,
        span.chat-nama {
            margin: 5px 0 0;
            font-size: 15px;
            font-weight: 700;
            color: #222;
        }
        #get-label,
        #get-nama {
            color: #fff;
        }
        span.my-number {
            display: none;
        }
        /* .blanter-msg {
          color: #444;
          padding: 20px;
          font-size: 12.5px;
          text-align: center;
          border-top: 1px solid #ddd;
        } */
        textarea#chat-input {
            border: none;
            font-family: "Arial", sans-serif;
            width: 100%;
            height: 50px;
            outline: none;
            resize: none;
            padding: 10px;
            font-size: 14px;
        }

        a#send-it {
            width: 30px;
            font-weight: 700;
            padding: 10px 10px 0;
            background:#eee;
            border-radius: 10px;

        svg {
            fill:#a6a6a6;
            height: 24px;
            width: 24px;
        }
        }

        .first-msg {
            background: transparent;
            padding: 30px;
            text-align: center;
        & span {
              background: #e2e2e2;
              color: #333;
              font-size: 14.2px;
              line-height: 1.7;
              border-radius: 10px;
              padding: 15px 20px;
              display: inline-block;
          }
        }

        .start-chat .blanter-msg {
            display: flex;
        }
        #get-number {
            display: none;
        }
        a.close-chat {
            position: absolute;
            top: 5px;
            right: 15px;
            color: #fff;
            font-size: 30px;

        }

        @keyframes ZpjSY{
            0% {
                background-color: rgb(182, 181, 186);
            }
            15% {
                background-color: rgb(17, 17, 17);
            }
            25% {
                background-color: rgb(182, 181, 186);
            }
        }

        @keyframes hPhMsj {
            15% {
                background-color: rgb(182, 181, 186);
            }
            25% {
                background-color: rgb(17, 17, 17);
            }
            35% {
                background-color: rgb(182, 181, 186);
            }
        }

        @keyframes iUMejp {
            25% {
                background-color: rgb(182, 181, 186);
            }
            35% {
                background-color: rgb(17, 17, 17);
            }
            45% {
                background-color: rgb(182, 181, 186);
            }
        }


        @keyframes showhide {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
        }
        @keyframes showchat {
            from {
                transform: scale(0);
                opacity: 0;
            }
        }
        @media screen and (max-width: 480px) {
            #whatsapp-chat {
                width: auto;
                left: 5%;
                right: 5%;
                font-size: 80%;
            }
        }
        .hide {
            display: none;
            animation-name: showhide;
            animation-duration: 0.5s;
            transform: scale(1);
            opacity: 1;
        }
        .show {
            display: block;
            animation-name: showhide;
            animation-duration: 0.5s;
            transform: scale(1);
            opacity: 1;
        }

        .whatsapp-message-container {
            display: flex;
            z-index: 1;
        }

        .whatsapp-message {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top 0px;
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        }

        .whatsapp-chat-body {
            padding: 20px 20px 20px 10px;
            background-color: rgb(230, 221, 212);
            position: relative;
        &::before {
             display: block;
             position: absolute;
             content: "";
             left: 0px;
             top: 0px;
             height: 100%;
             width: 100%;
             z-index: 0;
             opacity: 0.08;
             background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
         // background-image: url(https://res.cloudinary.com/eventbree/image/upload/v1575782560/Widgets/whatsappbg_opt.jpg);
         }
        }

        .dAbFpq {
            display: flex;
            z-index: 1;
        }

        .eJJEeC {
            background-color: rgb(255, 255, 255);
            width: 52.5px;
            height: 32px;
            border-radius: 16px;
            display: flex;
            -moz-box-pack: center;
            justify-content: center;
            -moz-box-align: center;
            align-items: center;
            margin-left: 10px;
            opacity: 0;
            transition: all 0.1s ease 0s;
            z-index: 1;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
        }

        .hFENyl {
            position: relative;
            display: flex;
        }

        .ixsrax {
            height: 5px;
            width: 5px;
            margin: 0px 2px;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
            background-color: rgb(158, 157, 162);
            animation-name: ZpjSY;
        }

        .dRvxoz {

            height: 5px;
            width: 5px;
            margin: 0px 2px;
            background-color: rgb(182, 181, 186);
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
            animation-name: hPhMsj;
        }

        .kAZgZq {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top 0px;
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        &::before {
             position: absolute;
             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
             background-position: 50% 50%;
             background-repeat: no-repeat;
             background-size: contain;
             content: "";
             top: 0px;
             left: -12px;
             width: 12px;
             height: 19px;
         }
        }

        .bMIBDo {
            font-size: 13px;
            font-weight: 700;
            line-height: 18px;
            color: rgba(0, 0, 0, 0.4);
        }

        .iSpIQi {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }

        .iSpIQi {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }

        .cqCDVm {
            text-align: right;
            margin-top: 4px;
            font-size: 12px;
            line-height: 16px;
            color:
                rgba(17, 17, 17, 0.5);
            margin-right: -8px;
            margin-bottom: -4px;
        }
        /*end whatsap popup css*/
        .wd_logo img {
            max-width: 75%!important;
            height: auto;
        }


    </style>
    {{--// our css--}}
    <style>
        .header_01.fixedHeader {
            background: #ffd403 !important;
        }
        .copyright {
            position: relative;
            background: #e2be10;
            padding: 17px 0;
        }
        .sectionTitle h5 {
            font-size: 50px!important;
            color: #ffd403!important;
            font-weight: 400!important;

        }
        .colorPrimary {
            color: #ffd403;
        }

        /*.about_widget .mo_btn {*/
        /*    background: #0d0b0b;*/
        /*    color: #FFF;*/
        /*}*/

        #backtotop {

            background: #ffd403!important;
        }

         .authWrap {
             background: #ffd403!important;
             margin: 0;
             padding: 30px;
         }

    </style>
</head>


<body>



@yield('content')


<script>
        @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
<!-- Start Include All JS -->
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.appear.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
<script src="{{asset('front/js/gmaps.js')}}"></script>
{{--<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>--}}
<script src="{{asset('front/js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{asset('front/js/slick.js')}}"></script>
<script src="{{asset('front/js/lightcase.js')}}"></script>
<script src="{{asset('front/js/lightslider.js')}}"></script>
<script src="{{asset('front/js/tweenmax.min.js')}}"></script>
<script src="{{asset('front/js/theia-sticky-sidebar.min.js')}}"></script>
<script src="{{asset('front/js/ResizeSensor.min.js')}}"></script>

<!-- Slider Revolution Main Files -->
<script src="{{asset('front/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Slider Revolution Extension -->
<script src="{{asset('front/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('front/js/theme.js')}}"></script>
<!-- End Include All JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@yield('script')
</body>
</html>
