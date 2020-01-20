<!DOCTYPE html>
<html>
<!-- Mirrored from wahabali.com/work/pearl-demo/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 16:59:26 GMT -->
<head>
<title>{{setting('site.title')}}</title>

    <meta name="keywords" content="">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="icon" type="image/png" href="images/favicon-pearl.png">

    <link href="{{asset("front/css/pearl-restaurant_$lang.css")}}" rel="stylesheet" type="text/css">

    <!--Medical Guide Icons-->
    <link href="{{asset('front/fonts/pearl-icons.css')}}" rel="stylesheet" type="text/css">

	<!-- Default Color-->
    <link href="{{asset('front/css/default-color.css')}}" rel="stylesheet" id="color"  type="text/css">

    <!--bootstrap-->
	{{-- <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet" type="text/css"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--Dropmenu-->
	<link href="{{asset('front/css/dropmenu.css')}}" rel="stylesheet" type="text/css">

	<!--Sticky Header-->
	<link href="{{asset("front/css/sticky-header-$lang.css")}}" rel="stylesheet" type="text/css">

	<!--Sticky Countdown-->
	<link href="{{asset('front/css/countdown.css')}}" rel="stylesheet" type="text/css">

	<!--revolution-->
	<link href="{{asset('front/css/settings.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front/css/extralayers.css')}}" rel="stylesheet" type="text/css">

    <!--Owl Carousel-->
	<link href="{{asset('front/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">

	<!--Date Picker-->
	<link href="{{asset('front/css/date-pick.css')}}" rel="stylesheet" type="text/css">

	<!--Form Dropdown-->
	<link href="{{asset('front/css/form-dropdown.css')}}" rel="stylesheet" type="text/css">

    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.mmenu.all.css')}}" />

	<!--PreLoader-->
	<link href="{{asset('front/css/loader.css')}}" rel="stylesheet" type="text/css">

    <!--switcher-->
	<link href="{{asset('front/css/switcher.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('front/css/customestyle.css')}}" rel="stylesheet" type="text/css">

</head>

  <body>


	<!--Switcher-->

  <div id="wrap">

   <!--Start PreLoader-->
   <div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Loading...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--End PreLoader-->


   <!--Start Header-->
	<div id="header-1">
       <header class="header-two">
		   <div class="container">
	   		<a href="index.html"><img class="logo2" src="{{asset('storage/'.setting('site.logo'))}}" alt=""></a>
			<a href="index.html"><img class="logo-dark" src="{{asset('storage/'.setting('site.dark'))}}" alt=""></a>

			<div class="cont-right ">

            <nav class="menu-5 nav">
            	<ul class="wtf-menu menurtl">
                    @foreach($SectionMenu as $section)
                <li><a href="{{$lang}}/menu/{{str_replace(' ', '-', strtolower($section->getTranslatedAttribute('section_name', $lang)))}}">{{$section->getTranslatedAttribute('section_name', $lang)}}</a>
                        @php
                            $subSectionMenu = \App\SubSection::withTranslations()->where('section_id',$section->id)->get();
                        @endphp
                            @if(count($subSectionMenu)>0)
                                    <ul class="submenu">
                                        @foreach ($subSectionMenu as $subsectionmenulist)
                                            <li> <a href="{{$lang}}/menu/{{str_replace(' ', '-', strtolower($subsectionmenulist->getTranslatedAttribute('section_name', $lang)))}}">{{$subsectionmenulist->getTranslatedAttribute('section_name', $lang)}}</a> </li>
                                        @endforeach
                                    </ul>
                            @endif
                    </li>
                    @endforeach
                </ul>
            </nav>
			</div>
		</div>

       </header>
	</div>

   <!--End Header-->


	<!-- Mobile Menu Start -->
	<div class="container">
    <div id="page">
			<header class="header">
				<a href="#menu"></a>

			</header>

			<nav id="menu">
                <ul class="wtf-menu menurtl">
                    @foreach($SectionMenu as $section)
                <li><a href="{{$lang}}/menu/{{str_replace(' ', '-', strtolower($section->getTranslatedAttribute('section_name', $lang)))}}">{{$section->getTranslatedAttribute('section_name', $lang)}}</a>
                        @php
                            $subSectionMenu = \App\SubSection::withTranslations()->where('section_id',$section->id)->get();
                        @endphp
                            @if(count($subSectionMenu)>0)
                                    <ul class="submenu">
                                        @foreach ($subSectionMenu as $subsectionmenulist)
                                            <li> <a href="{{$lang}}/menu/{{str_replace(' ', '-', strtolower($subsectionmenulist->getTranslatedAttribute('section_name', $lang)))}}">{{$subsectionmenulist->getTranslatedAttribute('section_name', $lang)}}</a> </li>
                                        @endforeach
                                    </ul>
                            @endif
                    </li>
                    @endforeach
                </ul>
			</nav>
		</div>
		</div>
    <!-- Mobile Menu End -->



	<!--Start Sub Banner-->
    <div class="sub-banner" style="height: 600px;color: wheat">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
                        {!! $sliders->getTranslatedAttribute('slider_content', $lang) !!}					</div>
				</div>
			</div>
		</div>
		<div>
        <img src="{{asset('storage/'.$sliders->slider_img)}}" width="100%" height="600px">
        </div>
   </div>
   <div class="wave"></div>

   <!--End Sub Banner-->
