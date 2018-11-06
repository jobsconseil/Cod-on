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
                <a href="{{ route('accueil') }}"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('forum.subject') }}">Forum</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
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

<!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container-fluid">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-5 col-md-6 image-container justify-content-center align-items-center">
                    <img class="img-fluid" src="img/banner-img.png" alt="">
                </div>
                <div class="banner-content col-lg-7 col-md-6">
                    <h1>
                        Digital Production <br>
                        Web Agency
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                    </p>
                    <a href="#" class="genric-btn2 arrow">Start a project<span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <img class="headers-img fullscreen" src="img/banner-img-bg.png" alt="">
    </section>
    <!-- End banner Area -->
    <!-- Start services Area -->
    <section class="services-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center section-title">
                <div class="col-lg-10">
                    <div class="title text-center">
                        <h6 class="mb-10">What we do</h6>
                        <h1>Our Offered Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service">
                        <img src="img/s1.png" alt="">
                        <a href="#"><h4>Illustrations</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <img src="img/s2.png" alt="">
                        <a href="#"><h4>Brand Identity</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <img src="img/s3.png" alt="">
                        <a href="#"><h4>Printing Designs</h4></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services Area -->
    <!-- Start projects Area -->
    <section class="projects-area">
        <div class="container">
            <div class="row d-flex justify-content-center section-title">
                <div class="col-lg-10">
                    <div class="title text-center">
                        <h6 class="mb-10">Our Portfolio</h6>
                        <h1>Latest Completed Projects</h1>
                    </div>
                </div>
            </div>
            <div align="right" class="cat-list">
                <a class="btn btn-default filter-button" data-filter="all">All Category</a>
                <a class="btn btn-default filter-button" data-filter="br">Branding</a>
                <a class="btn btn-default filter-button" data-filter="pr">Printing</a>
                <a class="btn btn-default filter-button" data-filter="ill">Illustrations</a>
            </div>
            <div class="projects-wrap">
                <div class="row align-items-end single-projects filter br">
                    <div class="col-md-6 project-img">
                        <img class="img-fluid" src="img/p1.jpg" alt="">
                    </div>
                    <div class="col-md-6 project-desc">
                        <h4>Magical Branding</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                        </p>
                        <a href="#" class="genric-btn arrow">Project details<span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
                <div class="row align-items-end single-projects filter pr">
                    <div class="col-md-6 project-desc desc-align-right">
                        <h4>Audio Track Mastering</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                        </p>
                        <a href="#" class="genric-btn arrow">Project details<span class="lnr lnr-arrow-right"></span></a>
                    </div>
                    <div class="col-md-6 project-img">
                        <img class="img-fluid" src="img/p2.jpg" alt="">
                    </div>
                </div>
                <div class="row align-items-end single-projects filter ill">
                    <div class="col-md-6 project-img">
                        <img class="img-fluid" src="img/p3.jpg" alt="">
                    </div>
                    <div class="col-md-6 project-desc">
                        <h4>Creative Poster</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                        </p>
                        <a href="#" class="genric-btn arrow">Project details<span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End projects Area -->
    <!-- Start brands Area -->
    <section class="brands-area pb-120 pt-60">
        <div class="container no-padding">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->
    <!-- Start home-information Area -->
    <section class="home-information-area">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="offset-lg-1 col-lg-4 col-md-12 information-left">
                    <h1>
                        Digital Production
                        Web Agency
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                    </p>
                    <a href="#" class="genric-btn arrow text-uppercase">Start A project<span class="lnr lnr-arrow-right"></span></a>
                </div>
                <img class="image-right" src="img/information-img.png" alt="">
            </div>
        </div>
    </section>
    <!-- End home-information Area -->
    <!-- Start review Area -->
    <section class="review-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center section-title">
                <div class="col-lg-10">
                    <div class="title text-center">
                        <h6 class="mb-10">Testimonials</h6>
                        <h1>What our Client’s Say</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about. 11% of all adult internet users visit dating.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about. 11% of all adult internet users visit dating.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about. 11% of all adult internet users visit dating.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->
    <!-- Start latest-blog Area -->
    <section class="latest-blog-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center section-title">
                <div class="col-lg-10">
                    <div class="title text-center">
                        <h6 class="mb-10">Our Blog Posts</h6>
                        <h1>Latest from our Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <div class="image-wrap relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/b1.jpg" alt="">
                            </div>
                            <div class="user-detais flex flex-row">
                                <div class="img">
                                    <img class="img-fluid" src="img/user.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h6>Nettie Mullins</h6>
                                    </a>
                                    <p>13th Dec </p>
                                </div>
                            </div>
                        </div>
                        <div class="detials">
                            <a href="#">
                                <h4>
                                    Portable latest Fashion for
                                    young women
                                </h4>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <a href="#" class="genric-btn arrow">View details<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <div class="image-wrap relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/b2.jpg" alt="">
                            </div>
                            <div class="user-detais flex flex-row">
                                <div class="img">
                                    <img class="img-fluid" src="img/user.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h6>Nettie Mullins</h6>
                                    </a>
                                    <p>13th Dec </p>
                                </div>
                            </div>
                        </div>
                        <div class="detials">
                            <a href="#">
                                <h4>
                                    Portable latest Fashion for
                                    young women
                                </h4>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <a href="#" class="genric-btn arrow">View details<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <div class="image-wrap relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/b3.jpg" alt="">
                            </div>
                            <div class="user-detais flex flex-row">
                                <div class="img">
                                    <img class="img-fluid" src="img/user.jpg" alt="">
                                </div>
                                <div class="detail">
                                    <a href="#">
                                        <h6>Nettie Mullins</h6>
                                    </a>
                                    <p>13th Dec </p>
                                </div>
                            </div>
                        </div>
                        <div class="detials">
                            <a href="#">
                                <h4>
                                    Portable latest Fashion for
                                    young women
                                </h4>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <a href="#" class="genric-btn arrow">View details<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest-blog Area -->
    <!-- Start counter Area -->
    <section class="counter-area pb-120" id="home-counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <h1 class="counter">2536</h1>
                        <span>Happy clients</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <h1 class="counter">7562</h1>
                        <span>Total Projects</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <h1 class="counter">2013</h1>
                        <span>Cups Coffee</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <h1 class="counter">10365</h1>
                        <span>Tickets Submitted</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End counter Area -->
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