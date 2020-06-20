@extends('layouts.church_layout.design')
@section('content')
<!-- wrapper -->
<div class="wrapper">
<!-- banner -->
<div class="banner" style="background-image: url('{{ asset('images/webimgs/branches/uploads/large/'.$branch_details->image) }}');">
  <div class="container">
    <!-- banner content -->
    <div class="banner-content">
      <!-- logo image -->
      <a href="{{ route('index') }}"><img class="img-responsive" src="img/logo.png" alt="" /></a>
      <!-- short paragraph -->
    <p>{{$branch_details->name}}</p>
      <!-- button link -->
      <a href="{{ route('index') }}" class="btn btn-info btn-lg">Back home</a>
    </div>
  </div>
</div>
	<!-- feature block -->
  <div class="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <!-- feature item -->
          <div class="feature-item">
            <!-- icon -->
            <i class="fa fa-pencil"></i>
            <!-- heading -->
            <h4>Mission</h4>
            <!-- paragraph -->
          {!!$branch_details->mission!!}
          </div>
<<<<<<< HEAD
        </div>
        <div class="col-md-6 col-sm-6">
          <!-- feature item -->
          <div class="feature-item">
            <!-- icon -->
            <i class="fa fa-eye"></i>
            <!-- heading -->
            <h4>Vision</h4>
            <!-- paragraph -->
            {!!$branch_details->vision!!}
=======
          <div class="col-md-6 banner_bottom_left">
            <h4>About</h4>
<<<<<<< HEAD
            <p>{!!$branch_details->description!!} </p>
=======
<<<<<<< HEAD
            <p>{!!$branch_details->description!!} </p>
=======
            <p>{{$branch_details->description}} </p>
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
                <h4>Our Vision</h4>
                <p>{{$branch_details->vision}}.</p>
                <h4>Mission Statement</h4>
                <p>{{$branch_details->mission}}.</p>
>>>>>>> 2a1f629ce824991de291c6147e2cf1033a7ba967
          </div>
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD
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
              {!!$branch_details->description!!}
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
              <img class="embed-responsive-item" src="{{ asset('images/webimgs/branches/uploads/large/'.$branch_details->image) }}">
            </div>
=======
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
<<<<<<< HEAD
                    <p>{!!$branch_details->pst_message!!}.</p>
=======
<<<<<<< HEAD
                    <p>{!!$branch_details->pst_message!!}.</p>
=======
                    <p>{{$branch_details->pst_message}}.</p>
>>>>>>> a1e83c677355f459c91f73aad871022140866511
>>>>>>> 2b8e1d0fc60b6da5afe17b7b19a242725c3a9256
                    <h4>Biography</h4>
                    <p>{{$head_pastor->bio}}.</p>
              </div>
          <div class="col-md-6 banner_bottom_grid help">
            <img src="{{ asset('images/webimgs/banner1.jpg') }}" alt=" " class="img-responsive">
>>>>>>> 2a1f629ce824991de291c6147e2cf1033a7ba967
          </div>
        </div>
      </div>
    </div>
  </div>
  	<!-- feature block -->
    <div class="feature">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <!-- feature item -->
            <div class="feature-item">
              <!-- icon -->
              <img class="img-circle" src="{{ asset('images/webimgs/pastors/uploads/'.$head_pastor->avatar) }}">
              <!-- heading -->
            <h4>{{$head_pastor->title}}</h4>
              <!-- paragraph -->
            <p>{{$head_pastor->name}}</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <!-- feature item -->
            <div class="feature-item">
              <!-- heading -->
              <h4>Message From the Church leader</h4>
              <!-- paragraph -->
              {!!$branch_details->pst_message!!}
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
							<a href="{{$branch_details->smedia}}" target="-blank"><i class="fa fa-facebook"></i></a>
            <a href="mailto:{{$branch_details->email}}"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
            </div>
            <p><strong>Physical Address:</strong>{{$branch_details->address}}</p>
            <p><strong>Telephone:</strong>{{$branch_details->tel}}</p>
					</div>
				</div>
			</div>
			
</div>
@endsection