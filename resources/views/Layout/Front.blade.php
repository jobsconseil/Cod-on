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

    <body class="homepage">
        <header id="header">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index-2.html"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index-2.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="menu-has-children">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="privacy.html">Privecy Policy</a></li>
                                    <li><a href="terms.html">Terms & Conditions</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li class="menu-has-children">
                                        <a href="#">Level two    </a>
                                        <ul>
                                            <li><a href="#">Item One</a></li>
                                            <li><a href="#">Item Two</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-has-children">
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-single.html">Single Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        </li>
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
                            <h6>About Us</h6>
                            <p>
                                Why read motivational sayings? For motivation! You might need a bit, if you can use last year’s list of goals this year because it’s as good as new. All of us can benefit from inspirational.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Top Products</h6>
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
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                    <div class="input-group newsletter-form-group">
                                        <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
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
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
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