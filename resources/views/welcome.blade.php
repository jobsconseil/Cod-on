@extends('Layout\Front')

@section('content')
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
    </section>
    <!-- End counter Area -->
@endsection