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
                    <h1 class="breadcumb-title">Team Details</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Home</a></li>
                        <li class="active">Team Details</li>
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
Team Area
==============================-->
<section class="bg-white space">
    <div class="container">
        <div class="row mb-3 mb-xl-5">
            <div class="col-xl-5">
                <div class="mb-40 mb-xl-0">
                    <img class="w-100" src="assets/img/team/team_details_1.jpg" alt="team image">
                </div>
            </div>
            <div class="col-xl-7 ps-3 ps-xl-5 align-self-center">
                <div class="team-about">
                    <h2 class="team-about_title">Oliver William</h2>
                    <p class="team-about_desig">Founder & CEO</p>
                    <p class="team-about_text">Continually utilize 24/365 bandwidth before real-time interfaces. Credibly grow team core competencies with pandemic commerce. Objectively initiate pandemic users with deliver bricks clicks meta services for bricks-and-clicks innovation streamline front end aradigms expedite granular human capital rather than intuitive testing procedures</p>
                    <div class="about-info-wrap">
                        <div class="about-info">
                            <div class="about-info_icon"><i class="far fa-car-wrench"></i></div>
                            <div class="about-info_content">
                                <p class="about-info_subtitle">Experience</p>
                                <h6 class="about-info_title">More Than 10 Years</h6>
                            </div>
                        </div>
                        <div class="about-info">
                            <div class="about-info_icon"><i class="far fa-phone"></i></div>
                            <div class="about-info_content">
                                <p class="about-info_subtitle">Phone</p>
                                <h6 class="about-info_title"><a href="tel:+2562145821456">+(256) 21458-21456</a></h6>
                            </div>
                        </div>
                        <div class="about-info">
                            <div class="about-info_icon"><i class="far fa-envelope"></i></div>
                            <div class="about-info_content">
                                <p class="about-info_subtitle">Email</p>
                                <h6 class="about-info_title"><a href="mailto:info@dealaro.com">info@dealaro.com</a></h6>
                            </div>
                        </div>
                        <div class="about-info">
                            <div class="about-info_icon"><i class="far fa-fax"></i></div>
                            <div class="about-info_content">
                                <p class="about-info_subtitle">Fax</p>
                                <h6 class="about-info_title"><a href="tel:+2568145632">+2568145632</a></h6>
                            </div>
                        </div>
                    </div>
                    <a href="contact" class="as-btn style4">Get In Touch</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-25">
                <h5 class="border-title">Biography</h5>
                <p class="mb-30 mb-lg-5">Interactively facilitate future proof products for efficient innovation. Proactively envisioneer functional synergy vis a vis go forward models. Dramatically plagiarize B2B tailers with focused core competencies. Compellingly engage granular schemas vis a vis user centric metrics. Completely evisculate stand alone expertise through revolutionary strategic theme areas. Seamlessly fashion impactful paradigms for process centric relationships. Quickly whiteboard seamless intellectual capital with B2C methods of empowerment. Interactively deliver e-business applications after e-business processes. Intrinsicly matrix impactful architectures before next generation web readiness. Monotonectally foster web-enabled e-services vis a vis impactful testing procedures.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mb-3 mb-xl-0">
                <h5 class="border-title">Professional Skills</h5>
                <p class="mb-40">Completely evisculate stand alone expertise through revolutionary strategic are theme areas fashion impactful paradigms for process centric relationships with whiteboard seamless intellectual capital with methods.</p>
                <div class="skill-feature style2">
                    <h5 class="skill-feature_title">Product Design</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%;">
                            <div class="progress-value">70%</div>
                        </div>
                    </div>
                </div>
                <div class="skill-feature style2">
                    <h5 class="skill-feature_title">Car Mechanic Service</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width: 93%;">
                            <div class="progress-value">93%</div>
                        </div>
                    </div>
                </div>
                <div class="skill-feature style2">
                    <h5 class="skill-feature_title">Full Engine Repair</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%;">
                            <div class="progress-value">85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-5 mt-xl-0">
                <h5 class="border-title">Educational Qualification</h5>
                <p class="mb-40">Completely evisculate stand alone expertise through revolutionary strategic are theme areas fashion impactful paradigms for process centric relationships with whiteboard seamless intellectual capital with methods.</p>
                <div class="experience-box-wrap">
                    <div class="experience-box">
                        <span class="experience-box_num">1st</span>
                        <h6 class="experience-box_title">Special Technician</h6>
                        <p class="experience-box_text">2016 - Present (Mechon.Inc)</p>
                    </div>
                    <div class="experience-box">
                        <span class="experience-box_num">2nd</span>
                        <h6 class="experience-box_title">Senior Technician</h6>
                        <p class="experience-box_text">2010 - 2015 ( at Lazmi Trade)</p>
                    </div>
                    <div class="experience-box">
                        <span class="experience-box_num">3rd</span>
                        <h6 class="experience-box_title">Junior Technician</h6>
                        <p class="experience-box_text">2006 - 2009 (Onium Solution)</p>
                    </div>
                    <div class="experience-box">
                        <span class="experience-box_num">4th</span>
                        <h6 class="experience-box_title">Junior Architect</h6>
                        <p class="experience-box_text">2000 - 2005 (at Grages.Ltd)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
