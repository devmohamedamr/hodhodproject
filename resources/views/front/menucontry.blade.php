@extends('front.layout')
@section('content')

   <!--Start Content-->
	<div class="content">

		<!--Start The Menu-->
		<div class="our-menu">
            <div class="main-title">
                {{-- <span>{{__('home.Latest_Posts')}}</span> --}}
                <h1>{{$Section_name}}</h1>
            </div>
			<div class="container p-4">
                <div class="row justify-content-md-center mb-5">
                    @foreach($menusection as $section)
                    <div class="col-md-1 mr-5">
                        <a href="{{url("/$lang/menucontry/$section->id")}}">
                            <img class="roundcountry" src="{{asset('storage/'.$section->menu_img)}}">
                        </a>
                    </div>
                    @endforeach
                </div>
				<div class="row">
                    @foreach($menus as $menu)
					<div class="col-md-4">
						<div class="food-sec">
                        <a href="{{url("$lang/menudetails/$menu->id")}}"><img src="{{asset("storage/$menu->menu_img")}}" alt="">
                            </a>
                            <div class="detail">
								{{-- <span class="food-time">DINNER</span> --}}
								{{-- <span class="small-tit">Fantastic Bourbon</span> --}}
								<h6>{{$menu->getTranslatedAttribute('menu_title', $lang)}}</h6>
								<p>{!! $menu->getTranslatedAttribute('menu_description', $lang) !!}</p>
                                <button style="margin-bottom: 25px;" type="button" data-toggle="modal" data-target="#menusection" class="btn btn-danger">{{__('home.selectmenu')}}</button>
                                <a href="{{url("$lang/menudetails/$menu->id")}}" style="margin-bottom: 25px;" class="btn btn-danger">{{__('home.menu_details')}}</a>

                            </div>
						</div>
                    </div>




                    <div class="modal" id="menusection" style="margin-top:80px">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">{{__('form.section_service')}}</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                            <form action="{{url('order/store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" id="name" required name="name" class="form-control" placeholder="{{__('form.name')}}" id="email">
                                        <div class="error" id="nameerror"></div>

                                      </div>
                                      <div class="form-group">
                                          <input type="text" id="address" required name="address" class="form-control" placeholder="{{__('form.address')}}" id="email">
                                          <div class="error" id="addresserror"></div>

                                      </div>
                                        <div class="form-group">
                                          <input type="text" id="phone" required name="phone" class="form-control" placeholder="{{__('form.phone')}}" id="email">
                                          <div class="error" id="phoneerror"></div>

                                      </div>
                                      <div class="form-group">
                                        <input type="email" id="email" required  name="email" class="form-control" placeholder="{{__('form.email')}}" id="pwd">
                                        <div class="error" id="emailerror"></div>

                                      </div>
                                <input type="hidden" required name="menu" value="{{$menu->id}}">
                                    <div class="form-group">
                                        <label for="inputState">{{__('form.section_service')}}</label>
                                        <select required id="inputState" name="service" class="form-control">
                                        <option value="1">{{__('home.service')}}</option>
                                        <option value="2">{{__('home.palace')}}</option>
                                          <option value="3">{{__('home.festival_room')}}</option>
                                          <option value="4">{{__('home.hotel')}}</option>
                                          <option value="5">{{__('home.rest')}}</option>
                                        </select>

                                    </div>
                                    <div class="row">
                                        <button type="submit" style="margin:auto" onclick="validation()" class="btn btn-danger">{{__('home.send')}}</button>
                                    </div>
                                  </form>

                            </div>


                          </div>
                        </div>
                      </div>

                    @endforeach
				</div>
			</div>
        </div>
           <!--End Content-->




@endsection
