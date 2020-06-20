<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
               <meta name="description" content="Christ’s Evangelistic Church,">
        <meta name="keywords" content="CEC, Church, Kakamega, Kenya, Africa, Evangeliestic, Evangelism">
        <meta name="author" content="Otema Technologies">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/icons/favicon/android-chrome-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('images/icons/favicon/site.webmanifest')}}">
        <link rel="mask-icon" href="{{ asset('images/icons/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('images/icons/favicon/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#b91d47">
        <meta name="msapplication-TileImage" content="{{ asset('images/icons/favicon/mstile-144x144.png')}}">
        <meta name="msapplication-config" content="{{ asset('images/icons/favicon/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">
        <script type="application/x-javascript">
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
    
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--//tags -->
        <link href="{{ asset('css/pages/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/pages/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/front/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/pages/font-awesome.min.css')}}" rel="stylesheet">
        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
    </head>
    <body>
        @yield('content')
        @include('layouts.front_layout.footer')
       <!-- Javascript files -->
		<!-- jQuery -->
		<script src="{{ asset('js/pages/jquery.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('js/pages/bootstrap.min.js')}}"></script>
		<!-- Respond JS for IE8 -->
		<script src="{{ asset('js/pages/respond.min.js')}}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{ asset('js/pages/html5shiv.js')}}"></script>
		<!-- Custom JS -->
		<script src="{{ asset('js/pages/custom.js')}}"></script>
        <script src="{{ asset('js/front/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
        <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
    </body>
</html>