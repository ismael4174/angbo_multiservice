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
                        <h1 class="breadcumb-title">Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="home-child-care">Home</a></li>
                            <li class="active">Services</li>
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
            Service Area 02
        ==============================-->
    <div class="service-area-2 space">
        <div class="container">
            <div class="row gy-25">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style3">
                            <div class="thumb">
                                <img src="{{ asset('uploads/' . $service->image) }}" alt="img">
                            </div>
                            <div class="card-details">
                                <div class="bg-shadow-icon">
                                    {{-- <img src="assets/img/service/service-icon-1-1.svg" alt="img"> --}}
                                </div>
                                <div class="service-card_icon">
                                    {{-- <img src="assets/img/service/service-page-icon-1.svg" alt="img"> --}}
                                </div>
                                <h3 class="service-card_title h4"><a href="service-details">{{ $service->titre }}</a></h3>
                                {{-- <p class="service-card_text">{{ $service->description}}</p> --}}
                                <p class="service-card_text">{{ Str::limit($service->description, 80, '...') }}</p>
                                <a class="line-btn" href="service-details">READ MORE</a>
                                {{-- <a href="{{ route('activite.shows', $activite->id) }}" class="btn btn-primary"
                                    style="margin-top: 10px;">Voir plus</a> --}}

                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                <div class="service-card style3">
                    <div class="thumb">
                        <img src="assets/img/service/service_s3.png" alt="img">
                    </div>
                    <div class="card-details">
                        <div class="bg-shadow-icon">
                            <img src="assets/img/service/service-icon-1-3.svg" alt="img">
                        </div>
                        <div class="service-card_icon">
                            <img src="assets/img/service/service-page-icon-3.svg" alt="img">
                        </div>
                        <h3 class="service-card_title h4"><a href="service-details">Logistic & Transportation</a></h3>
                        <p class="service-card_text">Transportation reconceptualize ubiquitous solution wherea market-driven expertise. Synergistical empower parallel.</p>
                        <a class="line-btn" href="service-details">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card style3">
                    <div class="thumb">
                        <img src="assets/img/service/service_s5.png" alt="img">
                    </div>
                    <div class="card-details">
                        <div class="bg-shadow-icon">
                            <img src="assets/img/service/service-icon-1-5.svg" alt="img">
                        </div>
                        <div class="service-card_icon">
                            <img src="assets/img/service/service-page-icon-5.svg" alt="img">
                        </div>
                        <h3 class="service-card_title h4"><a href="service-details">Tire & Auto Parts</a></h3>
                        <p class="service-card_text">Tire & Auto Parts reconceptualize ubiquitous solution wherea market-driven expertise. Synergistical empower parallel.</p>
                        <a class="line-btn" href="service-details">READ MORE</a>
                    </div>
                </div>
            </div> --}}

            </div>
        </div>
    </div>

    <!--==============================
            Download app Area
        ==============================-->
    <div class="space-bottom">
        <div class="container-fluid p-0">
            <div class="download-app-area space" data-bg-src="assets/img/bg/download-app-bg.png">
                <div class="row">
                    <div class="col-xl-5 col-lg-7">
                        <div class="download-app-wrap theme-red">
                            <div class="title-area mb-0 text-lg-start text-center">
                                <span class="sub-title"><span class="double-line d-lg-none"></span>DOWNLOAD Dealaro APP
                                    NOW</span>
                                <h2 class="sec-title text-white">Get A Free Autora App From
                                    Online Store</h2>
                                <p class="content">Competently re-engineer cross-media meta-services whereas best of breed
                                    processes matrix just in time content...</p>
                                <div class="btn-group">
                                    <a href="contact" class="as-btn media" tabindex="0">
                                        <div class="icon">
                                            <i class="fa-brands fa-google-play"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>DOWNLOAD FROM</span>
                                            <h6>Google Play</h6>
                                        </div>
                                    </a>
                                    <a href="contact" class="as-btn media" tabindex="0">
                                        <div class="icon"><i class="fa-brands fa-apple"></i></div>
                                        <div class="media-body">
                                            <span>DOWNLOAD FROM</span>
                                            <h6>App Store</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
            Brand Area
        ==============================-->
    <div class="client-sec1 space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <h2 class="client-title h4 mb-0"><span class="double-line"></span> WE HAVE TRUSTED MORE THEN <span
                                class="text-theme">20K+</span>GLOBAL CLIENTS</h2>
                    </div>
                </div>
            </div>
            <div class="client-box-border">
                <div class="row as-carousel" id="brandSlide1" data-slide-show="5" data-lg-slide-show="4"
                    data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="false">
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
    </div>
@endsection
