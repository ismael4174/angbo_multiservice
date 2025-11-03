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
                    <h1 class="breadcumb-title">404 Error</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Home</a></li>
                        <li class="active">404</li>
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
    error Area
==============================-->
<div class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="error-wrap">
                    <div class="title-area mb-0 text-center">
                        <img src="assets/img/normal/error.png" alt="img">
                        <h2 class="sec-title"><span class="text-theme">OooPs!</span> Page Not Found</h2>
                        <p class="content">Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="btn-group justify-content-center">
                            <a href="/" class="as-btn style4" tabindex="0">
                                <i class="fa fa-home"></i> BACK TO HOME
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
