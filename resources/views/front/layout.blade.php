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
	<link href="{{asset('front/css/sticky-header.css')}}" rel="stylesheet" type="text/css">

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

			<div class="cont-left ">

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

			{{-- <ul class="social-icons">
				<li><a href="#."><i class="icon-facebook-1"></i></a></li>
				<li><a href="#."><i class="icon-twitter-1"></i></a></li>
				<li><a href="#."><i class="icon-google"></i></a></li>
			</ul> --}}
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
				<ul>
					<li class="select"><a href="#.">Home</a>
                    	<ul>
							<li class="select"> <a href="index.html">Home Page 1</a> </li>
							<li> <a href="index2.html">Home Page 2</a> </li>
						</ul>
                    </li>
					<li><a href="#.">Fresh Menu</a>
                    	<ul>
                        	<li> <a href="menu.html">Menu 1</a> </li>
							<li> <a href="menu2.html">Menu 2</a> </li>
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
					<li><a href="#book-table">Book a Table</a></li>


				</ul>


			</nav>
		</div>
		</div>
    <!-- Mobile Menu End -->



        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $Slider)
              <div class="carousel-item @if($Slider->id == 1) active @endif">
                <img class="d-block w-100" src="{{asset('storage/'.$Slider->slider_img)}}" alt="Third slide">
                <div class="carousel-caption">
                    @if($lang == 'ar')
                    {!! $Slider->slider_content_ar !!}
                    @else
                    {!! $Slider->slider_content_en !!}
                    @endif
                  </div>
            </div>
            @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



   <!--Start Content-->
   <div class="content">


		<!--Start Services-->
		<div class="services">
			<div class="container">

				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
                    <span>{{__("home.Introduction")}}</span>
					<h1>{{__("home.OUR_SERVICES")}}</h1>
					<p>{{__("home.our_service_description")}}</p>
					</div>
				</div>
				</div>

				<div class="row">
                    @foreach($favoriteSection as $fs)
					<div class="col-md-4">
						<div class="serv-main-sec">
						<div class="service-sec-top-bg"></div>
						<div class="service-sec">
							<i class="{{$fs->section_img}}"></i>
							<h6>{{$fs->section_name}}</h6>
							<p>{!! $fs->section_description !!}</p>
							<a href="menu3.html">read more</a>
						</div>
						<div class="service-sec-bottom-bg"></div>
						</div>
					</div>
                    @endforeach
				</div>

			</div>
		</div>
		<!--End Services-->




		<!--Start Master of Town-->
		<div class="master-town">

				<div class="parallax">
					<div class="detail">
                    <h1> {!! setting("slogan.$lang") !!} </h1>
						{{-- <a href="http://themeforest.net/item/pearl-hotel-restaurant-template/14373573?ref=brighthemes" class="white-btn">Buy Now</a> --}}
					</div>
				</div>

		</div>
		<!--End Master of Town-->




		<!--Start Our Stiry-->
			<div class="our-story">
				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<div class="story-detail">
							<div class="main-title">
                            <span>{{__('home.Discover')}}</span>
								<h1>{{__('home.our_story')}}</h1>
							</div>
							<p>{!! setting("story.$lang") !!}.</p>
							<a href="our-story.html" class="full-story">view full story</a>
							</div>
						</div>

						<div class="col-md-6">
							<img src="images/our-story.jpg" alt="">
						</div>

					</div>
				</div>
			</div>
		<!--End Our Stiry-->




		<!--Start Upcoming Event-->
		<div class="upcoming-event">


				<div class="parallax parallax-event">

					<div class="detail">

						<div class="container">

						<div class="row">
						<div class="col-md-12">
							<div class="main-title-white">
							<span>{{__('home.Dont_Miss')}}</span>
							<h1>{{__('home.UPCOMING_EVENTS')}}</h1>
							</div>
						</div>
						</div>


						<ul id="example">
							<li><span class="days">00</span><p class="days_text">Days</p></li>
							<li class="seperator">:</li>
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li class="seperator">:</li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li class="seperator">:</li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>

						<div class="event-detail">
							<div class="row">

								<div class="col-md-4">
									<img src="images/event-img.jpg" alt="">
								</div>

								<div class="col-md-8">
									<div class="event-text">
										<h6>How to Properly Use Spices</h6>
										<span><i class="icon-clock"></i> April 22, 2016 / 8:30 pm - 11:00 pm</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...  <a href="event-detail.html">Read More</a></p>
										<a href="events.html" class="view-event">view all events</a>
									</div>
								</div>

							</div>
						</div>

						</div>

					</div>

				</div>

		</div>
		<!--End Upcoming Event-->





		<!--Start Today Food-->
			<div class="today-food">
				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<img src="{{asset("storage/$favoriteMenu->menu_img")}}" alt="">
						</div>

						<div class="col-md-6">
							<div class="special-food">
							<div class="main-title">
                            <span>{{__('home.Todays')}}</span>
								<h1>{{__('home.SPECIALS_FOOD')}}</h1>
							</div>

							<div class="food-detail">
                            <span class="title">{{$favoriteMenu->menu_title}}<span class="price">${{$favoriteMenu->menu_price}}</span></span>
                            <span class="tags">{!! $favoriteMenu->menu_description !!}</span>
							</div>

							</div>
						</div>


					</div>
				</div>
			</div>
		<!--End Today Food-->





		<!--Start Book Table-->
		<div id="book-table"></div>
		<div class="height35"></div>
	<!--Start Customer Words-->
    <div class="customer-words">

        <div class="parallax parallax-customer-words">
            <div class="detail">

                <div class="main-title-white">
                <span>{{__('home.Some_Words')}}</span>
                <h1>{{__('home.FROM_CUSTOMERS')}}</h1>
                </div>

                <div id="testimonials">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                            <div class="span12">

                                <div id="owl-demo2" class="owl-carousel">

                                <div class="testi-sec">
                                <img src="images/testimonial-img1.jpg" alt="">
                                <div class="height35"></div>
                                <span class="name">Christian Stewart</span>
                                <span class="work">Fashion Designer</span>
                                <div class="height20"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
                                <div class="height20"></div>
                                <div class="rating">
                                    <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
                                </div>
                                </div>

                                <div class="testi-sec">
                                <img src="images/testimonial-img2.jpg" alt="">
                                <div class="height35"></div>
                                <span class="name">johny Bravo</span>
                                <span class="work">TV Actor</span>
                                <div class="height20"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. </p>
                                <div class="height20"></div>
                                <div class="rating">
                                    <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
                                </div>
                                </div>

                                <div class="testi-sec">
                                <img src="images/testimonial-img3.jpg" alt="">
                                <div class="height35"></div>
                                <span class="name">Rubica noi</span>
                                <span class="work">Founder Photography</span>
                                <div class="height20"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan.</p>
                                <div class="height20"></div>
                                <div class="rating">
                                    <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
                                </div>
                                </div>


                                </div>

                            </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

</div>
<!--End Customer Words-->
		<!--End Book Table-->





        <div class="latest-news">
            <div class="container">

             <div class="row">
             <div class="col-md-12">

                 <div class="main-title">
                     <span>{{__('home.Latest_Posts')}}</span>
                     <h1>{{__('home.FROM_BLOG')}}</h1>
                 </div>

             </div>
             </div>




             <div id="latest-news">
         <div class="container">
           <div class="row">
            <div class="col-md-12">
             <div class="span12">

               <div id="owl-demo" class="owl-carousel">
                @foreach($blogs as $blog)
                <?php $clerestring =  strip_tags($blog->blog_content); ?>
               <div class="post item">
               <img class="lazyOwl" src="{{asset("storage/$blog->blog_img")}}" alt="">
                       <div class="detail">
                           <img src="images/news-cheff1.jpg" alt="">
                       <h5><a href="{{url("$lang/blog/$blog->id")}}">{{$blog->blog_title}}</a></h5>
                       <p>{{\Illuminate\Support\Str::limit($clerestring, 150, $end='...')}}</p>
                           <span><i class="icon-clock"></i>{{$blog->created_at}}</span>
                       </div>
                   </div>
               @endforeach
               </div>

             </div>
           </div>
           </div>
         </div>

     </div>



         </div>
    </div>










	 </div>
   <!--End Content-->







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
