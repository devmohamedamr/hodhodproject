@extends('front.layout')
@section('content')
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
<div class="container">
    <div class="row">
        <div class="col-md-9 m-auto">
            {!! setting("story.$lang") !!}

        </div>
    </div>
</div>

@endsection
