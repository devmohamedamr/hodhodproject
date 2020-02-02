@extends('front.layout')
@section('content')
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
            <img src="{{asset('front/images/slides/banenr-img5.jpg')}}" width="100%" height="600px">
        </div>
   </div>
   <div class="wave"></div>


   <!--Start Content-->
	<div class="content">

		<!--Start The Menu-->
		<div class="our-menu">
            <div class="main-title">
                {{-- <span>{{__('home.Latest_Posts')}}</span> --}}
                <h1>{{__('home.Latest_Posts')}}</h1>
            </div>

			<div class="container p-4">
				<div class="row">
                    @foreach($menus as $menu)
					<div class="col-md-4">
						<div class="food-sec">
                            <a href="{{url("$lang/menu/$menuname/$menu->id")}}"><img width="300px" height="300px" src="{{asset("storage/$menu->img")}}" alt="">
                            </a>
                            <div class="detail">
								<h6>{{$menu->getTranslatedAttribute('title', $lang)}}</h6>
                            </div>
						</div>
                    </div>

                    @endforeach
				</div>
			</div>
        </div>
           <!--End Content-->




@endsection
