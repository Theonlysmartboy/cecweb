@extends('layouts.front_layout.design')
@section('content')
    <!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short">
				<li><a href="{{ route('index') }}">Home</a><span>|</span></li>
				<li>Portfolio</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">Gallery</h3>
			<div class="inner_sec_info_wthree_agile">
				<!--/projects-->
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">All</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Leaders</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Events</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Ministries & Branch Pictorials</a>
					</li>
					<li class="cat-item-4">
						<a href="#" title="Category 4">Other</a>
					</li>
				</ul>
				<ul class="portfolio-area">
                    <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/bishop_opo.jpg') }}" rel="prettyPhoto[gallery]">
							<img src="{{ asset('images/webimgs/pastors/bishop_opo.jpg') }}" class="img-responsive" alt="CEC Gallery">
								<div class="port-info">
											<h5>Bishop opo</h5>
											<p>Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					<li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/rev_bitok.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/rev_bitok.jpg') }}" class="img-responsive" alt="CEC Gallery">
								      <div class="port-info">
											<h5>Reverend Bitok</h5>
											<p>Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/bishop_mangeni.jpg') }}" rel="prettyPhoto[gallery]">								
									<img src="{{ asset('images/webimgs/pastors/bishop_mangeni.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Bishop Dr. Julius Mangeni</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/bishop_mr_and_mrs_wamalwa.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/bishop_mr_and_mrs_wamalwa.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Bishop Dr. Mr. and Mrs Joram Wamalwa</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/bishop_ochieng.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/bishop_ochieng.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Bishop Stanley Ochieng</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/pastor_laban.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/pastor_laban.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Pastor Laban</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/pastor_ogallo.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/pastor_ogallo.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Pastro Ogallo</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/pastor_omusula.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/pastor_omusula.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Pastor Omusula</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{ asset('images/webimgs/pastors/pastor_walwanda.jpg') }}" rel="prettyPhoto[gallery]">							
									<img src="{{ asset('images/webimgs/pastors/pastor_walwanda.jpg') }}" class="img-responsive" alt="CEC Gallery">
										<div class="port-info">
											<h5>Pastor Walwanda</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{asset('images/webimgs/events/saints_gathering.jpg')}}" rel="prettyPhoto[gallery]">
								
									<img src="{{asset('images/webimgs/events/saints_gathering.jpg')}}" class="img-responsive" alt="CEC Gallery">
								      <div class="port-info">
											<h5>Saints gathering</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="{{asset('images/webimgs/events/service1.jpg')}}" rel="prettyPhoto[gallery]">
								
									<img src="{{asset('images/webimgs/events/service1.jpg')}}" class="img-responsive" alt="CEC Gallery">
									<div class="port-info">
											<h5>Church service</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g5.jpg" rel="prettyPhoto[gallery]">								
									<img src="images/g5.jpg" class="img-responsive" alt="CEC Gallery">
									<div class="port-info">
											<h5>Gallery</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
                    </li>
                    <li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
						<div>
							<span class="image-block block2 img-hover">
							<a class="image-zoom" href="images/g1.jpg" rel="prettyPhoto[gallery]">							
									<img src="images/g1.jpg" class="img-responsive" alt="CEC Gallery">
									<div class="port-info">
											<h5>Gallery</h5>
											<p>Add Some Description</p>
										</div>
							</a>
						</span>
						</div>
					</li>
					<li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
						<div>
							<span class="image-block block2">
							<a class="image-zoom" href="images/g4.jpg" rel="prettyPhoto[gallery]">
									<img src="images/g4.jpg" class="img-responsive" alt="CEC Gallery">
									<div class="port-info">
											<h5>Gallery</h5>
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
		<!--//projects-->
	</div>
	<!--//bottom-->
@endsection