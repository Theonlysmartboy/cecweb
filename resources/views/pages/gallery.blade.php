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
							<span class="image-block block2 img-hover">
							<a class="image-zoom" href="images/g1.jpg" rel="prettyPhoto[gallery]">							
									<img src="images/g1.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g2.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g2.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g3.jpg" rel="prettyPhoto[gallery]">
							<img src="images/g3.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g4.jpg" rel="prettyPhoto[gallery]">
									<img src="images/g4.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g5.jpg" rel="prettyPhoto[gallery]">								
									<img src="images/g5.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g6.jpg" rel="prettyPhoto[gallery]">
								
									<img src="images/g6.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g7.jpg" rel="prettyPhoto[gallery]">							
									<img src="images/g7.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g8.jpg" rel="prettyPhoto[gallery]">								
									<img src="images/g8.jpg" class="img-responsive" alt="Conceit">
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
							<span class="image-block block2">
							<a class="image-zoom" href="images/g1.jpg" rel="prettyPhoto[gallery]">							
									<img src="images/g1.jpg" class="img-responsive" alt="Conceit">
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
		<!--//projects-->
	</div>
	<!--//bottom-->
@endsection