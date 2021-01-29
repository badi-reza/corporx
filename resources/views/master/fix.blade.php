<!doctype html>
<html lang="en">

<!-- Mirrored from corporx.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 07:28:57 GMT -->
<head>
    <meta charset="utf-8">
    @foreach($setting as $value)
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta description -->
        <meta name="description" content="{{$value->description}}">
        <meta name="author" content="{{$value->author}}">
        <meta name="keywords" content="{{$value->keywords}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--title-->
        <title>{{$value->title}}</title>

@endforeach

<!--favicon icon-->
    <link rel="icon" href="{{asset('website/img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="{{asset('website/css/fonts.css')}}" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{asset('website/css/themify-icons.css')}}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{asset('website/css/all.min.css')}}">
    <!--animated css-->
    <link rel="stylesheet" href="{{asset('website/css/animate.min.css')}}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{asset('website/css/jquery.mb.YTPlayer.min.css')}}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.theme.default.min.css')}}">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}">

</head>
<body>
<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-envelope mr-1"></span> <a
                                    href="mailto:support@yourdomain.com">support@yourdomain.com</a></li>
                            <li class="list-inline-item"><span class="fas fa-map-marker mr-1"></span> Address CA-234/B
                                New York, USA
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left">
                            <li class="list-inline-item"><span class="ti-phone mr-2"></span> Call Now: <strong>883-4565-123456</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('website/img/logo-color.png')}}" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Home</a>
                        <ul class="sub-menu dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('homepage')}}">Home Page 01</a></li>
                            <li><a class="dropdown-item" href="{{route('homepage2')}}">Home Page 02</a></li>
                            <li><a class="dropdown-item" href="{{route('homepage3')}}">Home Page 03</a></li>
                            <li><a class="dropdown-item" href="{{route('homepage4')}}">Home Page 04</a></li>
                            <li><a class="dropdown-item" href="{{route('homepage5')}}">Home Page 05</a></li>
                            <li><a class="dropdown-item" href="{{route('homepage6')}}">Home Page 06</a></li>
                            <li><a class="dropdown-item" href="{{route('homepage7')}}">Home Page 07 <span
                                        class="badge badge-danger ml-2">New</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('service')}}">Services</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('project')}}">Project</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->
@yield('content')

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script src="{{asset('website/js/jquery-3.4.1.min.js')}}"></script>
<!--Popper js-->
<script src="{{asset('website/js/popper.min.js')}}"></script>
<!--Bootstrap js-->
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<!--Magnific popup js-->
<script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<!--jquery easing js-->
<script src="{{asset('website/js/jquery.easing.min.js')}}"></script>
<!--jquery ytplayer js-->
<script src="{{asset('website/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!--Isotope filter js-->
<script src="{{asset('website/js/mixitup.min.js')}}"></script>
<!--wow js-->
<script src="{{asset('website/js/wow.min.js')}}"></script>
<!--owl carousel js-->
<script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
<!--countdown js-->
<script src="{{asset('website/js/jquery.countdown.min.js')}}"></script>
<!--custom js-->
<script src="{{asset('website/js/scripts.js')}}"></script>
<!--validator js-->
<script src="{{asset('website/js/validator.min.js')}}"></script>
</body>

<!-- Mirrored from corporx.themetags.com/project-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 07:32:34 GMT -->
</html>
