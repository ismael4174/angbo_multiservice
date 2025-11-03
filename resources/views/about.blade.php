
@extends('layouts.master')


@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png" data-overlay="title" data-opacity="7">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">A propos</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Accueil</a></li>
                        <li class="active">A propos</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="breadcumb-thumb">
                    <img src="assets/img/normal/breadcumb-thumb.png" alt="img">
                </div>
            </div>
        </div>

    </div>
</div>
<!--==============================
    About Area 2
==============================-->
<section class="about-area2 space overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-thumb-wrap2 mb-lg-0 mb-5">
                    <div class="shape-mockup" data-bottom="-120px" data-right="0" data-left="-66%">
                        <img class="about-thumb-bg2" src="assets/img/about/about_thumb_bg_2.png" alt="img">
                    </div>
                    <div class="thumb-1"><img src="assets/img/about/about_2_1.png" alt="img"></div>
                    <div class="thumb-2"><img src="assets/img/about/about_2_2.png" alt="img"></div>
                    <div class="about-counter1">
                        <h3 class="counter-title"><span class="counter-number">1</span>k+</h3>
                        <span class="counter-text">Services offerts</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="title-area mb-0">
                    <h3 class="sub-title">A propos d'Angbomultiservice</h3>
                    <h2 class="sec-title">Bienvenue sur la page d'Angbomultiservice</h2>
                    <p class="content">Développer progressivement des initiatives novatrices offrant des opportunités exceptionnelles. Rationaliser de manière interactive les partenariats cross-média sans optimiser les processus. Mettre en réseau de manière distinctive des services numériques d'exception.</p>
                    <div class="list-column2">
                        <div class="checklist">
                            <ul>
                                <li><img src="assets/img/icon/check.svg" alt="img"> We’re Here When You Need Us</li>
                                <li><img src="assets/img/icon/check.svg" alt="img"> Service & Maintenance</li>
                                <li><img src="assets/img/icon/check.svg" alt="img"> Financement interne</li>
                            </ul>
                        </div>
                        <div class="checklist">
                            <ul>
                                <li><img src="assets/img/icon/check.svg" alt="img"> Meilleures pièces</li>
                                <li><img src="assets/img/icon/check.svg" alt="img">Marques prestigieuses</li>
                                <li><img src="assets/img/icon/check.svg" alt="img">Concessionnaire automobile de confiance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-btn-group">
                        <a class="as-btn style4 mt-0" href="about">Voir plus</a>
                        <div class="about-grid">
                            <div class="about-grid_icon">
                                <div class="icon">
                                    <img src="assets/img/icon/message.svg" alt="icon">
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="about-grid_title">Des questions? Cliquez sur le lien en dessus</h3>
                                <span class="about-grid_link"><img class="me-2" src="assets/img/icon/hand.svg" alt="img"><a href="contact" class="gr-link">FAQ’S</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Process Area
==============================-->
{{-- <section class="process-sec bg-smoke2 space" data-bg-src="assets/img/bg/work-process-bg.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><span class="double-line"></span> HOW IT WORK</span>
            <h2 class="sec-title">Easy 3-Step Working Process</h2>
        </div>
        <div class="row gy-40 justify-content-center">
            <div class="col-md-6 col-lg-4 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon" data-bg-src="assets/img/bg/process-icon-bg2.svg">
                        <img class="process-icon" src="assets/img/icon/process-icon-4-1.svg" alt="icon">
                        <div class="process-box_number">01</div>
                        <img class="arrow" src="assets/img/icon/arrow-left3.svg" alt="img">
                    </div>
                    <h2 class="process-box_title box-title">Replenishment
                        & Picking</h2>
                    <p class="process-box_text">Professionally unleash collaborative e-services
                        whereas frictionless niches. Conveniently
                        mesh cooperative quality vectors.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon" data-bg-src="assets/img/bg/process-icon-bg2.svg">
                        <img class="process-icon" src="assets/img/icon/process-icon-4-2.svg" alt="icon">
                        <div class="process-box_number">02</div>
                        <img class="arrow mt-5" src="assets/img/icon/arrow-left4.svg" alt="img">
                    </div>
                    <h2 class="process-box_title box-title">Transportation
                        Process</h2>
                    <p class="process-box_text">Transportation unleash collaborative e-services
                        whereas frictionless niches. Conveniently
                        mesh cooperative quality vectors.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 process-box-wrap">
                <div class="process-box">
                    <div class="process-box_icon" data-bg-src="assets/img/bg/process-icon-bg2.svg">
                        <img class="process-icon" src="assets/img/icon/process-icon-4-3.svg" alt="icon">
                        <div class="process-box_number">03</div>
                    </div>
                    <h2 class="process-box_title box-title">Packaging
                        & Distribution</h2>
                    <p class="process-box_text">Distribution unleash collaborative e-services
                        whereas frictionless niches. Conveniently
                        mesh cooperative quality vectors.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--==============================
    Team Area 02
==============================-->
{{-- <section class="team-area-2 space">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title"><span class="double-line"></span> TEAM MEMBERS</h3>
            <h2 class="sec-title">Our Expert Team Members</h2>
        </div>
        <div class="row as-carousel team-slider" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-1.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Anjelina Sinthiya</a></h3>
                        <span class="team-desig">Company CEO</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-2.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Rothar Federer</a></h3>
                        <span class="team-desig">Customer Advisor</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-3.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Jenifer Lopez</a></h3>
                        <span class="team-desig">Managing Director</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-4.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Alex Furnandes</a></h3>
                        <span class="team-desig">Company Secretary</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-1.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Anjelina Sinthiya</a></h3>
                        <span class="team-desig">Company CEO</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-2.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Rothar Federer</a></h3>
                        <span class="team-desig">Customer Advisor</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-3.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Jenifer Lopez</a></h3>
                        <span class="team-desig">Managing Director</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="team-card-2">
                    <div class="team-img">
                        <img src="assets/img/team/team-2-4.png" alt="Team">
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h4"><a href="team-details">Alex Furnandes</a></h3>
                        <span class="team-desig">Company Secretary</span>
                        <div class="as-social style-2">
                            <a target="_blank" href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://google.com/"><i class="fa-brands fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
<!--==============================
    Why-choose-us Area 04
==============================-->
{{-- <div class="wcu-area-4" data-bg-src="assets/img/wcu/wcu_bg.png">
    <div class="container-fluid p-0">
        <div class="row gx-0">
            <div class="col-xl-6">
                <div class="wcu-thumb style-2 video-box1" data-bg-src="assets/img/wcu/wcu-4.png">
                    <a href="https://www.youtube.com/watch?v=P7fi4hP_y80" class="play-btn popup-video">
                        <i class="fa-sharp fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="wcu-wrap4 space-top">
                    <div class="title-area">
                        <span class="sub-title">WHY CHOOSE US </span>
                        <h2 class="sec-title">We Got Your Covered. Good Cars
                            Good people guarantee.</h2>
                        <p class="content">Uniquely reintermediate distinctive niche market wherea interoperable infomediarie. Completely negotiate seamless partnerships via cutting-edge expertise. Rapidiously reintermediate cooperative expertise rather than high-quality growth strategies.</p>
                    </div>
                    <div class="row  g-4">
                        <div class="col-sm-6">
                            <div class="wcu-card">
                                <div class="icon">
                                    <img src="assets/img/icon/wcu-box-icon-1.svg" alt="icon">
                                </div>
                                <h3 class="card-title h4">Wide range of brands</h3>
                                <p class="content">Dynamically redefine flexible core competencies with synergistic.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wcu-card">
                                <div class="icon">
                                    <img src="assets/img/icon/wcu-box-icon-2.svg" alt="icon">
                                </div>
                                <h3 class="card-title h4">Get Reasonable Price</h3>
                                <p class="content">Reasonable redefine flexible core competencies with synergistic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--==============================
    Counter Area 02
==============================-->
{{-- <div class="container space-top pt-xl-0 pb-xl-0">
    <div class="counter-area2 text-center" data-bg-src="assets/img/bg/counter_bg.png">
        <div class="row gy-25 justify-content-center">
            <div class="col-sm-6 col-xl-3">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/img/counter/counter_icon_2_1.svg" alt="img">
                    </div>
                    <div class="card-details">
                        <h2 class="counter-card_number"><span class="counter-number">27600</span>+</h2>
                        <p class="counter-card_text">CARS FOR SALE</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/img/counter/counter_icon_2_2.svg" alt="img">
                    </div>
                    <div class="card-details">
                        <h2 class="counter-card_number"><span class="counter-number">1600</span>+</h2>
                        <p class="counter-card_text">VERIFIED DEALERS</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/img/counter/counter_icon_2_3.svg" alt="img">
                    </div>
                    <div class="card-details">
                        <h2 class="counter-card_number"><span class="counter-number">25600</span>+</h2>
                        <p class="counter-card_text">HAPPY CUSTOMER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="counter-card2">
                    <div class="counter-card_icon">
                        <img src="assets/img/counter/counter_icon_2_4.svg" alt="img">
                    </div>
                    <div class="card-details">
                        <h2 class="counter-card_number"><span class="counter-number">18600</span>+</h2>
                        <p class="counter-card_text">ACTIVE USERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--==============================
    Testimonial Area 4
==============================-->
{{-- <div class="container">
    <div class="testiomonial-area-4 space" data-bg-src="assets/img/testimonial/testi_bg.png">
        <div class="title-area text-center">
            <span class="sub-title"><span class="double-line"></span> TESTIMONIALS</span>
            <h2 class="sec-title">Our Customer Feedback</h2>
        </div>
        <div class="row testimonial-slider3 as-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
            <div class="col">
                <div class="testi-box3">
                    <div class="quote-icon">
                        <img src="assets/img/testimonial/quote-icon2.svg" alt="img">
                    </div>
                    <p class="testi_content"> Compellingly deploy premier web services via granular total linkage. Professionally strategize resource maximizing portals for cross-unit systems. Monotonectally Quality vectors with virtual supply chains.</p>

                    <div class="testi-box_profile">
                        <div class="thumb">
                            <img src="assets/img/testimonial/testi-profile-1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4 class="testi-box_name">Imon Hossain</h4>
                            <span class="testi-box_desig">UI/UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="testi-box3">
                    <div class="quote-icon">
                        <img src="assets/img/testimonial/quote-icon2.svg" alt="img">
                    </div>
                    <p class="testi_content"> Professionally deploy premier web services via granular total linkage. Compellingly strategize resource maximizing portals for cross-unit systems. Monotonectally Quality vectors with virtual supply chains.</p>

                    <div class="testi-box_profile">
                        <div class="thumb">
                            <img src="assets/img/testimonial/testi-profile-2.png" alt="img">
                        </div>
                        <div class="details">
                            <h4 class="testi-box_name">Jenifer Lopez</h4>
                            <span class="testi-box_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="testi-box3">
                    <div class="quote-icon">
                        <img src="assets/img/testimonial/quote-icon2.svg" alt="img">
                    </div>
                    <p class="testi_content">Monotonectal deploy premier web services via granular total linkage. Professionally strategize resource maximizing portals for cross-unit systems. Compelling Quality vectors with virtual supply chains.</p>

                    <div class="testi-box_profile">
                        <div class="thumb">
                            <img src="assets/img/testimonial/testi-profile-3.png" alt="img">
                        </div>
                        <div class="details">
                            <h4 class="testi-box_name">Alex Frunklin</h4>
                            <span class="testi-box_desig">Web Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="testi-box3">
                    <div class="quote-icon">
                        <img src="assets/img/testimonial/quote-icon2.svg" alt="img">
                    </div>
                    <p class="testi_content"> Compellingly deploy premier web services via granular total linkage. Professionally strategize resource maximizing portals for cross-unit systems. Monotonectally Quality vectors with virtual supply chains.</p>

                    <div class="testi-box_profile">
                        <div class="thumb">
                            <img src="assets/img/testimonial/testi-profile-1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4 class="testi-box_name">Imon Hossain</h4>
                            <span class="testi-box_desig">Front End Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--==============================
    Brand Area
==============================-->
{{-- <div class="client-sec1 space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area text-center">
                    <h2 class="client-title h4 mb-0"><span class="double-line"></span> WE HAVE TRUSTED MORE THEN <span class="text-theme">20K+</span>GLOBAL CLIENTS</h2>
                </div>
            </div>
        </div>
        <div class="client-box-border">
            <div class="row as-carousel" id="brandSlide1" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="false">
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_1.png" alt="Client Logo">
                </div>
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_2.png" alt="Client Logo">
                </div>
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_3.png" alt="Client Logo">
                </div>
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_1.png" alt="Client Logo">
                </div>
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_4.png" alt="Client Logo">
                </div>
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_2.png" alt="Client Logo">
                </div>
                <div class="col-auto client-box">
                    <img src="assets/img/client/client_1_3.png" alt="Client Logo">
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
