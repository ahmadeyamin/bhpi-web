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

        
    </div>
</div>
@endsection