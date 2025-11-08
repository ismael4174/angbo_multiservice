@extends('layouts.master')

@section('content')
    <!--==============================
                Hero Area 03
            ==============================-->
    <div class="as-hero-wrapper hero-3" id="hero">
        <div class="as-carousel hero-slider-1" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true"
            data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-adaptive-height="true">
            @foreach ($slides as $slide)
                <div class="as-hero-slide">
                    <div class="as-hero-bg" data-bg-src="{{ asset('uploads/' . $slide->photo) }}"></div>
                    <div class="watermark">ANGBO</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero-style3">
                                    <span class="hero-subtitle" data-ani="slideinleft"
                                        data-ani-delay="0.1s">{{ $slide->sous_titre }}</span>
                                    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.2s">
                                        {{ $slide->titre }}</h1>
                                    <p class="hero-text text-white" data-ani="slideinleft" data-ani-delay="0.3s">
                                        {{ $slide->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
                About Area 3
            ==============================-->
    <section class="about-area3 space-bottom space-extra-top">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-wrap3 mb-lg-0 mb-5">
                        <div class="shape-mockup jump" data-top="98px" data-left="-39px">
                            <img class="about-thumb-bg3" src="assets/img/about/about_shape3.png" alt="img">
                        </div>
                        <div class="thumb-1"><img src="assets/img/about/about_3_1.png" alt="img"></div>
                        <div class="thumb-2"><img src="assets/img/about/about_3_2.png" alt="img"></div>
                        <div class="about-counter2" data-bg-src="assets/img/about/about_shape3-2.svg">
                            <h3 class="counter-title"><span class="counter-number">22</span></h3>
                            <span class="counter-text">Années <br>
                                d'Expérience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area about-wrap-3 mb-0">
                        <h3 class="sub-title">À PROPOS DE NOTRE ENTREPRISE</h3>
                        <h2 class="sec-title">About Dealaro Transport &
                            Logistic Solutions.</h2>
                        <p class="content">Quickly predominate cross functional outsourcing before enterprise-wide
                            expertise. Enthusiastically architect bleeding-edge models whereas prospective
                            web-readiness. Energistically disseminate quality benefits.</p>

                        <div class="list-column2">
                            <div class="checklist">
                                <ul>
                                    <li><img src="assets/img/icon/check.svg" alt="img"> We’re Here When You Need
                                        Us</li>
                                    <li><img src="assets/img/icon/check.svg" alt="img"> Service & Maintenance
                                    </li>
                                    <li><img src="assets/img/icon/check.svg" alt="img"> In House Financing</li>
                                </ul>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><img src="assets/img/icon/check.svg" alt="img"> Best Collection</li>
                                    <li><img src="assets/img/icon/check.svg" alt="img"> Famous Brands</li>
                                    <li><img src="assets/img/icon/check.svg" alt="img">Trusted Car Dealer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="about-btn-group" style="display: flex; justify-content: flex-end;">
                        <div class="about-grid">
                            <div class="media-body">
                                <img src="assets/img/about/signeture2.svg" alt="img">
                                <p class="about-profile-desig">CEO, Of Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--==============================
                Service Area 03
            ==============================-->
    <div class="service-area-3 space-top" data-bg-src="assets/img/bg/service_bg3.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><span class="double-line"></span> NOS SERVICES</span>
                <h2 class="sec-title">Découvrez nos services</h2>
            </div>

        </div>
    </div>
    </div>

    <div class="container">
        <div class="service-slider row as-carousel g-0" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2"
            data-sm-slide-show="1" data-xs-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true"
            data-lg-dots="true">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="display: flex;">
                    <div class="service-card w-100" style="display: flex; flex-direction: column; justify-content: space-between; background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); height: 100%;">
                        <h3 class="service-card_title"><a href="">{{ $service->titre }}</a></h3>
                        <p class="service-card_text">{{ $service->description }}</p>
                        <div class="service-card_img">
                            <div class="service-card_icon">
                                <img class="svg-img" style="height: 50px; width:50px;"src="assets/img/icon/airplane.svg" alt="img">
                            </div>
                            <div class="thumb" style="height: 200px; width:351px;">
                                <img src="{{ asset('uploads/' . $service->image) }}" alt="service">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>

    <!--==============================
                Why-choose-us Area 03
            ==============================-->
    {{-- <div class="wcu-area-3" data-bg-src="assets/img/bg/wcu-bg.png">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-xl-5 order-xl-2">
                    <div class="wcu-thumb video-box1" data-bg-src="assets/img/wcu/wcu-3.png">
                        <a href="https://www.youtube.com/watch?v=P7fi4hP_y80" class="play-btn popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 order-xl-1">
                    <div class="wcu-wrap3 space-top">
                        <div class="title-area">
                            <span class="sub-title">POURQUOI NOUS CHOISIR </span>
                            <h2 class="sec-title text-white">We Provide Special Service In The
                                Transportation Since 1998</h2>
                            <p class="content">Appropriately integrate visionary platforms after flexible value.
                                Seamlessly provide access to orthogonal leadership without leading-edge. Distinctively
                                fashion B2C "outside the box" thinking whereas process-centric users. Dramatically
                                predominate e-business alignments rather.</p>
                        </div>
                        <div class="row  g-4">
                            <div class="col-sm-6">
                                <div class="wcu-card2">
                                    <div class="icon">
                                        <img src="assets/img/wcu/wcu_icon_3-1.svg" alt="icon">
                                    </div>
                                    <div class="card-details">
                                        <h3 class="card-title h5">OUR MISSION</h3>
                                        <p class="content">Synergistically create granular
                                            best practices after magnetic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wcu-card2">
                                    <div class="icon">
                                        <img src="assets/img/wcu/wcu_icon_3-2.svg" alt="icon">
                                    </div>
                                    <div class="card-details">
                                        <h3 class="card-title h5">OUR VISSION</h3>
                                        <p class="content">Vission synergistically granular
                                            best practices after magnetic.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==============================
                Counter Area 03
            ==============================-->
    {{-- <div class="container space-top pt-xl-0 pb-xl-0">
        <div class="counter-area3 text-center" data-bg-src="assets/img/bg/counter_bg.png">
            <div class="row gy-25 justify-content-center">
                <div class="col-sm-6 col-xl-3">
                    <div class="counter-card2 counter-card3">
                        <div class="counter-card_icon">
                            <img src="assets/img/counter/counter_icon_3_1.svg" alt="img">
                        </div>
                        <div class="card-details">
                            <h2 class="counter-card_number"><span class="counter-number">27600</span>+</h2>
                            <p class="counter-card_text">COMPLETE DELIVERY</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="counter-card2 counter-card3">
                        <div class="counter-card_icon">
                            <img src="assets/img/counter/counter_icon_3_2.svg" alt="img">
                        </div>
                        <div class="card-details">
                            <h2 class="counter-card_number"><span class="counter-number">1600</span>+</h2>
                            <p class="counter-card_text">TEAM MEMBERS</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="counter-card2 counter-card3">
                        <div class="counter-card_icon">
                            <img src="assets/img/counter/counter_icon_3_3.svg" alt="img">
                        </div>
                        <div class="card-details">
                            <h2 class="counter-card_number"><span class="counter-number">25600</span>+</h2>
                            <p class="counter-card_text">HAPPY CUSTOMER</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="counter-card2 counter-card3">
                        <div class="counter-card_icon">
                            <img src="assets/img/counter/counter_icon_3_4.svg" alt="img">
                        </div>
                        <div class="card-details">
                            <h2 class="counter-card_number"><span class="counter-number">18600</span>+</h2>
                            <p class="counter-card_text">AWARDS WINNER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==============================
                Team Area 02
            ==============================-->
    {{-- <section class="team-area-2 space">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title"><span class="double-line"></span> TEAM MEMBERS</h3>
                <h2 class="sec-title">Our Expert Team Members</h2>
            </div>
            <div class="row as-carousel team-slider" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true"
                data-xl-arrows="true" data-ml-arrows="true">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-card-2">
                        <div class="team-img">
                            <img src="assets/img/team/team-2-1.png" alt="Team">
                        </div>
                        <div class="team-content">
                            <h3 class="team-title h4"><a href="team-details">Anjelina Sinthiya</a></h3>
                            <span class="team-desig">Company CEO</span>
                            <div class="as-social style-2">
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://google.com/"><i
                                        class="fa-brands fa-google"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://google.com/"><i
                                        class="fa-brands fa-google"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://google.com/"><i
                                        class="fa-brands fa-google"></i></a>
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
                                <a target="_blank" href="https://facebook.com/"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://google.com/"><i
                                        class="fa-brands fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--==============================
            Process Area
            ==============================-->
    <section class="process-sec bg-smoke2 space" data-bg-src="assets/img/bg/work-process-bg.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><span class="double-line"></span> COMMENT ÇA MARCHE</span>
                <h2 class="sec-title">Processus en (3) trois étapes</h2>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-md-6 col-lg-4 process-box-wrap">
                    <div class="process-box">
                        <div class="process-box_icon" data-bg-src="assets/img/bg/process-icon-bg.svg">
                            <img class="process-icon" src="assets/img/icon/process-icon-3-1.svg"
                                style="height: 90px; width:90px;" alt="icon">
                            <div class="process-box_number">01</div>
                            <img class="arrow" src="assets/img/icon/arrow-left.svg" alt="img">
                        </div>
                        <h2 class="process-box_title box-title">Réapprovisionnement et préparation des commandes</h2>
                        <p class="process-box_text">Simplifiez votre réapprovisionnement et la préparation de vos
                            commandes grâce à des processus collaboratifs, rapides et fiables, pour une gestion sans
                            faille de vos stocks.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 process-box-wrap">
                    <div class="process-box">
                        <div class="process-box_icon" data-bg-src="assets/img/bg/process-icon-bg.svg">
                            <img class="process-icon" src="assets/img/icon/process-icon-3-2.svg"
                                style="height: 90px; width:90px;" alt="icon">
                            <div class="process-box_number">02</div>
                            <img class="arrow mt-5" src="assets/img/icon/arrow-left2.svg" alt="img">
                        </div>
                        <h2 class="process-box_title box-title">Processus de transport</h2>
                        <p class="process-box_text">Notre processus de transport assure une livraison fluide et fiable
                            de vos commandes, en combinant efficacité et collaboration à chaque étape.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 process-box-wrap">
                    <div class="process-box">
                        <div class="process-box_icon" data-bg-src="assets/img/bg/process-icon-bg.svg">
                            <img class="process-icon" src="assets/img/icon/process-icon-3-3.svg"
                                style="height: 90px; width:90px;" alt="icon">
                            <div class="process-box_number">03</div>
                        </div>
                        <h2 class="process-box_title box-title">Emballage et distribution</h2>
                        <p class="process-box_text">Nous garantissons un emballage rigoureux et une distribution fiable
                            de vos commandes, en alliant précision et processus collaboratifs efficaces.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
            Price Area
            ==============================-->
    {{-- <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="title-area text-center">
                        <span class="sub-title"><span class="double-line"></span> PRICING PLANS</span>
                        <h2 class="sec-title">Our Flexible Price</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center as-carousel" data-slide-show="4" data-ml-slide-show="3"
                data-lg-slide-show="3" data-md-slide-show="2">

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="price-card">
                        <div class="price-card_header">
                            <img class="bg-shape svg-img" src="assets/img/bg/pricing-bg-shape.svg" alt="img">
                            <h3 class="price-card_title h4">
                                Basic Package
                            </h3>
                            <h4 class="price-card_price">
                                <span class="price">$125</span>
                                / Month
                            </h4>
                        </div>
                        <div class="price-card_content">
                            <ul class="available-list">
                                <li><i class="fa-solid fa-check"></i>1 warehouse</li>
                                <li><i class="fa-solid fa-check"></i>Custom business rules</li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i>Real-time rate shopping
                                </li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i>100 freight shipments</li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i>Any time 24/7 support</li>
                            </ul>
                            <a href="contact" class="as-btn style-title">CHOOSE PLAN</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="price-card">
                        <div class="price-card_header">
                            <img class="bg-shape svg-img" src="assets/img/bg/pricing-bg-shape.svg" alt="img">
                            <h3 class="price-card_title h4">
                                Popular Package
                            </h3>
                            <h4 class="price-card_price">
                                <span class="price">$155</span>
                                / Month
                            </h4>
                        </div>
                        <div class="price-card_content">
                            <ul class="available-list">
                                <li><i class="fa-solid fa-check"></i>1 warehouse</li>
                                <li><i class="fa-solid fa-check"></i>Custom business rules</li>
                                <li><i class="fa-solid fa-check"></i>Real-time rate shopping</li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i>100 freight shipments</li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i>Any time 24/7 support</li>
                            </ul>
                            <a href="contact" class="as-btn style-title">CHOOSE PLAN</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="price-card">
                        <div class="price-card_header">
                            <img class="bg-shape svg-img" src="assets/img/bg/pricing-bg-shape.svg" alt="img">
                            <h3 class="price-card_title h4">
                                Standard Package
                            </h3>
                            <h4 class="price-card_price">
                                <span class="price">$175</span>
                                / Month
                            </h4>
                        </div>
                        <div class="price-card_content">
                            <ul class="available-list">
                                <li><i class="fa-solid fa-check"></i>1 warehouse</li>
                                <li><i class="fa-solid fa-check"></i>Custom business rules</li>
                                <li><i class="fa-solid fa-check"></i>Real-time rate shopping</li>
                                <li><i class="fa-solid fa-check"></i>100 freight shipments</li>
                                <li class="unavailable"><i class="fa-solid fa-times"></i>Any time 24/7 support</li>
                            </ul>
                            <a href="contact" class="as-btn style-title">CHOOSE PLAN</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="price-card">
                        <div class="price-card_header">
                            <img class="bg-shape svg-img" src="assets/img/bg/pricing-bg-shape.svg" alt="img">
                            <h3 class="price-card_title h4">
                                Premium Package
                            </h3>
                            <h4 class="price-card_price">
                                <span class="price">$195</span>
                                / Month
                            </h4>
                        </div>
                        <div class="price-card_content">
                            <ul class="available-list">
                                <li><i class="fa-solid fa-check"></i>1 warehouse</li>
                                <li><i class="fa-solid fa-check"></i>Custom business rules</li>
                                <li><i class="fa-solid fa-check"></i>Real-time rate shopping</li>
                                <li><i class="fa-solid fa-check"></i>100 freight shipments</li>
                                <li><i class="fa-solid fa-check"></i>Any time 24/7 support</li>
                            </ul>
                            <a href="contact" class="as-btn style-title">CHOOSE PLAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==============================
                Portfolio Area 02
            ==============================-->
    <section class="portfolio-area-2 space-top" data-overlay="title" data-opacity="9"
        data-bg-src="assets/img/portfolio/portfolio2_bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="title-area mb-lg-0 text-lg-start text-center">
                        <span class="sub-title"><span class="double-line d-lg-none"></span> NOTRE GALERIE</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid p-0">
        <div class="portfolio-slider-wrap overflow-hidden">
            <div class="portfolio-slider2 row">
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col">
                    <div class="portfolio-card2">
                        <div class="portfolio-card_img">
                            <img src="assets/img/portfolio/portfolio_2-1.png" alt="img">
                        </div>
                        <div class="card_content">
                            <div>
                                <h3 class="card_title box-title text-white">international air freight</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================

                Blog Area 2
            ==============================-->
    <section class="blog-area space" id="blog-sec">
        <div class="container">

        </div>
    </section>
    <!--==============================
                    Footer Area
            ==============================-->
@endsection
