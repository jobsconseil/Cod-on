@extends('Layout.Front')

@section('content')
    <!-- Start top-section Area -->
    <section class="top-section-area pb-50 pt-50">
        <div class="container">
            <div class="row justify-content-between align-items-center d-flex">
                <div class="col-lg-8 top-left">
                    <h1 class="text-uppercase text-white mb-20">Entrer En Contact</h1>
                    <p class="text-white">
                        Nous sommes disponible pour vous et pour le code 24/7, posez des questions, faites des remarques et proposez des améliorations ici.
                    </p>
                </div>
                <div class="col-lg-4 top-right">
                    <ul>
                        <li><a href="/">Accueil</a><span class="lnr lnr-arrow-right"></span></li>
                        <li><a href="{{route('contact')}}">Entrer En Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-section Area -->
    <!-- Start page-content Area -->
    <section class="page-content-area contact-content-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 contact-content contact-page-contact">
                    <div class="contact-top">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 single-info">
                                <h6 class="pb-20">Visitez Nos Locaux</h6>
                                <p>
                                    318 Luc Marc Ivanga. (Face Satcon)
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 single-info">
                                <h6 class="pb-20">Appelez Nous</h6>
                                <p>
                                    Phone 01: +241 04 22 83 06
                                    <br> Phone 02: +241 02 02 00 11
                                    <br> FAX: 07 75 07 37
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 single-info">
                                <h6 class="pb-20">Ecrivez Nous</h6>
                                <p>
                                    jobs@jobs-conseil.com
                                    <br> richard.mebodo@jobs-conseil.com
                                    <br> jeff@jobs-conseil.com
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 single-info">
                                <h6 class="pb-20">Support Membre</h6>
                                <p>
                                    support@jobs-conseil.com
                                </p>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div style=" width:100%; height: 445px; margin:15px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.8612600304452!2d9.444983276436428!3d0.3970501217016374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d178487bf5e6771!2sJOBS+CONSEIL!5e0!3m2!1sfr!2sga!4v1531395816068" width="1110" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="mt-100 contact-section">
                            <form class="form-area contact-page-form" id="myForm" action="http://pixelcoder.net/template/designstudio/mail.html" method="post" class="contact-form text-right">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 form-group">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                                        <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="alert-msg" style="text-align: left"></div>
                                    </div>
                                    <div class="col">
                                        <button class="genric-btn primary" style="float:right;">Envoyer Le Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End page-content Area -->
@endsection
