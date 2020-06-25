@extends('layouts.front_layout.design')
@section('content')
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Christ’s Evangelistic Church</h3>
						<p>We are the Light of the World</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="{{ route('members.create') }}" class="two scroll ">Join Us</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Bible based</h3>
						<p>Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the 
              Holy Spirit, and teaching them to obey everything I have commanded you. And surely I am with you always, to the very end 
              of the age” (Matthew 28:18-20)</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="{{ route('members.create') }}" class="two scroll ">Join Us</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Christ Centre</h3>
						<p>Christ is the the only way through which one can be saved and Therefore on Him alone we base our beliefs</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="{{ route('members.create') }}" class="two scroll ">Join Us</a>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>people oriented</h3>
						<p>---</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="{{ route('members.create') }}" class="two scroll ">Join Us</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
<!--/ab-->
<div class="banner_bottom">
  <div class="container">
    <h3 class="tittle-w3ls">About Us</h3>
    <div class="inner_sec_info_wthree_agile">
      <div class="help_full">
        <div class="col-md-6 banner_bottom_grid help">
          <img src="{{ asset('images/webimgs/banner1.jpg') }}" alt=" " class="img-responsive">
        </div>
        <div class="col-md-6 banner_bottom_left">
          <h4>Christ&#39;s Evangelistic Church (CEC)</h4>
          <p>We are a body of churches dedicated to serving God&#39;s purposes in the present times and fulfilling the great commission 
            <code>&#34;Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the 
              Holy Spirit, and teaching them to obey everything I have commanded you. And surely I am with you always, to the very end 
              of the age&#34; (Matthew 28:18-20)</code> mandated by Jesus Christ. </p>
              <h4>Our Vision</h4>
              <p>To see people evangelized, discipled, equipped, empowered and serving God faithfully.</p>
          <div class="ab_button">
            <a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{ route('about_us') }}" role="button">Read More </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container jumbotron">
    <h4 class="tittle-w3ls text-center">Message From The Preciding Bishop</h4>
    <div class="inner_sec_info_wthree_agile">
      <div class="help_full">
        <div class="col-md-4 banner_bottom_grid help">
          <img src="{{ asset('images/webimgs/pastors/uploads/kephar.jpg') }}" alt=" " class="img-responsive">
        </div>
        <div class="col-md-8 banner_bottom_left">
          <h4>Bishop Kephar</h4>
          <p>-</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container jumbotron">
    <h4 class="tittle-w3ls text-center">Message From The Deputy Preciding Bishop</h4>
    <div class="inner_sec_info_wthree_agile">
      <div class="help_full">
        <div class="col-md-4 banner_bottom_grid help">
          <img src="{{ asset('images/webimgs/pastors/uploads/ombori.jpg') }}" alt=" " class="img-responsive">
        </div>
        <div class="col-md-8 banner_bottom_left">
          <h4>Bishop Ombori</h4>
          <p>-</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--//ab-->
<!--Greeting-->
<
<!--/what-->
<div class="works">
  <div class="container">
    <h3 class="tittle-w3ls cen">CORE VALUES</h3>
    <div class="inner_sec_info_wthree_agile">
      <div class="ser-first">
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-shield" aria-hidden="true"></span>
          <h3>Team work</h3>
          <p></p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-pencil" aria-hidden="true"></span>
          <h3>Integrity in all aspects of Christian living</h3>
          <p></p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-star" aria-hidden="true"></span>
          <h3>Accountability and transparency</h3>
          <p></p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-thumbs-up" aria-hidden="true"></span>
          <h3>Diligence</h3>
          <p></p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="inner_sec_info_wthree_agile">
      <div class="ser-first">
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-thumbs-up" aria-hidden="true"></span>
          <h3>Responsibility</h3>
          <p></p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-heart" aria-hidden="true"></span>
          <h3>Love</h3>
          <p></p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-heart" aria-hidden="true"></span>
          <h3>Respect and loyalty</h3>
          <p></p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-heart" aria-hidden="true"></span>
          <h3>Hospitality</h3>
          <p></p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

  </div>
</div>
<!--//what-->
<!--/projects-->
<div class="banner_bottom proj">
  <div class="wrap_view">
    <h3 class="tittle-w3ls">Notice Board</h3>
    <div class="inner_sec">
      <ul class="portfolio-categ filter">
        <li class="port-filter all active">
          <a href="#">All</a>
        </li>
        <li class="cat-item-1">
          <a href="#" title="Category 1">Anouncements</a>
        </li>
        <li class="cat-item-2">
          <a href="#" title="Category 2">News</a>
        </li>
        <li class="cat-item-3">
          <a href="#" title="Category 3">Posts</a>
        </li>
      </ul>
      <ul class="portfolio-area">
        <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
          
        </li>
        <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
         
        </li>
        <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
          
        </li>
        <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
         
        </li>
        <li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
          
        </li>
        <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
         
        </li>
        <div class="clearfix"></div>
      </ul>
      <!--end portfolio-area -->
    </div>
  </div>
</div>
<!--//projects-->
<!--/testimonials-->
<div class="tesimonials container">
  <h3 class="tittle-w3ls cen">Testimonials</h3>
  <div class="inner_sec">
      <div class="test_grid_sec">
          <div class="col-md-offset-2 col-md-8">
              <div class="carousel slide two" data-ride="carousel" id="quote-carousel">
                  <!-- Bottom Carousel Indicators -->
                  <ol class="carousel-indicators two">
                      <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#quote-carousel" data-slide-to="1"></li>
                      <li data-target="#quote-carousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Carousel Slides / Quotes -->
                  <div class="carousel-inner">
                      <!-- Quote 1 -->
                      <div class="item active">
                          <blockquote>
                              <div class="test_grid">
                                  <div class="col-sm-3 text-center test_img">
                                      <img src="{{ asset('images/webimgs/')}}" class="img-responsive" alt="">
                                  </div>
                                  <div class="col-sm-9 test_img_info">
                                      <p></p>
                                      <h6></h6>
                                  </div>
                              </div>
                          </blockquote>
                      </div>
                      <!-- Quote 2 -->
                      <div class="item">
                          <blockquote>
                              <div class="test_grid">
                                  <div class="col-sm-3 text-center test_img">
                                      <img src="{{ asset('images/webimgs/')}}" class="img-responsive" alt="">
                                  </div>
                                  <div class="col-sm-9 test_img_info">
                                      <p></p>
                                      <h6></h6>
                                  </div>
                              </div>
                          </blockquote>
                      </div>
                      <!-- Quote 3 -->
                      <div class="item">
                          <blockquote>
                              <div class="test_grid">
                                  <div class="col-sm-3 text-center test_img">
                                      <img src="{{ asset('images/webimgs/')}}" class="img-responsive" alt="">
                                  </div>
                                  <div class="col-sm-9 test_img_info">
                                      <p></p>
                                      <h6></h6>
                                  </div>
                              </div>
                          </blockquote>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>
</div>
<!--//testimonials-->

<!-- /newsletter-->
<div class="newsletter_w3ls_agileits">
  <div class="col-sm-6 newsleft">
    <h3>Sign up for Newsletter !</h3>
  </div>
  <div class="col-sm-6 newsright">
    <form action="#" method="post">
      <input type="email" placeholder="Enter your email..." name="email" required="">
      <input type="submit" value="Submit">
    </form>
  </div>

  <div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection
