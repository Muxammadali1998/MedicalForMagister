<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->



<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{route('site.home')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Omad Shifo</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Uz</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">Uz</a>
                    <a href="#" class="dropdown-item">Ru</a>
                </div>
            </div>
            <a href="{{route('site.home')}}" class="nav-item nav-link {{request()->routeIs('site.home')?"active":''}}">{{__('words.home')}}</a>
            <a href="{{route('site.about')}}" class="nav-item nav-link {{request()->routeIs('site.about')?"active":''}}">{{__('words.about')}}</a>
            <a href="{{route('site.service')}}" class="nav-item nav-link {{request()->routeIs('site.service')?"active":''}}">{{__('words.services')}}</a>
            <a href="{{route('site.feature')}}" class="nav-item nav-link {{request()->routeIs('site.feature')?"active":''}}">{{__('words.features')}}</a>
            <a href="{{route('site.doctor')}}" class="nav-item nav-link {{request()->routeIs('site.doctor')?"active":''}}">{{__('words.doctors')}}</a>
            <a href="{{route('site.appointment')}}" class="nav-item nav-link {{request()->routeIs('site.appointment')?"active":''}}">{{__('words.appointment')}}</a>
            <a href="{{route('site.contact')}}" class="nav-item nav-link {{request()->routeIs('site.contact')?"active":''}}">{{__('words.contact')}}</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

@yield('content')

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">{{__('words.address')}}</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">{{__('words.services')}}</h5>

                @foreach($jobs as $service)
                    <a class="btn btn-link" href="">{{$service['title_'.app()->getLocale()]}}</a>
                @endforeach

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">{{__('words.quick_links')}}</h5>

                <a href="{{route('site.home')}}"class="btn btn-link">{{__('words.home')}}</a>
                <a href="{{route('site.about')}}"class="btn btn-link">{{__('words.about')}}</a>
                <a href="{{route('site.service')}}"class="btn btn-link">{{__('words.services')}}</a>
                <a href="{{route('site.feature')}}"class="btn btn-link">{{__('words.features')}}</a>
                <a href="{{route('site.doctor')}}"class="btn btn-link">{{__('words.doctors')}}</a>
                <a href="{{route('site.appointment')}}"class="btn btn-link">{{__('words.appointment')}}</a>
                <a href="{{route('site.contact')}}"class="btn btn-link">{{__('words.contact')}}</a>

            </div>
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <h5 class="text-light mb-4">Newsletter</h5>--}}
{{--                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>--}}
{{--                <div class="position-relative mx-auto" style="max-width: 400px;">--}}
{{--                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">--}}
{{--                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" style="margin-right: -13px; margin-bottom: 41px" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->

<script>
    window.replainSettings = { id: '85cb7642-0cb2-4e6e-8606-dfc860c1f945' };
    (function(u){var s=document.createElement('script');s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
    })('https://widget.replain.cc/dist/client.js');
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
@livewireScripts
</body>

</html>
