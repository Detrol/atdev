@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ATDev.me</title>
    <!-- Custom fonts for this theme -->
    <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
    <!-- Plugin styles-->
    <link href="assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet" />
    <link href="assets/plugins/html5-device-mockups/dist/device-mockups.min.css" rel="stylesheet" />
    <link href="assets/plugins/slick-carousel/slick.css" rel="stylesheet" />
    <!-- Custom styles for this theme-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
</html>
<body id="page-top">
<!-- * * * * * * * *-->
<!-- * Navigation  *-->
<!-- * * * * * * * *-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar-main">
    <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="navbar-brand-logo" src="assets/img/atdevme_logo.png" alt=""/></a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#process">Process</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- * * * * * * *-->
<!-- * Masthead *-->
<!-- * * * * * * *-->
<header class="masthead masthead-full text-white">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col text-center">
                <img class="masthead-logo mb-4" src="assets/img/atdevme.png" alt="" />
                <hr class="primary small" />
                <div class="masthead-subtitle"><i>"Your website is the center of your digital eco-system, like a brick and mortar location, the experience matters once a customer enters, just as much as the perception they have of you before they walk through the door.</i>"</div>
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
        <h2 class="page-section-heading text-uppercase">About Me</h2>
        <p class="lead m-0">I am an individual with years of experience, here to help with your development needs.</p>
        <hr class="primary small mb-5" />
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid rounded-circle" src="assets/img/me.jpg" alt="" />
            </div>
            <div class="col-12 col-md-6 text-left">
                <h4>Hello!</h4>
                <p>My name is <span class="font-weight-normal">Andreas</span> and i have been working with web-development for more than 15 years, ever since i was a teenager.</p>

                <p>Up until now, i have only been working on my own projects, and as a hobby. But as i feel more and more comfortable in my shoes, i have now decided to work as a professional developer
                for people that is in need of a website. Primarily for small business or personal websites/portfolios.</p>

                <p>Today I have the skill-set to create almost anything, since i have also worked on very large projects with months of development.</p>
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
                <div class="callout-text text-white">Good <span class="text-primary">design</span> is finding that perfect balance between the way something <span class="text-primary">looks</span> and how it <span class="text-primary">functions</span>.</div>
                <hr class="primary small mb-5" />
                <a class="btn btn-outline-light js-scroll-trigger" href="#process">How i work</a>
            </div>
        </div>
    </div>
</section>
<!-- * * * * * * * * * *-->
<!-- * Process Section *-->
<!-- * * * * * * * * * *-->
<section class="page-section" id="process">
    <div class="container">
        <h2 class="page-section-heading text-uppercase text-center">The Process</h2>
        <p class="lead m-0 text-center">Here is an overview of how i approach each new project.</p>
        <hr class="primary small mb-5" />
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="process-list">
                    <div class="process-list-icon"><i class="fas fa-comments"></i></div>
                    <div class="process-list-content">
                        <h4 class="text-uppercase mb-3">Client Interview</h4>
                        <p class="">At first i need to know what you want and expect.<br>
                        You will receive an e-mail with all the questions i need to start building.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="process-list">
                    <div class="process-list-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <div class="process-list-content">
                        <h4 class="text-uppercase mb-3">Create</h4>
                        <p>Once the building has commenced, we will keep an open dialog during the whole process, to make sure everything is according to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-list">
                    <div class="process-list-icon"><i class="fas fa-rocket"></i></div>
                    <div class="process-list-content">
                        <h4 class="text-uppercase mb-3">Release</h4>
                        <p>Once everything is done, i will help you setting everything up if needed. Domain, web-server, e-mail and so on.</p>
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
<section class="page-section" id="portfolio-grid">
    <div class="container">
        <div class="text-center">
            <h2 class="page-section-heading text-uppercase">Portfolio</h2>
            <p class="lead m-0">Here are some projects that i've worked on.</p>
            <hr class="primary small mb-5" />
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 col-xl-4">
                <a class="portfolio-grid-item" href="https://remindme.cloud" data-fancybox="gallery" data-caption="Caption #1"
                ><span class="caption"
                    ><span class="caption-content">
                                <h2>Remindme.cloud</h2>
                                <p class="mb-0">Cloud-based reminder system with personal calendar and events.</p></span
                        ></span
                    ><img class="img-fluid" src="assets/img/remindme1.png" alt=""
                    /></a>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Modal - 1-->
<div class="modal fade portfolio-modal" id="portfolio-modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small" />
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur, debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                    <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-1-img.jpg" alt="" /></div>
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
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i class="fas fa-times"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal - 2-->
<div class="modal fade portfolio-modal" id="portfolio-modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small" />
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur, debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                    <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-2-img.jpg" alt="" /></div>
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
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i class="fas fa-times"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal - 3-->
<div class="modal fade portfolio-modal" id="portfolio-modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small" />
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur, debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                    <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-3-img.jpg" alt="" /></div>
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
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i class="fas fa-times"></i>Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal - 4-->
<div class="modal fade portfolio-modal" id="portfolio-modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 mx-auto">
                            <h3 class="text-uppercase portfolio-modal-heading">Project Name</h3>
                            <hr class="primary small" />
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi pariatur, debitis, voluptatum adipisci voluptate nulla quibusdam deleniti explicabo quo, maxime voluptatibus totam laboriosam at impedit est. Labore repudiandae saepe quia.</p>
                            <div class="device-wrapper my-5">
                                <div class="device" data-device="MacbookPro" data-orientation="portrait" data-color="black">
                                    <div class="screen"><img class="img-fluid" src="assets/img/portfolio/carousel/item-4-img.jpg" alt="" /></div>
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
                            <button class="btn btn-light" type="button" data-dismiss="modal"><i class="fas fa-times"></i>Close</button>
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
<section class="page-section bg-light" id="testimonials">
    <div class="container">
        <h2 class="page-section-heading text-uppercase text-center">Testimonials</h2>
        <p class="lead m-0 text-center">What my clients has told me</p>
        <hr class="primary small mb-5" />
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="carousel-testimonials">
                    <div class="carousel-testimonials-item text-center">
                        <div class="carousel-testimonials-item-content">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aliquid magni quam perspiciatis in. Atque facilis saepe, accusantium in voluptate doloremque neque dolores provident amet error, ipsam, voluptatibus similique quasi.</p>
                            <h6 class="text-uppercase name mb-0">Jim Walker</h6>
                            <div class="small">CEO of Company Name</div>
                        </div>
                    </div>
                    <div class="carousel-testimonials-item text-center">
                        <div class="carousel-testimonials-item-content">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident aliquid magni quam perspiciatis in. Atque facilis saepe, accusantium in voluptate doloremque neque dolores provident amet error, ipsam, voluptatibus similique quasi.</p>
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
                <h2 class="page-section-heading text-uppercase text-center">Contact Me</h2>
                <p class="lead m-0 text-center">Let me about your next project and i will let you know what i can do to help you!</p>
                <hr class="primary small mb-5" />
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button class="btn btn-outline-primary" type="submit">Send</button>
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
            <a class="px-3 text-white-50" href="#"><i class="fab fa-facebook-f fa-2x fa-fw"></i></a><a class="px-3 text-white-50" href="#"><i class="fab fa-twitter fa-2x fa-fw"></i></a><a class="px-3 text-white-50" href="#"><i class="fab fa-linkedin-in fa-2x fa-fw"></i></a>
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
</body>

@endsection
