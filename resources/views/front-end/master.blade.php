<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

<link href="{{ asset('/') }}/front/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('/') }}/front/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ asset('/') }}/front/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='{{ asset('/') }}/front//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='{{ asset('/') }}/front//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<link href="{{ asset('/') }}/front/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>

<!-- start menu -->
<script src="{{ asset('/') }}/front/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/front/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="{{ asset('/') }}/front/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="{{ asset('/') }}/front/css/animate.min.css" rel="stylesheet">
<script src="{{ asset('/') }}/front/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<!--header-->
@include('front-end.includes.header')
<!--banner-->
@yield('body')
<!--footer-->
@include('front-end.includes.footer')
<!--footer-->

 <script src="{{ asset('/') }}/front/js/jquery.magnific-popup.js" type="text/javascript"></script>
</body>
</html>
