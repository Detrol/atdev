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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6W6JY7VC2Q"></script>
<script type="text/plain" data-categories="analytics">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-6W6JY7VC2Q');
</script>

<!-- * * * * * * * *-->
<!-- * Navigation  *-->
<!-- * * * * * * * *-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-main">
    <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="navbar-brand-logo" src="assets/img/atdevme_logo.png" alt=""/></a>-->
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="navbar-brand-logo"
                                                                        src="assets/img/logo2.png" alt=""/></a>
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
        <div class="row h-100 align-items-center">
            <div class="col text-center">

                @if(session()->has('status'))
                    <div class="alert alert-success mb-3 text-center mt-0" role="alert">
                        <i class="fa fa-check mr--3"></i> {{ session('status') }}
                    </div>
                @endif

                <div class="masthead-subtitle mb-3"><i>"{{ __("home.head_text") }}</i>"</div>
                <hr class="primary small"/>
                <a class="btn btn-outline-light mt-3" href="/submit">Click here to hire me!</a>
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
        <p class="lead m-0">I am here to help you code a website for yourself or your company.<br /> In either <strong>Swedish</strong>, <strong>English</strong> or <strong>Both</strong></p>
        <hr class="primary small mb-5"/>
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid rounded-circle" style="max-width: 350px;"
                     src="{{ asset('assets/img/64653384_619943628510400_7141277663913574400_o.jpg') }}" alt=""/>
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

<!-- * * * * * * * * * * * * *-->
<!-- * Testimonials Section  *-->
<!-- * * * * * * * * * * * * *-->
<section class="page-section callout3 text-white" id="testimonials">
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
<section class="page-section bg-white" id="contact">
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
<footer class="footer text-center text-white">
    <div class="container">
        <div class="col align-self-center">
            <h5 class="text-uppercase"><i class="fas fa-envelope fa-fw"></i>Email</h5>
            <a class="text-white-50" href="mailto:info@atdev.me">info@atdev.me</a>
        </div>
        <div class="footer-social">
            <a class="px-3 text-white" href="https://facebook.com/ATDev-104035658344178" target="_blank"><i class="fab fa-facebook-f fa-2x fa-fw"></i></a><a
                class="px-3 text-white" href="https://twitter.com/ATDev6" target="_blank"><i class="fab fa-twitter fa-2x fa-fw"></i></a><a
                class="px-3 text-white" href="https://linkedin.com/in/andreas-thun-5a6a9049" target="_blank"><i class="fab fa-linkedin-in fa-2x fa-fw"></i></a>
        </div>
        <div class="footer-copyright">&copy; 2021 ATDev.me</div>
        <div class="col align-self-center mt-3">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://app.termly.io/document/cookie-policy/1ec93bbb-1950-41b3-ad9c-371bed4737c9" target="_blank">Cookies</a></li>
                <li class="list-inline-item"><a href="https://app.termly.io/document/privacy-policy/0b616b0b-ca10-4d02-b43e-8a6dc436b520" target="_blank">Privacy</a></li>
                <li class="list-inline-item"><a href="https://app.termly.io/document/terms-of-use-for-website/080c9bba-0a92-467b-85f0-f7631887ac15" target="_blank">Terms</a></li>
                <li class="list-inline-item"><a href="https://app.termly.io/document/disclaimer/134f3e3a-7807-4c58-8f98-b3895ae0b57c" target="_blank">Disclaimer</a></li>
            </ul>
        </div>
        <button class="termly-cookie-preference-button" type="button" style="background: white; width: 165px; height: 30px; border-radius: 3px; border: 1px solid #5f7d9c; font-family: Roboto, Arial; font-size: 10px; color: #5f7d9c; font-weight: 600; box-sizing: border-box; cursor: pointer; padding: 0; outline: none;" onclick="displayPreferenceModal()">Manage Cookie Preferences</button>
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

<script>
    (function () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://app.termly.io/embed.min.js';
        s.id = '7f8d4e4a-fe08-4427-a465-d2ce2169abca';
        s.setAttribute("data-name", "termly-embed-banner");
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
</body>

@endsection
