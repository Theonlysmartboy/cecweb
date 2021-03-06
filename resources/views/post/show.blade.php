@extends('layouts.front_layout.design')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <ul class="short">
            <li><a href="index.html">Home</a><span>|</span></li>
            <li>{{$branch_details->name}}</li>
        </ul>
    </div>
</div>
<!--//banner_info-->
<!--/ab-->
<div class="banner_bottom">
    <div class="container jumbotron">
      <h3 class="tittle-w3ls">{{$branch_details->name}}</h3>
      <div class="inner_sec_info_wthree_agile">
        <div class="help_full">
          <div class="col-md-6 banner_bottom_grid help">
            <img src="{{ asset('images/webimgs/banner1.jpg') }}" alt=" " class="img-responsive">
          </div>
          <div class="col-md-6 banner_bottom_left">
            <h4>About</h4>
            <p>{!!$branch_details->description!!} </p>
                <h4>Our Vision</h4>
                <p>{{$branch_details->vision}}.</p>
                <h4>Mission Statement</h4>
                <p>{{$branch_details->mission}}.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--//ab-->
<div class="banner_bottom">
    <div class="container jumbotron">
      <h3 class="tittle-w3ls">Head Pastor</h3>
      <div class="inner_sec_info_wthree_agile">
        <div class="help_full">
            <div class="col-md-6 banner_bottom_left">
                <h4>Name</h4>
                <p>{{$head_pastor->title ."".$head_pastor->name}} </p>
                    <h4>Message</h4>
                    <p>{!!$branch_details->pst_message!!}.</p>
                    <h4>Biography</h4>
                    <p>{{$head_pastor->bio}}.</p>
              </div>
          <div class="col-md-6 banner_bottom_grid help">
            <img src="{{ asset('images/webimgs/banner1.jpg') }}" alt=" " class="img-responsive">
          </div>
          
        </div>
      </div>
    </div>
  </div>
@endsection