@extends('layouts.church_layout.design')
@section('content')
<!-- wrapper -->
<div class="wrapper">
<!-- banner -->
<div class="banner" style="background-image: url('{{ asset('images/webimgs/banner2.jpg') }}');">
  <div class="container">
    <!-- banner content -->
    <div class="banner-content">
      <!-- logo image -->
      <a href="{{ route('index') }}"><img class="img-responsive" src="{{ asset('images/webimgs/ministries/uploads/'.$ministry_details->emblem) }}" alt="" /></a>
      <!-- short paragraph -->
    <p>{{$ministry_details->name}}</p>
      <!-- button link -->
      <a href="{{ route('index') }}" class="btn btn-info btn-lg">Back home</a>
    </div>
  </div>
</div>
	<!-- feature block -->
  <div class="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <!-- feature item -->
          <div class="feature-item">
            <!-- icon -->
            <i class="fa fa-pencil"></i>
            <!-- heading -->
            <h4>Mission</h4>
            <!-- paragraph -->
          {!!$ministry_details->mission!!}
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <!-- feature item -->
          <div class="feature-item">
            <!-- icon -->
            <i class="fa fa-eye"></i>
            <!-- heading -->
            <h4>Vision</h4>
            <!-- paragraph -->
            {!!$ministry_details->vision!!}
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <!-- feature item -->
          <div class="feature-item">
            <!-- icon -->
            <i class="fa fa-star"></i>
            <!-- heading -->
            <h4>Ministry Objectives</h4>
            <!-- paragraph -->
            {!!$ministry_details->objectives!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- subscribe and About block -->
  <div class="subscribe">
    <div class="container">
      <div class="sub-content">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <!-- subscribe update message -->
            <div class="sub-message">
              <!-- heading -->
              <h3>About Us</h3>
              <!-- paragraph -->
              {!!$ministry_details->description!!}
             <!-- paragraph -->
              <!-- update form  -->
              <form role="form">
                <div class="input-group">
                  <input type="text" class="form-control input-lg" placeholder="Email Address">
                  <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">Subscribe</button>
                  </span>
                </div><!-- /input-group -->
              </form>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
              <img class="embed-responsive-item" src="{{ asset('images/webimgs/ministries/uploads/large/'.$ministry_details->emblem) }}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- footer above social block -->
			<div class="footer-above">
				<div class="container">
					<!-- footer above main content -->
					<div class="above-content">
						<!-- testimonial content / paragraph -->
						<p class="post">"We love to hear from you. Reach us through our pages bellow"</p>
						<!-- heading -->
						<h4>Get In Touch With us through Social Media</h4>
						<div class="social">
							<a href="{{$ministry_details->smedia}}" target="-blank"><i class="fa fa-facebook"></i></a>
            <a href="mailto:{{$ministry_details->email}}"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
            </div>
            <p><strong>Physical Address:</strong>{{$ministry_details->address}}</p>
            <p><strong>Telephone:</strong>{{$ministry_details->tel}}</p>
					</div>
				</div>
			</div>
			
</div>
@endsection