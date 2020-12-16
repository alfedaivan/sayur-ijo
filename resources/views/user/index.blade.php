<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Toko Sayur</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{url('/assets/TemplateUser/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{url('/assets/TemplateUser/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- font-awesome icons -->
    <link href="{{url('/assets/TemplateUser/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{url('/assets/TemplateUser/js/jquery-1.11.1.min.js')}}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{url('/assets/TemplateUser/js/move-top.js')}}"></script>

    <script type="text/javascript" src="{{url('/assets/TemplateUser/js/easing.js')}}"></script>
<!-- start-smoth-scrolling -->
</head>

<body>

    @yield('content')

    <!-- @yield('javascript') -->

<!-- footer -->
@include('user.footer')
<!-- //footer -->

<script src="{{url('/assets/TemplateUser/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/TemplateUser/js/index.js')}}"> </script>

</body>
</html>
