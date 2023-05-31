@extends('layouts.frontend.app')


@section('content')

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
                        <a href="{{ route('notices.index') }}" title="সকল " class="btn right">সকল </a>
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
                <a href="{{ route('notices.index') }}?pined" title="সকল" class="btn">সকল
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

        <div class="column block">
            <h5 class="bk-org title">
                পরিচিতি  	</h5>
        
        <p style="text-align:justify"><strong>কারিগরি শিক্ষা অধিদপ্তর, গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রণালয়াধীন কারিগরি ও মাদ্‌রাসা শিক্ষা বিভাগের একটি অধিদপ্তর। কারিগরি শিক্ষার সম্প্রসারণ ও মানোন্নয়নের মাধ্যমে দক্ষ মানব সম্পদ সৃষ্টির লক্ষ্যে ১৯৬০ সালে এটি প্রতিষ্ঠিত হয় । গত অর্ধ শতকে কারিগরি শিক্ষা ও প্রশাসনের বহু শাখা-প্রশাখার বিস্তার ঘটেছে। অধিদপ্তরের মূল কাজ ৪টি যথাঃ মানব সম্পদ ব্যবস্থাপনা, উন্নয়ন কর্মকান্ড পরিচালনা, একাডেমিক কার্যক্রমের তদারকীকরণ এবং কারিগরি শিক্ষা সংশ্লিষ্ট দেশীয় ও আন্তর্জাতিক সংস্থার সঙ্গে সংযোগ সৃষ্টি করা।</strong></p>
        <br>
        <p style="text-align:justify"><strong>অধিদপ্তরাধীন সরকারি শিক্ষা প্রতিষ্ঠানের মোট&nbsp;সংখ্যা ২০৫ টি। তিনটি স্তরে পাঠদান কার্যক্রম পরিচালিত হয়। যথাঃ সার্টিফিকেট স্তর, ডিপ্লোমা স্তর ও ডিগ্রী স্তর। সার্টিফিকেট পর্যায়ে রয়েছে ১৪৯টি সরকারি টেকনিক্যাল স্কুল ও কলেজ এবং ১টি ভোকেশনাল টিচার্স ট্রেনিং ইনষ্টিটিউট। ডিপ্লোমা পর্যায়ে ৫০টি পলিটেকনিক ইনষ্টিটিউট এবং ডিগ্রী পর্যায়ে ১টি টেকনিক্যাল টিচার্স ট্রেনিং কলেজ ও ৪টি ইঞ্জিনিয়ারিং কলেজ রয়েছে।</strong></p>
        <br>
        <p style="text-align:justify"><strong>কারিগরি শিক্ষা অধিদপ্তরটি এফ-৪/বি, শের-ই-বাংলা নগর প্রশাসনিক এলাকা, আগারগাঁও, ঢাকা-১২০৭ এ অবস্থিত।</strong></p>
        <br>
        <p style="text-align:justify">&nbsp;</p>
        <p>
            </p>
        </div>

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
            

            
        </div>

        <div class="row service-row">

            @foreach ($technologies as $technology)
            <div class="col-md-6">
                <div class="service-box box">
                    
                    <h4>{{$technology->name}}</h4>
                    
                    <img src="{{$technology->image_url}}"
                        alt="{{$technology->name}}" width="110" style="max-width:700px;">
                    <ul class="caption fade-caption" style="margin:0">

                        <li>
                            <i class="text-green fa fa-caret-right"></i>
                            <a href="{{$technology->results}}" title="ফলাফল">
                                ফলাফল
                            </a>
                        </li>
                        <li>
                            <i class="text-green fa fa-caret-right"></i>
                            <a href="{{$technology->syllabus}}" title="সিলেবাস">
                                সিলেবাস
                            </a>
                        </li>
                        <li>
                            <i class="text-green fa fa-caret-right"></i>
                            <a href="{{$technology->routine}}" title="ক্লাস রুটিন">
                                ক্লাস রুটিন
                            </a>
                        </li>
                        <li>
                            <i class="text-green fa fa-caret-right"></i>
                            <a href="{{ route('technology.show',$technology) }}" title="পরিচিতি">
                                পরিচিতি
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
            

            
        </div>

        <div class="row service-row">

            @foreach ($services as $service)
            <div class="col-md-6">
                <div class="service-box box">
                    
                    <h4>{{$service->name}}</h4>
                    
                    <img src="{{$service->image_url}}" alt="{{$service->name}}" width="110"
                        style="max-width:700px;">
                    <ul class="caption fade-caption" style="margin:0">
                      
                        @foreach ($service->links as $link)
                        <li>
                            <i class="text-green fa fa-caret-right"></i>
                            <a href="{{$link->url}}" title="{{$link->name}}">
                                {{$link->name}}
                            </a>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            @endforeach
            

        </div>

        
    </div>
</div>
@endsection