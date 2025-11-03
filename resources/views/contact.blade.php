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
                        <h1 class="breadcumb-title">Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="home-child-care">Home</a></li>
                            <li class="active">Contact</li>
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
        Service Area
        ==============================-->
    <section class="space">
        <div class="container">
            <div class="row gy-30 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-box">
                        <div class="contact-box_icon">
                            <i class="fa fa-location-dot"></i>
                        </div>
                        <div class="contact-box_info">
                            <h4 class="contact-box_title">Our Office Address</h4>
                            <p class="contact-box_text">835 Middle Country Rd, Selden, NY 11784,
                                United States</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-box">
                        <div class="contact-box_icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-box_info">
                            <h4 class="contact-box_title">Call Us Anytime</h4>
                            <a href="mailto:help24/7@gmail.com" class="contact-box_link">help24/7@gmail.com</a>
                            <a href="tel:(+163)-1202-0088" class="contact-box_link">(+163)-1202-0088</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-box">
                        <div class="contact-box_icon">
                            <i class="fa fa-clock"></i>
                        </div>
                        <div class="contact-box_info">
                            <h4 class="contact-box_title">Official Work Time</h4>
                            <p class="contact-box_text">9:00am - 6:00pm ( Monday - Friday )</p>
                            <p class="contact-box_text">Saturday & Sunday Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
            Contact Area
        ==============================-->
    <div class="contact-area space bg-smoke3 overflow-hidden">
        <div class="contact-anime-img-1 jump shape-mockup d-none d-xl-block" data-top="0" data-right="0"><img
                src="assets/img/contact/contact-bg-shape.png" alt="img"></div>
        <div class="contact-img-2 shape-mockup d-none d-xl-block" data-right="0"><img
                src="assets/img/contact/contact-thumb.png" alt="img"></div>
        <div class="container">
            <div class="row gx-0">
                <div class="col-xl-8 contact-form-wrap">
                    <div class="title-area mb-40">
                        <h2 class="sec-title">Contactez-nous !!</h2>
                    </div>
                    <form action="{{ route('contact.submit') }}" method="POST" class="review-form">
                        @csrf
                        <div class="row gx-24">
                            <div class="form-group style-white2 col-md-6">
                                <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom"
                                    required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group style-white2 col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Adresse email"
                                    required>
                                <i class="fal fa-envelope"></i> 
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="sujet" placeholder="Sujet" style="background-color: #ffffff" required>
                            </div>
                            <div class="form-group style-white2 col-12">
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message" required></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn col-12 mt-10">
                                <button class="as-btn style4">Envoyez votre message</button>
                            </div>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Appointment Area
        ==============================-->
    <div class="map-sec">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sthemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
