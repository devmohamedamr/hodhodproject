@extends('front.layout')
@section('content')

      <!--Start Content-->
	<div class="content">

		<!--Start Shop Detail-->
			<div class="shop-detail">
				<div class="container">

					<div class="product-detail">
						<div class="row">

							<div class="col-md-6">
								<div class="pro-image"><img src="{{asset("storage/$menu_details->menu_img")}}" alt=""></div>
							</div>

							<div class="col-md-6">
								<div class="pro-detail">

									<h3>{!! $menu_details->getTranslatedAttribute('menu_title',$lang) !!}</h3>
									<div class="review">
										<i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i> <span>(3 customer reviews)</span>
									</div>
									<p>{!! $menu_details->getTranslatedAttribute('menu_description',$lang) !!}</p>
									<div class="pro-cart">
                                    <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#menusection">{{__('home.selectmenu')}}</button>
									</div>
									{{-- <span class="categories"><strong>Categories:</strong>   Food booth, Restaurant</span> --}}

								</div>
							</div>

						</div>
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
            <input type="hidden" required name="menu" value="{{$menu_details->id}}">
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
   <!--End Content-->




   @endsection
