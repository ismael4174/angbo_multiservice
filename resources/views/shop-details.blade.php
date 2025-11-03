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
                    <h1 class="breadcumb-title">Shop Details</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Home</a></li>
                        <li class="active">Shop Details</li>
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
    Product Details
==============================-->
<section class="product-details space">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="product-big-img">
                    <div class="img"><img src="assets/img/product/product_1_2.png" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-about">
                    <p class="price">$125.00</p>
                    <h2 class="product-title">Brembo Disc Brake S2</h2>
                    <div class="product-rating">
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                        <a href="shop-details" class="woocommerce-review-link">(<span class="count">2</span> customer reviews)</a>
                    </div>
                    <p class="text">Syndicate customized growth strategies prospective human capital leverage other's optimal e-markets without transparent catalysts for change. Credibly coordinate highly efficient methods of empowerment cross unit solutions.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-circle-check"></i> Lifetime structural, one year face finish warranty</li>
                            <li><i class="far fa-circle-check"></i>Mapped from “Center Caps” under ” tment” tab</li>
                            <li><i class="far fa-circle-check"></i>Fully copatible with OEM equimpent</li>
                        </ul>
                    </div>
                    <div class="actions">
                        <div class="quantity">
                            <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                            <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                            <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                        </div>
                        <button class="as-btn style4">Add to Cart</button>
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">wheel-fits-chevy-camaro</span></span>
                        <span class="posted_in">Category: <a href="shop" rel="tag">Tires & Wheels</a></span>
                        <span>Tags: <a href="shop">automotive parts</a><a href="shop">wheels</a></span>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav product-tab-style1" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">description</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="info-tab" data-bs-toggle="tab" href="#add_info" role="tab" aria-controls="add_info" aria-selected="false">Additional Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">reviews (03)</a>
            </li>
        </ul>
        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p>Credibly negotiate emerging material wherea click-and-mortar intellectual capital. Compellingly whiteboard client-centric source before cross-platform schema. Distinctively develop future-proof outsourcing without multimedia based portals. Progressively coordinate next-generation architecture for collaborative solutions. Professionally restore backward-compatible quality vectors before customer directed metrics. Holisticly restore technically sound internal or "organic" sources before client-centered human capital underwhelm holistic mindshare for prospective innovation.</p>
                <p class="mb-0">Seamlessly target fully tested infrastructures whereas just in time process improvements. Dynamically exploit team driven functionalities vis a vis global total linkage redibly synthesize just in time technology rather than open-source strategic theme areas.</p>
            </div>
            <div class="tab-pane fade" id="add_info" role="tabpanel">
                <table class="woocommerce-table">
                    <tbody>
                        <tr>
                            <th>Brand</th>
                            <td>Jakuna</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>Yellow</td>
                        </tr>
                        <tr>
                            <th>Weight</th>
                            <td>400 gm</td>
                        </tr>
                        <tr>
                            <th>Battery</th>
                            <td>Lithium</td>
                        </tr>
                        <tr>
                            <th>Material</th>
                            <td>Wood</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="woocommerce-Reviews">
                    <div class="as-comments-wrap  ">
                        <ul class="comment-list">
                            <li class="review as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>22 Jan, 2023</span>
                                        <h4 class="name">Mark Jack</h4>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">Compellingly recaptiualize cost effective synergy rather than prospective architectures. Proactively, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>20 Jan, 2023</span>
                                        <h4 class="name">Zenelia Lozhe</h4>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">The purpose of lorem ipsum is to create a natural looking block of text. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="review as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>10 Jan, 2023</span>
                                        <h4 class="name">Daniel Adam</h4>

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <p class="text">The passage experienced a surge in popularity during the 1960s when Letraset used it on their. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- Comment Form -->
                    <div class="as-comment-form  ">
                        <div class="form-title">
                            <h3 class="blog-inner-title ">Leave A Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group style-white2">
                                <input type="text" placeholder="Your Name" class="form-control">
                                <i class="text-title far fa-user"></i>
                            </div>
                            <div class="col-md-6 form-group style-white2">
                                <input type="text" placeholder="Your Email" class="form-control">
                                <i class="text-title far fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-12">
                                <select name="subject" id="subject" class="single-select style-white2">
                                    <option value="" disabled selected hidden>Select Service</option>
                                    <option value="Electrical System">Electrical System</option>
                                    <option value="Auto Car Repair">Auto Car Repair</option>
                                    <option value="Engine Diagnostics">Engine Diagnostics</option>
                                    <option value="Car & Engine Clean">Car & Engine Clean</option>
                                </select>
                            </div>
                            <div class="col-12 form-group style-white2">
                                <textarea placeholder="Write a Message" class="form-control"></textarea>
                                <i class="text-title far fa-pencil-alt"></i>
                            </div>

                            <div class="col-12 form-group">
                                <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="as-btn style4">Post Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Related Product
        ==============================-->
        <div class="space-top theme-red">
            <div class="title-area text-center">
                <h2 class="sec-title">Related Products</h2>
            </div>
            <div class="row as-carousel product-slider g-0" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_5.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Car Bearing </p>
                            <h4 class="product-title h5"><a href="shop-details">Ball bearing Rolling</a></h4>
                            <span class="price">$125.00 <del>$175.00</del></span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_6.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Oil Filter</p>
                            <h4 class="product-title h5"><a href="shop-details">Toyota Oil Filter Motor</a></h4>
                            <span class="price">$125.00</span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_10.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Car Wheel &amp; Tire</p>
                            <h4 class="product-title h5"><a href="shop-details">Panda OZ Wheel &amp; Tire</a></h4>
                            <span class="price">$125.00 <del>$175.00</del></span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_4.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Car Wheel Rim</p>
                            <h4 class="product-title h5"><a href="shop-details">Lotus OZ Group Wheel</a></h4>
                            <span class="price">$133.00</span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_8.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Vehicle Parts</p>
                            <h4 class="product-title h5"><a href="shop-details">Car Vehicle Automatic</a></h4>
                            <span class="price">$125.00</span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_2.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Automotive Brake</p>
                            <h4 class="product-title h5"><a href="shop-details">Brembo Disc Brake S2</a></h4>
                            <span class="price">$120.00</span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="as-product">
                        <span class="tag">NEW</span>
                        <div class="actions">
                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                        </div>
                        <div class="product-img">
                            <img src="assets/img/product/product_1_9.png" alt="product image">
                        </div>
                        <div class="product-content">
                            <p class="meta">Vehicle Parts</p>
                            <h4 class="product-title h5"><a href="shop-details">BMW Brake Liver</a></h4>
                            <span class="price">$125.00</span>
                            <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
