@extends('master.fix_other')

@section('content')

<!--body content wrap start-->
<div class="main">

    <!--hero background image with content slider start-->
    <section class="hero-section hero-bg-2 ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pb-5">
                <div class="col-md-6 col-lg-7">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">We are Digital & Marketing Agency</h1>
                        <p class="lead">Dramatically grow customized potentialities vis-a-vis synergistic alignments. Energistically drive team building imperatives after vertical applications.</p>
                        <ul class="list-unstyled tech-feature-list text-white">
                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Accounting</strong> Procedures Guidebook</li>
                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Cost</strong> Accounting Fundamentals</li>
                            <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Corporate</strong> Cash Management</li>
                        </ul>
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
                <div class="col-md-6 col-lg-5">
                    <div class="sign-up-form-wrap position-relative rounded p-5 gray-light-bg shadow-lg">
                        <div class="sign-up-form-header text-center mb-4">
                            <h4 class="mb-0">Get a quote today</h4>
                            <p>Get response within 24 hours</p>
                        </div>
                        <div class="message-box d-none">
                            <div class="alert alert-danger"></div>
                        </div>
                        <form action="#" id="getQuoteFrm" method="post" class="sign-up-form">
                            <div class="form-group input-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" required="required">
                            </div>
                            <div class="form-group input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required="required">
                            </div>
                            <div class="form-group input-group">
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject" required="required">
                            </div>
                            <div class="form-group input-group">
                                <textarea name="message" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn secondary-solid-btn btn-block" value="Send">
                            </div>
                            <div class="form-check d-flex align-items-center text-center">
                                <input type="checkbox" class="form-check-input mt-0 mr-3" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree your <a href="#">terms &amp; conditions</a></label>
                            </div>
                        </form>
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
            <div class="row justify-content-around">
                <div class="col-md-12 col-lg-6">
                    <div class="img-wrap">
                        <img src="{{asset('website/img/about-us-2.jpg')}}" alt="about" class="img-fluid rounded shadow"/>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>About Us</h2>
                        <p>Credibly grow multifunctional customer service through team driven scenarios. Rapidiously disintermediate end-to-end e-business after goal-oriented partnerships. Professionally incentivize scalable expertise before strategic intellectual.</p>
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs mb-4 border-bottom-0 feature-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-1"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Value</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-2"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Mission</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-3"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Vision</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane" id="feature-tab-1">
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
                                <div class="tab-pane active" id="feature-tab-3">
                                    <p>Monotonectally enhance interoperable paradigms via team building channels. Phosfluorescently predominate robust services with vertical content. Globally network viral innovation without prospective resources. Quickly.</p>
                                    <ul class="list-unstyled tech-feature-list mb-4">
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong> Accounting Fundamentals</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong> Cash Management</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                                    </ul>
                                    <p>Competently innovate turnkey channels after proactive methods of empowerment. Continually enhance orthogonal experiences. Energistically evisculate enterprise human capital without backward-compatible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--video background section start-->
    <section class="background-video-section" style="background: url('{{asset('website/img/hero-bg5.jpg')}}')no-repeat center center / cover">
        <div class="video-section-wrap">
            <div class="gradient-overlay ptb-100">
                <div class="player"
                     data-property="{videoURL:'https://www.youtube.com/watch?v=gOqlwlQjVis',containment:'.video-section-wrap', quality:'highres', autoPlay:true, showControls: false, startAt:0, mute:true, opacity: 1}"></div>
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
            </div>
        </div>
    </section>
    <!--video background section end-->

    <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-4">
                        <h2>First Class Business Solutions for You</h2>
                        <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                            foster tactical solutions without enabled value.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                        <span class="ti-announcement icon-lg color-primary d-block mb-4"></span>
                        <h5>Marketing Services</h5>
                        <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                            partnerships.</p>
                        <a href="services-details.html" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                        <span class="ti-light-bulb icon-lg color-primary d-block mb-4"></span>
                        <h5>Total SEO Services</h5>
                        <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                            partnerships.</p>
                        <a href="services-details.html" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                        <span class="ti-headphone-alt icon-lg color-primary d-block mb-4"></span>
                        <h5>24/7 Call Center Service</h5>
                        <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                            partnerships.</p>
                        <a href="services-details.html" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                        <span class="ti-bell icon-lg color-primary d-block mb-4"></span>
                        <h5>Social Media Marketing</h5>
                        <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                            partnerships.</p>
                        <a href="services-details.html" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                        <span class="ti-briefcase icon-lg color-primary d-block mb-4"></span>
                        <h5>Corporate Business</h5>
                        <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                            partnerships.</p>
                        <a href="services-details.html" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                        <span class="ti-vector icon-lg color-primary d-block mb-4"></span>
                        <h5>Creative Consultancy</h5>
                        <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                            partnerships.</p>
                        <a href="services-details.html" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->

    <!--team section start-->
    <section class="team-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Meet our lovely team</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric through revolutionary.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="img/team-1.jpg" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Instructor of Mathematics</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Energistically administrate multifunctional rather than front-end expertise." </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-2.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Philip Wilson</h5>
                                <span>Marketing Head</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Monotonectally mesh customized core competencies through communities." </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Philip Wilson</h5></a>
                                <span class="teacher-field text-white">Marketing Head</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-3.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="h5 teacher mb-0">Ann Smith</h5>
                                <span>Finance Lead</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Efficiently deliver business systems through extensible redefine user" </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Ann Smith</h5></a><span class="teacher-field text-white">Finance Lead</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-4.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Walsh Alex</h5>
                                <span>Company Director</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Conveniently whiteboard one-to-one bandwidth rather than revolutionary mindshare." </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Walsh ALex</h5></a>
                                <span class="teacher-field text-white">Company Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-6.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Henry Ford</h5>
                                <span>CEO of Mathematics</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Energistically administrate multifunctional rather than front-end expertise." </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Instructor of Mathematics</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-7.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Alexa Lory</h5>
                                <span>Company Director</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Conveniently whiteboard one-to-one bandwidth rather than revolutionary mindshare." </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Walsh ALex</h5></a>
                                <span class="teacher-field text-white">Company Director</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-8.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="h5 teacher mb-0">Jon Smith</h5>
                                <span>Lead Developer</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Efficiently deliver business systems through extensible redefine user" </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Ann Smith</h5></a><span class="teacher-field text-white">Finance Lead</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('website/img/team-5.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Sophia Wilson</h5>
                                <span>Robotic Engineer</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Monotonectally mesh customized core competencies through communities." </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Philip Wilson</h5></a>
                                <span class="teacher-field text-white">Marketing Head</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-dribbble"></span></a></li>
                                </ul>
                            </div>
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
