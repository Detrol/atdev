@extends('layouts.app')

@section('content')
@php
    use Jenssegers\Agent\Agent;
        $agent = new Agent();
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>ATDev.me</title>
    <!-- Custom fonts for this theme -->
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet" crossorigin="anonymous"/>
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet"/>
    <!-- Plugin styles-->
    <link href="assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet"/>
    <link href="assets/plugins/html5-device-mockups/dist/device-mockups.min.css" rel="stylesheet"/>
    <link href="assets/plugins/slick-carousel/slick.css" rel="stylesheet"/>
    <!-- Custom styles for this theme-->
    <link href="css/styles.css" rel="stylesheet"/>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
</head>
</html>
<body id="page-top">
<!-- * * * * * * * *-->
<!-- * Navigation  *-->
<!-- * * * * * * * *-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-main">
    <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="navbar-brand-logo" src="assets/img/atdevme_logo.png" alt=""/></a>-->
        <div class="text-white">
            <!--<a class="btn-link text-white" href="/lang/sv"><img src="{{ asset('assets/img/flags/24x24/SE.png') }}"
                                                                alt="SV"/></a> &nbsp; &nbsp;
            <a class="btn-link text-white" href="/lang/en"><img src="{{ asset('assets/img/flags/24x24/US.png') }}" alt="SV"/></a>-->
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#start">{{ __("home.start") }}</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">{{ __("home.about") }}</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#process">{{ __("home.process") }}</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                        href="#portfolio">{{ __("home.portfolio") }}</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                        href="#testimonials">{{ __("home.testimonials") }}</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">{{ __("home.contact") }}</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- * * * * * * *-->
<!-- * Masthead *-->
<!-- * * * * * * *-->
<header class="masthead masthead-full text-white" id="start">
    <div class="container h-100">
        @if(session()->has('status'))
            <div class="alert alert-success mb-3 text-center" role="alert">
                <i class="fa fa-check mr--3"></i> {{ session('status') }}
            </div>
        @endif
        <div class="row h-100 align-items-center">
            <div class="col text-center">
                <img class="masthead-logo mb-4" src="assets/img/atdevme.png" alt=""/>
                <hr class="primary small"/>
                <div class="masthead-subtitle"><i>"{{ __("home.head_text") }}</i>"</div>
                <hr class="primary small"/>
                <a class="btn btn-outline-light mt-3" href="/submit">Klicka här för att boka mig!</a>
            </div>
        </div>
    </div>
    <div class="masthead-scroll">
        <a class="masthead-scroll-btn js-scroll-trigger" href="#about"><i class="fas fa-angle-down"></i></a>
    </div>
</header>
<!-- * * * * * * * * * * * * * *-->
<!-- * About Section - Carousel *-->
<!-- * * * * * * * * * * * * * *-->
<section class="page-section text-center bg-light" id="about">
    <div class="container">
        <h2 class="page-section-heading text-uppercase">{{ __("home.about_me") }}</h2>
        <p class="lead m-0">{{ __("home.about_me_title") }}</p>
        <hr class="primary small mb-5"/>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid rounded-circle" style="max-width: 350px;" src="{{ asset('assets/img/64653384_619943628510400_7141277663913574400_o.jpg') }}" alt=""/>
            </div>
            <div class="col-12 col-md-6 text-left">
                {!! __("home.about_me_text") !!}
            </div>
        </div>

    </div>
</section>
<!-- * * * * * * * * * * * * * *-->
<!-- * Callout Section - Full  *-->
<!-- * * * * * * * * * * * * * *-->
<section class="callout callout-full">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-xl-10 text-center">
                {!! __("home.callout_text") !!}
                <hr class="primary small mb-5"/>
            </div>
        </div>
    </div>
</section>
<!-- * * * * * * * * * *-->
<!-- * Process Section *-->
<!-- * * * * * * * * * *-->
<section class="page-section" id="process">
    <div class="container">
        <h2 class="page-section-heading text-uppercase text-center">{!! __("home.process_head") !!}</h2>
        <p class="lead m-0 text-center">{!! __("home.process_title") !!}</p>
        <hr class="primary small mb-5"/>
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="process-list">
                    <div class="process-list-icon"><i class="fas fa-comments"></i></div>
                    <div class="process-list-content">
                        <h4 class="text-uppercase mb-3">{!! __("home.process_title_1") !!}</h4>
                        <p class="">{!! __("home.process_text_1") !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="process-list">
                    <div class="process-list-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <div class="process-list-content">
                        <h4 class="text-uppercase mb-3">{!! __("home.process_title_2") !!}</h4>
                        <p>{!! __("home.process_text_2") !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-list">
                    <div class="process-list-icon"><i class="fas fa-rocket"></i></div>
                    <div class="process-list-content">
                        <h4 class="text-uppercase mb-3">{!! __("home.process_title_3") !!}</h4>
                        <p>{!! __("home.process_text_3") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- * * * * * * * * * * * * * * * * *-->
<!-- * Portfolio Section - Carousel  *-->
<!-- * * * * * * * * * * * * * * * * *-->
<!--<section id="portfolio" class="bg-light">
    <div class="text-center">
        <h2 class="page-section-heading text-uppercase">Portfolio</h2>
        <p class="lead m-0">Here are some projects that we've worked on.</p>
        <hr class="primary small mb-5" />
    </div>
    <div class="carousel-portfolio">
        <div class="carousel-portfolio-item text-center text-lg-left">
            <div class="first-item bg-dark"></div>
            <div class="container text-area h-100 ">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6 col-xl-8">
                        <div class="device-wrapper mb-3 mb-lg-0">
                            <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-1-img.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <h3 class="text-uppercase m-0">Project Name</h3>
                        <p class="mb-0">Project Category</p>
                        <hr class="primary small ml-lg-0 mb-4" />
                        <a class="btn btn-outline-light" data-toggle="modal" data-target="#portfolio-modal-1" href="javascript:;">View Details<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-portfolio-item text-center text-lg-left">
            <div class="second-item bg-dark"></div>
            <div class="container text-area h-100 ">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6 col-xl-8">
                        <div class="device-wrapper mb-3 mb-lg-0">
                            <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-2-img.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <h3 class="text-uppercase m-0">Project Name</h3>
                        <p class="mb-0">Project Category</p>
                        <hr class="primary small ml-lg-0 mb-4" />
                        <a class="btn btn-outline-light" data-toggle="modal" data-target="#portfolio-modal-2" href="javascript:;">View Details<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-portfolio-item third-item text-center text-lg-left">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6 col-xl-8">
                        <div class="device-wrapper mb-3 mb-lg-0">
                            <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-3-img.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <h3 class="text-uppercase m-0">Project Name</h3>
                        <p class="mb-0">Project Category</p>
                        <hr class="primary small ml-lg-0 mb-4" />
                        <a class="btn btn-outline-light" data-toggle="modal" data-target="#portfolio-modal-3" href="javascript:;">View Details<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-portfolio-item fourth-item text-center text-lg-left">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6 col-xl-8">
                        <div class="device-wrapper mb-3 mb-lg-0">
                            <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-4-img.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <h3 class="text-uppercase m-0">Project Name</h3>
                        <p class="mb-0">Project Category</p>
                        <hr class="primary small ml-lg-0 mb-4" />
                        <a class="btn btn-outline-light" data-toggle="modal" data-target="#portfolio-modal-4" href="javascript:;">View Details<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- * * * * * * * * * * * * * * *-->
<!-- * Portfolio Section - Grid  *-->
<!-- * * * * * * * * * * * * * * *-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="page-section-heading text-uppercase">{!! __("home.portfolio_head") !!}</h2>
            <p class="lead m-0">{!! __("home.portfolio_title") !!}</p>
            <hr class="primary small mb-5"/>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 col-xl-4">
                <a class="portfolio-grid-item" href="https://remindme.cloud" target="_blank">
                    <div class="caption">
                        <div class="caption-content">
                            <h2>Remindme.cloud</h2>
                            <p class="mb-0">Molnbaserad påminnelsetjänst med personlig kalender och händelser.</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/img/remindme.png') }}" alt=""/>
                </a>
            </div>

            <div class="col-lg-6 col-xl-4">
                <a class="portfolio-grid-item" href="https://putsikarlstad.se" target="_blank">
                    <div class="caption">
                        <div class="caption-content">
                            <h2>Putsikarlstad.se</h2>
                            <p class="mb-0">Hemsida med egen inloggning och komplett bokningssystem.</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/img/putsikarlstad.png') }}" alt=""/>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Modal - 1-->
<div class="modal fade portfolio-modal" id="portfolio-modal-1" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small"/>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur,
                                debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime
                                voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait"
                                     data-color="black">
                                    <div class="screen"><img class="img-fluid"
                                                             src="assets/img/portfolio/carousel/item-1-img.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="list-unstyled-item">
                                    Client: <strong><a class="text-white" href="#">Start Bootstrap</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Service: <strong><a class="text-white" href="#">Web Development</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Date: <strong><a class="text-white" href="#">January 2019</a></strong>
                                </li>
                            </ul>
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i
                                    class="fas fa-times"></i>Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal - 2-->
<div class="modal fade portfolio-modal" id="portfolio-modal-2" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small"/>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur,
                                debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime
                                voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait"
                                     data-color="black">
                                    <div class="screen"><img class="img-fluid"
                                                             src="assets/img/portfolio/carousel/item-2-img.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="list-unstyled-item">
                                    Client: <strong><a class="text-white" href="#">Start Bootstrap</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Service: <strong><a class="text-white" href="#">Web Development</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Date: <strong><a class="text-white" href="#">January 2019</a></strong>
                                </li>
                            </ul>
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i
                                    class="fas fa-times"></i>Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal - 3-->
<div class="modal fade portfolio-modal" id="portfolio-modal-3" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small"/>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur,
                                debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime
                                voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait"
                                     data-color="black">
                                    <div class="screen"><img class="img-fluid"
                                                             src="assets/img/portfolio/carousel/item-3-img.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="list-unstyled-item">
                                    Client: <strong><a class="text-white" href="#">Start Bootstrap</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Service: <strong><a class="text-white" href="#">Web Development</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Date: <strong><a class="text-white" href="#">January 2019</a></strong>
                                </li>
                            </ul>
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i
                                    class="fas fa-times"></i>Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal - 4-->
<div class="modal fade portfolio-modal" id="portfolio-modal-4" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small"/>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur,
                                debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime
                                voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait"
                                     data-color="black">
                                    <div class="screen"><img class="img-fluid"
                                                             src="assets/img/portfolio/carousel/item-4-img.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="list-unstyled-item">
                                    Client: <strong><a class="text-white" href="#">Start Bootstrap</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Service: <strong><a class="text-white" href="#">Web Development</a></strong>
                                </li>
                                <li class="list-unstyled-item">
                                    Date: <strong><a class="text-white" href="#">January 2019</a></strong>
                                </li>
                            </ul>
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i
                                    class="fas fa-times"></i>Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * *-->
<!-- * Testimonials Section  *-->
<!-- * * * * * * * * * * * * *-->
<section class="page-section" id="testimonials">
    <div class="container">
        <h2 class="page-section-heading text-uppercase text-center">{!! __("home.testimonials_head") !!}</h2>
        <p class="lead m-0 text-center">{!! __("home.testimonials_title") !!}</p>
        <hr class="primary small mb-5"/>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="carousel-testimonials">
                    <div class="carousel-testimonials-item text-center">
                        <div class="carousel-testimonials-item-content">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aliquid
                                magni quam perspiciatis in. Atque facilis saepe, accusantium in voluptate doloremque
                                neque dolores provident amet error, ipsam, voluptatibus similique quasi.</p>
                            <h6 class="text-uppercase name mb-0">Jim Walker</h6>
                            <div class="small">CEO of Company Name</div>
                        </div>
                    </div>
                    <div class="carousel-testimonials-item text-center">
                        <div class="carousel-testimonials-item-content">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aliquid
                                magni quam perspiciatis in. Atque facilis saepe, accusantium in voluptate doloremque
                                neque dolores provident amet error, ipsam, voluptatibus similique quasi.</p>
                            <h6 class="text-uppercase name mb-0">Karen Jones</h6>
                            <div class="small">CEO of Company Name</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- * * * * * * * * * *-->
<!-- * Contact Section *-->
<!-- * * * * * * * * * *-->
<section class="page-section bg-black text-white" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">
                <h2 class="page-section-heading text-uppercase text-center">{!! __("home.contact_me_head") !!}</h2>
                <p class="lead m-0 text-center">{!! __("home.contact_me_title") !!}</p>
                <hr class="primary small mb-5"/>
                <form id="contact-form" name="sentMessage" novalidate="novalidate" action="{{ route('contact_mail') }}">
                    @csrf
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>{!! __("home.contact_name") !!}</label>
                            <input class="form-control" id="name" type="text" name="name"
                                   placeholder="{!! __("home.contact_name") !!}" required="required"
                                   data-validation-required-message="Please enter your name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>{!! __("home.contact_email") !!}</label>
                            <input class="form-control" id="email" type="email" name="email"
                                   placeholder="{!! __("home.contact_email") !!}" required="required"
                                   data-validation-required-message="Please enter your email address."/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>{!! __("home.contact_message") !!}</label>
                            <textarea class="form-control" id="message" rows="5" name="message"
                                      placeholder="{!! __("home.contact_message") !!}" required="required"
                                      data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br/>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button class="btn btn-outline-primary g-recaptcha"
                                    type="submit"
                                    data-sitekey="6Le2UTAaAAAAAGEqRMTm_6hKzT4ui_ftWnMM7Qqf"
                                    data-callback='onSubmit'
                                    data-action='submit'>{!! __("home.contact_send") !!}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- * * * * * *-->
<!-- * Footer  *-->
<!-- * * * * * *-->
<footer class="footer text-center text-white-50">
    <div class="container">
        <div class="col align-self-center">
            <h5 class="text-uppercase"><i class="fas fa-envelope fa-fw"></i>Email</h5>
            <a class="text-white-50" href="mailto:mail@example.com">info@atdev.me</a>
        </div>
        <div class="footer-social">
            <a class="px-3 text-white-50" href="#"><i class="fab fa-facebook-f fa-2x fa-fw"></i></a><a
                class="px-3 text-white-50" href="#"><i class="fab fa-twitter fa-2x fa-fw"></i></a><a
                class="px-3 text-white-50" href="#"><i class="fab fa-linkedin-in fa-2x fa-fw"></i></a>
        </div>
        <div class="footer-copyright">&copy; 2021 ATDev.me</div>
    </div>
</footer>
<!-- Bootstrap core JavaScript-->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript-->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/plugins/slick-carousel/slick.min.js"></script>
<!-- Custom scripts for this theme-->
<script src="js/scripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>
</body>

@endsection
