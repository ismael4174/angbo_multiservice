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
                    <h1 class="breadcumb-title">Blog Details</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Home</a></li>
                        <li class="active">Blog Details</li>
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
<section class="blog-details space">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-8">
                <div class="as-blog blog-single mb-0">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_s1_1.png" alt="Blog Image">
                        <div class="date"><p>06
                            <br>SEP</p>
                       </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog"><i class="far fa-user"></i>By David Smith</a>
                            <a href="blog"><i class="far fa-comment"></i>Comments (0)</a>
                        </div>
                        <h2 class="single-page-title">Distributed throughout the all over country.</h2>
                        <p>Distinctively fabricate magnetic manufactured products and premium methods of empowerment. Energistically transform highly efficient bandwidth and robust infrastructures. Seamlessly streamline sticky materials through exceptional alignments. Professionally matrix innovative scenarios.</p>
                        <p>Efficiently simplify stand-alone results before competitive core competencies. Completely build open-source e-markets through low-risk high-yield infomediaries. Continually negotiate compelling "outside the box" thinking without seamless expertise. Efficiently innovate vertical.</p>
                        <h3 class="mb-4">Small Car the Horn It Deserves</h3>
                        <p>Dramatically extend compelling systems without multidisciplinary benefits. Holisticly disintermediate wireless relationships via professional core competencies. Monotonectally conceptualize integrated value through metrics. Conveniently conceptualize accurate potentialities after adaptive internal.</p>
                        <blockquote>
                            <p>Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                            <cite>Monalisa Saisha</cite>
                        </blockquote>
                        <p>Rapidiously repurpose leading edge growth strategie with just in time web readiness. Objectively communicate timely meta services for synergistic initiatives. Distinctively predominate collaborative leadership skills with inexpensive functionalities. Holisticly grow unique value rather than emerging solutions. Uniquely maintain best niche markets and user friendly models. </p>
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog_s1_4.png" alt="Blog Image">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog_s1_5.png" alt="Blog Image">
                                </div>
                            </div>
                        </div>
                        <p>Holisticly embrace world-class action items and accurate results. Monotonectally innovate user friendly web services and backward-compatible architectures. Intrinsicly re-engineer robust catalysts for change and enterprise process improvements.</p>
                    </div>
                    <div class="share-links clearfix  ">
                        <div class="row justify-content-between">
                            <div class="col-md-auto">
                                <div class="tagcloud">
                                    <a href="blog">Technology</a>
                                    <a href="blog">Repair</a>
                                    <a href="blog">Services</a>
                                </div>
                            </div>
                            <div class="col-md-auto text-xl-end">
                                <span class="share-links-title">Follow Us:</span>
                                <ul class="social-links">
                                    <li><a href="https://facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end -->
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="auhtor-img">
                            <img src="assets/img/blog/blog-author.png" alt="Blog Author Image">
                        </div>
                        <div class="media-body">
                            <h3 class="author-name"><a class="text-inherit" href="team-details">Ronald Richards</a></h3>
                            <p class="author-text">Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus ciatis aliquid impedit dolorum rem.</p>
                            <ul class="social-links">
                                <li><a href="https://facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="https://linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul><!-- End Social Share -->
                        </div>
                    </div>
                    <div class="blog-navigation">
                        <a href="blog-details" class="nav-btn prev">
                            <img src="assets/img/blog/blog-nav-post1.png" alt="blog img" class="nav-img">
                            <span class="nav-text">Previous Post</span>
                        </a>
                        <a href="blog" class="blog-btn"><i class="fa-solid fa-grid"></i></a>
                        <a href="blog-details" class="nav-btn next">
                            <img src="assets/img/blog/blog-nav-post2.png" alt="blog img" class="nav-img">
                            <span class="nav-text">Next Post</span>
                        </a>
                    </div>
                    <div class="as-comments-wrap  ">
                        <h2 class="blog-inner-title h3">3 Comments</h2>
                        <ul class="comment-list">
                            <li class="as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h3 class="name">David Malan</h3>
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>14 March, 2023</span>
                                        <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets whereas synergistic scenarios.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="as-comment-item">
                                        <div class="as-post-comment">
                                            <div class="comment-avater">
                                                <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <h3 class="name">Anadi Juila</h3>
                                                <span class="commented-on"><i class="fal fa-calendar-alt"></i>14 March, 2023</span>
                                                <p class="text">Competently provide access to fully researched methods of empowerment
                                                    without sticky models. Credibly morph front-end niche markets.</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <h3 class="name">Ronald Richards</h3>
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>20 March, 2023</span>
                                        <p class="text">Competently provide access to fully researched methods of empowerment
                                            without sticky models. Credibly morph front-end niche markets.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- Comment end -->
                    <!-- Comment Form -->
                    <div class="as-comment-form  ">
                        <div class="form-title">
                            <h3 class="blog-inner-title h3">Leave a Comment</h3>
                            <p class="form-text">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group style-white2">
                                <input type="text" placeholder="Your Name*" class="form-control">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="col-md-6 form-group style-white2">
                                <input type="text" placeholder="Your Email*" class="form-control">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="col-12 form-group style-white2">
                                <input type="text" placeholder="Website" class="form-control">
                                <i class="fal fa-globe"></i>
                            </div>
                            <div class="col-12 form-group style-white2">
                                <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="as-btn style4">Send Message Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
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
