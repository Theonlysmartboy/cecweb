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
							<li class="@if(Route::current()->getName() == 'index') active @endif"><a href="{{ route('index') }}">Home</a></li>
							<li class="@if(Route::current()->getName() == 'about_us') active @endif"><a href="{{ route('about_us') }}">About</a></li>
							<li class="dropdown @if(Request::is('ministries/*')) active @endif">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ministries <span class="caret"></span></a>
								<ul class="dropdown-menu">
									@foreach($ministries as $ministry)
									<li><a href="{{ route('ministries.show', [$ministry->id]) }}">{{$ministry->name}}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="dropdown @if(Request::is('branches/*')) active @endif">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Churches <span class="caret"></span></a>
								<ul class="dropdown-menu">
									@foreach($branches as $branch)
									<li><a href="{{ route('branches.show', [$branch->id]) }}">{{$branch->name}}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="dropdown @if(Request::is('education/*')) active @endif">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Bible School</a></li>
									<li><a href="#">Training </a></li>
								</ul>
							</li>
							<li class="dropdown @if(Request::is('resources/*')) active @endif">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Teenagers</a></li>
									<li><a href="#">Sunday School curriculum</a></li>
									<li><a href="#">Youth curriculum</a></li>
									<li><a href="#">Conference Sermons</a></li>
								</ul>
							</li>
							<li class="@if(Route::current()->getName() == 'gallery.index') active @endif"><a href="{{ route('gallery.index') }}">Gallery</a></li>
							<li class="@if(Route::current()->getName() == 'posts.index') active @endif"><a href="{{ route('posts.index') }}">Announcements</a></li>
							<li class="@if(Route::current()->getName() == 'contact_us') active @endif"><a href="{{ route('contact_us') }}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
</header>
  