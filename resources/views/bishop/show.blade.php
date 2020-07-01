@extends('layouts.front_layout.design')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <ul class="short">
            <li><a href="{{ route('index') }}">Home</a><span>|</span></li>
            <li>@if ($message->id == 1)Presiding Bishop&#39;s Message
                
            @else
            Deputy Presiding Bishop&#39;s Message
            @endif</li>
        </ul>
    </div>
</div>
<!--//banner_info-->
<div class="banner_bottom">
    <div class="container">
    <h3 class="tittle-w3ls">{{$message->title." ".$message->name}}</h3>
    <div class="inner_sec_info_wthree_agile">
        <div class="help_full">
          <div class="col-md-6 banner_bottom_grid help">
            <img src="{{ asset('images/webimgs/pastors/uploads/'.$message->avatar) }}" alt=" " class="img-responsive">
          </div>
          <div class="col-md-6 banner_bottom_left">
         {!!$message->text_message!!}
        </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
<object style="width:100%;height:100%;width: 820px; height: 461.25px; float: none; clear: both; margin: 2px auto;" data="{{$message->video_message}}">
    </object>
</div>
@endsection