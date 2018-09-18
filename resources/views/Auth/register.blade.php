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
    <link rel="stylesheet" href="{{ asset('/Front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/Front/css/main.css') }}">
    <link href="{{asset('/Front/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />
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
                    <li class="menu-active"><a href="/">Accueil</a></li>
                    <li><a href="/">Forum</a></li>
                    <li><a href="/">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    @if(Auth::guest())
                        <li class="generic-btn circle primary"><a href="{{route('login')}}">Connexion</a></li>
                    @endif
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </div>
</header>
<!-- #header -->

<section class="login-form-area pb-120">
    <div class="container">
        <br><br><br>
        <div class="row justify-content-center pb-30">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h1 class="mb-10">Rejoignez - Nous</h1>
                    <span>Un espace de partage et d'échange pour un développement plus efficace !</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8" style="margin-left: 15%;">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                    {!! Form::open(['url' => route('register'), 'id' => 'register-form']) !!}
                            <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                            <div class="wizard-header text-center">
                                <h3 class="mb-10">
                                    COD'ON
                                </h3>
                                <span>Le #code c'est de la poésie.</span>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#about" data-toggle="tab">Profil</a></li>
                                    <li><a href="#account" data-toggle="tab">Experience</a></li>
                                    <li><a href="#address" data-toggle="tab">Personel</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group {!! $errors->has('username') ? 'has-error' : '' !!}">
                                                {!! Form::label('username', 'Username', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::text('username', old('username'), ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Votre Username', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Username'", 'required']) !!}
                                                @if( $errors->has('username'))
                                                    @component('Layout.error')
                                                        {{$errors->first('username')}}
                                                    @endcomponent
                                                @endif
                                            </div>

                                            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                                {!! Form::label('email', 'Email', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Votre Email', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Email'", 'required']) !!}
                                                @if( $errors->has('email'))
                                                    @component('Layout.error')
                                                        {{$errors->first('email')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                                                <label class="text-uppercase mt-10" for="">Mot de Passe</label>
                                                <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Votre Mot de Passe" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre Mot de Passe'">
                                                @if( $errors->has('password'))
                                                    @component('Layout.error')
                                                        {{$errors->first('password')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                            <div class="form-group {!! $errors->has('password_corfirmation') ? 'has-error' : '' !!}">
                                                <label class="text-uppercase mt-10" for="">Confirmer Mot de Passe</label>
                                                <input type="password" name="password_corfirmation" id="password_confirm" tabindex="1" class="form-control" placeholder="Confirmer Votre Mot de Passe" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirmer Votre Mot de Passe'">
                                                @if( $errors->has('password_corfirmation'))
                                                    @component('Layout.error')
                                                        {{$errors->first('password_corfirmation')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <h4 class="info-text"> Quel est votre niveau ? </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="experience" value="Debutant">
                                                    <div class="icon">
                                                        <i class="fa fa-pencil"></i>
                                                    </div>
                                                    <h6>Débutant</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="experience" value="Intermediare">
                                                    <div class="icon">
                                                        <i class="fa fa-terminal"></i>
                                                    </div>
                                                    <h6>Intermédiaire</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="experience" value="Expert">
                                                    <div class="icon">
                                                        <i class="fa fa-laptop"></i>
                                                    </div>
                                                    <h6>Expert</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Quels sont vos informations personnels ? </h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                                {!! Form::label('name', 'Nom & Prénom', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Votre Nom & Prénom', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Username'", 'required']) !!}
                                                @if( $errors->has('name'))
                                                    @component('Layout.error')
                                                        {{$errors->first('name')}}
                                                    @endcomponent
                                                @endif
                                            </div>

                                            <div class="form-group {!! $errors->has('bio') ? 'has-error' : '' !!}">
                                                {!! Form::label('bio', 'Votre Bio', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::textarea('bio', old('bio'), ['class' => 'form-control', 'id' => 'bio', 'placeholder' => 'Votre Biographie', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Email'", 'required']) !!}
                                                @if( $errors->has('bio'))
                                                    @component('Layout.error')
                                                        {{$errors->first('bio')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {!! $errors->has('location') ? 'has-error' : '' !!}">
                                                {!! Form::label('location', 'Localisation', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::text('location', old('location'), ['class' => 'form-control', 'id' => 'location', 'placeholder' => 'Votre Localisation', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Email'", 'required']) !!}
                                                @if( $errors->has('location'))
                                                    @component('Layout.error')
                                                        {{$errors->first('location')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                            <div class="form-group {!! $errors->has('jobs') ? 'has-error' : '' !!}">
                                                {!! Form::label('jobs', 'Job', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::text('jobs', old('jobs'), ['class' => 'form-control', 'id' => 'jobs', 'placeholder' => 'Votre Job', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Email'", 'required']) !!}
                                                @if( $errors->has('jobs'))
                                                    @component('Layout.error')
                                                        {{$errors->first('jobs')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {!! $errors->has('recuperationEmail') ? 'has-error' : '' !!}">
                                                {!! Form::label('recuperationEmail', 'Email de récupération', ['class' => 'text-uppercase mt-10']) !!}
                                                {!! Form::text('recuperationEmail', old('recuperationEmail'), ['class' => 'form-control', 'id' => 'recuperationEmail', 'placeholder' => 'Votre Email de récupération', 'onfocus' => "this.placeholder = ''", 'onblur' => "this.placeholder = 'Votre Email'", 'required']) !!}
                                                @if( $errors->has('recuperationEmail'))
                                                    @component('Layout.error')
                                                        {{$errors->first('recuperationEmail')}}
                                                    @endcomponent
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-lg btn-next btn-primary btn-block btn-signin text-uppercase' name='next' value='Suivant' />
                                    <input type='submit' class='btn btn-lg btn-finish btn-success btn-block btn-signin text-uppercase' name='finish' value='Terminer' />
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-lg btn-previous btn-info btn-block btn-signin text-uppercase' name='previous' value='Précédant' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
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
<script src="{{ asset('/Front/js/jquery.bootstrap.js') }}"></script>
<!-- Form Wizard JavaScript -->
<!--  Plugin for the Wizard -->
<script src="{{ asset('/Front/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{ asset('/Front/js/jquery.validate.min.js') }}"></script></body>
</html>