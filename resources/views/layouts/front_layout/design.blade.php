<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
               <meta name="description" content="Food fuzz - Food delivery system in western kenya">
        <meta name="keywords" content="CEC, Church, Kakamega, Kenya, Africa, android, Kisumu">
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
        <link href="{{ asset('css/front/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/front/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/front/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/front/font-awesome.css')}}" rel="stylesheet">
        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
    </head>
    <body>
        @include('layouts.front_layout.header')
        @yield('content')
        @include('layouts.front_layout.footer')
        
        <script type="text/javascript" src="{{ asset('js/front/jquery-2.2.3.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/front/bootstrap.js')}}"></script>
        <script>
            $('ul.dropdown-menu li').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });
        </script>
        <!-- js -->
        <!-- Smooth-Scrolling-JavaScript -->
        <script type="text/javascript" src="{{ asset('js/front/easing.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/front/move-top.js')}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll, .navbar li a, .footer li a").click(function (event) {
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //Smooth-Scrolling-JavaScript -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                                        var defaults = {
                                              containerID: 'toTop', // fading element id
                                            containerHoverID: 'toTopHover', // fading element hover id
                                            scrollSpeed: 1200,
                                            easingType: 'linear' 
                                         };
                                        */
    
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
    
            });
        </script>
        <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
        <script type="text/javascript" src="{{ asset('js/front/jquery-1.7.2.js') }}"></script>
        <script src="{{ asset('js/front/jquery.quicksand.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/front/script.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/front/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
        <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
    </body>
</html>