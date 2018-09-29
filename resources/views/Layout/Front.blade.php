<!DOCTYPE html>
<html lang="fr" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.html">
        <!-- Author Meta -->
        <meta name="author" content="Jobs Conseil">

        <!-- Meta Description -->
        <meta name="description" content="Communauté de développeur en ligne">
        <!-- Meta Keyword -->
        <meta name="keywords" content="code, informatique, technologie, créativité, projet, collaboration">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Cod'On</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!-- ======================= CSS ====================== -->
        <link rel="stylesheet" href="{{ asset('/Front/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('/Front/css/main.css') }}">
    </head>

    <body class="">
        <header id="header">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="#"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="#">Accueil</a></li>
                            <li><a href="/">Forum</a></li>
                            <li><a href="/">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            @if(Auth::guest())
                                <li><a class="generic-btn circle primary" href="{{route('login')}}">Connexion</a></li>
                            @endif
                            @if(Auth::user())
                                <li><a href="{{ route('compte') }}">Mon Compte</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            @endif
                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                </div>
            </div>
        </header>
        <!-- #header -->

        @include('Layout/Flash')
        @yield('content')

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>À Propos de nous</h6>
                            <p>
                                Nous sommes une équipe de jeunes développeur soucieux du développement numérique de notre continent Africain. Nous voulons être acteurs de cet évolution à travers des réalisations comme celle-ci.
                                Et faire profiter tout un chacun des connaissances et des expériences des uns et des autres.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Top Articles</h6>
                            <ul>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Managed Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Inscrivez vous suivre toute notre actualité et être informé sur les évènements du numérique.</p>
                            <div id="mc_embed_signup">
                                <form action="#" method="post">
                                    <div class="input-group newsletter-form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Votre Adresse Mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <span class="lnr lnr-arrow-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center footer-text">
                    <div class="col-lg-6 col-sm-6 footer-text-left">
                        <p>Copyright © 2018</p>
                    </div>
                    <div class="col-lg-6 col-sm-6 footer-text-right">
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-git"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->
        <script src="{{ asset('/Front/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('/Front/js/popper.min.js') }}"></script>
        <script src="{{ asset('/Front/js/vendor/bootstrap.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('/Front/js/easing.min.js') }}"></script>
        <script src="{{ asset('/Front/js/hoverIntent.js') }}"></script>
        <script src="{{ asset('/Front/js/superfish.min.js') }}"></script>
        <script src="{{ asset('/Front/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('/Front/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/Front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/Front/js/jquery.tabs.min.js') }}"></script>
        <script src="{{ asset('/Front/js/mn-accordion.js') }}"></script>
        <script src="{{ asset('/Front/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/Front/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('/Front/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('/Front/js/mail-script.js') }}"></script>
        <script src="{{ asset('/Front/js/main.js') }}"></script>
    </body>
</html>