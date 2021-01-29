@extends('master.fix_other')

@section('content')

<!--body content wrap start-->
<div class="main">

    <!--hero background image with content slider start-->
    <section class="hero-equal-height gradient-overlay pt-165 pb-100 overflow-hidden" style="background: url('{{asset('website/img/hero-offer-bg.svg')}}')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center mt-sm-5 mt-md-5 my-lg-5">
                <div class="col-md-10 col-lg-8">
                    <div class="text-white text-center position-relative z-index">
                        <h3 class="text-white">Black Friday Sale!</h3>
                        <h1 class="text-white big-text mb-0"><span>UP TO</span> 90% OFF</h1>
                        <p class="lead">For SEO and Marketing Services</p>
                        <a href="#" class="btn secondary-solid-btn btn-lg mb-3">Get Started Now</a>
                        <p>Hurry Up, Limited time offer is ticking down</p>
                        <div id="clock" class="countdown-wrap  my-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero background image with content slider end-->

    <!--promo section start-->
    <section class="promo-block ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="core-services-single rounded p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg">
                        <span class="fas fa-ad icon-md mb-3 d-block color-primary"></span>
                        <h5>Advertising Agency</h5>
                        <p class="mb-0">Intrinsicly create 2.0 testing procedures rather than interdependent
                            schemas. Quickly.</p>
                        <a href="#" class="icon-link secondary-bg"><span class="ti-angle-double-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="core-services-single rounded p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg">
                        <span class="fas fa-briefcase icon-md mb-3 d-block color-primary"></span>
                        <h5>Creative Business</h5>
                        <p class="mb-0">Conveniently myocardinate efficient opportunities rather than
                            distributed catalysts for change.</p>
                        <a href="#" class="icon-link secondary-bg"><span class="ti-angle-double-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="core-services-single rounded p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg">
                        <span class="fas fa-lightbulb icon-md mb-3 d-block color-primary"></span>
                        <h5>Total SEO Services</h5>
                        <p class="mb-0">Quickly expedite cross-media information rather than open-source
                            metrics. Interactively maintain.</p>
                        <a href="#" class="icon-link secondary-bg"><span class="ti-angle-double-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--about us section start-->
    <section class="about-us-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-1">
                        <h2>About Us</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric outsourcing revolutionary</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="feature-tabs-wrap">
                        <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="#feature-tab-1"
                                   data-toggle="tab">
                                    <h6 class="mb-0">About Us</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" href="#feature-tab-2"
                                   data-toggle="tab">
                                    <h6 class="mb-0">Our Services</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                   data-toggle="tab">
                                    <h6 class="mb-0">Our Features</h6>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content feature-tab-content">
                            <div class="tab-pane" id="feature-tab-1">
                                <div class="row justify-content-around">
                                    <div class="col-md-12 col-lg-5">
                                        <div class="about-content-right mb-md-4 mb-lg-0 my-md-3 my-lg-3 my-sm-0">
                                            <p>Objectively productivate installed base technology whereas user friendly ROI.
                                                Phosfluorescently innovate functionalized potentialities revolutionize client-based applications.</p>

                                            <p>Holisticly utilize emerging leadership skills whereas multifunctional customer service. Energistically functional bandwidth without granular mindshare. Monotonectally visualize user-centric methodologies low-risk.</p>

                                            <ul class="list-unstyled tech-feature-list">
                                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong> Cash Management</li>
                                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                                            </ul>

                                            <a href="#" class="mt-4 btn secondary-solid-btn">Contact With Us</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="img-wrap my-md-3 my-lg-3 my-sm-0">
                                            <img src="{{asset('website/img/about-1.jpg')}}" alt="about" class="img-fluid rounded shadow-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active" id="feature-tab-2">
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
                            <div class="tab-pane" id="feature-tab-3">
                                <div class="row justify-content-around">
                                    <div class="col-md-12 col-lg-5">
                                        <div class="img-wrap my-md-3 my-lg-3 my-sm-0">
                                            <img src="{{asset('website/img/about-2.jpg')}}" alt="about" class="img-fluid rounded shadow-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="single-promo-block rounded my-3">
                                                    <div class="promo-block-icon mr-4">
                                                        <span class="fas fa-brain icon-sm color-primary mb-3"></span>
                                                    </div>
                                                    <div class="promo-block-content">
                                                        <h5>Cyber Security</h5>
                                                        <p>Enthusiastically scale mission-critical imperatives rather than array.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="single-promo-block rounded my-3">
                                                    <div class="promo-block-icon mr-4">
                                                        <span class="fas fa-bezier-curve icon-sm color-primary mb-3"></span>
                                                    </div>
                                                    <div class="promo-block-content">
                                                        <h5>Creative Design</h5>
                                                        <p>Compellingly promote collaborative products without synergistic. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="single-promo-block rounded my-3">
                                                    <div class="promo-block-icon mr-4">
                                                        <span class="fas fa-headset icon-sm color-primary mb-3"></span>
                                                    </div>
                                                    <div class="promo-block-content">
                                                        <h5>Consultancy</h5>
                                                        <p>Compellingly promote collaborative products without synergistic. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="single-promo-block rounded my-3">
                                                    <div class="promo-block-icon mr-4">
                                                        <span class="fas fa-comments icon-sm color-primary mb-3"></span>
                                                    </div>
                                                    <div class="promo-block-content">
                                                        <h5>Communication</h5>
                                                        <p>Compellingly promote collaborative products without synergistic. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay" style="background: url('{{asset('website/img/slider-img-2.jpg')}}')no-repeat top center / cover fixed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1">Increase More Traffic Your Business?</h2>
                        <p class="lead">Credibly redefine high-payoff web services after holistic experiences. Globally harness multidisciplinary solutions vis-a-vis intuitive customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-medall-alt icon-md"></span>
                        <h3 class="mb-0 text-white">1600</h3>
                        <p>Active users</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-headphone-alt icon-md"></span>
                        <h3 class="mb-0 text-white">2500</h3>
                        <p>Global client</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-cup icon-md"></span>
                        <h3 class="mb-0 text-white">2150</h3>
                        <p>Win award</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h3 class="mb-0 text-white">2150</h3>
                        <p>Clients satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->

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
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('website/img/portfolios/3.jpg')}}" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Creative Design</h5>
                                        <p>Design</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('website/img/portfolios/2.jpg')}}" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('website/img/portfolios/4.jpg')}}" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                        <p>Flyer Design</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('website/img/portfolios/1.jpg')}}" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                        <p>Web, Design</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('website/img/portfolios/5.jpg')}}" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Wall Painting Design</h5>
                                        <p>Painting Design</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('website/img/portfolios/6.jpg')}}" alt="portfolio"/>
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                        <p>Corporate Design</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our work or portfolio section end-->

    <!--team two section start-->
    <section class="team-two-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Meet Our Lovely Team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric outsourcing through revolutionary</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card text-center">
                            <img src="{{asset('website/img/team-1.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p><a
                                    href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card text-center">
                            <img src="{{asset('website/img/team-3.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Kely Roy</h5>
                                <span>Lead Designer</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line relationships." </p><a
                                    href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span class="teacher-field text-white">Lead Designer</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-member">
                        <div class="card text-center">
                            <img src="{{asset('website/img/team-2.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Gerald Nichols</h5>
                                <span>Managing Director</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas prospective partnerships." </p><a
                                    href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                <span class="teacher-field text-white">Managing Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-dribbble"></span></a></li>
                                </ul>
                                <p class="teacher-see-profile">
                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team two section end-->

    <!--testimonial section start-->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2>What Clients Say About Us</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
                <div class="col-md-6 col-lg-4">
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
            </div>

        </div>
    </section>
    <!--testimonial section end-->

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


    <!--client section start-->
    <div class="client-section ptb-100">
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


@endsection
