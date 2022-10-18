@extends('layouts.frontend.app')


@section('content')
<div class="col-md-9">
    <div id="left">
        <div class="d-flex justify-content-end">
            <button class="mb-2 btn btn-outline-warning  btn-sm outline-none shadow-none text-right d-none"
                onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></button>
        </div>
        <div id="flash">
            <!--get & set site layer_id -->
            <!--5-->
            <div class="blocks">

                

                <a href="#" target="_blank">
                    <div class="container containerpadma">
                        <div>
                            <img src="img/padmabanner.jpg" alt="padmacountdown" style="width: 100%;">
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class="blocks">

            <div id="notice-board" class="box p-4">
                <div class="notice-board-bg">
                    <h2 id="notice-board-bg">নোটিশ বোর্ড</h2>
                    <hr>
                    <div id="notice-board-ticker">
                        <ul class="list list-unstyled">
                            @foreach ($notices as $notice)
                            <li class="clearfix">
                                <a href="{{asset(Storage::url($notice->url))}}">
                                    <i class="text-green fa fa-arrow-circle-right"></i>
                                    <span>{{$notice->title}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="clearfix">
                            <a href="#" title="সকল " class="btn right">সকল </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="news" class="section-title">
                <h5 tabindex="0" title="News Content">খবর </h5>
                <div class="news-container">
                    <div id="news-ticker" class="ticker">
                        <ul>
                            @foreach ($pined_notices as $notice)
                            <li>
                                <a href="{{asset(Storage::url($notice->url))}}">
                                    {{$notice->title}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div>
                    <a href="#" title="সকল " class="btn">সকল
                    </a>
                </div>
            </div>

           
            <script>

                $(document).ready(function () {

                    $.simpleTicker($("#news-ticker"), {
                        delay: 3500,
                        effectType: 'roll'
                    });

                    $("#ad-slider").responsiveSlides();
                    $("#banner-slider").responsiveSlides();

                });

            </script>
            <div class="row service-row">
                <div class="col-md-6">
                    <div class="service-box box">
                        
                        <h4>আমাদের বিষয়ে</h4>
                        
                        <img src="img/629e06c5d54ab023383732.png" alt="আমাদের বিষয়ে" width="110"
                            style="max-width:700px;">
                        <ul class="caption fade-caption" style="margin:0">
                          
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="কর্মকর্তাবৃন্দ  ">
                                    কর্মকর্তাবৃন্দ
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="কর্মচারীবৃন্দ  ">
                                    কর্মচারীবৃন্দ
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="যোগাযোগ    ">
                                    যোগাযোগ
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সাংগঠনিক কাঠামো">
                                    সাংগঠনিক কাঠামো
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-box box">
                        
                        <h4 style="color: #2980b9">বৃত্তি/উপবৃত্তি</h4>
                        
                        <img src="img/b2995f2c03449ec20de1e7c5f27fd0d2.png" alt="বৃত্তি/উপবৃত্তি"
                            width="110" style="max-width:700px;">
                        <ul class="caption fade-caption" style="margin:0">
                          
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="আবেদন">
                                    আবেদন
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="বিজ্ঞপ্তি">
                                    বিজ্ঞপ্তি
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="নীতিমালা">
                                    নীতিমালা
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সহায়িকা">
                                    সহায়িকা
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row service-row">
                <div class="col-md-6">
                    <div class="service-box box">
                        
                        <h4>সেবাসমূহ</h4>
                        
                        <img src="img/629e21d4d49e2858261760.png"
                            alt="সেবাসমূহ" width="110" style="max-width:700px;">
                        <ul class="caption fade-caption" style="margin:0">
                           
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সেবার তালিকা    ">
                                    সেবার তালিকা
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="কী সেবা কীভাবে পাবেন    ">
                                    কী সেবা কীভাবে পাবেন
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সিটিজেন চার্টার">
                                    সিটিজেন চার্টার
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সেবাকুঞ্জ   ">
                                    সেবাকুঞ্জ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-box box">
                        
                        <h4>জব প্লেসমেন্ট সেল</h4>
                        
                        <img src="img/cfe3dc7e35e6f894fdbdf83af32eb44b.png"
                            alt="জব প্লেসমেন্ট সেল" width="110" style="max-width:700px;">
                        <ul class="caption fade-caption" style="margin:0">
                       
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="প্লেসমেন্ট সংক্রান্ত তথ্য (চলমান)">
                                    প্লেসমেন্ট সংক্রান্ত তথ্য (চলমান)
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="অনলাইনে জমা দিন">
                                    অনলাইনে জমা দিন
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="চাকুরী বিজ্ঞপ্তি">
                                    চাকুরী বিজ্ঞপ্তি
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="প্লেসমেন্ট কর্মকর্তাগণ">
                                    প্লেসমেন্ট কর্মকর্তাগণ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row service-row">
                <div class="col-md-6">
                    <div class="service-box box">
                        
                        <h4>কম্পিউটার টেকনোলজি</h4>
                        
                        <img src="img/a64bb9dafcf4853a6e4f719a4076e584.png"
                            alt="কম্পিউটার টেকনোলজি" width="110" style="max-width:700px;">
                        <ul class="caption fade-caption" style="margin:0">

                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="ফলাফল">
                                    ফলাফল
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সিলেবাস">
                                    সিলেবাস
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="ক্লাস রুটিন">
                                    ক্লাস রুটিন
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="পরিচিতি">
                                    পরিচিতি
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-box box">
                        
                        <h4>ইলেক্ট্রিক্যাল টেকনোলজি</h4>
                        
                        <img src="../file-rajshahi.portal.gov.bd/files/cnpi.chapainawabganj.gov.bd/front_service_box/b3eb11ce_539c_4c3d_9017_7c5c182eb15a/ce6b12a121825b8fa7e9743faf915367.png"
                            alt="ইলেক্ট্রিক্যাল টেকনোলজি" width="110" style="max-width:700px;">
                        <ul class="caption fade-caption" style="margin:0">
                            
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="ফলাফল">
                                    ফলাফল
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#" title="সিলেবাস">
                                    সিলেবাস
                                </a>
                            </li>
                            <li>
                                <i class="text-green fa fa-caret-right"></i>
                                <a href="#
                                    ক্লাস রুটিন
                                </a>
                            </li>
                            <li>
                                <i class=" text-green fa fa-caret-right"></i>
                                    <a href="#" title="পরিচিতি">
                                        পরিচিতি
                                    </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>

<div class="right-side-bar col-3">
    <div id="right">
        <div class="blocks">
          
            <div class="block">
                <div class="content">
                    <a href="#" target="_blank" title="">
                        <img src="img/discount_bn.jpg" style="height:100%; width:100%">
                    </a>
                </div>
            </div>



            <div class="block">
                <div class="content">
                    <a href="#" target="_blank" title="">
                        <img src="img/Bangladesh-Directory.jpg" style="height:100%; width:100%">
                    </a>
                </div>
            </div>



        </div>
        <div class="blocks">


            
            <div class="block job-block">
                <div class="content">
                    <table style="width:100%;table-layout:fixed;padding:0px;">
                        <tbody>
                            <tr style="border-bottom: 3px solid #f2f2f2">
                                <td class="apply-online">
                                    <a href="#" title="চাকুরি কর্নার">
                                        <span>চাকুরি কর্নার
                                            <sup>(0)</sup>
                                        </span>
                                    </a>
                                </td>
                                <td class="apply-online">
                                    <a href="#" title="দরপত্র">
                                        <span>দরপত্র
                                            <sup>(3)</sup>
                                        </span>
                                    </a>
                                </td>
                                <td class="apply-online">
                                    <!-- <a href="#"
                title="বিজ্ঞাপন">
                <span>বিজ্ঞাপন
                    <sup>(1)</sup>
                </span>
            </a> -->
                                    <!-- <a href="#"
                title="বিজ্ঞাপন">
                <span>বিজ্ঞাপন
                    <sup>(1)</sup>
                </span>
            </a> -->
                                    <a href="#" title="বিজ্ঞাপন">
                                        <span>বিজ্ঞাপন
                                            <sup>(1)</sup>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="npsylhet_ad owl-carousel">
                    </div>
                </div>
            </div>

            <style>
                #ad-slider .ad-slide-item {
                    width: 100%;
                    display: none;
                }

                #ad-slider .ad-slide-item:first-child {
                    display: block;
                }
            </style>



            <div class="block service-list">
                <a href="#">
                    <h5 class="bk-org title eservice-title ces_title">কেন্দ্রীয় ই-সেবা</h5>
                </a>
                <div class="content">


                </div>
            </div>



            <div class="block service-list">
                <h5 class="bk-org title eservice-title ces_title">ই-সেবা কেন্দ্র</h5>
                <ul>
                    <li>
                        <a href="#" title="নকলের জন্য আবেদন" target="_blank">
                            <i class=" text-green fa fa-check-circle" aria-hidden="true"></i> নকলের জন্য
                            আবেদন
                        </a>
                    </li>
                    <li>
                        <a href="#" title="ই-সেবার আবেদন" target="_blank">
                            <i class=" text-green fa fa-check-circle" aria-hidden="true"></i> ই-সেবার আবেদন
                        </a>
                    </li>
                </ul>
            </div>



            <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
            <script async type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <div class="block service-list">
                <h5 class="bk-org title eservice-title ces_title">অধ্যক্ষ , ভোলা পলিটেকনিক ইনস্টিটিউট</h5>
                <div>
                    <img src="img/hkk.jpg" alt="Principle" width="100%"
                        height="100%">
                </div>
            </div>

            <style>
                .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
                    background-color: #444;
                    width: 10px;
                }
            </style>

            <script>
                $(function () {
                    $(window).on("load", function () {
                        $(".service-list-scroll").mCustomScrollbar({
                            setHeight: 250,
                            //theme: "light-thick"
                        });
                    });
                });
            </script>



            <div class="block service-list">
                <h5 class="title social-bg">সামাজিক যোগাযোগ মাধ্যম</h5>
                <div class="content">
                    <a title="facebook" href="#" target="_blank" class="share-buttons">
                        <i class="fa fa-facebook-square fa-3x p-1 text-primary"></i>
                    </a>
                    <a title="facebook" href="#" target="_blank" class="share-buttons">
                        <i class="fa fa-facebook-square fa-3x p-1 text-primary"></i>
                    </a>
                    <a title="youtube" href="#" target="_blank" class="share-buttons">
                        <i class="fa fa-youtube-square fa-3x p-1 text-primary"></i>
                    </a>
                </div>
            </div>
            <div style="clear: both"></div>
            <style>
                .social-bg {
                    /* background-image: url("//file.portal.gov.bd/media/central/themes/theme-default/img/right-bar-images/social_media_corner.jpg"); */
                }
            </style>



            <div class="block service-list">
                <a href="#">
                    <h5 class="bk-org title eservice-title ces_title">ইনোভেশন কর্নার </h5>
                </a>
                <div class="content">
                </div>
            </div>



            <div class="block service-list">
                <a href="#">
                    <h5 class="bk-org title eservice-title ces_title">সেবা সহজিকরণ</h5>
                </a>
                <div class="content">
                </div>
            </div>



            <div class="block service-list">
                <h5 class="bk-org title eservice-title ces_title">ইভেন্ট ক্যালেন্ডার</h5>

                
                
                
                
                <link rel="stylesheet" href="css/jquery-ui.css">
                <script src="js/jquery-ui.js"></script>

                <div class="content">

                    <script>
                        var disabledDays = '[]';
                        var date = new Date();
                        $(function () {
                            $("#datepicker").datepicker({
                                dateFormat: "yy-mm-dd",
                                onSelect: function (date) {
                                    window.location = "bn/site/view/calendar_event/?q=" + date;
                                },
                                beforeShowDay: function (date) {
                                    var m = ('0' + (date.getMonth() + 1)).slice(-2)
                                    var d = ('0' + date.getDate()).slice(-2)
                                    var y = date.getFullYear();
                                    var concateDate = y + "-" + m + "-" + d;
                                    var index = disabledDays.indexOf(concateDate);

                                    if (index != -1) {
                                        return [true, 'css-class-to-highlight', ''];
                                    } else {
                                        return [true];
                                    }

                                }
                            });

                        });
                    </script>
                    <div class="clearfix"></div>
                    <div id="datepicker"></div>
                    <div style="margin-top: 10px;">
                        <a href="# class=" btn btn-secondary"
                            style="display:block; text-align:center; text-decoration:underline;color: #fff;font-weight: bold;">
                            সকল ইভেন্ট
                        </a>
                    </div>
                    <style type="text/css">
                        .ui-widget {
                            font-size: 12px;
                        }

                        .ui-datepicker {
                            width: 97%;
                        }

                        td {
                            padding: 3px !important;
                        }

                        .ui-state-default,
                        .ui-widget-content .ui-state-default,
                        .ui-widget-header .ui-state-default {
                            text-align: center;
                        }

                        .css-class-to-highlight {
                            background: orange !important;
                        }
                    </style>
                </div>
            </div>



            
        </div>


        <style>
            @media print {
                .right {
                    display: none !important;
                }
            }
        </style>
        <div class="blocks">



            <div class="block">
                <h5 class="title">শেখ রাসেল অনলাইন কুইজ প্রতিযোগিতা</h5>
                <div class="content">
                    <p>
                        <a href="#" target="_blank" title="শেখ রাসেল অনলাইন কুইজ প্রতিযোগিতা"><img
                                alt="শেখ রাসেল অনলাইন কুইজ প্রতিযোগিতা"
                                src="img/sheikh-russel-quiz-fb-post-21.jpg" style="height:100%; width:100%">
                        </a>
                    </p>
                </div>
            </div>



            <div class="block" aria-selected="true" tabindex="0">
                <h5 class="title">জরুরি হটলাইন</h5>
                <div class="content">
                    <img alt="জরুরি হটলাইন" src="img/National-Helpline_Large.jpg"
                        style="height:100%; width:100%">
                </div>
            </div>



        </div>
    </div>
</div>
@endsection