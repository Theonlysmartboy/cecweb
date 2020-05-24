<!-- Nav Menu -->
<header>
    <div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/icons/logo.png') }}" alt="CEC logo" class="img-responsive" style="width: 50px; height: 50px;"/></a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ route('index') }}">Home</a></li>
							<li><a href="{{ route('about_us') }}">About</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ministries <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="portfolio.html">Projects</a></li>
									<li><a href="404.html">Services</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Branches <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="portfolio.html">Projects</a></li>
									<li><a href="404.html">Services</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/gallery') }}">Gallery</a></li>
							<li><a href="{{ route('contact_us') }}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
</header>
  