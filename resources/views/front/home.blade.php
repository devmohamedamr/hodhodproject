@extends('front.layout')
@section('content')

<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
    <!-- SLIDE  -->


    <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

    <img src="{{asset('front/images/slides/banenr-img1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



    <div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
        data-x="center"
        data-y="380"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="850"
        data-start="1500"
        data-easing="Power3.easeInOut"
        data-elementdelay="0.1"
        data-endelementdelay="0.1"
        data-endspeed="1000"
        style=""><img src="{{asset('front/images/slides/flower.png')}}" alt="" >
    </div>


    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
        data-x="center"
        data-y="456"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="850"
        data-start="2500"
        data-easing="Power3.easeInOut"
        data-elementdelay="0.1"
        data-endelementdelay="0.1"
        data-endspeed="1000"
        style="font-size:72px; z-index: 5;font-family: 'hanimation'; max-width: auto; max-height: auto; white-space: nowrap;">{{setting("slider.slider1_$lang")}}
    </div>


</li>


<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

    <img src="{{asset('front/images/slides/banenr-img2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
        data-x="center"
        data-y="456"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="850"
        data-start="2500"
        data-easing="Power3.easeInOut"
        data-elementdelay="0.1"
        data-endelementdelay="0.1"
        data-endspeed="1000"
        style="font-size:72px; z-index: 5;font-family: 'hanimation'; max-width: auto; max-height: auto; white-space: nowrap;">{{setting("slider.slider2_$lang")}}
    </div>


{{--
    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
        data-x="0"
        data-y="468"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="500"
        data-start="3500"
        data-easing="Power3.easeInOut"
        data-splitin="chars"
        data-splitout="none"
        data-elementdelay="0.1"
        data-endelementdelay="0.1"
        style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">افضل الاطباق لدينا</div>
    </div> --}}




</li>


<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

    <img src="{{asset('front/images/slides/banenr-img3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



    <div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
        data-x="center"
        data-y="330"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="850"
        data-start="1500"
        data-easing="Power3.easeInOut"
        data-elementdelay="0.1"
        data-endelementdelay="0.1"
        data-endspeed="1000"
        style=""><img src="images/slides/flower.png" alt="" >
    </div>


    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
        data-x="center"
        data-y="456"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="850"
        data-start="2500"
        data-easing="Power3.easeInOut"
        data-elementdelay="0.1"
        data-endelementdelay="0.1"
        data-endspeed="1000"
        style="font-size:72px; z-index: 5; max-width: auto;font-family: 'hanimation'; max-height: auto; white-space: nowrap;">{{setting("slider.slider3_$lang")}}
    </div>



    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
        data-x="center"
        data-y="580"
        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
        data-speed="800"
        data-start="4200"
        data-easing="Power3.easeInOut"
        data-splitin="none"
        data-splitout="none"
        data-elementdelay="0.05"
        data-endelementdelay="0.1"
        style="z-index: 9; max-width: auto; max-height: auto;font-family: 'hanimation'; white-space: nowrap;"><div style="text-align:left; ">
        </div>
    </div>


</li>





</ul>
<div class="tp-bannertimer"></div>	</div>
<div class="wave"></div>
</div>

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
                    {{-- <div class="service-sec-top-bg"></div> --}}
                    <div class="service-sec">
                        <i class="{{$fs->section_img}}"></i>
                        <h6>{{$fs->getTranslatedAttribute('section_name', $lang)}}</h6>
                        <p>{!! $fs->getTranslatedAttribute('section_description', $lang) !!}</p>
                        @php
                            $url = "$lang/menu/".str_replace(' ', '-', strtolower($fs->getTranslatedAttribute('section_name', $lang)));
                        @endphp
                        <a href={{url("$url")}}>{{__('home.read_more')}}</a>
                    </div>
                    {{-- <div class="service-sec-bottom-bg"></div> --}}
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
                        <p>{!! str_limit(setting("story.$lang") , $limit = 300, $end = '') !!}.</p>
                    <a href={{url("/$lang/about")}} class="full-story">{{__("home.view_full_story")}}</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                    <img src="{{asset('front/images/our-story.jpg')}}" alt="">
                    </div>

                </div>
            </div>
        </div>
    <!--End Our Stiry-->




    <!--Start Upcoming Event-->
    {{-- <div class="upcoming-event">


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

    </div> --}}
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
                        <span class="title">{{$favoriteMenu->getTranslatedAttribute('menu_title', $lang)}}<span class="price">${{$favoriteMenu->menu_price}}</span></span>
                        <span class="tags">{!! $favoriteMenu->getTranslatedAttribute('menu_description', $lang) !!}</span>
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
                                @foreach($Testimonial as $test)
                                <div class="testi-sec">
                                <img src="{{asset("storage/$test->testimonial_user_img")}}" alt="">
                                <div class="height35"></div>
                                <span class="name">{{$test->getTranslatedAttribute('testimonial_name', $lang)}}</span>
                                <span class="work">{{$test->getTranslatedAttribute('testimonial_job', $lang)}}</span>
                                <div class="height20"></div>
                                <p>{!! $test->getTranslatedAttribute('testimonial_details', $lang) !!}</p>
                                <div class="height20"></div>

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
            <?php $clerestring =  strip_tags($blog->getTranslatedAttribute('blog_content', $lang)); ?>
           <div class="post item">
           <img class="lazyOwl" src="{{asset("storage/$blog->blog_img")}}" alt="">
                   <div class="detail">
                       <img src="images/news-cheff1.jpg" alt="">
                   <h5><a href="{{url("$lang/blog/$blog->id")}}">{{$blog->getTranslatedAttribute('blog_title', $lang)}}</a></h5>
                   <p>{{\Illuminate\Support\Str::limit($clerestring, 30, $end='...')}}</p>
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


@endsection
