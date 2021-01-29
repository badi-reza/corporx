@extends('master.fix_other')

@section('content')

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay"
                 style="background: url('{{asset('website/img/header-bg-5.jpg')}}')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Contact Us</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Contact Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--contact us promo start-->
        <section class="contact-us-promo pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-mobile icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Call Us</h5>
                                    <p class="text-muted mb-0">+123 456-78900</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Visit Us</h5>
                                    <p class="text-muted mb-0">New York, CA N310</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-email icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Mail Us</h5>
                                    <p class="text-muted mb-0">help@yourdomain.com</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-headphone-alt icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Live Chat</h5>
                                    <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo end-->

        <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form gray-light-bg rounded p-5">
                            <h4>Ready to get started?</h4>
                            <form action="{{route('contact.date')}}" method="post" class="contact-us-form">
                                @csrf
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <textarea name="des" class="form-control" rows="7" cols="25"
                                                  placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn secondary-solid-btn" value="Send Message">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2>Looking for a excellent Business idea?</h2>
                            <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                            <a href="#" class="btn outline-btn align-items-center">Get Directions <span
                                    class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <h5>Our Headquarters</h5>
                            <address>
                                100 Yellow House, Mn <br>
                                Factory, United State, 13420
                            </address>
                            <br>
                            <span>Phone: +1234567890123</span> <br>
                            <span>Email: <a href="mailto:email@yourdomain.com"
                                            class="link-color">email@yourdomain.com</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

        <!--google map block start-->
        <div class="google-map">
            <iframe src="{{route('map')}}" height="450" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!--google map block end-->


    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <div class="footer-top gradient-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row footer-top-wrap">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">QUICK LINKS</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Make Appointment</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Department Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Our Case Studies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Our Business Growth</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">COMPANY</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About Our Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Our Affiliates Program</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">View Our Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Check Our Careers</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LEGAL</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Legal Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Report Abuse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms of Service</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SUPPORT</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Knowledge Base</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Forums</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">System Status</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row footer-top-wrap">
                            <div class="col-12">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">GET IN TOUCH</h4>
                                    <ul class="get-in-touch-list">
                                        <li class="d-flex align-items-center py-2"><span
                                                class="fas fa-map-marker-alt mr-2"></span> 1234 Street Name, City Name, USA
                                        </li>
                                        <li class="d-flex align-items-center py-2"><span
                                                class="fas fa-envelope mr-2"></span> you@domain.com
                                        </li>
                                        <li class="d-flex align-items-center py-2"><span
                                                class="fas fa-phone-alt mr-2"></span> (123) 456-7890 - (123) 456-7890
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg py-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                            rights reserved by
                            <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a></p>
                    </div>
                    <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                        <div class="social-nav text-right">
                            <ul class="list-unstyled social-list mb-0">
                                <li class="list-inline-item tooltip-hover">
                                    <a href="#" class="rounded"><span class="ti-facebook"></span></a>
                                    <div class="tooltip-item">Facebook</div>
                                </li>
                                <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                            class="ti-twitter"></span></a>
                                    <div class="tooltip-item">Twitter</div>
                                </li>
                                <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                            class="ti-linkedin"></span></a>
                                    <div class="tooltip-item">Linkedin</div>
                                </li>
                                <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span
                                            class="ti-dribbble"></span></a>
                                    <div class="tooltip-item">Dribbble</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->

@endsection
