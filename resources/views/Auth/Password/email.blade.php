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
    <link rel="stylesheet" href="{{ asset('/Front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/main.css') }}">
</head>

<body class="homepage">
<section class="login-form-area pb-120">
    <div class="container">
        <br><br><br>
        <div class="row justify-content-center pb-30">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="section-title text-center">
                    <h1 class="mb-10">Mot de Passe Oublié</h1>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 login-form" style="margin-left: 25%;">
                <div class="card-container">
                    <h4 class="text-uppercase mb-80 mt-40"><a href="/">Cod'on</a></h4>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-signin" method="post" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <span id="reauth-email" class="reauth-email"></span>
                        <label class="text-uppercase" for="username">Adresse Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
                        @if( $errors->has('email'))
                            @component('Layout.error')
                                {{$errors->first('email')}}
                            @endcomponent
                        @endif
                        <br>
                        <button class="btn btn-lg btn-primary btn-block btn-signin text-uppercase" type="submit">Envoyer</button>
                    </form>
                    <!-- /form -->
                    <a href="{{ route('login') }}" class="mt-10 text-center forgot-password text">
                        Connexion
                    </a>
                    |
                    <a href="{{ route('register') }}" class="mt-10 text-center forgot-password text">
                        Créer un compte.
                    </a>
                </div>
                <!-- /card-container -->
            </div>
        </div>
    </div>
</section>

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
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