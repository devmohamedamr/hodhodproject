@extends('front.layout')
@section('content')

   <!--Start Content-->
	<div class="content">

		<!--Start The Menu-->
		<div class="our-menu">

			<div class="container p-4">
                <div class="row justify-content-md-center">
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
							<img src="{{asset("storage/$menu->menu_img")}}" alt="">
							<div class="detail">
								{{-- <span class="food-time">DINNER</span> --}}
								{{-- <span class="small-tit">Fantastic Bourbon</span> --}}
								<h6>{{$menu->getTranslatedAttribute('menu_title', $lang)}}</h6>
								<p>{!! $menu->getTranslatedAttribute('menu_description', $lang) !!}</p>
                                <button type="button" data-toggle="modal" data-target="#menusection" class="btn btn-info">{{__('home.selectmenu')}}</button>
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
                                      <label for="email">{{__('form.name')}}</label>
                                      <input type="text" name="name" class="form-control" placeholder="Enter email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{__('form.address')}}</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter email" id="email">
                                      </div>
                                      <div class="form-group">
                                        <label for="email">{{__('form.phone')}}</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter email" id="email">
                                      </div>
                                    <div class="form-group">
                                      <label for="pwd">{{__('form.email')}}</label>
                                      <input type="email" name="email" class="form-control" placeholder="Enter password" id="pwd">
                                    </div>
                                <input type="hidden" name="menu" value="{{$menu->id}}">
                                    <div class="form-group">
                                        <label for="inputState">{{__('form.section_service')}}</label>
                                        <select id="inputState" name="service" class="form-control">
                                        <option value="1">{{__('home.service')}}</option>
                                        <option value="2">{{__('home.palace')}}</option>
                                          <option value="3">{{__('home.festival_room')}}</option>
                                          <option value="4">{{__('home.hotel')}}</option>
                                          <option value="5">{{__('home.rest')}}</option>
                                        </select>

                                    </div>
                                    <button type="submit" class="btn btn-primary">send</button>
                                  </form>

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
