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
          <h3>Build Effective Designs</h3>
          <p>Solutions made easy</p>
          <div class="top-buttons">
            <div class="bnr-button">
              <a class="act" href="single.html">Read More</a>
            </div>
            <div class="bnr-button">
              <a href="portfolio.html" class="two scroll ">Portfolio</a>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item item2">
      <div class="container">
        <div class="carousel-caption">
          <h3>Best Business Thinking</h3>
          <p>You deserve the best</p>
          <div class="top-buttons">
            <div class="bnr-button">
              <a class="act" href="single.html">Read More</a>
            </div>
            <div class="bnr-button">
              <a href="portfolio.html" class="two scroll ">Portfolio</a>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item item3">
      <div class="container">
        <div class="carousel-caption">
          <h3>Build Effective Designs</h3>
          <p>Solutions made easy</p>
          <div class="top-buttons">
            <div class="bnr-button">
              <a class="act" href="single.html">Read More</a>
            </div>
            <div class="bnr-button">
              <a href="portfolio.html" class="two scroll ">Portfolio</a>
            </div>
            <div class="clearfix"> </div>
          </div>

        </div>
      </div>
    </div>
    <div class="item item4">
      <div class="container">
        <div class="carousel-caption">

          <h3>Best Business Thinking</h3>
          <p>You deserve the best</p>
          <div class="top-buttons">
            <div class="bnr-button">
              <a class="act" href="single.html">Read More</a>
            </div>
            <div class="bnr-button">
              <a href="#portfolio" class="two scroll ">Portfolio</a>
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
          <h4>We are ligth to the world</h4>
          <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
            pulvinar neque pharetra ac.</p>
          <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
            pulvinar neque pharetra ac.</p>
          <div class="ab_button">
            <a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Read More </a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="news-main">
      <div class="col-md-4 banner_bottom_left">
        <div class="banner_bottom_pos">
          <div class="banner_bottom_pos_grid">
            <div class="col-xs-3 banner_bottom_grid_left">
              <div class="banner_bottom_grid_left_grid">
                <span class="fa fa-laptop" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-9 banner_bottom_grid_right">
              <h4>Digital Solutions</h4>
              <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 banner_bottom_left">
        <div class="banner_bottom_pos">
          <div class="banner_bottom_pos_grid">
            <div class="col-xs-3 banner_bottom_grid_left">
              <div class="banner_bottom_grid_left_grid">
                <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-9 banner_bottom_grid_right">
              <h4>Live Website Builder</h4>
              <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 banner_bottom_left">
        <div class="banner_bottom_pos">
          <div class="banner_bottom_pos_grid">
            <div class="col-xs-3 banner_bottom_grid_left">
              <div class="banner_bottom_grid_left_grid">
                <span class="fa fa-newspaper-o" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-9 banner_bottom_grid_right">
              <h4>Creative Strategy</h4>
              <p>Lorem Ipsum is simply text the printing and typesetting standard industry.</p>

            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//ab-->
<!--/what-->
<div class="works">
  <div class="container">
    <h3 class="tittle-w3ls cen">What we do</h3>
    <div class="inner_sec_info_wthree_agile">
      <div class="ser-first">
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-shield" aria-hidden="true"></span>
          <h3>Unique Design</h3>
          <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-pencil" aria-hidden="true"></span>
          <h3>Different Layout</h3>
          <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-star" aria-hidden="true"></span>
          <h3>Portfolio Styles</h3>
          <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="col-md-3 ser-first-grid text-center">
          <span class="fa fa-thumbs-up" aria-hidden="true"></span>
          <h3>User Experience</h3>
          <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

  </div>
</div>
<!--//what-->
<!--/banner_bottom-->
<div class="banner_bottom">
  <div class="banner_bottom_in">
    <h3 class="tittle-w3ls we">We provide high quality and cost effective offshore web development services.</h3>

    <p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
      nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


    <img src="{{ asset('images/webimgs/banner_mid.jpg')}}" class="img-responsive" alt="">
  </div>
</div>
<!--//banner_bottom-->
<!--/projects-->
<div class="banner_bottom proj">
  <div class="wrap_view">
    <h3 class="tittle-w3ls">Projects</h3>
    <div class="inner_sec">
      <ul class="portfolio-categ filter">
        <li class="port-filter all active">
          <a href="#">All</a>
        </li>
        <li class="cat-item-1">
          <a href="#" title="Category 1">Category 1</a>
        </li>
        <li class="cat-item-2">
          <a href="#" title="Category 2">Category 2</a>
        </li>
        <li class="cat-item-3">
          <a href="#" title="Category 3">Category 3</a>
        </li>
        <li class="cat-item-4">
          <a href="#" title="Category 4">Category 4</a>
        </li>
      </ul>


      <ul class="portfolio-area">

        <li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
          <div>
            <span class="image-block img-hover">
            <a class="image-zoom" href="{{ asset('images/webimgs/g1.jpg')}}" rel="prettyPhoto[gallery]">
            
                <img src="{{ asset('images/webimgs/g1.jpg')}}" class="img-responsive" alt="Conceit">
                <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g2.jpg')}}" rel="prettyPhoto[gallery]">
              
                <img src="{{ asset('images/webimgs/g2.jpg')}}" class="img-responsive" alt="Conceit">
              <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g3.jpg')}}" rel="prettyPhoto[gallery]">
            
                <img src="{{ asset('images/webimgs/g3.jpg')}}" class="img-responsive" alt="Conceit">
              <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g4.jpg')}}" rel="prettyPhoto[gallery]">
              
                <img src="{{ asset('images/webimgs/g4.jpg')}}" class="img-responsive" alt="Conceit">
                <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g5.jpg')}}" rel="prettyPhoto[gallery]">
              
                <img src="{{ asset('images/webimgs/g5.jpg')}}" class="img-responsive" alt="Conceit">
                <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g6.jpg')}}" rel="prettyPhoto[gallery]">
              
                <img src="{{ asset('images/webimgs/g6.jpg')}}" class="img-responsive" alt="Conceit">
                <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g7.jpg')}}" rel="prettyPhoto[gallery]">
            
                <img src="{{ asset('images/webimgs/g7.jpg')}}" class="img-responsive" alt="Conceit">
                    <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            </a>
          </span>
          </div>
        </li>


        <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
          <div>
            <span class="image-block">
            <a class="image-zoom" href="{{ asset('images/webimgs/g8.jpg')}}" rel="prettyPhoto[gallery]">
              
                <img src="{{ asset('images/webimgs/g8.jpg')}}" class="img-responsive" alt="Conceit">
                  <div class="port-info">
                    <h5>View Project</h5>
                    <p>Add Some Description</p>
                  </div>
            
            </a>
          </span>
          </div>
        </li>

        <div class="clearfix"></div>
      </ul>
      <!--end portfolio-area -->

    </div>

  </div>
</div>

<!--//projects-->
<!--/blog-->
<div class="blog_sec">
  <h3 class="tittle-w3ls">Latest Blogs</h3>
  <div class="col-md-6 banner-btm-left">
    <div class="banner-btm-top">
      <div class="banner-btm-inner a1">
        <div class="blog_date">

          <h4>Jan.05.2018</h4>

        </div>
        <h6><a href="single.html">Strategic Planning</a></h6>
        <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
        <div class="clearfix"></div>
        <a href="single.html" class="blog-btn">Know More</a>
      </div>
      <div class="banner-btm-inner a2">

      </div>
    </div>
    <div class="banner-btm-bottom">
      <div class="banner-btm-inner a3">

      </div>
      <div class="banner-btm-inner a4">
        <div class="blog_date">

          <h4>Jan.08.2018</h4>

        </div>
        <h6><a href="single.html">Strategic Planning</a></h6>
        <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
        <div class="clearfix"></div>
        <a href="single.html" class="blog-btn">Know More</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 banner-btm-left">
    <div class="banner-btm-top">
      <div class="banner-btm-inner a1">
        <div class="blog_date">

          <h4>Jan.25.2018</h4>

        </div>
        <h6><a href="single.html">Strategic Planning</a></h6>
        <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
        <div class="clearfix"></div>
        <a href="single.html" class="blog-btn">Know More</a>
      </div>
      <div class="banner-btm-inner a5">

      </div>
    </div>
    <div class="banner-btm-bottom">
      <div class="banner-btm-inner a6">

      </div>
      <div class="banner-btm-inner a4">
        <div class="blog_date">

          <h4>Jan.05.2018</h4>

        </div>
        <h6><a href="single.html">Strategic Planning</a></h6>
        <p class="paragraph">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
        <div class="clearfix"></div>
        <a href="single.html" class="blog-btn">Know More</a>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<!--//blog-->
<!--/bottom-->
<div class="banner_bottom">
  <div class="container">
    <h3 class="tittle-w3ls">Let’s Change How We Manage Business
    </h3>
    <div class="inner_sec_info_wthree_agile">
      <div class="help_full">

        <div class="col-md-6 banner_bottom_left">
          <h4>Entrepreneurs Get Their Act Together </h4>
          <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
            pulvinar neque pharetra ac. Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla
            viverra pharetra sem, eget pulvinar neque pharetra ac.

          </p>
          <div class="ab_button">
            <a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Read More </a>
          </div>


        </div>

        <div class="col-md-6 banner_bottom_grid help">
          <img src="{{ asset('images/webimgs/banner_mid.jpg')}}" alt=" " class="img-responsive">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!--//bottom-->
<!--/testimonials-->
<div class="tesimonials">
  <div class="container">
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
                      <img src="{{ asset('images/webimgs/t1.jpg')}}" class="img-responsive" alt="">

                    </div>
                    <div class="col-sm-9 test_img_info">
                      <p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        auctor nec lacus ut tempor. Mauris.</p>
                      <h6>Sara Lisbon</h6>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -->
              <div class="item">
                <blockquote>
                  <div class="test_grid">
                    <div class="col-sm-3 text-center test_img">
                      <img src="{{ asset('images/webimgs/t2.jpg')}}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-9 test_img_info">
                      <p>Lorem ipsum dolor sit amet. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        auctor nec lacus ut tempor. Mauris.</p>
                      <h6>Jane Wearne</h6>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item">
                <blockquote>
                  <div class="test_grid">
                    <div class="col-sm-3 text-center test_img">
                      <img src="{{ asset('images/webimgs/t3.jpg')}}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-9 test_img_info">
                      <p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                        auctor nec lacus ut tempor. Mauris.</p>
                      <h6>Alice Williams</h6>
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
