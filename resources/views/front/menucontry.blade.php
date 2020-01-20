@extends('front.layout')
@section('content')



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
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info">{{__('home.selectmenu')}}</button>
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



   <div class="modal" id="myModal" style="margin-top:80px">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

            <form action="/action_page.php" method="post">
                <div class="form-group">
                  <label for="email">{{__('form.name')}}</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="email">{{__('fomr.address')}}</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="email">{{__('form.phone')}}</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                  </div>
                <div class="form-group">
                  <label for="pwd">{{__('form.email')}}</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
                <div class="form-group">
                    <label for="inputState">{{__('form.section_service')}}</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
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

<!--End The Menu-->


@endsection
