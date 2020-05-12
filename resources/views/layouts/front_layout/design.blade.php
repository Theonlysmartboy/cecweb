<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
               <meta name="description" content="Food fuzz - Food delivery system in western kenya">
        <meta name="keywords" content="Food, Drinks, mobile, app, Food delivery, ios, android, Kisumu">
        <!-- Font -->
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/common/bootstrap.min.css')}}">
        <!-- Main css -->
        <link href="{{asset('css/front/style.css')}}" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="30">
        @include('layouts.front_layout.header')
        <main role="main" class="container">
        @yield('content')
        @include('layouts.front_layout.footer')
         <!-- jQuery and Bootstrap -->
         <script src="{{asset('js/front/jquery-3.2.1.min.js')}}"></script>
         <script src="{{asset('js/common/bootstrap.bundle.js')}}"></script>
         <!-- Plugins JS -->
         <script src="{{asset('js/front/owl.carousel.min.js')}}"></script>
         <!-- Custom JS -->
         <script src="{{asset('js/front/script.js')}}"></script>
    </body>
</html>