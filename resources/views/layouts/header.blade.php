<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>League Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('images/psl-logo.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="icon" href="{{ asset('images/psl-logo.png') }}" type="image/jpg">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
  
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!--************************************
			Wrapper Start
	*************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
				Mobile Menu Start
		*************************************-->
        <div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
            <span id="tg-close" class="tg-close fa fa-close"></span>
            <div class="tg-colhalf">
                <ul>
                    <li>
                        <a href="{{ url('/')}}">Main</a>
                        
                    </li>
                    <li class="active">
                        <a href="#">League</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('/teams')}}/League 1">League 1</a>
                                <ul class="tg-dropdown-menu">
                                    <li><a href="{{ url('matchresult')}}/League 1">League 1 Results</a></li>
                                    <li><a href="{{ url('matchresult')}}/League 2">League 2 Results</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="{{ url('/teams')}}/League 2">League 2</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="buyticket">Buy Tickets</a></li>
                    <li>
                        <a href="#">Match Results</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('matchresult')}}/League 1">League 1 Results</a></li>
                            <li><a href="{{ url('matchresult')}}/League 2">League 2 Results</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="tg-colhalf">
                <ul>
                    <li>
                        <a href="#">fixtures</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('fixtures')}}/League 1">League 1 Fixtures</a></li>
                            <li><a href="{{ url('fixtures')}}/League 2">League 2 Fixtures</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Log Table</a>
                        <ul class="tg-dropdown-menu">
                            <li><a href="{{ url('log-table')}}/League 1">League 1 Table</a></li>
                            <li><a href="{{ url('log-table')}}/League 2">League 2 Table </a></li>
                        </ul>
                    </li>
                    <li><a href="contactus">Contact</a></li>
                    <li>
                        <a href="#"><i class=" fa fa-navicon"></i></a>
                        <ul>
                            <li><a href="#">League</a></li>
                            <li><a href="#">Venue</a></li>
                            <li><a href="#">Referee</a></li>
                            <li><a href="#">Fixture</a></li>
                            <li><a href="#">Players</a></li>
                           
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--************************************
				Mobile Menu End
		*************************************-->
        <!--************************************
				Header Start
		*************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="tg-topbar tg-haslayout">
                            <nav id="tg-topaddnav" class="tg-topaddnav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
                                </div>
                                <div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
                                    <div class="tg-colhalf pull-right">
                                        <nav class="tg-addnav">
                                            <ul>
                                                <li><a href="javascript()" data-toggle="modal" data-target="#tg-login">login</a></li>
                                                <li><a href="javascript()" data-toggle="modal" data-target="#tg-register">Register</a></li>
                                                <li>
                                                    <div class="tg-cart">
                                                        <a href="javascript:void(0)" class="dropdown-toggle" id="tg-cartdropdown" data-toggle="dropdown">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <div class="tg-cartcontent dropdown-menu" aria-labelledby="tg-cartdropdown">
                                                            <ul>
                                                                <li>
                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="{{ asset('images/thumbnails/img-01.jpg') }}" alt="image description">
                                                                        </a>
                                                                    </figure>
                                                                    <div class="tg-product-detail">
                                                                        <h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
                                                                        <span class="tg-price">Price: $23</span>
                                                                        <a class="tg-delete" href="#"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="{{ asset('images/thumbnails/img-02.jpg') }}" alt="image description">
                                                                        </a>
                                                                    </figure>
                                                                    <div class="tg-product-detail">
                                                                        <h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
                                                                        <span class="tg-price">Price: $23</span>
                                                                        <a class="tg-delete" href="#"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="{{ asset('images/thumbnails/img-03.jpg') }}" alt="image description">
                                                                        </a>
                                                                    </figure>
                                                                    <div class="tg-product-detail">
                                                                        <h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
                                                                        <span class="tg-price">Price: $23</span>
                                                                        <a class="tg-delete" href="#"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="tg-btnbox">
                                                                        <strong class="tg-carttotal">Total: $134</strong>
                                                                        <a class="tg-btn" href="#"><span>checkout</span></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a id="tg-btn-search" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tg-colhalf">
                                        <ul class="tg-socialicons">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-dribbble"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <nav id="tg-nav" class="tg-nav brand-center">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button>
                                <strong class="tg-logo">
									<a href="index-2"><img src="{{ asset('images/logo.png') }}" alt="image description"></a>
								</strong>
                            </div>
                            <div id="tg-navigation" class="tg-navigation">
                                <div class="tg-colhalf">
                                    <ul>
                                        <li>
                                            <a href="/">Main</a>
                                            
                                        </li>
                                        <li class="active">
                                            <a href="#">League</a>
                                            <ul class="tg-dropdown-menu">
                                                 @foreach ($league as $item)
                                            <li><a href="{{ url('/teams')}}/{{$item->league_name}}">{{$item->league_name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="buyticket">Buy Tickets</a></li>
                                        <li>
                                            <a href="#">Match Results</a>
                                            <ul class="tg-dropdown-menu">
                                                @foreach ($league as $item)
                                                <li><a href="{{ url('matchresult')}}/{{$item->league_name}}">{{$item->league_name}} Results</a></li>
                                                    @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                        <li>
                                            <a href="#">fixtures</a>
                                            <ul class="tg-dropdown-menu">
                                                @foreach ($league as $item)
                                            <li><a href="{{ url('fixtures')}}/{{$item->league_name}}">{{$item->league_name}} Fixtures</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Log</a>
                                            <ul class="tg-dropdown-menu">
                                                @foreach ($league as $item)
                                                <li><a href="{{ url('log-table')}}/{{$item->league_name}}">{{$item->league_name}} Table</a></li>
                                                    @endforeach
                                                
                                            </ul>
                                        </li>
                                        <li><a href="contactus">Contact</a></li>
                                        <li>
                                            <a href="#"><i class=" fa fa-navicon"></i></a>
                                            <ul>
                                                <li><a href="aboutus">about us</a></li>
                                                <li><a href="shoplist">shop list</a></li>
                                                <li><a href="shopgrid">shop grid</a></li>
                                                <li><a href="productsingle">shop detail</a></li>
                                                <li><a href="bloglist">blog list</a></li>
                                                <li><a href="bloggrid">blog grid</a></li>
                                                <li><a href="blogdetail">blog detail</a></li>
                                                <li><a href="404">404 error</a></li>
                                                <li><a href="comming-soon">comming soon</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--************************************
				Header End
		*************************************-->