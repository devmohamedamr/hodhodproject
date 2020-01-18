<!DOCTYPE html>
<html>
<!-- Mirrored from wahabali.com/work/pearl-demo/menu2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 16:53:52 GMT -->
<head>
    <title>Welcome to Pearl</title>

    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link rel="icon" type="image/png" href="images/favicon-pearl.png">

    <link href="{{asset("front/css/pearl-restaurant_$lang.css")}}" rel="stylesheet" type="text/css">

    {{-- my style --}}

    <link href="{{asset('front/css/customestyle.css')}}" rel="stylesheet" type="text/css">

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

</head>
  <body>


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
   <!--Start Header-->
   <div id="header-1">
    <header class="header-two">
        <div class="container">
            <a href="index.html"><img class="logo2" src="{{asset('storage/'.setting('site.logo'))}}" alt=""></a>
         <a href="index.html"><img class="logo-dark" src="{{asset('storage/'.setting('site.dark'))}}" alt=""></a>

         <div class="cont-right ">

         <nav class="menu-5 nav">
             <ul class="wtf-menu">
             <li class="select-item"><a href="#.">{{__("home.home")}}</a>
                 </li>

                 <li><a href="#.">{{__("home.party")}}</a>
                     <ul class="submenu">
                     <li> <a href="{{$lang}}/menu/1">{{__("home.Buffets")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/2">{{__("home.Barbecue")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/3">{{__("home.Arabic_cooking")}}</a> </li>
                     </ul>
                 </li>

                 <li><a href="#.">{{__("home.Subsistence")}}</a>
                     <ul class="submenu">
                         <li> <a href="{{$lang}}/menu/4">{{__("home.Hot")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/5">{{__("home.Dry")}}</a> </li>
                     </ul>
                 </li>

                 <li><a href="#.">{{__("home.Rations_services")}}</a>
                     <ul class="submenu">
                         <li> <a href="{{$lang}}/menu/6">{{__("home.Missions")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/7">{{__("home.Consulates")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/8">{{__("home.Tourism_companies")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/9">{{__("home.Governmental_ministries")}}</a> </li>

                     </ul>
                 </li>

                 <li><a href="#.">{{__("home.sacred_sites")}}</a>
                     <ul class="submenu">
                         <li> <a href="{{$lang}}/menu/10">{{__("home.Pilgrims_inside")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/11">{{__("home.Raft_institutions")}}</a> </li>
                     </ul>
                 </li>

                 <li><a href="#.">{{__("home.sacred_sites")}}</a>
                     <ul class="submenu">
                         <li> <a href="{{$lang}}/menu/12">{{__("home.Charitable_section")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/13">{{__("home.The_way")}}</a> </li>
                         <li> <a href="{{$lang}}/menu/14">{{__("home.Breakfast_fasting")}}</a> </li>

                     </ul>
                 </li>
                 <li><a href="{{$lang}}/about">{{__("home.About_company")}}</a>


                 <li><a href="{{$lang}}/callus">{{__("home.call_us")}}</a>

                 </li>


             </ul>
         </nav>

         </div>
     </div>

    </header>
 </div>

<!--End Header-->

   <!--End Header-->


	<!-- Mobile Menu Start -->
	<div class="container">
    <div id="page">
			<header class="header">
				<a href="#menu"></a>

			</header>

			<nav id="menu">
				<ul>
					<li><a href="#.">Home</a>
                    	<ul>
							<li> <a href="index.html">Home Page 1</a> </li>
							<li> <a href="index2.html">Home Page 2</a> </li>
						</ul>
                    </li>
					<li class="select"><a href="#.">Fresh Menu</a>
                    	<ul>
                        	<li><a href="menu.html">Menu 1</a> </li>
							<li class="select"> <a href="menu2.html">Menu 2</a> </li>
							<li> <a href="menu3.html">Menu 3</a> </li>
                        </ul>
                    </li>

					<li><a href="our-story.html">Our Story</a></li>


                    <li><a href="#.">Blog</a>
                    	<ul>
                        	<li> <a href="blog.html">Blog 1</a> </li>
							<li> <a href="blog2.html">Blog 2</a> </li>
                        </ul>
                    </li>

					<li><a href="#.">Contact Us</a>
                    	<ul>
                        	<li> <a href="contact-us.html">Contact-us 1</a> </li>
							<li> <a href="contact-us2.html">Contact-us 2</a> </li>
                        </ul>
                    </li>

					<li><a href="shop.html">Order Online</a></li>
					<li><a href="index.html#book-table">Book a Table</a></li>


				</ul>


			</nav>
		</div>
		</div>
    <!-- Mobile Menu End -->



	<!--Start Sub Banner-->
   <div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>the menu</h1>
						<span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a class="select">Menu</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   <div class="wave"></div>

   <!--End Sub Banner-->



   <!--Start Content-->
	<div class="content">

		<!--Start The Menu-->
		<div class="our-menu">
            <div class="container">
                <div class="row justify-content-md-center">
                    @foreach($menusection as $section)
                    <div class="col-md-1 mr-5">
                        <a href="{{url("/$lang/menucontry/$section->id")}}">
                            <img class="roundcountry" src="{{asset('storage/'.$section->menu_img)}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
			<div class="container p-4">
				<div class="row">
                    @foreach($menus as $menu)
					<div class="col-md-4">
						<div class="food-sec">
							<img src="{{asset("storage/$menu->menu_img")}}" alt="">
							<div class="detail">
								{{-- <span class="food-time">DINNER</span> --}}
								{{-- <span class="small-tit">Fantastic Bourbon</span> --}}
								<h6>{{$menu->getTranslatedAttribute('menu_title', $lang)}}</h6>
								<p>{!! $menu->getTranslatedAttribute('menu_description', $lang) !!}</p>
                            <button class="btn btn-info">{{__('home.selectmenu')}}</button>
                            </div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
		<!--End The Menu-->

	</div>
   <!--End Content-->







	<!--Start Footer-->
		<footer class="footer" id="footer">
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

</body>

<!-- Mirrored from wahabali.com/work/pearl-demo/menu2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 16:53:52 GMT -->
</html>
