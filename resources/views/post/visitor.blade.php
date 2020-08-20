@extends('layouts.front_layout.design')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short">
            <li><a href="{{ route('index') }}">Home</a><span>|</span></li>
            <li>Announcements</li>
        </ul>
    </div>
</div>
<!--//banner_info-->
<!--/ab-->
@foreach($posts as $post)
<div class="banner_bottom">
    <div class="container">
      <div class="inner_sec_info_wthree_agile">
        <div class="help_full">
          <div class="col-md-6 banner_bottom_grid help">
            <img src="{{ asset('/images/webimgs/posts/'.$post->image) }}" alt="{{$post->title}} " class="img-responsive">
          </div>
          <div class="col-md-6 banner_bottom_left">
            <h4>{{$post->title}}</h4>
            {!!$post->content!!}
               </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection