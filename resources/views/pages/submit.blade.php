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
                    <p class="font-weight-light">Om ni redan har skapat ett uppdrag så kan ni ange ert unika <strong>Uppdrags-ID</strong>
                        nedan för att se status och information.</p>

                    <div class="input-group mb-3 custom-centered">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">#</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Uppdrags-ID" aria-label="Username"
                               aria-describedby="basic-addon1">
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

                <div class="lead mb-5 text-muted"><i>I formuläret nedan så kommer ni få fylla i de uppgifter som jag
                        behöver för att starta ett arbete.
                        Dessa är endast grundläggande, och fler frågor kan behöva svaras på beroende på komplexiteten
                        av just er
                        nya hemsida.
                        Liksom informationen som ska finnas på diverse undersidor, som ni själva behöver stå
                        för. Mitt jobb är att designa och implementera utefter den informationen som ni ger
                        mig.<br/><br/>

                        Innan ni bekräftar en bokning, se till att vara väl förberedda på vad ni vill ha, samt den
                        informationen
                        ni vill förmedla på era undersidor. Inklusive de bilder ni önskar visa.<br/>
                        Detta diskuterar vi vidare via mail.<br/><br />

                        Har ni frågor eller funderingar så får ni mer än gärna kontakta mig i förväg.<br/>
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
                <h1 class="text-uppercase text-center">Uppdrag</h1>
                <p class="lead m-0 text-center">Fyll i uppgifterna nedan så noga du kan.</p>
                <hr class="primary small"/>
                <div class="text-center mb-5">
                    <button class="btn btn-outline-light" data-toggle="modal" data-target="#info">Mer information
                    </button>
                    <button class="btn btn-outline-light" data-toggle="modal" data-target="#priser">Prisuppgifter
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
                                <label for="page_name">Hemsidans namn</label>
                                <input id="page_name" type="text" name="page_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="page_slogan">Slogan (om ni har någon)</label>
                                <input id="page_slogan" type="text" name="page_slogan" class="form-control">
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="form-group">
                        <label for="pages">Vilka undersidor önskas? Separeras med komman.</label>
                        <input id="pages" type="text" data-role="tagsinput" name="pages" class="form-control" required>
                        <small class="form-text text-muted">Ex. Hem, Om, Team, Kontakt</small>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input contact_page-toggle" id="contact_check" name="contact_check" value="1">
                        <label class="form-check-label" for="contact_check">Behöver ni en kontaktsida?</label>
                    </div>

                    <div class="row contact_page-show">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="contact_phone">Telefonnummer</label>
                                <input id="contact_phone" type="text" name="contact_phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact_email">E-Post</label>
                                <input id="contact_email" type="text" name="contact_email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact_address">Besöksadress</label>
                                <input id="contact_address" type="text" name="contact_address" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="contact_hours">Om ni vill presentera öppettider, fyll i det här.</label>
                                <textarea id="contact_hours" class="form-control" name="contact_hours" placeholder="Ex:
Vardagar 09-17
Helger: 09-14" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input contact_form-toggle" id="contact_form_check" name="contact_form_check" value="1">
                        <label class="form-check-label" for="contact_form_check">Behöver ni ett kontaktformulär som kan
                            skicka mail?</label>
                    </div>

                    <div class="form-group contact_form-show">
                        <label for="contact_form_mail">Fyll i vilken mail dessa ska skickas till
                        </label>
                        <input id="contact_form_mail" type="text" name="contact_form_mail" class="form-control">
                        <small class="form-text text-muted">Ifall ni vill ha en ny mail bunden till hemsidan, lämna
                            detta tomt.</small>
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input languages-toggle" id="languages_check" name="languages_check" value="1">
                        <label class="form-check-label" for="languages_check">Behöver ni hemsidan på flera språk?</label>
                    </div>

                    <div class="form-group languages-show">
                        <label for="page_languages">Fyll i samtliga språk och separera med komman.</label>
                        <input id="page_languages" type="text" data-role="tagsinput" name="page_languages" class="form-control mb-3">
                    </div>

                    <hr>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input login-toggle" id="login_check" name="login_check" value="1">
                        <label class="form-check-label" for="login_check">Behöver ni någon inloggning?</label>
                    </div>

                    <div class="form-group login-show">
                        <label for="login_text">Fyll i syfte
                            <small class="form-text text-muted">Om det ska vara
                                administrativt eller för användare tex. Gärna så detaljerat som möjligt.</small>
                        </label>

                        <textarea id="login_text" name="login_text" class="form-control" rows="3"></textarea>
                    </div>

                    <hr>

                    <h6>Design</h6>
                    <p>Nedan kryssar ni i vilken designmall ni vill att jag utgår ifrån när jag skapar er webbplats.
                        <small class="form-text text-muted">Dessa är färdiga designmallar som jag skräddarsyr efter era
                            önskemål, som jag också äger licens
                            för.<br/>
                            Vill ni ha en mall jag ännu inte äger licens för, så hittar ni dessa
                            <a href="https://wrapbootstrap.com/templates?bootstrap=5">här</a>, <a
                                href="https://wrapbootstrap.com/templates?bootstrap=4">här</a> och <a href="https://themes.getbootstrap.com/" target="_blank">här</a>.</small>
                    </p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="template" id="template1"
                               value="Unify" checked>
                        <label class="form-check-label" for="template1">
                            Unify (<a href="https://htmlstream.com/preview/unify-v2.6.3/index.html" target="_blank">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="template" id="template2"
                               value="Smarty">
                        <label class="form-check-label" for="template2">
                            Smarty (<a href="https://smarty.stepofweb.com/3.1.3/html_frontend/overview.html"
                                       target="_blank">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="template" id="template3"
                               value="Inspinia">
                        <label class="form-check-label" for="template3">
                            Inspinia (<a href="http://webapplayers.com/inspinia_admin-v2.9.4/" target="_blank">Visa</a>)
                        </label>
                    </div>

                    <div class="form-check pb-3">
                        <input class="form-check-input" type="radio" name="template" id="template_other_check"
                               value="Other">
                        <label class="form-check-label" for="template_other_check">
                            Annat (fyll i nedan)
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="template_other">Om ni vill använda en annan mall så kan ni klistra in länk eller
                            namnet på mallen nedan.</label>
                        <input id="template_other" type="text" name="template_other" class="form-control col-12 col-md-6">
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

                    <h6>Webb-Paket</h6>
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
                            Har redan (behöver hjälp med integrering)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="package" id="package4"
                               value="Har redan (endast filer)">
                        <label class="form-check-label" for="package4">
                            Har redan (behöver endast filer för hemsidan)
                        </label>
                    </div>

                    <hr />

                    <div class="form-group">
                        <label for="text_extra">Om ni har något att tillägga så kan ni fylla i detta nedan
                            (fritext).</label>
                        <textarea id="text_extra" name="text_extra" class="form-control" rows="3"></textarea>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="full_name">Fullständigt namn </label>
                                <input id="full_name" type="text" name="full_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="company_name">Företagsnamn</label>
                                <input id="company_name" type="text" name="company_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="company_number">Org. Nummer / Personnummer</label>
                                <input id="company_number" type="text" name="company_number" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="email">E-Post (för fakturering och utskick)</label>
                                <input id="email" type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-secondary"><span class="small text-primary">*</span> Dubbelkolla
                        informationen ovan och se till att allt är korrekt ifyllt.
                        Denna kommer sedan att sparas i en databas, och sedan kommer ni kunna följa uppdragets status
                        via länken ni kommer få via er mail,
                        eller genom att uppge ert Uppdrags-ID högst upp på sidan.<br /><br />

                        Personuppgifter kommer att lagras tills det att fakturan för arbetet är betald. Som sköts via <a href="https://coolcompany.com/se/" target="_blank">Cool Company</a>, som i sin tur hanterar detta på <a href="https://coolcompany.com/se/en/privacy-policy-client-and-self-employed/" target="_blank">eget vis</a>.
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="accepted" id="accepted"
                               value="1" required>
                        <label class="form-check-label" for="accepted">
                            Jag bekräftar och godkänner informationen som står i rutan ovan (<span
                                class="small text-primary">*</span>).
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Skicka in</button>
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
                <h6>Språk/teknik</h6>
                <p>Jag skriver all kod i HTML, CSS, JS(jQuery), PHP(Laravel) tillsammans med MySQL för databaser.<br />
                Bootstrap 4 & 5 används för alla teman jag utvecklar i, för att alltid ge er en kvalitativ design som alltid är responsiv mellan olika enheter.</p>

                <h6>Tillgänglighet</h6>
                <p>Beror såklart på efterfrågan, och jag försöker alltid att prioritera ett arbete i taget.
                Men detta beror också på hur flytande arbetet och våra dialoger är. Om jag exempelvis behöver vänta med information så kan det hända
                att jag tar in ytterligare projekt.</p>

                <h6>Support</h6>
                <p>Efter att ett projekt är färdigt, och slutkund är nöjd så ingår ingen support efteråt. Då får ni sedan hyra in mig vid behov, om ni behöver något extra gjort,
                eller att problem uppstått. Med undantag att jag orsakat problem, då gäller fri support.</p>

                <h6>GDPR</h6>
                <p>Detta är en ny svensk lag som gäller alla hemsidor som på något vis hanterar användaruppgifter och kakor.<br/>
                Jag tar inget ansvar över detta då det oftast kräver någon med juridisk bakgrund att skriva. Jag infogar däremot en tom undersida och en pop-up för det utan kostnad.</p>

                <h6>SEO</h6>
                <p>Likt GDPR så behövs någon med särskild bakgrund för att integrera detta, då det också är ett väldigt flytande ämne som ändras konstant. Detta behöver ni hyra in en specialist
                för att ordna. Jag erbjuder endast grundläggande som titlar och sidhuvuden.</p>

                <h6>Logotyp</h6>
                <p>Då jag är programmerare och ej designer så kan jag inte hjälpa er med att designa en egen logotyp.<br />
                    Men jag kan starkt rekommendera <a href="https://fiverr.com" target="_blank">fiverr</a> för detta.<br />
                    På denna sidan kan ni hitta designers som skapar logotyper till oftast väldigt bra priser.<br />
                    Har personligen nyttjat dem till andra projekt.</a> </p>

                <h6>Fakturering</h6>
                <p>Även om jag vill ha fakturauppgifter vid uppdragsskapandet så kommer ni ej att faktureras före uppdraget är slutfört och alla är nöjda.</p>
                <p>Detta sker via Cool Company, vilket är ett egenanställningsföretag.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Stäng</button>
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
                <h6>Enklare hemsidor</h6>
                <p>För enklare hemsidor, där vi endast pratar information som visas på undersidor så tar jag betalt per
                    sida.</p>
                <p>Dessa går oftast relativt snabbt att skapa. Beroende på vad sidorna ska innehålla.</p>

                <div class="alert alert-info small p-2"><strong>Pris:</strong> 2000 kr/undersida</div>

                <h6>Avancerade hemsidor</h6>
                <p>För mer avancerade sidor som kräver databashantering och mer avancerade funktioner så tar jag betalt
                    per timma.</p>
                <p>Ett fast pris blir ofta svårt att sätta på dessa, då det kräver både mer planering och mycket mer kod
                    för att utföra.<br/>
                    Undantag finns, men det är sällan man nyttjar avancerad kod med enkel struktur och få funktioner.
                </p>

                <div class="alert alert-info small p-2"><strong>Pris:</strong> 600 kr/tim</div>

                <h6>Extra Språk</h6>
                <p>Att översätta en sida till mer än ett språk är inte så enkelt som att skriva sidan i två språk och skapa en språkknapp.</p>
                <p>Hela processen blir för lång att förklara här, men det tar mer än den dubbla tiden att koda in mer än ett språk.</p>

                <div class="alert alert-info small p-2"><strong>Pris:</strong> 2000 kr per språk och undersida.</div>

                <div class="alert alert-secondary small p-2">Två språk för alla undersidor blir alltså ungefär det dubbla i slutpris.</div>

                <h6>Webb-Paket</h6>
                <p class="lead font-weight-normal mb-0">Paket Standard</p>
                <p>Beställer ni detta så hjälper jag er med registrering av Domän, Webbhotell, E-Post och Cloudflare.</p>
                <p>Dessa registreras då via Loopia - som är en av sveriges äldsta och tryggaste värdar, som i skrivande stund kostar från 89kr/mån(39kr/mån första året).</p>

                <div class="alert alert-info small p-2"><strong>Pris:</strong> 2000 kr</div>

                <p class="lead font-weight-normal mb-0">Paket VPS</p>
                <p>Beställer ni detta så hjälper jag er med Domän, VPS, E-Post och Cloudflare.</p>
                <p>Vid mer avancerade projekt där säkerhet och prestanda är prioritet så hjälper jag er med en egen VPS-server.<br />
                    Detta kräver också mycket mer jobb att konfigurera, och då använder jag VPS via DigitalOcean och mail via G-Suite.</p>

                <p>VPS kostar från $5/mån(rekommenderat från $60/mån), och G-Suite $5/mån(per e-post adress).</p>

                <div class="alert alert-info small p-2"><strong>Pris:</strong> 4000 kr</div>

                <hr />

                <div class="alert alert-secondary small p-2">
                   Om ni redan har Domän och Webbhotell/VPS så kan jag hjälpa er med integrering från 2000 kr.<br />
                        Om ni önskar att integrera själva så är detta helt okej, och då får ni en packeterad fil som innehåller alla filer för hemsidan.
                </div>

                <div class="alert alert-secondary small p-2">
                    Beroende på paket och metod så behöver ni uppge faktureringsuppgifter för Loopia, eller Paypal/kortuppgifter för DO. Men jag visar hur ni kan göra detta själva.
                </div>

                <hr />

                <p class="font-weight-normal mb-0">Vad är Cloudflare?</p>
                <span class="text-muted">Cloudflare är en tjänst som alla hemsidor borde nyttja.
                        Som fungerar som en <a href="https://www.cloudflare.com/learning/cdn/what-is-a-cdn/" target="_blank">CDN</a> för att maximera hastighet och som samtidigt använder en mjuk brandvägg för att skydda mot bland annat intrång och DDoS-attacker.
                Cloudflare erbjuder också olika betalplaner, men den fria duger för de flesta.</span>

                <hr />

                <div class="alert alert-secondary small p-2">Samtliga priser är exkl. moms.<br />
                    En administrativ kostnad på 6% av det totala beloppet läggs också på vid fakturering via Cool Company.</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Stäng</button>
            </div>
        </div>
    </div>
</div>
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

@endsection
