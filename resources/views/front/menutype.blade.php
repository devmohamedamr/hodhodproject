@extends('front.layout')
@section('content')

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
                            <a href="{{url("$lang/menu/$menu/$menu->id")}}"><img width="300px" height="300px" src="{{asset("storage/$menu->img")}}" alt="">
                            </a>
                            <div class="detail">
								{{-- <span class="food-time">DINNER</span> --}}
								{{-- <span class="small-tit">Fantastic Bourbon</span> --}}
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
