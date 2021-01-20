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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
          integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Custom styles for this theme-->
    <link href="css/styles.css" rel="stylesheet"/>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>

    <style type="text/css">
        .custom-centered {
            margin: 0 auto;
            max-width: 400px;
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0);
            -moz-transform: translate(0);
            transform: translate(0);
        }
    </style>
</head>
</html>
<body id="page-top">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6W6JY7VC2Q"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6W6JY7VC2Q');
</script>

<!-- * * * * * * * *-->
<!-- * Navigation  *-->
<!-- * * * * * * * *-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-main">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="navbar-brand-logo" src="assets/img/logo2.png" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Start Page</a></li>
            </ul>
        </div>

    </div>
</nav>

<!-- * * * * * * *-->
<!-- * Masthead *-->
<!-- * * * * * * *-->
<header class="subhead subhead-full text-white" id="start">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col text-center">

                <form class="">
                    <p class="font-weight-light">If you have already created an assignment, you can enter your unique <strong> Assignment ID </strong>
                        below to see status and information. <br />
                        If you want to book me, you can scroll down to find the booking form.</p>
                    <div class="input-group mb-3 custom-centered">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">#</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Assignment ID" aria-label="Assignment ID"
                               aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-primary">Skicka</button>
                </form>

            </div>
        </div>
    </div>
</header>

<!-- * * * * * * * * * *-->
<!-- * Form Section *-->
<!-- * * * * * * * * * *-->

<section class="page-section bg-white" id="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">

                <div class="lead mb-5 text-muted"><i>In the form below, you will have to fill in the information that I
                        need to start a job.
                        These are only basic, and more questions may need to be answered depending on the complexity
                        of just your
                        new website.<br/>
                        Like the information that should be on various subpages, which you yourself need to stand
                        for. My job is to design and implement based on the information you provide
                        me. <br/> <br/>

                        Before you confirm a booking, make sure you are well prepared for what you want, as well as
                        the information
                        you want to convey on your subpages. Including the pictures you want to show. <br/>
                        We will discuss this further via email. <br/> <br />

                        If you have any questions or concerns, you are more than welcome to contact me in advance.<br/>
                        <a href="mailto:info@atdev.me">info@atdev.me</a></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="callout2 text-white">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-xl-10 text-center">
                <h1 class="text-uppercase text-center">Mission</h1>
                <p class="lead m-0 text-center">Fill in the information below as carefully as you can.</p>
                <hr class="primary small"/>
                <div class="text-center mb-5">
                    <button class="btn btn-outline-light" data-toggle="modal" data-target="#info">More Information
                    </button>
                    <button class="btn btn-outline-light" data-toggle="modal" data-target="#priser">Price information
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-white" id="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">

                <form novalidate id="submitForm" class="bs-validate" action="{{ route('submit_post') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="page_name">Website name</label>
                                <input id="page_name" type="text" name="page_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="page_slogan">Website slogan (if you have one)</label>
                                <input id="page_slogan" type="text" name="page_slogan" class="form-control">
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="form-group">
                        <label for="pages">Which subpages are desired? Separated by comma.</label>
                        <input id="pages" type="text" data-role="tagsinput" name="pages" class="form-control" required>
                        <small class="form-text text-muted">Ex. Home, About, Team, Contact</small>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input contact_page-toggle" id="contact_check" name="contact_check" value="1">
                        <label class="form-check-label" for="contact_check">Do you need a contact page?</label>
                    </div>

                    <div class="row contact_page-show">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="contact_phone">Phone number</label>
                                <input id="contact_phone" type="text" name="contact_phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact_email">E-mail</label>
                                <input id="contact_email" type="text" name="contact_email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact_address">Visiting address</label>
                                <input id="contact_address" type="text" name="contact_address" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="contact_hours">If you want to present opening hours, fill in this.</label>
                                <textarea id="contact_hours" class="form-control" name="contact_hours" placeholder="Ex:
Vardagar 09-17
Helger: 09-14" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input contact_form-toggle" id="contact_form_check" name="contact_form_check" value="1">
                        <label class="form-check-label" for="contact_form_check">Do you need a contact form that can
                            send mail?</label>
                    </div>

                    <div class="form-group contact_form-show">
                        <label for="contact_form_mail">Fill in which email these should be sent to
                        </label>
                        <input id="contact_form_mail" type="text" name="contact_form_mail" class="form-control">
                        <small class="form-text text-muted">If you want a new email tied to the website, leave
                            this empty.</small>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input languages-toggle" id="languages_check" name="languages_check" value="1">
                        <label class="form-check-label" for="languages_check">Do you need the website in several languages?</label>
                    </div>

                    <div class="form-group languages-show">
                        <label for="page_languages">Fill in all languages and separate with commas.</label>
                        <input id="page_languages" type="text" data-role="tagsinput" name="page_languages" class="form-control mb-3">
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input login-toggle" id="login_check" name="login_check" value="1">
                        <label class="form-check-label" for="login_check">Do you need a login?</label>
                    </div>

                    <div class="form-group login-show">
                        <label for="login_text">Fill in purpose
                            <small class="form-text text-muted">If it is to be administrative or for users e.g. Preferably as detailed as possible.</small>
                        </label>

                        <textarea id="login_text" name="login_text" class="form-control" rows="3"></textarea>
                    </div>

                    <hr>

                    <h6>Design</h6>
                    <p>Below you tick in which design template you want me to start from when I create your website.
                        <small class="form-text text-muted">These are ready-made design templates that I tailor to yours
                            wishes, which I also own a license
                            for. <br/>
                            If you want a template I do not yet own a license for, you will find these
                            <a href="https://wrapbootstrap.com/templates?bootstrap=5">here</a>, <a
                                href="https://wrapbootstrap.com/templates?bootstrap=4">here</a> and <a href="https://themes.getbootstrap.com/" target="_blank">here</a>.</small>
                    </p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="template" id="template1"
                               value="Unify" checked>
                        <label class="form-check-label" for="template1">
                            Unify (<a href="https://htmlstream.com/preview/unify-v2.6.3/index.html" target="_blank">Show</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="template" id="template2"
                               value="Smarty">
                        <label class="form-check-label" for="template2">
                            Smarty (<a href="https://smarty.stepofweb.com/3.1.3/html_frontend/overview.html"
                                       target="_blank">Show</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="template" id="template3"
                               value="Inspinia">
                        <label class="form-check-label" for="template3">
                            Inspinia (<a href="http://webapplayers.com/inspinia_admin-v2.9.4/" target="_blank">Show</a>)
                        </label>
                    </div>

                    <div class="form-check pb-3">
                        <input class="form-check-input" type="radio" name="template" id="template_other_check"
                               value="Other">
                        <label class="form-check-label" for="template_other_check">
                            Other (fill below)
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="template_other">If you want to use another template, you can paste a link or
                            the name of the template below.</label>
                        <input id="template_other" type="text" name="template_other" class="form-control col-12 col-md-6">
                    </div>

                    <hr>

                    <p class="text-muted"><i>
                            In case you want pictures on the website, these usually require a license, normally called
                            "Stock Photos". The
                            the other option is if you took the pictures yourself, which does not require a license.
                            If you need "Stock Photos", you need to pay for these yourself, and I can help you
                            more
                            information about this, and where to find them.
                        </i></p>

                    <hr>

                    <h6>Web package</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="package" id="package1"
                               value="Standard" checked>
                        <label class="form-check-label" for="package1">
                            Standard
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="package" id="package2"
                               value="VPS">
                        <label class="form-check-label" for="package2">
                            VPS
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="package" id="package3"
                               value="Har redan (integrering)">
                        <label class="form-check-label" for="package3">
                            Already have (need help with integration)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="package" id="package4"
                               value="Har redan (endast filer)">
                        <label class="form-check-label" for="package4">
                            Already have (only need files for the website)
                        </label>
                    </div>

                    <hr />

                    <div class="form-group">
                        <label for="text_extra">If you have something to add, you can fill it in below
                            (free text).</label>
                        <textarea id="text_extra" name="text_extra" class="form-control" rows="3"></textarea>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="full_name">Full name </label>
                                <input id="full_name" type="text" name="full_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="company_name">Company name</label>
                                <input id="company_name" type="text" name="company_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="company_number">Org. number / Personal number</label>
                                <input id="company_number" type="text" name="company_number" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="email">Email (for invoicing and mailing)</label>
                                <input id="email" type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-secondary">Double check
                        the information above and make sure everything is filled in correctly.
                        This will then be saved in a database, and then you will be able to follow the status of the assignment
                        via the link you will receive via your email,
                        or by entering your Assignment ID at the top of the page. <br /> <br />

                        Personal data will be stored until the invoice for the work has been paid. Which is managed via <a href="https://coolcompany.com/se/" target="_blank">Cool Company</a>, which in turn handles this on their <a href="https://coolcompany.com/se/en/privacy-policy-client-and-self-employed/" target="_blank">own way</a>.
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="accepted" id="accepted"
                               value="1" required>
                        <label class="form-check-label" for="accepted">
                            I confirm and approve the information in the box above as well as the <a href="https://app.termly.io/document/privacy-policy/0b616b0b-ca10-4d02-b43e-8a6dc436b520" target="_blank">Privacy Policy</a> and <a href="https://app.termly.io/document/terms-of-use-for-website/080c9bba-0a92-467b-85f0-f7631887ac15" target="_blank">Terms & Agreements</a>.
                        </label>
                    </div>

                    <button type="submit"
                            data-sitekey="6Le2UTAaAAAAAGEqRMTm_6hKzT4ui_ftWnMM7Qqf"
                            data-callback='onSubmit'
                            data-action='submit'
                            class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Language / technology</h6>
                <p>JI write all code in HTML, CSS, JS (jQuery), PHP (Laravel) together with MySQL for databases. <br />
                    Bootstrap 4 & 5 is used for all themes I develop in, to always give you a qualitative design that is always responsive between different devices.</p>

                <h6>Availability</h6>
                <p>Of course, it depends on the demand, and I always try to prioritize one job at a time.
                    But this also depends on how fluid the work and our dialogues are. For example, if I need to wait with information, it can happen
                    that I take in additional projects.</p>

                <h6>Support</h6>
                <p>After a project is completed, and the end customer is satisfied, no support is included afterwards. Then you can then hire me if needed, if you need something extra done,
                    or that problems have arisen. Except that I caused problems, then free support applies.</p>

                <h6>GDPR</h6>
                <p>This is a new European law that applies to all websites that in some way handle user data and cookies. <br/>
                    I take no responsibility for this as it usually requires someone with a legal background to write. However, I insert a blank subpage and a pop-up for it at no cost.</p>

                <h6>SEO</h6>
                <p>Like the GDPR, someone with a special background is needed to integrate this, as it is also a very dynamic topic that is constantly changing. You need to hire a specialist for this
                    to arrange. I only offer basics like titles and headers.</p>

                <h6>Logo</h6>
                <p>As I am a programmer and not a designer, I can not help you design your own logo. <br />
                    But I can highly recommend <a href="http://www.fiverr.com/s2/b80aa70918" target="_blank">fiverr</a> for this.<br />
                    On this page you can find designers who create logos at usually very good prices. <br />
                    I have personally used them for various projects.</a> </p>

                <h6>Billing</h6>
                <p>Even if I want invoicing information when creating the assignment, you will not be invoiced until the assignment is completed and everyone is satisfied.</p>
                <p>This is done through Cool Company, which is a self-employed company.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="priser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prisuppgifter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Simpler websites</h6>
                <p>For simpler websites, where we only talk about information that is shown on subpages, I charge per
                    page. </p>
                <p>These are the most common and usually relatively quick to create. Depending on what the pages should contain.</p>

                <div class="alert alert-info small p-2"><strong>Price:</strong> 2000 SEK/subpage</div>

                <p>For so-called "One Page" pages that are divided into sections rather than subpages, I charge per section.</p>

                <div class="alert alert-info small p-2"><strong>Pris:</strong> 1500 SEK/section</div>

                <h6>Advanced websites</h6>
                <p>For more advanced sites that require database management and more advanced functions, I charge
                    per hour. </p>
                <p> A fixed price often becomes difficult to put on these, as it requires both more planning and much more code
                    to perform. <br/>
                    There are exceptions, but it is rare to use advanced code with a simple structure and few functions.
                </p>

                <div class="alert alert-info small p-2"><strong>Price:</strong> 600 SEK/hour</div>

                <h6>Extra Language</h6>
                <p>Translating a page into more than one language is not as simple as writing the page in two languages and creating a language button. </p>
                <p> The whole process is too long to explain here, but it takes more than twice as long to encode more than one language.</p>
                <p>I can write in either Swedish or English. With other languages i need your help or to use a translation software</p>

                <div class="alert alert-info small p-2"><strong>Price:</strong> 2000 SEK per language and subpage.</div>

                <div class="alert alert-secondary small p-2">Two languages for all subpages will thus be about double the final price.</div>

                <h6>Web Package</h6>
                <p class="lead font-weight-normal mb-0">Package Standard</p>
                <p>If you order this, I will help you with registration of Domain, Web Hosting, E-Mail and Cloudflare. </p>
                <p>These are then registered via Loopia - which is one of Sweden's oldest and safest hosts, which at the time of writing costs from 89 SEK/month (39 SEK/month the first year).</p>

                <div class="alert alert-info small p-2"><strong>Price:</strong> 2000 SEK</div>

                <p class="lead font-weight-normal mb-0">Package VPS</p>
                <p>If you order this, I will help you with Domain, VPS, E-Mail and Cloudflare. </p>
                <p> For more advanced projects where security and performance are a priority, I will help you with your own VPS server. <br />
                    This also requires a lot more work to configure, and then I use VPS via DigitalOcean and email via G-Suite.</p>

                <p>VPS costs from $5/month (recommended from $60/month), and G-Suite $5/month (per email address).</p>

                <div class="alert alert-info small p-2"><strong>Price:</strong> 4000 SEK</div>

                <hr />

                <div class="alert alert-secondary small p-2">
                    If you already have a Domain and Web Hosting / VPS, I can help you with integration from 2000 SEK. <br />
                    If you want to integrate yourself, this is perfectly okay, and then you get a packaged file that contains all the files for the website.
                </div>

                <div class="alert alert-secondary small p-2">
                    Depending on the package and method, you need to provide billing information for Loopia, or Paypal / card information for DO. But I show how you can do this yourself.
                </div>

                <hr />

                <p class="font-weight-normal mb-0">What is Cloudflare?</p>
                <span class="text-muted">Cloudflare is a service that all websites should use.
                        Which works as a <a href="https://www.cloudflare.com/learning/cdn/what-is-a-cdn/" target="_blank">CDN</a> to maximize speed and at the same time use a soft firewall to protect against intrusion and DDoS attacks, among other things.
                 Cloudflare also offers different payment plans, but the free one is good for most people.</span>

                <hr />

                <div class="alert alert-secondary small p-2">All prices are excluding VAT(Tax).<br />
                    An administrative cost of 6% of the total amount is also added when invoicing via Cool Company. This is what they charge me for their services, so this is to balance out my income.</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript-->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/plugins/slick-carousel/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js" ></script>

<!-- Custom scripts for this theme-->
<script src="js/scripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
        integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
        integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg=="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>
</body>

<style type="text/css">
    .bootstrap-tagsinput {
        width: 100%;
    }

    .label-info {
        background-color: #17a2b8;

    }

    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out,
        border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>

<script>
    $(document).ready(function () {
        $(".contact_form-show").hide()

        $(".contact_form-toggle").click(function () {
            $(".contact_form-show").slideToggle()
        });

        $(".contact_page-show").hide()

        $(".contact_page-toggle").click(function () {
            $(".contact_page-show").slideToggle()
        });

        $(".languages-show").hide()

        $(".languages-toggle").click(function () {
            $(".languages-show").slideToggle()
        });

        $(".login-show").hide()

        $(".login-toggle").click(function () {
            $(".login-show").slideToggle()
        });

        $("#submitForm").validate();
    });
</script>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("submitForm").submit();
    }
</script>

@endsection
