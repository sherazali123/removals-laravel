<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if(isset($meta_data))
    	<meta name="keywords" content="{{ $meta_data['keywords'] }}" />
	    <meta name="description" content="{{ $meta_data['description'] }}">
	    <meta name="author" content="{{ $meta_data['author'] }}">
    @endif
    @if(isset($page_title))
    	<title>{{ $page_title }}</title>
    @else
    	<title>Move in Korea</title>
    @endif
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="{{ asset('/css/base.css') }}" rel="stylesheet">

	@yield('headercss')

    <!--[if lt IE 9]>
      <script src="{{ asset('/js/html5shiv.min.js') }}"></script>
      <script src="{{ asset('/js/respond.min.js') }}"></script>
    <![endif]-->




</head>
<body>

	<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
	<![endif]-->

	<div id="preloader">
       <div class="sk-double-bounce">
          <div class="sk-child sk-double-bounce1"></div>
          <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('/img/logo_web.jpg') }}" width="150" height="35" alt="Removals" data-retina="true"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{ asset('/img/logo_web.jpg') }}" width="150" height="35" alt="Removals" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{ url('/quotation') }}">Quotation </a>
                            </li>
                            <li class="submenu">
                                <a href="{{ url('/box-rental') }}" >Box Rental </a>
                            </li>
                            <li class="submenu">
                                <a href="{{ url('/classified-ad') }}">Classified Ad </a>
                            </li>
                            <li class="submenu">
                                <a href="http://moveinkorea.blogspot.kr/" target="_blank">Blog </a>

                            </li>
                            <li class="submenu">
                                <a href="{{ url('/about') }}">About Us </a>
                            </li>

                        </ul>
                    </div><!-- End main-menu -->
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

	@yield('content')

	<footer><!-- Footer Start -->
        <div class="container">
             <div id="social_footer" >
                        <ul>
														<li><a class="_phone" href="tel://01093516307"><i class="icon-phone"></i></a></li>
                            <li><a class="_facebook" target="_blank" href="https://www.facebook.com/moveinkorea/"><i class="icon-facebook"></i></a></li>
                            <li><a class="_twitter"  target="_blank" href="https://twitter.com/movingpeople_"><i class="icon-twitter"></i></a></li>
                            <li><a class="_google"  target="_blank" href="http://moveinkorea.blogspot.kr/"><i class="icon-google"></i></a></li>
                            <li><a  class="_youtube" target="_blank" href="https://www.youtube.com/c/DexterPark"><i class="icon-youtube"></i></a></li>
                        </ul>
                </div>
             </div><!-- End container -->
    </footer><!-- End footer -->


    <div id="copy">
    	<div class="container">
        	© Move in Korea 2015 - All rights reserved.
        </div>
    </div><!-- End copy -->
    <div id="toTop"></div><!-- Back to top button -->
	<!-- Common scripts -->
	<script src="{{ asset('/js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('/js/common_scripts_min.js') }}"></script>
	<script src="{{ asset('/js/functions.js') }}"></script>

	@yield('footerjs')
</body>
</html>
