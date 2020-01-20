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
	   		<a href="/{{$lang}}"><img class="logo2" src="{{asset('storage/'.setting('site.logo'))}}" alt=""></a>
			<a href="/{{$lang}}"><img class="logo-dark" src="{{asset('storage/'.setting('site.dark'))}}" alt=""></a>

			<div class="cont-right ">

            <nav class="menu-5 nav">
            	<ul class="wtf-menu menurtl">
                <li><a href="/{{$lang}}">{{__('home.home')}}</a>

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
                    <li><a href="/{{$lang}}">{{__('home.home')}}</a>

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


   @yield('content')
   <!--Start Content-->


	<!--Start Footer-->
		<footer class="footer"  id="footer">
			<div class="container">

				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<span>Short Info</span>
						<h1>Get in touch</h1>
					</div>
				</div>
				</div>

				<div class="get-touch">
					<div class="row">

						<div class="col-md-4">
							<div class="contact-us">
									<h4>Contact Us</h4>
									<div class="detail">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aenean ac.</p>
										<ul>
											<li class="phone"><i class="icon-telephone"></i> <span>+123 55 33 444 888</span></li>
											<li class="email"><i class="icon-email-1"></i> <span>Help@pearl.com</span></li>
											<li class="location"><i class="icon-home"></i> <span>329 Queensberry Street, North Me bourne, Australia.</span></li>
										</ul>
									</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="open-hours">
									<h4>Opening Hour</h4>
									<div class="detail">
										<ul>
											<li><span class="day">Monday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Tuesday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Wednesday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Thursday</span> <span class="time">09 am - 10 pm</span></li>
											<li><span class="day">Friday</span> <span class="time">11 am - 08 pm</span></li>
											<li><span class="day">Saturday</span> <span class="time">10 am - 11 pm</span></li>
											<li><span class="day">Sunday</span> <span class="time">Closed</span></li>
										</ul>
									</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="instagram">
									<h4>Instagram</h4>
									<div class="detail">
										<div class="col-md-4"><a href="#."><img src="images/instagram-img1.jpg" alt=""></a></div>
										<div class="col-md-4"><a href="#."><img src="images/instagram-img2.jpg" alt=""></a></div>
										<div class="col-md-4"><a href="#."><img src="images/instagram-img3.jpg" alt=""></a></div>
										<div class="col-md-4"><a href="#."><img src="images/instagram-img4.jpg" alt=""></a></div>
										<div class="col-md-4"><a href="#."><img src="images/instagram-img5.jpg" alt=""></a></div>
										<div class="col-md-4"><a href="#."><img src="images/instagram-img6.jpg" alt=""></a></div>
									</div>
							</div>
						</div>


					</div>
				</div>



				<div class="about-pearl">

					<div class="row">

					<div class="col-md-12">
						<div class="about-detail">
							<h5>About Pearl</h5>
							<p>PEARL is an Lorem ipsum porta placerat rutrum aliquet platea accumsan, molestie eros aliquet adipiscing egestas ultrices, leo convallis dolor nisl integer potenti fringilla aenean condimentum ipsum maecenas aliquet consectetur.</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="follow-us">
							<h5>Follow Along</h5>
							<ul>
								<li><a href="#."><i class="icon-facebook-1"></i></a></li>
								<li><a href="#."><i class="icon-twitter-1"></i></a></li>
								<li><a href="#."><i class="icon-google"></i></a></li>
								<li><a href="#."><i class="icon-pinterest-p"></i></a></li>
								<li><a href="#."><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-6">
						<div class="newsletter">
							<h5>Newsletter</h5>

							<div class="field">
								<p id="nws_success_msg" class="success_msg" style="display:none">Thank You for subscribing.</p>
								<form name="newsletter_form" id="newsletter_form" method="post" onSubmit="return false">
								<input name="nws_email_address" id="nws_email_address" type="text" onKeyPress="remove_newsletter_errors();" onblur="if(this.value == '') { this.value='Enter your e-mail address'}" onfocus="if (this.value == 'Enter your e-mail address') {this.value=''}" value="Enter your e-mail address">
								<a href="#." onClick="validateNewsletter();"><i class="icon-icons208"></i></a>
								</form>
							</div>

						</div>
					</div>


					</div>

				</div>

			</div>



			<div class="copyrights">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<span>Copyright © 2016 Pearl Hotel. All rights reserved. by <a href="#.">Brighthemes</a></span>
							<ul>
							<li><a href="#.">Permissions and Copyrights</a></li>
								<li><span class="divid">-</span></li>
							<li><a href="#.">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>


		</footer>
	<!--End Footer-->








<a href="#0" class="cd-top"></a>
  </div>




<script type="text/javascript" src="{{asset('front/js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="{{asset('front/js/scroll-desktop.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/scroll-desktop-smooth.js')}}"></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="{{asset('front/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.themepunch.tools.min.js')}}"></script>

<!-- Countdown -->
<script type="text/javascript" src="{{asset('front/js/countdown.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('front/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/cart-detail.js')}}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{asset('front/js/jquery.mmenu.min.all.js')}}"></script>

<!-- Form Drop Dow -->
<script type="text/javascript" src="{{asset('front/js/form-dropdown.js')}}"></script>

<!-- Date Picker and input hover -->
<script type="text/javascript" src="{{asset('front/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery-ui-1.10.3.custom.js')}}"></script>


<!-- All Scripts -->
<script type="text/javascript" src="{{asset('front/js/custom.js')}}"></script>


<!-- Switcher -->
<script type="text/javascript" src="{{asset('front/js/switcher-restaurant.js')}}"></script>


<!-- Date Picker -->
<script type="text/javascript">
[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
inputEl.addEventListener( 'focus', onInputFocus );
inputEl.addEventListener( 'blur', onInputBlur );
} );

function onInputFocus( ev ) {
classie.add( ev.target.parentNode, 'input--filled' );
}

function onInputBlur( ev ) {
if( ev.target.value.trim() === '' ) {
classie.remove( ev.target.parentNode, 'input--filled' );
}
}

//date picker
jQuery("#datepicker").datepicker({
inline: true
});



<!-- Form Drop Down -->
$(document).ready(function() {

		$(".basic-example").heapbox();

});

</script>


<!-- Revolution Slider -->
<script type="text/javascript">

jQuery('.tp-banner').show().revolution(
{
dottedOverlay:"none",
delay:16000,
startwidth:1170,
startheight:900,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:5,

navigationType:"nexttobullets",
navigationArrows:"solo",
navigationStyle:"preview",

touchenabled:"on",
onHoverStop:"on",

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

parallax:"mouse",
parallaxBgFreeze:"on",
parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

keyboardNavigation:"off",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:0,
fullWidth:"on",
fullScreen:"off",

spinner:"spinner4",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

autoHeight:"off",
forceFullWidth:"off",



hideThumbsOnMobile:"off",
hideNavDelayOnMobile:1500,
hideBulletsOnMobile:"off",
hideArrowsOnMobile:"off",
hideThumbsUnderResolution:0,

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0,
videoJsPath:"rs-plugin/videojs/",
fullScreenOffsetContainer: ""
});
</script>


</body>

<!-- Mirrored from wahabali.com/work/pearl-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 16:46:40 GMT -->
</html>
