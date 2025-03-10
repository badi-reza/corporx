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
                            <h1 class="text-white mb-0">Project Details</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Project Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--project details section start-->
        <section class="project-details-section ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 col-lg-8">
                        <div class="img-wrap mb-md-4 mb-lg-0">
                            <img src="{{asset('website/img/hero-bg7.jpg')}}" alt="project" class="img-fluid rounded shadow-sm"/>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <!--all services list-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>All Services</h5>
                            </div>
                            <ul class="all-service-list">
                                <li><a href="#">Financial Services Consulting</a></li>
                                <li><a href="#">Consumer Product Consulting</a></li>
                                <li><a href="#">Global Consumer insights</a></li>
                                <li><a href="#">Independent contractor</a></li>
                                <li><a href="#">Creative Idea Development</a></li>
                                <li><a href="#">Social Media Marketing</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>

                <!--project details row start-->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="project-details-content">
                            <h5>Project Description</h5>
                            <p>Synergistically syndicate frictionless architectures via global e-services. Assertively
                                pontificate adaptive e-tailers rather than cross-unit results. Assertively engineer top-line
                                portals through one-to-one growth strategies. Efficiently.</p>
                            <p>Proactively reinvent standards compliant applications before timely ROI. Uniquely negotiate
                                installed base results rather than resource-leveling e-markets. Continually plagiarize
                                magnetic technologies vis-a-vis synergistic infomediaries. Globally communicate progressive
                                users without resource maximizing growth strategies. Objectively evolve enterprise.</p>
                            <p>Collaboratively conceptualize flexible best practices via cooperative methodologies. Assertively negotiate an expanded array of alignments with 24/365 "outside the box" thinking. Assertively enable fully researched vortals rather than alternative niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="project-details-feature">
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Foreclosure</strong>
                                    consultant Human resource consulting
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                    Immigration consultant, Information consulting
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>SEO</strong> Optimization Creative consultant</li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Rapidiously</strong> conceptualize strategic before communities</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-details-feature">
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong>
                                    pharmacist Creative consultant
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Monotonectally</strong>
                                    customize B2B core competencies
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Immigration</strong> consultant, Information consulting</li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong> pharmacist Creative consultant</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--project details row end-->
            </div>
        </section>
        <!--project details section end-->

        <!--call to action section start-->
        <section class="call-to-action py-5 gray-light-bg">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3 class="mb-1">Consulting Agency for Your Business</h3>
                            <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="#" class="btn secondary-solid-btn">Become a Client</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->


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


@endsection
