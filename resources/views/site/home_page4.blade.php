@extends('master.fix_other')

@section('content')

<!--body content wrap start-->
<div class="main">
    <!--hero section start-->
    <section class="hero-section text-white gradient-overlay overflow-hidden" style="background: url('{{asset('website/img/slider-img-2.jpg')}}')no-repeat center center / cover">
        <div class="video-section-wrap">
            <div class="background-video-overly hero-equal-height pt-165 pb-100">
                <div class="player"
                     data-property="{videoURL:'https://www.youtube.com/watch?v=gOqlwlQjVis',containment:'.video-section-wrap', quality:'highres', autoPlay:true, showControls: false, startAt:0, mute:true, opacity: 1}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-9 col-lg-8">
                            <div class="hero-slider-content text-white text-center my-lg-5">
                                <h1 class="text-white">We Are Creative Corporate & Marketing Agency</h1>
                                <p class="lead">We offer Digital Marketing / SEO in Kalawad Road Rajkot, Gujarat. Find here
                                    details about our
                                    company.Completely pontificate methodologies with viral sources dynamically revolutionize cross-unit action.</p>

                                <div class="heighlight-list-wrap mt-4">
                                    <ul class="list-inline highlight-list">
                                        <li class="list-inline-item custom-shadow">
                                            <h5 class="mb-0 text-white">100+</h5>
                                            <h6>Happy Client</h6>
                                        </li>
                                        <li class="list-inline-item custom-shadow">
                                            <h5 class="mb-0 text-white">60+</h5>
                                            <h6>Win Awards</h6>
                                        </li>
                                        <li class="list-inline-item custom-shadow">
                                            <h5 class="mb-0 text-white">555+</h5>
                                            <h6>Dedicated Support</h6>
                                        </li>
                                        <li class="list-inline-item custom-shadow">
                                            <h5 class="mb-0 text-white">10K</h5>
                                            <h6>Client Testimonials</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--customer section start-->
    <div class="customer-section py-3 border-bottom d-none d-md-block d-sm-none d-lg-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="client-section-wrap d-flex flex-row align-items-center">
                        <p class="lead mr-5 mb-0">Trusted by companies like:</p>
                        <ul class="list-inline justify-content-between">
                            <li class="list-inline-item"><img src="{{asset('website/img/clients-logo-01.png')}}" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="{{asset('website/img/clients-logo-02.png')}}" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="{{asset('website/img/clients-logo-03.png')}}" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="{{asset('website/img/clients-logo-04.png')}}" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="{{asset('website/img/clients-logo-05.png')}}" width="85" alt="client" class="img-fluid"></li>
                            <li class="list-inline-item"><img src="{{asset('website/img/clients-logo-06.png')}}" width="85" alt="client" class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--customer section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2>Best Consulting Every Business</h2>
                        <p>Interactively develop timely niche markets before extensive imperatives. Professionally
                            repurpose interoperable growth strategies before effective core competencies.</p>
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-1"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Skills</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-2"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Mission</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Vision</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="feature-tab-1">
                                    <div class="skill-content-wrap">
                                        <p>Holisticly whiteboard low-risk high-yield e-services vis-a-vis user-centric data. Competently benchmark enterprise-wide communities whereas interactive.</p>
                                        <div class="progress-item">
                                            <div class="progress-title">
                                                <h6>Creativity<span class="float-right"><span class="progress-number">90</span>%</span>
                                                </h6>
                                            </div>
                                            <div class="progress">
                                                <span style="width:90%;"><span class="progress-line"></span></span>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="progress-title">
                                                <h6>Technical skills<span class="float-right"><span class="progress-number">80</span>%</span>
                                                </h6>
                                            </div>
                                            <div class="progress">
                                                <span style="width:80%;"><span class="progress-line"></span></span>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="progress-title">
                                                <h6>Marketing<span class="float-right"><span class="progress-number">70</span>%</span>
                                                </h6>
                                            </div>
                                            <div class="progress">
                                                <span style="width:70%;"><span class="progress-line"></span></span>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="progress-title">
                                                <h6>Web Consulting<span class="float-right"><span class="progress-number">85</span>%</span>
                                                </h6>
                                            </div>
                                            <div class="progress">
                                                <span style="width:85%;"><span class="progress-line"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="feature-tab-2">
                                    <p>Objectively monetize resource sucking testing procedures vis-a-vis standards compliant ROI. Proactively disintermediate virtual sources before wireless alignments.</p>

                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong> Websites Design</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Accounting</strong> Procedures Guidebook</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong> Accounting Fundamentals</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong> Cash Management</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>45-Day</strong> Money-Back Guarantee</li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="feature-tab-3">
                                    <p>Monotonectally enhance interoperable paradigms via team building channels. Phosfluorescently predominate robust services with vertical content. Globally network viral innovation without prospective resources. Quickly.</p>
                                    <ul class="list-unstyled tech-feature-list mb-4">
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong> Accounting Fundamentals</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong> Cash Management</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="about-img-wrap-2">
                        <img src="{{asset('website/img/about-us.jpg')}}" alt="video" class="img-fluid rounded shadow-sm">
                        <div class="card-img-overlay text-center">
                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon color-bip shadow"><span class="ti-control-play"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--our work process section start-->
    <section class="work-process-new ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading mb-5">
                        <h2>We Deliver Our Services Few Process</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate outsourcing customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap">
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                <i class="ti-vector icon-md text-white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">1</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Generate Ideas</h5>
                                <p>Compellingly harness reliable methodologies and orthogonal web enterprise without services. </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                <i class="ti-layout-list-thumb icon-md text-white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">2</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Collect Contents</h5>
                                <p>Intrinsicly scale out-of-the-box customer service strategic theme world-class architectures. </p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                <i class="ti-palette icon-md text-white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">3</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Create Design</h5>
                                <p>Proactively unleash high standards in expertise exceptional services e-business networks.</p>
                            </div>
                        </div>
                        <div class="single-work-process">
                            <div class="work-process-icon-wrap primary-bg rounded-circle">
                                <i class="ti-cup icon-md text-white"></i>
                                <span class="process-step white-bg color-primary shadow-sm">4</span>
                            </div>
                            <div class="work-process-content mt-4">
                                <h5>Launch Project</h5>
                                <p>Compellingly harness reliable methodologies web services user-centric collaboration. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work process section end-->

    <!--services section start-->
    <section class="services-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>We Provide Best Quality Services</h2>
                        <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                            foster tactical solutions without enabled value.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-announcement icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Marketing Services</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-light-bulb icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Web App Development</h5>
                            <p class="mb-0">Quickly pontificate holistic e-commerce rather than goal-oriented web-readiness enhance inexpensive.</p>
                            <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-headphone-alt icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>24/7 Call Center Service</h5>
                            <p class="mb-0">Authoritatively reinvent multimedia based niches with global portals orchestrate client-centered .</p>
                            <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-bell icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Social Media Marketing</h5>
                            <p class="mb-0">Assertively leverage other's standardized e-services with fully tested e-commerce strategize synergistic. </p>
                            <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-briefcase icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Corporate Business</h5>
                            <p class="mb-0">Enthusiastically scale client-centric supply chains vis-a-vis enabled benefits empower global core.</p>
                            <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                        <div class="service-icon mr-4">
                            <span class="ti-vector icon-md color-secondary"></span>
                        </div>
                        <div class="services-content-wrap">
                            <h5>Creative Consultancy</h5>
                            <p class="mb-0">Conveniently productize corporate imperatives for innovative best practices ideas whereas ethical change.</p>
                            <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->

    <!--download section start-->
    <section class="call-to-action ptb-100 gradient-overlay" style="background: url('{{asset('website/img/header-bg-1.jpg')}}')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="app-business-content text-center text-white">
                        <h2 class="text-white">Download Apps Managing Business</h2>
                        <p class="lead">Building your Apps busines helps attract more potential clients.
                            Our integrated marketing team will work directly long-term high-impact convergence. </p>

                        <div class="action-btns mt-5">
                            <ul class="list-inline app-download-list">
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-windows icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">Windows</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-apple icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">App Store</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="d-flex align-items-center border rounded">
                                        <span class="fab fa-google-play icon-sm mr-3"></span>
                                        <div class="download-text text-left">
                                            <span>Download form</span>
                                            <h5 class="mb-0">Google Play</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--download section end-->

    <!--team section start-->
    <section class="team-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet Our Lovely Team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric outsourcing revolutionary.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-1-wrap">
                        <div class="team-img">
                            <img src="{{asset('website/img/team-4.jpg')}}" alt="team image" class="img-fluid">
                        </div>
                        <div class="team-overly-content">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-facebook"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-twitter"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-linkedin"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <h5 class="mb-0">ALex Walsh</h5>
                            <p>Lead Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-1-wrap">
                        <div class="team-img">
                            <img src="{{asset('website/img/team-1.jpg')}}" alt="team image" class="img-fluid">
                        </div>

                        <div class="team-overly-content">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-facebook"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-twitter"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-linkedin"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-dribbble"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <h5 class="mb-0">Aminul Islam</h5>
                            <p>Front-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-1-wrap">
                        <div class="team-img">
                            <img src="{{asset('website/img/team-2.jpg')}}" alt="team image" class="img-fluid">
                        </div>

                        <div class="team-overly-content">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-facebook"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-twitter"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-linkedin"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <h5 class="mb-0">Walsh ALex</h5>
                            <p>Software Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-1-wrap">
                        <div class="team-img">
                            <img src="{{asset('website/img/team-3.jpg')}}" alt="team image" class="img-fluid">
                        </div>
                        <div class="team-overly-content">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-facebook"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-twitter"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-linkedin"></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><span class="ti-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <h5 class="mb-0">Jui ALex</h5>
                            <p>Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team section end-->

    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Latest News</h2>
                        <p class="lead">
                            Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively
                            transform tactical methods of empowerment via resource.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">Business</span></a>
                            <a href="#"><img src="{{asset('website/img/blog/1.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">ThemeTags</a>
                                    <small>May 26, 2020</small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> 50</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">SEO, Analytics</span></a>
                            <a href="#"><img src="{{asset('website/img/blog/2.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                            <p class="card-text">Synergistically engage effective ROI after customer directed partnerships.</p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">ThemeTags</a>
                                    <small>May 28, 2020</small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> 30</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <a href="#"><span class="category position-absolute">Marketing</span></a>
                            <a href="#"><img src="{{asset('website/img/blog/3.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog"></a>
                        </div>
                        <div class="card-body">
                            <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive users.</p>
                        </div>
                        <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                            <div class="author-meta d-flex align-items-center">
                                <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                                <div class="author-content">
                                    <a href="#" class="d-block">ThemeTags</a>
                                    <small>May 30, 2020</small>
                                </div>
                            </div>
                            <div class="author-like">
                                <a href="#"><span class="fa fa-share-alt"></span> 55</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--call to action section start-->
    <section class="call-to-action py-5">
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
                        <a href="#" class="btn secondary-solid-btn">Contact With Us</a>
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

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


@endsection
