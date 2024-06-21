<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta Tag -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
  <title>KAKUDAA - site officiel</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="client/assets/images/favicon_B.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="client/assets/css/bootstrap.css">
	<!-- Magnific Popup -->
  <link rel="stylesheet" href="client/assets/css/magnific-popup.min.css">
	<!-- Font Awesome -->
  <link rel="stylesheet" href="client/assets/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="client/assets/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
  <link rel="stylesheet" href="client/assets/css/themify-icons.css">
	<!-- Nice Select CSS -->
  <link rel="stylesheet" href="client/assets/css/niceselect.css">
	<!-- Animate CSS -->
  <link rel="stylesheet" href="client/assets/css/animate.css">
	<!-- Flex Slider CSS -->
  <link rel="stylesheet" href="client/assets/css/flex-slider.min.css">
	<!-- Owl Carousel -->
  <link rel="stylesheet" href="client/assets/css/owl-carousel.css">
	<!-- Slicknav -->
  <link rel="stylesheet" href="client/assets/css/slicknav.min.css">
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="client/assets/css/reset.css">
	<link rel="stylesheet" href="client/assets/css/style.css">
  <link rel="stylesheet" href="client/assets/css/responsive.css">
  <style>
        .shop-home-list .row {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-left: -15px;
            margin-right: -15px;
            padding-bottom: 20px; /* Pour un peu d'espace en bas */
        }

        .shop-home-list .single-list {
            flex: 0 0 auto;
            width: 33.333%;
            max-width: 33.333%;
            padding: 0 15px;
            box-sizing: border-box;
            text-align: center;
            margin-bottom: 15px;
        }

        .shop-home-list .list-image {
            border-radius: 50%;
            width: 115px;
            height: 115px;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .shop-home-list .list-image img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius:

        .shop-home-list .buy {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: #fff;
            color: #333;
            padding: 5px;
            border-radius: 50%;
            font-size: 16px;
            text-decoration: none; /* Pour enlever le soulignement du lien */
        }
    </style>
	
</head>


<body class="js">

    <!-- Preloader -->
		<div class="preloader">
			<div class="preloader-inner">
				<div class="preloader-icon">
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<!-- End Preloader -->
	
    <!-- Start Header -->
      <header class="header shop">
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-12">
                <div class="top-left">
                  <ul class="list-main">
                    <li><i class="ti-headphone-alt"></i> (+228) 90112233</li>
                    <li><i class="ti-email"></i> mail@domain.com</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8 col-md-12 col-12">
                <div class="right-content">
                  <ul class="list-main">
                    <li><i class="ti-location-pin"></i> Adresse</li>
                    @if(Session::get('UserId'))
                    <li style="background-color: #ffecb3; padding: 10px; border-radius: 30px; text-align: center; display: inline-block;">
                      <i class="ti-user" style="vertical-align: middle;"></i>
                      <a href="{{route('TABLEAU')}}" style="color: #000; text-decoration: none; vertical-align: middle; margin-left: 5px;">Mon compte</a>
                    </li>
                    @else
                    <li><i class="ti-user"></i><a href="{{route('page-login')}}">Se connecter</a></li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="middle-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-12">
                <div class="logo">
                  <a href="{{route('ACCUEIL')}}"><img src="client/assets/images/logo.png" alt="logo"></a>
                </div>
                <div class="search-top">
                  <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                  <div class="search-top">
                    <form class="search-form">
                      <input type="text" placeholder="" name="search">
                      <button value="search" type="submit"><i class="ti-search"></i></button>
                    </form>
                  </div>
                </div>
                <div class="mobile-nav"></div>
              </div>
              <div class="col-lg-8 col-md-7 col-12">
                <div class="search-bar-top">
                  <div class="search-bar">
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-12">
                <div class="right-bar">
                  <div class="sinlge-bar">
                    <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="sinlge-bar">
                    <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="sinlge-bar shopping">
                    <a href="{{route('PANIER')}}" class="single-icon"><i class="ti-shopping-cart"></i> <span class="total-count">2</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-inner">
          <div class="container">
            <div class="cat-nav-head">
              <div class="row">
                <div class="col-lg-3">
                  <div class="all-category">
                    <h3 class="cat-heading">
                    <i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                  </div>
                </div>
                <div class="col-lg-9 col-12">
                  <div class="menu-area">
                    <nav class="navbar navbar-expand-lg">
                      <div class="navbar-collapse">	
                        <div class="nav-inner">	
                          <ul class="nav main-menu menu navbar-nav">
                            <li><a href="{{route('ACCUEIL')}}">Accueil</a></li>
                            <li><a href="{{route('BOUTIQUE')}}">Produits d'ailleurs</a></li>												
                            <li><a href="{{route('BLOG')}}">Blog</a></li>									
                            <li><a href="{{route('CONTACT')}}">Contacts</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    <!--/ End Header -->


    @yield('content')


    <!-- Start Footer Area -->
      <footer class="footer">
        <div class="footer-top section">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-12">
                <div class="single-footer about">
                  <div class="logo">
                    <a href="{{route('ACCUEIL')}}"><img src="client/assets/images/logo2.png" alt="#"></a>
                  </div>
                  <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                  <p class="call">Des questions ? Ecrivez-nous 24h/24 et 7j/7<span><a href="tel:123456789">(+228) 90112233</a></span></p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-12">
                <div class="single-footer links">
                  <h4>Pages</h4>
                  <ul>
                    <li><a href="#">A propos</a></li>
                    <li><a href="{{route('BOUTIQUE')}}">Boutique</a></li>
                    <li><a href="{{route('BLOG')}}">Blog</a></li>
                    <li><a href="{{route('CONTACT')}}">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-12">
                <div class="single-footer links">
                  <h4>Service client</h4>
                  <ul>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Nous écrire</a></li>
                    <li><a href="#">Appelez-nous</a></li>
                    <li><a href="#">Acheter</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer social">
                  <h4>Contacts</h4>
                  <div class="contact">
                    <ul>
                      <li>Lomé (Togo).</li>
                      <li>SiteWeb.com.</li>
                      <li>contact@domain.com</li>
                      <li>(+228) 90112233</li>
                    </ul>
                  </div>
                  <ul>
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="inner">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="left">
                    <p>Copyright © 2024 <a href="#" target="_blank">Eka-digital</a>  -  All Rights Reserved.</p>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="right">
                    <img src="client/assets/images/payments.png" alt="#">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!-- /End Footer Area -->


  <!-- Jquery -->
  <script src="client/assets/js/jquery.min.js"></script>
  <script src="client/assets/js/jquery-migrate-3.0.0.js"></script>
	<script src="client/assets/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="client/assets/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="client/assets/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="client/assets/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="client/assets/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="client/assets/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="client/assets/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="client/assets/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="client/assets/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="client/assets/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="client/assets/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="client/assets/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="client/assets/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="client/assets/js/easing.js"></script>
	<!-- Active JS -->
	<script src="client/assets/js/active.js"></script>
  <!-- Ytplayer JS -->
	<script src="client/assets/js/ytplayer.min.js"></script>
  <!-- Fancybox JS -->
	<script src="client/assets/js/facnybox.min.js"></script>

  <!-- @stack('send')
  @stack('message') -->

</body>
</html>