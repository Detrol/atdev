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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
          integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
          crossorigin="anonymous"/>
    <link href="assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet"/>
    <link href="assets/plugins/html5-device-mockups/dist/device-mockups.min.css" rel="stylesheet"/>
    <link href="assets/plugins/slick-carousel/slick.css" rel="stylesheet"/>
    <!-- Custom styles for this theme-->
    <link href="css/styles.css" rel="stylesheet"/>

    <script src="css/custom.css"></script>

    <style type="text/css">
        .custom-centered{
            margin: 0 auto;
            max-width: 400px;
        }
    </style>
</head>
</html>
<body id="page-top">
<!-- * * * * * * * *-->
<!-- * Navigation  *-->
<!-- * * * * * * * *-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-main">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Startsidan</a></li>
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
                <img class="masthead-logo mb-4" src="assets/img/atdevme.png" alt=""/>
                <hr class="primary small"/>

                <form class="">
                    <p class="font-weight-light">Ifall ni redan har skickat in ett uppdrag så kan ni ange ert unika <strong>Uppdrags-ID</strong> nedan för att se status och information.</p>

                    <div class="input-group mb-3 custom-centered">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">#</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Uppdrags-ID" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-primary">Skicka</button>
                </form>

            </div>
        </div>
    </div>
    <div class="masthead-scroll">
        <a class="masthead-scroll-btn js-scroll-trigger" href="#form"><i class="fas fa-angle-down"></i></a>
    </div>
</header>

<!-- * * * * * * * * * *-->
<!-- * Form Section *-->
<!-- * * * * * * * * * *-->

<section class="page-section bg-white" id="form">
    <div class="container">
        <div class="row">
             <div class="col-lg-10 col-xl-8 mx-auto">

                <div class="lead mb-5 text-muted"> <i>I formuläret nedan så kommer ni få fylla i de uppgifter som jag
                    behöver för att starta ett arbete.
                    Dessa är endast grundläggande, och fler frågor kan behöva svaras på beroende på komplexiteten
                    av just er
                    nya hemsida.
                    Liksom informationen som ska finnas på diverse undersidor, som ni själva behöver stå
                    för. Mitt jobb är att designa och implementera utefter den informationen som ni ger mig.</i>
                </div>

                <h1 class="text-uppercase text-center">Uppdragsformulär</h1>
                <p class="lead m-0 text-center">Fyll i uppgifterna här så noga du kan.</p>
                <hr class="primary small"/>
                <div class="text-center mb-5">
                    <a class="btn btn-outline-primary js-scroll-trigger" href="#process">Mer information</a>
                    <a class="btn btn-outline-primary js-scroll-trigger" href="#process">Prisuppgifter</a>
                </div>
                <form>
                    <div class="form-group">
                        <label for="namn_undersidor">Vilka undersidor önskas? Separeras med komman.</label>
                        <input id="namn_undersidor" type="text" data-role="tagsinput" name="tags" class="form-control">
                        <small class="form-text text-muted">Ex. Hem, Om, Team, Kontakt</small>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input contact_form-toggle" id="contact_form">
                        <label class="form-check-label" for="contact_form">Behöver ni ett kontaktformulär som kan
                            skicka mail?</label>
                    </div>

                    <div class="form-group contact_form-show">
                        <label for="namn_undersidor">Fyll i vilken mail dessa ska skickas till
                        </label>
                        <input id="" type="text" name="tags" class="form-control">
                        <small class="form-text text-muted">Ifall ni vill ha en ny mail bunden till hemsidan, lämna
                            detta tomt.</small>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input contact_page-toggle" id="contact_page">
                        <label class="form-check-label" for="contact_page">Behöver ni en kontakt-sida?</label>
                    </div>

                    <div class="row contact_page-show">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="namn_undersidor">Telefonnummer</label>
                                <input id="namn_undersidor" type="text" name="tags" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="namn_undersidor">E-Post</label>
                                <input id="namn_undersidor" type="text" name="tags" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="namn_undersidor">Besöksadress</label>
                                <input id="namn_undersidor" type="text" name="tags" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="namn_undersidor">Om ni vill presentera öppettider, fyll i det här.</label>
                                <textarea class="form-control" placeholder="Ex:
Vardagar 09-17
Helger: 09-14" rows="6"></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input languages-toggle" id="languages">
                        <label class="form-check-label" for="languages">Behöver ni hemsidan på flera språk?</label>
                    </div>

                    <div class="form-group languages-show">
                        <label for="namn_undersidor">Fyll i samtliga språk och separera med komman.</label>
                        <input id="namn_undersidor" type="text" data-role="tagsinput" name="tags" class="form-control">
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input login-toggle" id="login">
                        <label class="form-check-label" for="login">Behöver ni någon inloggning?</label>
                    </div>

                    <div class="form-group login-show">
                        <label for="namn_undersidor">Fyll i syfte
                            <small class="form-text text-muted">Om det ska vara
                                administrativt eller för användare tex. Gärna så detaljerat som möjligt.</small>
                        </label>

                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <hr>

                    <p>Nedan kryssar ni i vilken design-mall ni vill att jag utgår ifrån när jag skapar er webbplats.
                        <small class="form-text text-muted">Dessa är färdiga design-mallar som jag skräddarsyr efter era önskemål, som jag också äger licens
                            för.<br/>
                            Vill ni ha en mall jag ännu inte äger licens för, så hittar ni dessa
                            <a href="https://wrapbootstrap.com/templates?bootstrap=5">här</a> och <a href="https://wrapbootstrap.com/templates?bootstrap=4">här</a>.</small>
                    </p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                               value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Unify (<a href="https://htmlstream.com/preview/unify-v2.6.3/index.html">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                               value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Smarty (<a href="https://smarty.stepofweb.com/3.1.3/html_frontend/overview.html"
                                       target="_blank">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                               value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Inspinia (<a href="http://webapplayers.com/inspinia_admin-v2.9.4/">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                               value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Vitality (<a href="https://themes.startbootstrap.com/vitality-v3.0.0/dist/">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check pb-3">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                               value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Annat (fyll i nedan)
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="namn_undersidor">Om ni vill använda en annan mall så kan ni klistra in länk eller
                            namnet på mallen nedan.</label>
                        <input id="namn_undersidor" type="text" name="tags" class="form-control col-12 col-md-6">
                    </div>

                    <hr>

                    <p class="text-muted"><i>
                            Utifall ni vill ha bilder på hemsidan så kräver dessa oftast en licens, normalt kallat
                            "Stock Photos". Det
                            andra alternativet är om ni tagit bilderna själva, vilket ej kräver licens.
                            Behöver ni "Stock Photos" så behöver ni betala för dessa själva, och jag kan hjälpa er med
                            mer
                            information om detta, och var de hittas.

                        </i></p>

                    <hr>

                    <div class="form-group">
                        <label for="namn_undersidor">Om ni har något att tillägga så kan ni fylla i detta nedan
                            (fritext).</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1"
                               value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                           Jag bekräftar att all information ovan är korrekt, och jag godkänner att detta kommer sparas i en databas.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Skicka in</button>
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
    });
</script>

@endsection
