<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" >

    <link rel="stylesheet" href="{{asset('css/youtube-video-gallery.css')}}" >

    <link rel="stylesheet" href="{{asset('css/meganizr.css')}}" >

    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" >

    

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" >
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" >
    <link rel="stylesheet" href="/css/fix.css" >

    <script src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>
    <script src="{{asset('js/jquery.cascadingdropdown.min.js')}}" ></script>
    <script src="{{asset('js/popper.min.js')}}" ></script>
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/simple-ticker.js')}}" ></script>

    <script src="{{asset('js/responsiveslides.min.js')}}" ></script>

    <script src="{{asset('js/jquery.youtubevideogallery.js')}}" ></script>


    <script src="{{asset('js/app.js')}}" ></script>


    

    
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    
            
    <script src="{{ asset('js/jquery.simpleTicker.js') }}"></script>
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script> -->
    

    
    <script src="{{asset('js/owl.carousel.min.js')}}" ></script>

    <script>
        $(document).ready(function () {
            $("#carouselExampleIndicators").owlCarousel({
                items: 1,
                autoPlay: true,
                autoplayTimeout: 4000,
                loop: true
            });
        });
    </script>
    

    


    <title> ???????????? ??????????????????????????? ?????????????????????????????? </title>

    <link rel="icon" href="{{asset('img/logo.png')}}" >



    
    <script>
        var lang = "bn";
    </script>
</head>

<body class="theme-theme-default">


    
    
    <div class="container home-page">
        <div class="row">
            <div class="col">
                <div id="top">
                    <div class="blocks">


                        <div class="top-menu">
                            <div class="">
                                <h2 class="h5 font-weight-bold mb- text-center">Website is under development</h2>

                            </div>

                        </div>
                        


                        <script>
                            $(document).ready(function () {

                                $("#mob_navigation").click(function () {
                                    $(".portal_cont").toggle();
                                });
                            });


                        </script>



                        <div style="position:relative;">
                            <div id="">
                                <div class="owl-carousel owl-theme" id="carouselExampleIndicators">
                                    @foreach (App\Models\Gallery::banner()->latest()->get() as $item)
                                    <div class="w-100 @if($loop->first) active @endif">
                                        <div title="{{$item->title}}">
                                            <img style="height: 242px;object-fit: cover" src="{{$item->image_url}}" 
                                                class="d-block w-100" alt="{{$item->title}}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--/carousel-->

                        </div>

                        <div class="plain-header">
                            <div id="logo">
                                <a title="" href="#">
                                    <img alt="Bangladesh Govertment logo" src="{{asset('img/bhpi.jpg')}}"  style=" width:50px; ">
                                </a>
                            </div>
                            <div class="" id="">
                                <span id="palin-header-text">
                                    <a title="???????????? ??????????????????????????? ??????????????????????????????" href="#"> ????????????
                                        ??????????????????????????? ??????????????????????????????</a>
                                </span>
                                <span id=""></span>
                            </div>
                        </div>

                        <div class="header-site-info" id="header-site-info">
                            <div>
                                <div id="logo">
                                    <a title="
                
            " href="#">
                                        <img alt="Bangladesh Govertment logo" src="{{asset('img/bhpi.png')}}" >
                                    </a>
                                </div>
                                <div class="clearfix" id="site-name-wrapper">
                                    <span id="site-name">
                                        <a title="???????????? ??????????????????????????? ?????????????????????????????? " href="#">
                                            ???????????? ??????????????????????????? ?????????????????????????????? </a>
                                    </span>
                                    <span id="slogan"></span>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>

                        



                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-12">
                                <div class="menu d-none d-md-block cmn-mrg-btm">
                                    <ul class="menu-container meganizr mzr-slide mzr-responsive">
                                        <li class="col0 home"><a href="/"><i class="fas fa-home"></i></a></li>
                                        <li class="mzr-drop menu-link  c1  focusin-drop focusClassDrop">
                                            <a href="#" title="?????????????????? ???????????????">?????????????????? ???????????????</a>
                                            <div class="sub-menu mzr-content " style="border-top: solid 8px">
                                                <div class="five-col">

                                                    <div class="one-col">
                                                        <h6 style="color: black; font-size: 16px!important;">
                                                            ???????????? ???????????????????????????</h6>

                                                        <ul class="mzr-links">
                                                            <li>
                                                                <a title="?????? ????????????"
                                                                    href="site/page/0f33802d-9a94-4162-8505-28ecd3ca45fa.html">??????
                                                                    ????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="???????????? ??? ????????????"
                                                                    href="site/page/0f33802d-9a94-4162-8505-28ecd3ca45fa.html">????????????
                                                                    ??? ????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="?????????????????? ???????????????????????????" href="#">??????????????????
                                                                    ???????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="?????????????????????????????? ???????????????????????????" href="#">??????????????????????????????
                                                                    ???????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="????????????????????? ???????????????????????????" href="#">?????????????????????
                                                                    ???????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="???????????????????????????" href="#">???????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="one-col">
                                                        <h6 style="color: black; font-size: 16px!important;">
                                                            ????????????</h6>

                                                        <ul class="mzr-links">
                                                            <li>
                                                                <a title="???????????? ??????????????????" href="#">???????????? ??????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="???????????????????????? ???????????? ????????????????????????" href="#">???????????????????????? ????????????
                                                                    ????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="???????????????????????? ??????????????????" href="#">???????????????????????? ??????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="?????????????????????????????????" href="#">?????????????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="???????????????????????????????????????" href="#">???????????????????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                            <li>
                                                                <a title="???????????? ?????????????????????????????? ???????????????????????????" href="#">????????????
                                                                    ?????????????????????????????? ???????????????????????????</a>

                                                                
                                                                <ul class="mzr-links">
                                                                </ul>

                                                                
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        

                                        <li class="mzr-drop menu-link  c3  focusin-drop focusClassDrop">
                                            <a href="#" title="???????????????/?????????????????? ????????????">???????????????/?????????????????? ????????????</a>
                                            <div class="sub-menu mzr-content " style="border-top: solid 8px">
                                                <div class="five-col">
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mzr-drop menu-link  c3  focusin-drop focusClassDrop">
                                            <a href="#" title="????????????????????????">????????????????????????</a>
                                            <div class="sub-menu mzr-content " style="border-top: solid 8px">
                                                <div class="five-col">
                                                    @foreach (App\Models\Technology::all() as $item)
                                                        <h6><a href="{{ route('technology.show',$item) }}">{{$item->name}}</a></h6>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>





                                        

                                        
                                        
                                        

                                        

                                        
                                        
                                        <li class="mzr-drop menu-link  c3  focusin-drop focusClassDrop">
                                            <a href="#" title="???????????????">???????????????</a>
                                            <div class="sub-menu mzr-content " style="border-top: solid 8px">
                                                <div class="five-col">

                                        
                                        <li class="mzr-drop menu-link  c5  focusin-drop focusClassDrop">
                                            <a href="#" title="????????????????????????">????????????????????????</a>
                                            <div class="sub-menu mzr-content " style="border-top: solid 8px">
                                                <div class="five-col">

                                                    <div class="one-col">
                                                        <a title="????????? ????????????????????????" href="{{ route('gallery',"image") }}">
                                                            <h6 style="color: black ;  font-size: 16px!important;">
                                                                ????????? ????????????????????????</h6>
                                                        </a>

                                                        <ul class="mzr-links">
                                                        </ul>
                                                    </div>

                                                    <div class="one-col">
                                                        <a title="??????????????? ????????????????????????" href="{{ route('gallery',"video") }}">
                                                            <h6 style="color: black ;  font-size: 16px!important;">
                                                                ??????????????? ????????????????????????</h6>
                                                        </a>

                                                        <ul class="mzr-links">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mzr-drop menu-link  c6  focusin-drop focusClassDrop">
                                            <a href="#" title="???????????????">???????????????</a>
                                            <div class="sub-menu mzr-content " style="border-top: solid 8px">
                                                <div class="five-col">

                                                    <div class="one-col">
                                                        <a title="??????????????? ??? ?????????????????????" href="#">
                                                            <h6 style="color: black;  font-size: 16px!important;">
                                                                ??????????????? ??? ?????????????????????</h6>
                                                        </a>

                                                        <ul class="mzr-links">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mob_menu d-block d-md-none" id="jmenu">
                                    <a href="javascript:;" class="show-menu menu-head" title=" ???????????? ???????????????????????? ????????????">
                                        <i class="fas fa-bars"></i>
                                        <span style="margin-left:10px;"> ???????????? ???????????????????????? ???????????? </span>
                                    </a>
                                    <div role="navigation" id="dawgdrops">
                                        <ul class="meganizr mzr-slide mzr-responsive mb-3" style="display: none;">
                                            <li class="col0 home"><a href="/"></a></li>
                                            <li class="mzr-drop col1">
                                                <a title="?????????????????? ???????????????">?????????????????? ???????????????</a>
                                                <div class="mzr-content sibling-toggle" style="display:none">
                                                    <div class="one-col">
                                                        <h6>???????????? ???????????????????????????</h6>
                                                        <ul class="mzr-links">


                                                            <li><a title="?????? ????????????" href="#">??????
                                                                    ????????????</a></li>



                                                            <li><a title="???????????? ??? ????????????" href="#">????????????
                                                                    ??? ????????????</a></li>



                                                            <li><a title="?????????????????? ???????????????????????????" href="#">??????????????????
                                                                    ???????????????????????????</a></li>



                                                            <li><a title="?????????????????????????????? ???????????????????????????" href="#">??????????????????????????????
                                                                    ???????????????????????????</a></li>



                                                            <li><a title="????????????????????? ???????????????????????????" href="#">?????????????????????
                                                                    ???????????????????????????</a></li>



                                                            <li><a title="???????????????????????????" href="#">???????????????????????????</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="one-col">
                                                        <h6>????????????</h6>
                                                        <ul class="mzr-links">


                                                            <li><a title="???????????? ??????????????????" href="#">????????????
                                                                    ??????????????????</a></li>



                                                            <li><a title="???????????????????????? ???????????? ????????????????????????" href="#">???????????????????????? ????????????
                                                                    ????????????????????????</a></li>



                                                            <li><a title="???????????????????????? ??????????????????" href="#">????????????????????????
                                                                    ??????????????????</a></li>



                                                            <li><a title="?????????????????????????????????" href="#">?????????????????????????????????</a>
                                                            </li>



                                                            <li><a title="???????????????????????????????????????" href="#">???????????????????????????????????????</a>
                                                            </li>



                                                            <li><a title="???????????? ?????????????????????????????? ???????????????????????????" href="#">????????????
                                                                    ?????????????????????????????? ???????????????????????????</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            
                                            <li class="mzr-drop col4">
                                                <a title="???-????????????">???-????????????</a>
                                                <div class="mzr-content sibling-toggle" style="display:none">
                                                    <div class="one-col">
                                                        <h6>??????????????? ???-????????????</h6>
                                                        <ul class="mzr-links">


                                                            <li><a title="?????????" href="#">?????????</a>
                                                            </li>



                                                            <li><a title="???-?????????????????? ???????????????" href="#">???-?????????????????? ???????????????</a>
                                                            </li>



                                                            <li><a title="???????????? ????????????" href="#">????????????
                                                                    ????????????</a></li>



                                                            <li><a title="???????????????????????? ?????????" href="#">???????????????????????? ?????????</a>
                                                            </li>



                                                            <li><a title="???????????????????????????" href="#">???????????????????????????</a>
                                                            </li>



                                                            <li><a title="?????????????????? ???????????????" href="#">??????????????????
                                                                    ???????????????</a></li>



                                                            <li><a title="????????????????????????????????? ?????????????????????????????????" href="#">?????????????????????????????????
                                                                    ?????????????????????????????????</a></li>



                                                            <li><a title="???-?????????" href="#">???-?????????</a></li>



                                                            <li><a title="???-???????????? ?????????" href="#">???-???????????? ?????????</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="one-col">
                                                        <h6>?????????????????? ???????????????</h6>
                                                        <ul class="mzr-links">


                                                            <li><a title="????????? (????????????????????????)" href="#">?????????
                                                                    (????????????????????????)</a></li>



                                                            <li><a title="????????? (?????? ?????????)" href="#">?????????
                                                                    (?????? ?????????)</a></li>



                                                            <li><a title="????????????????????????-??????????????????????????? (????????????????????????)"
                                                                    href="#">????????????????????????-???????????????????????????
                                                                    (????????????????????????)</a></li>



                                                            <li><a title="????????????????????????????????? ????????????????????????????????? (????????????????????????)"
                                                                    href="#">?????????????????????????????????
                                                                    ????????????????????????????????? (????????????????????????)</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mzr-drop col5">
                                                <a title="????????????????????????">????????????????????????</a>
                                                <div class="mzr-content sibling-toggle" style="display:none">
                                                    <div class="one-col">
                                                        <h6>????????? ????????????????????????</h6>
                                                        <ul class="mzr-links">
                                                        </ul>
                                                    </div>
                                                    <div class="one-col">
                                                        <h6>??????????????? ????????????????????????</h6>
                                                        <ul class="mzr-links">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mzr-drop col6">
                                                <a title="???????????????">???????????????</a>
                                                <div class="mzr-content sibling-toggle" style="display:none">
                                                    <div class="one-col">
                                                        <h6>??????????????? ??? ?????????????????????</h6>
                                                        <ul class="mzr-links">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="skip-main-content-start-here" style="opacity:0;font-size:1px;">Main Comtent Skiped
                        </div>
                        <style>
                            .mzr-responsive li.col0 {
                                display: block !important;
                            }

                            .meganizr .drop-five-columns {
                                width: 700px;
                            }

                            .meganizr .five-col {
                                width: 700px;
                            }

                            .menu .sub-menu .mzr-links a {
                                padding: 5px 0px !important;
                            }



                            .menu .mzr-drop:hover .sub-menu {
                                display: flex;
                                opacity: 1;
                            }



                            .menu .sub-menu>div h6 {
                                font-weight: bold;
                                margin-bottom: 4px;
                                /* padding: 3px 7px; */
                            }

                            .menu .sub-menu .mzr-links a {
                                display: block;
                                padding: 5px 7px;
                                line-height: 20px;
                                border-bottom: 1px dotted #e1e1e1;
                                font-size: 15px;
                            }

                            .menu .sub-menu .mzr-links a:hover {
                                color: #333;
                                background-color: #eee;
                            }

                            .menu ul.menu-container {
                                background-color: #fafafa;
                                border-bottom: 1px dotted #cccccc;
                                font-size: 12px;
                                position: relative;
                                display: flex;
                            }

                            .menu li {
                                list-style: none;
                            }

                            .menu li.menu-link {
                                border-right: 1px dotted #ccc;
                            }

                            .menu a {
                                position: relative;
                                z-index: 550;
                                display: block;
                                padding: 11px 15px 11px 15px;
                                font-size: 16px !important;
                                text-shadow: 0px 1px 1px white;
                                transition: color 0.15s ease-in, background-image 0.2s linear 0.15s;
                                margin: 0;
                                cursor: pointer;
                            }

                            .row .menu a:hover {
                                color: #000;
                                /* background-color: #000000; */
                                text-decoration: none;
                            }

                            .menu .c1>a:hover,
                            .menu .c1:hover {
                                background-color: #ff6600;
                            }

                            .menu .c1>a,
                            .menu .c1 h6 {
                                color: #ff6600;
                            }

                            .menu .c1 .sub-menu {
                                border-top: #ff6600 solid 8px;
                            }

                            .menu .c2>a:hover {
                                background-color: #c40a2a;
                            }

                            .menu .c2>a,
                            .menu .c2 h6 {
                                color: #c40a2a;
                            }

                            .menu .c2 .sub-menu {
                                border-top: #c40a2a solid 8px;
                            }

                            .menu .c3 .sub-menu {
                                border-top: #84154d solid 8px;
                            }

                            .menu .c3>a:hover {
                                background-color: #84154d;
                            }

                            .menu .c3>a,
                            .menu .c3 h6 {
                                color: #84154d;
                            }

                            .menu .c3 .sub-menu {
                                border-top: #84154d solid 8px;
                            }

                            .menu .c4 .sub-menu {
                                border-top: #098346 solid 8px;
                            }

                            .menu .c4>a:hover {
                                background-color: #098346;
                            }

                            .menu .c4>a,
                            .menu .c4 h6 {
                                color: #098346;
                            }

                            .menu .c5 .sub-menu {
                                border-top: #1399be solid 8px;
                            }

                            .menu .c5 .sub-menu {
                                border-top: #1399be solid 8px;
                            }

                            .menu .c5>a:hover {
                                background-color: #1399be;
                            }

                            .menu .c5>a,
                            .menu .c5 h6 {
                                color: #1399be;
                            }

                            .menu .c5 .sub-menu {
                                border-top: #1399be solid 8px;
                            }

                            .menu .c6 .sub-menu {
                                border-top: #8768de solid 8px;
                            }

                            .menu .c6 .sub-menu {
                                border-top: #8768de solid 8px;
                            }

                            .menu .c6>a:hover {
                                background-color: #8768de;
                            }

                            .menu .c6>a,
                            .menu .c6 h6 {
                                color: #8768de;
                            }

                            .menu .c6 .sub-menu {
                                border-top: #8768de solid 8px;
                            }

                            .mob_menu {
                                background: #fafafa;
                                height: 40px;
                                margin-bottom: 10px;
                            }

                            .mob_menu a.show-menu {
                                background-repeat: no-repeat !important;
                                padding-left: 5px;
                                background-color: #fafafa;
                                line-height: 40px;
                                display: block;
                                background-position: -3px 0;
                            }

                            .mob_menu a.show-menu:focus,
                            .mob_menu a.show-menu:visited {
                                text-decoration: none !important
                            }

                            .menu ul.menu-container {

                                display: inline-block !important;
                            }

                            .meganizr .one-col,
                            .meganizr .two-col,
                            .meganizr .three-col,
                            .meganizr .four-col,
                            .meganizr .five-col,
                            .meganizr .six-col {
                                float: left;
                                margin: 5px !important;
                            }


                            @media print {
                                .menu .sub-menu {
                                    display: none !important;
                                }
                            }


                            ul.mzr-links li>ul {
                                margin-left: 15px;
                            }

                            ul.mzr-links li>ul li a {
                                font-size: 14px !important;
                                display: block;
                                padding: 0 10px;
                            }




                            /*--------------------- add new css------------------------- */
                            .menu .sub-menu .mzr-links a:focus-within {
                                text-decoration: none !important;
                            }

                            .menu .focusin-drop:focus-within .sub-menu {
                                display: flex;
                                opacity: 1;
                            }

                            .focusin-drop:focus-within .mzr-content {
                                border-top: none !important;
                            }

                            .meganizr>li.focusin-drop:focus-within>a {
                                z-index: 650;
                            }

                            .meganizr>li.focusin-drop:focus-within>a:after {
                                position: absolute;
                                content: '';
                                top: 0;
                                left: 0;
                                width: 100%;
                            }

                            .meganizr>li.focusin-drop:focus-within>a:after,
                            .meganizr>li.focusin-drop>a.mzr-click:after {
                                position: absolute;
                                content: '';
                                top: 0;
                                left: 0;
                                width: 100%;

                            }


                            .meganizr>li.focusin-drop:focus-within>a,
                            .meganizr>li.focusin-drop>a.mzr-click {
                                z-index: 650;
                            }

                            @media only screen and (min-width:980px) {

                                .mzr-slide>li.focusin-drop:focus-within>div,
                                .mzr-slide>li.focusin-drop:focus-within>ul,
                                .mzr-slide>li>ul li.focusin-drop:focus-within>ul {
                                    top: 37px;
                                    opacity: 1;
                                    overflow: visible;
                                    visibility: visible;
                                    display: block;
                                }

                            }

                            @media only screen and (max-width: 959px) {

                                .mzr-responsive.mzr-slide>li.focusin-drop:focus-within>div,
                                .mzr-responsive.mzr-slide>li.focusin-drop:focus-within>ul,
                                .mzr-responsive.mzr-slide>li>ul li.focusin-drop:focus-within>ul,
                                .mzr-responsive.mzr-fade>li.focusin-drop:focus-within>div,
                                .mzr-responsive.mzr-fade>li.focusin-drop:focus-within>ul,
                                .mzr-responsive.mzr-fade>li>ul li.focusin-drop:focus-within>ul {
                                    top: auto;
                                }

                            }

                            /* -------------------end new css--------------- */
                        </style>
                        <script>
                            /* Responsive Design*/
                            $(document).ready(function () {

                                $(".focusClassDrop").hover(
                                    function () {
                                        $(".focusClassDrop").removeClass("focusin-drop");
                                    },
                                    function () {
                                        $(".focusClassDrop").addClass("focusin-drop");
                                    }
                                );

                                var wi = $(window).width();
                                if (wi < 768) {
                                    $('#jmenu .show-menu').click(function () {

                                        $(".mzr-responsive").slideToggle(700, "linear", function () {
                                        });

                                    });

                                    $(".mzr-drop> a").click(function () {

                                        $(".mzr-drop> a").siblings().addClass('sibling-toggle');

                                        $(this).parent().find(".mzr-content").removeClass('sibling-toggle').addClass('slide-visible').slideToggle(700, "linear", function () {
                                        });
                                        return false;
                                    });
                                }
                            });
    /// redundent home button
    // home page will nor show ??????????????? ????????????


                        </script>

                    </div>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div id="left">
                    <div class="d-flex justify-content-end">
                        <button class="mb-2 btn btn-outline-warning  btn-sm outline-none shadow-none text-right d-none"
                            onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></button>
                    </div>
                    <div id="flash">
                        <!--get & set site layer_id -->
                        <!--5-->
                        <div class="blocks">
            
                            
            
                            @yield('content')
            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="right-side-bar col-lg-3 col-md-12">
                <div id="right">
                    <div class="blocks">

            
            
            
            
            
                        <div class="block service-list">
                            <h5 class="bk-org title eservice-title ces_title">???-???????????? ?????????????????????</h5>
                            <ul>
                                <li>
                                    <a href="#" title="??????????????? ???????????? ???????????????" target="_blank">
                                        <i class=" text-green fa fa-check-circle" aria-hidden="true"></i> ??????????????? ????????????
                                        ???????????????
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="???-??????????????? ???????????????" target="_blank">
                                        <i class=" text-green fa fa-check-circle" aria-hidden="true"></i> ???-??????????????? ???????????????
                                    </a>
                                </li>
                            </ul>
                        </div>
            
            
            
                        <div class="block service-list">
                            <h5 class="bk-org title eservice-title ces_title">????????????????????? , ???????????? ??????????????????????????? ??????????????????????????????</h5>
                            <div>
                                <img src="{{asset('img/hkk.jpg')}}"  alt="Principle" width="100%"
                                    height="100%">
                            </div>
                        </div>


            
            
            
                        <div class="block service-list">
                            <h5 class="title social-bg">????????????????????? ????????????????????? ??????????????????</h5>
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
                                <h5 class="bk-org title eservice-title ces_title">????????????????????? ?????????????????? </h5>
                            </a>
                            <div class="content">
                            </div>
                        </div>
            
            
            
                        <div class="block service-list">
                            <a href="#">
                                <h5 class="bk-org title eservice-title ces_title">???????????? ?????????????????????</h5>
                            </a>
                            <div class="content">
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
                            <h5 class="title">????????? ??????????????? ?????????????????? ???????????? ?????????????????????????????????</h5>
                            <div class="content">
                                <p>
                                    <a href="#" target="_blank" title="????????? ??????????????? ?????????????????? ???????????? ?????????????????????????????????"><img
                                            alt="????????? ??????????????? ?????????????????? ???????????? ?????????????????????????????????"
                                            src="{{asset('img/sheikh-russel-quiz-fb-post-21.jpg')}}"  style="height:100%; width:100%">
                                    </a>
                                </p>
                            </div>
                        </div>
            
            
            
                        <div class="block" aria-selected="true" tabindex="0">
                            <h5 class="title">??????????????? ??????????????????</h5>
                            <div class="content">
                                <img alt="??????????????? ??????????????????" src="{{asset('img/National-Helpline_Large.jpg')}}" 
                                    style="height:100%; width:100%">
                            </div>
                        </div>
            
            
            
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="bottom">
                    <div class="blocks">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <div>
                    
                    <div class="footer-artwork" id="footer-artwork">&nbsp;</div>
                    <div class="footer-wrapper full-width" id="footer-wrapper">
                        <div id="footer-menu">
                            <div style="float: left; font-size: 1em;font-weight: bold">
                                ????????????????????????: <i><a href="https://fb.me/ahmadeyamin" target="_blank" >??????????????????</a>, <a href="https://fb.me/mdmajarulislam.mahim" target="_blank" >???????????????</a>, <a href="https://fb.me/MuhammadMahfuz00" target="_blank" >??????????????????</a></i>
                            </div>
                        </div>

                        <div class="footer-credit" id="footer">
                            <p>
                                ??????????????????????????? ??? ?????????????????????????????????:
                                <a href="#" title="???????????????????????????????????? ???????????????" target="_blank">???????????????????????????????????? ???????????????</a>,&nbsp;
                                <a href="#" title="???????????????" target="_blank">???????????????</a>,&nbsp;
                                <a href="#" title="??????????????????" target="_blank">??????????????????</a>,&nbsp;
                                <a href="#" title="???????????????????????????" target="_blank">???????????????????????????</a>&nbsp;???&nbsp;
                                <a href="#" title="???????????????" target="_blank">???????????????</a>
                            </p>
                            <p>
                                <span>
                                    ????????????????????? ?????????????????????:
                                    <a href="#" title=""><img style="height: 40px; vertical-align: baseline;"
                                            src="{{asset('img/np-logo-set.png')}}"  alt="a2i"></a>
                                </span>
                                <br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    
    
    
    <script>

        $(document).ready(function () {


            $("#banner-slider").css({ "display": "block" });
            $("#ad-slider").responsiveSlides();
            $("#banner-slider").responsiveSlides();
            $("#image-slider").responsiveSlides();

        });

        // //for video gallary
        // $(document).ready(function () {
        //     $("ul.youtube-videogallery").youtubeVideoGallery({

        //         title: 'default',
        //         iframeTemplate: '<div class="iframe"><div class="close"><a href="#">CLOSE</a></div><iframe title="Youtube video player" id="youtube-videogallery-iframe" style=" height: {options.innerHeight}px; width: {options.innerWidth}px;" frameborder="0" src="about:blank"></iframe></div>'

        //     });

        //     //close the iframe
        //     $(".close a").click(function (e) {
        //         e.preventDefault();
        //         $(".youtube-videogallery-bodycover").trigger("click");
        //     });

        // });

        $(document).ready(function () {
            $("div.right-side-bar, div.col-3").click(function () {
                var get_width = $(window).width();
                // alert(get_width);
                if (get_width >= 320 && get_width < 960) {
                    $(this).addClass("col-md-6");
                    $(this).removeClass("col-3");
                    // $('.right-side-bar').removeClass('col-3');
                    // $('.right-side-bar').addClass('col-md-6');
                }
            });
            $("div.right-side-bar, div.col-3").click();
            // start_np();
        });


    </script>

</body>



</html>