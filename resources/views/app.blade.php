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
    	<title>Korea Moving Services</title>
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
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>	
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                    <span id="tag_line">"The art of moving since 1998"</span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                             <li><a href="{{ url('') }}">EMAIL US </a></li>
                            <li><a href="mailto:info@removals.com">suggest@korearemovals.com</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('/img/logo.png') }}" width="150" height="35" alt="Removals" data-retina="true"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{ asset('/img/logo.png') }}" width="150" height="35" alt="Removals" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{ url('/') }}">Quation </a>
                            </li>
                            <li class="submenu">
                                <a href="{{ url('/box-rental') }}" >Box Rental </a>
                              
                            </li>
                            <li class="submenu">
                                <a href="{{ url('/classified-ad') }}">Classified Ad </a>
                            </li>
                            <li class="submenu">
                                <a href="{{ url('/blog') }}" >Blog </a>
                              
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
            <div class="row ">
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                	<p>Company : Move in Korea<p>
					<p>Business License : 123-45-678910<p>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <p>President of Company : Dexter Park</p>
					<p>Kakaotalk : Dexter Park</p> <!-- Test comment  -->
                </div>
              <div class="col-md-3 col-md-offset-1 col-sm-3" id="contact_bg">
                
                   <p>Phone Number : <a href="tel://01022147112">010 2214 7112</a></p>
                   <p>Email : <a href="mailto:dexterpark83@gmail.com">dexterpark83@gmail.com</a></p>            
                 </div>
            </div><!-- End row -->
             <div id="social_footer" >
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
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
