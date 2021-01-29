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
                        <h1 class="text-white mb-0">Our Projects</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Projects</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->


    <!--our work or portfolio section start-->
    <section class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Check Our Quality Work</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                            develop end-to-end customer service without extensive data.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">
                        <button type="button" class="filter-btn" data-mixitup-control data-filter="all">All</button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Branding</button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Animation</button>
                        <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">Others</button>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                        @foreach($check as $item)
                            <div class="mix portfolio-item branding" data-ref="mixitup-target">
                                <div class="portfolio-wrapper" style="width:360px; height: 360px">
                                    <a href="{{route('detail')}}" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="{{asset('images/check/'.$item->image)}}"
                                             alt="{{$item->alt}}"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">{{$item->title_one}}</h5>
                                            <p>{{$item->title_two}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work or portfolio section end-->


    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay" style="background: url('{{asset('website/img/slider-img-3.jpg')}}')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="call-to-action-content text-white">
                        <h2 class="text-white mb-1">Looking for Quality Services ?</h2>
                        <p>Progressively deliver market-driven quality vectors rather than goal-oriented niche markets.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn outline-white-btn">Contact us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->


    <!--our pricing section start-->
    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Affordable Pricing and Packages</h2>
                        <p CLASS="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                            foster tactical solutions without enabled value.</p>
                    </div>
                </div>
            </div>




            <div class="row justify-content-center">

                @foreach ($product as $item)
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>{{$item->title}}</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="{{asset('images/product/'.$item->image)}}" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">{{$item->price}}</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>
                                        {{$item->des}}
                                    </li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>


        </div>
    </section>
    <!--our pricing section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>Testimonials What Clients Say</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('website/img/client-1.jpg')}}" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Austin Cesar</h5>
                                            <small class="mb-0">Team Leader</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('website/img/client-2.jpg')}}" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Pirtle Karol</h5>
                                            <small class="mb-0">Team Leader</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('website/img/client-3.jpg')}}" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Joe Pirtle</h5>
                                            <small class="mb-0">Marketing Head</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                <blockquote>
                                    Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                </blockquote>
                                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('website/img/client-4.jpg')}}" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                        <div class="client-info">
                                            <h5 class="mb-0">Kaly Dash</h5>
                                            <small class="mb-0">Marketing Manager</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->


    <!--client section start-->
    <div class="client-section ptb-100 gray-light-bg">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-01.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-02.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-03.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-04.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-05.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-06.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-07.png')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('website/img/clients-logo-08.png')}}" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section start-->


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
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-map-marker-alt mr-2"></span> 1234 Street Name, City Name, USA</li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-envelope mr-2"></span> you@domain.com</li>
                                    <li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span> (123) 456-7890 - (123) 456-7890</li>
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
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-twitter"></span></a>
                                <div class="tooltip-item">Twitter</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-linkedin"></span></a>
                                <div class="tooltip-item">Linkedin</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="ti-dribbble"></span></a>
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


<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


@endsection
