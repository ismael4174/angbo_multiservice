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
                    <h1 class="breadcumb-title">Blog</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Home</a></li>
                        <li class="active">Blog</li>
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
    Blog Area
==============================-->
<section class="space">
    <div class="container">
        <div class="row gx-40">
            <div class="col-xl-8 col-lg-7">
                <div class="as-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="blog-details"><img src="assets/img/blog/blog_s1_1.png" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="date"><p>06
                            <br>SEP</p>
                       </div>
                        <div class="blog-meta">
                            <a href="blog"><i class="far fa-user"></i>By David Smith</a>
                            <a href="blog"><i class="far fa-comment"></i>Comments (0)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details">Distributed throughout the all over country.</a></h2>
                        <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate timely meta services for synergistic initiatives</p>
                        <a href="blog-details" class="as-btn style4">Read Details</a>
                    </div>
                </div>

                <div class="as-blog blog-single has-post-thumbnail">
                    <div class="blog-img as-carousel" data-arrows="true" data-slide-show="1">
                        <a href="blog-details"><img src="assets/img/blog/blog_s1_2.png" alt="Blog Image"></a>
                        <a href="blog-details"><img src="assets/img/blog/blog_s1_2.png" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="date"><p>15
                            <br>MAR</p>
                       </div>
                        <div class="blog-meta">
                            <a href="blog"><i class="far fa-user"></i>By David Smith</a>
                            <a href="blog"><i class="far fa-comment"></i>Comments (0)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details">How to use a Dealer Swap to Increase Sales</a></h2>
                        <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate timely meta services for synergistic initiatives</p>
                        <a href="blog-details" class="as-btn style4">Read Details</a>
                    </div>
                </div>

                <div class="as-blog blog-single">
                    <div class="blog-content">
                        <div class="date"><p>06
                            <br>SEP</p>
                       </div>
                        <div class="blog-meta">
                            <a href="blog"><i class="far fa-user"></i>By David Smith</a>
                            <a href="blog"><i class="far fa-comment"></i>Comments (0)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details">How Close are we to Autonomous Cars?</a></h2>
                        <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness</p>
                        <a href="blog-details" class="as-btn style4">Read Details</a>
                    </div>
                </div>

                <div class="as-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="blog-details"><img src="assets/img/blog/blog_s1_3.png" alt="Blog Image"></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="blog-content">
                        <div class="date"><p>06
                            <br>SEP</p>
                       </div>
                        <div class="blog-meta">
                            <a href="blog"><i class="far fa-user"></i>By David Smith</a>
                            <a href="blog"><i class="far fa-comment"></i>Comments (0)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details">Are You Ready for the Online Dealership?</a></h2>
                        <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate timely meta services for synergistic initiatives</p>
                        <a href="blog-details" class="as-btn style4">Read Details</a>
                    </div>
                </div>

                <div class="as-blog blog-single has-post-thumbnail">
                    <div class="blog-audio">
                        <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD" width="751" height="200" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog"><i class="far fa-user"></i>By David Smith</a>
                            <a href="blog"><i class="far fa-comment"></i>Comments (0)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details">Give Your Small Car the Horn It Deserves</a></h2>
                        <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate timely meta services for synergistic initiatives</p>
                        <a href="blog-details" class="as-btn style4">Read Details</a>
                    </div>
                </div>

                <div class="as-pagination theme-red">
                    <ul>
                        <li><a href="blog"><i class="far fa-arrow-left"></i></a></li>
                        <li><a href="blog">01</a></li>
                        <li><a href="blog">02</a></li>
                        <li><a href="blog">03</a></li>
                        <li><a href="blog"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <aside class="sidebar-area theme-red">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog">Automotive Repairing</a>
                            </li>
                            <li>
                                <a href="blog">Car Dealership</a>
                            </li>
                            <li>
                                <a href="blog">Motor Dealership</a>
                            </li>
                            <li>
                                <a href="blog">Break Repair</a>
                            </li>
                            <li>
                                <a href="blog">Battery Charge</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details"><img src="assets/img/blog/recent-post-1-1.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="blog"><i class="fal fa-calendar-alt"></i>20 March, 2023</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details">Why you ignore your warning lights</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details"><img src="assets/img/blog/recent-post-1-2.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="blog"><i class="fal fa-calendar-alt"></i>20 March, 2023</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details">Here are 5 things every car owner needs</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details"><img src="assets/img/blog/recent-post-1-3.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="blog"><i class="fal fa-calendar-alt"></i>20 March, 2023</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details">Best Quality Car Repair Solution In 2022</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="widget_title">Gallery</h4>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/gal-1-1.png" alt="Gallery Image" class="w-100">
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/gal-1-2.png" alt="Gallery Image" class="w-100">
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/gal-1-3.png" alt="Gallery Image" class="w-100">
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/gal-1-4.png" alt="Gallery Image" class="w-100">
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/gal-1-5.png" alt="Gallery Image" class="w-100">
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/gal-1-6.png" alt="Gallery Image" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="blog">Technology</a>
                            <a href="blog">Repair</a>
                            <a href="blog">Services</a>
                            <a href="blog">Dealaro</a>
                            <a href="blog">Engine</a>
                            <a href="blog">Tires</a>
                            <a href="blog">Speed</a>
                            <a href="blog">Solution</a>
                            <a href="blog">Car Repair</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
