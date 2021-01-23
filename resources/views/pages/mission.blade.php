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
    <link href="{{ url('https://use.fontawesome.com/releases/v5.12.0/css/all.css') }}" rel="stylesheet"
          crossorigin="anonymous"/>
    <link
        href="{{ url('"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"') }}"
        rel="stylesheet"/>
    <link
        href="{{ url('"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"') }}"
        rel="stylesheet"/>
    <!-- Plugin styles-->
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"
          href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css') }}"
          integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
          crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
    <!-- Custom styles for this theme-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
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
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            </ul>
        </div>

    </div>
</nav>

<!-- * * * * * * *-->
<!-- * Masthead *-->
<!-- * * * * * * *-->
<header class="masthead masthead-full" id="start">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col text-center">
                <h2 class="page-section-heading text-uppercase text-white">Mission Details</h2>
                <p class="lead m-0 text-white">#{{ $mission->unique_id ?? '?' }}</p>
                <hr class="primary small mb-5"/>
                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto text-left">
                        @if ($mission)
                            <div class="row">
                                <div class="col-12 col-md-4 order-0 order-md-1 mb-3">
                                    <div class="simpleBox bg-white">
                                        <h5>Personal information</h5>
                                        <p class="font-weight-bold mb-0">Name</p>
                                        <span class="font-weight-normal">{{ $mission->full_name }}</span><br/>

                                        <p class="font-weight-bold mb-0">E-Mail</p>
                                        <span class="font-weight-normal">{{ $mission->email }}</span><br/>

                                        <p class="font-weight-bold mb-0">Company Name</p>
                                        <span class="font-weight-normal">{{ $mission->company_name }}</span><br/>

                                        <p class="font-weight-bold mb-0">Org. / Personal Number</p>
                                        <span class="font-weight-normal">{{ $mission->company_number }}</span><br/>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 order-1 order-md-0">
                                    <div class="simpleBox bg-white">
                                        <div class="float-right">
                                            <div class="badge badge-success">
                                                {{ $mission->status }}
                                            </div>
                                        </div>
                                        <h5>Details</h5>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <p class="font-weight-bold mb-0">Webpage name</p>
                                                <span class="font-weight-normal">{{ $mission->page_name }}</span>
                                            </div>

                                            <div class="col-12 col-md-6 mb-3">
                                                <p class="font-weight-bold mb-0">Webpage slogan</p>
                                                <span
                                                    class="font-weight-normal">{{ $mission->page_slogan ?? 'Not Specified' }}</span>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label for="pages" class="font-weight-bold">Subpages</label>
                                                <input id="pages" type="text" data-role="tagsinput" name="pages"
                                                       class="form-control" value="{{ $mission->pages }}" disabled>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <p class="font-weight-bold mb-0">Contact page</p>
                                                <span
                                                    class="font-weight-normal">{!! $mission->contact_check === 1 ? 'Yes (<a href="#" data-toggle="modal" data-target="#contact_info">Show Info</a>)' : 'No' !!} </span>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <p class="font-weight-bold mb-0">Contact form</p>
                                                <span
                                                    class="font-weight-normal">{!! $mission->contact_form_check === 1 ? 'Yes (<a href="#" data-toggle="popover" data-placement="top" data-content="'. clean($mission->contact_form_mail) .'">Show Info</a>)' : 'No' !!} </span>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <p class="font-weight-bold mb-0">Languages</p>
                                                <input id="pages" type="text" data-role="tagsinput" name="pages"
                                                       class="form-control"
                                                       value="{{ $mission->languages ?? 'Not Specified' }}" disabled>
                                            </div>

                                            @if ($mission->template_other)
                                                <div class="col-6 mb-3">
                                                    <p class="font-weight-bold mb-0">Template</p>
                                                    <span
                                                        class="font-weight-normal">{{ $mission->template_other }}</span>
                                                </div>
                                            @else
                                                <div class="col-6 mb-3">
                                                    <p class="font-weight-bold mb-0">Template</p>
                                                    <span class="font-weight-normal">{{ $mission->template }}</span>
                                                </div>
                                            @endif

                                            <div class="col-6 mb-3">
                                                <p class="font-weight-bold mb-0">Login</p>
                                                <span
                                                    class="font-weight-normal">{!! $mission->login_check === 1 ? 'Yes (<a href="#" data-toggle="popover" data-placement="top" data-content="'. clean($mission->login_text) .'">Show Info</a>)' : 'No' !!} </span>
                                            </div>

                                            <div class="col-6 mb-3">
                                                <p class="font-weight-bold mb-0">Package</p>
                                                <span class="font-weight-normal">{{ $mission->package }}</span>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <p class="font-weight-bold mb-0">Free text</p>
                                                <span class="font-weight-normal">{{ $mission->text_extra }}</span>
                                            </div>

                                            <div class="col-12">
                                                <hr/>

                                                <p>For questions or concerns regarding your booking, please contact
                                                    me on
                                                    <a href="mailto:info@atdev.me">info@atdev.me</a>.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        @else
                            <div class="simpleBox bg-white">
                                <strong>No mission was found with this ID. Please check again.</strong>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<div class="modal fade" id="contact_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="font-weight-bold mb-0">Telephone number</p>
                        <span class="font-weight-normal">{{ $mission->contact_phone }}</span>
                    </div>

                    <div class="col-12 col-md-6">
                        <p class="font-weight-bold mb-0">E-Mail</p>
                        <span class="font-weight-normal">{{ $mission->contact_email }}</span>
                    </div>

                    <div class="col-12 col-md-6">
                        <p class="font-weight-bold mb-0">Address</p>
                        <span class="font-weight-normal">{{ $mission->contact_address }}</span>
                    </div>

                    <div class="col-12 col-md-6">
                        <p class="font-weight-bold mb-0">Opening hours</p>
                        <span class="font-weight-normal">{{ $mission->contact_hours }}</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript-->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/plugins/slick-carousel/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

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
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

@endsection
