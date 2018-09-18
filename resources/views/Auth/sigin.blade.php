<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Cod'On | Administration</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Jobs Conseil"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <link href="{{asset('/Back/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('/Back/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="index.html">
                <img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
                <span class="brand-text">Administration</span>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10">Pas de compte ?</span>
            <a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="{{ route('register') }}">Nous Rejoindre</a>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Se Connecter à COD'ON ADMIN</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Entrez vos informations.</h6>
                                </div>
                                <div class="form-wrap">
                                    <form action="{{ route('login') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Adresse Email</label>
                                            <input type="email" name="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Votre email">
                                            @if( $errors->has('email'))
                                                @component('Layout.error')
                                                    {{$errors->first('email')}}
                                                @endcomponent
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Mot de Passe</label>
                                            <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">Mot de passe Oublié ?</a>
                                            <div class="clearfix"></div>
                                            <input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Votre mdp">
                                            @if( $errors->has('passord'))
                                                @component('Layout.error')
                                                    {{$errors->first('password')}}
                                                @endcomponent
                                            @endif
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-success btn-rounded">Connexion</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{asset('/Back/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/Back/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/Back/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('/Back/js/jquery.slimscroll.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('/Back/js/init.js')}}"></script>
</body>

<!-- Mirrored from hencework.com/theme/flintstone/full-width-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jun 2018 08:20:48 GMT -->
</html>
