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
                    <h1 class="breadcumb-title">Shop Page</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-child-care">Home</a></li>
                        <li class="active">Shop</li>
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
Product Area
==============================-->
<section class="theme-red space">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-9 col-lg-8">
                <div class="as-sort-bar">
                    <div class="row g-sm-0 gy-20 justify-content-between align-items-center">
                        <div class="col-md">
                            <p class="woocommerce-result-count">Showing 1 - 12 of 30 Results</p>
                        </div>

                        <div class="col-md-auto">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="single-select style2" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default Sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-md-auto">
                            <div class="nav" role=tablist>
                                <a href="#" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-solid fa-list"></i></a>
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fa-solid fa-grid"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                        <div class="row gy-30">
                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_1.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Castrol EDGE A3/B4</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_2.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Brembo Disc Brake S2</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_3.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Super 5M Rechargeable</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_5.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Ball bearing Rolling</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_6.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Toyota Oil Filter Motor</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_7.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Panda OZ Wheel & Tire</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_4.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Lotus OZ Group Wheel</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_8.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Car Vehicle Automatic</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_9.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">BMW Brake Liver</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_10.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Special Hydraulic</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_11.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Special Hydraulic</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_12.png" alt="Product Image">
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details">Fast Aloy Wheel</a></h3>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">

                        <div class="row gy-25">
                            <div class="col-xl-4 col-sm-6">
                                <div class="as-product">
                                    <span class="tag">NEW</span>
                                    <div class="actions">
                                        <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                        <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                        <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_1.png" alt="product image">
                                    </div>
                                    <div class="product-content">
                                        <p class="meta">Motor Oil</p>
                                        <h4 class="product-title h5"><a href="shop-details">Castrol EDGE A3/B4</a></h4>
                                        <span class="price">$125.00</span>
                                        <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="as-product">
                                    <span class="tag">NEW</span>
                                    <div class="actions">
                                        <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                        <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                        <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_3.png" alt="product image">
                                    </div>
                                    <div class="product-content">
                                        <p class="meta">Car Battery</p>
                                        <h4 class="product-title h5"><a href="shop-details">Super 5M Rechargeable</a></h4>
                                        <span class="price">$100.00</span>
                                        <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
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
                            <div class="col-xl-4 col-sm-6">
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
                            <div class="col-xl-4 col-sm-6">
                                <div class="as-product">
                                    <span class="tag">NEW</span>
                                    <div class="actions">
                                        <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                        <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                        <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_7.png" alt="product image">
                                    </div>
                                    <div class="product-content">
                                        <p class="meta">Car Wheel & Tire</p>
                                        <h4 class="product-title h5"><a href="shop-details">Panda OZ Wheel & Tire</a></h4>
                                        <span class="price">$125.00 <del>$175.00</del></span>
                                        <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
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
                            <div class="col-xl-4 col-sm-6">
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
                            <div class="col-xl-4 col-sm-6">
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
                            <div class="col-xl-4 col-sm-6">
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
                                        <p class="meta">Car Suspensor</p>
                                        <h4 class="product-title h5"><a href="shop-details">Special Hydraulic</a></h4>
                                        <span class="price">$125.00</span>
                                        <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="as-product">
                                    <span class="tag">NEW</span>
                                    <div class="actions">
                                        <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                        <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                        <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_11.png" alt="product image">
                                    </div>
                                    <div class="product-content">
                                        <p class="meta">Vehicle Parts</p>
                                        <h4 class="product-title h5"><a href="shop-details">Audi Wheel Combo</a></h4>
                                        <span class="price">$125.00</span>
                                        <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="as-product">
                                    <span class="tag">NEW</span>
                                    <div class="actions">
                                        <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                        <a class="icon-btn popup-content" href="#QuickView"><i class="fa-regular fa-eye"></i></a>
                                        <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span class="rating">4.9</span></span>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/product/product_1_12.png" alt="product image">
                                    </div>
                                    <div class="product-content">
                                        <p class="meta">Car Wheel</p>
                                        <h4 class="product-title h5"><a href="shop-details">Fast Aloy Wheel</a></h4>
                                        <span class="price">$125.00</span>
                                        <a class="as-btn style3" href="checkout"><i class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="as-pagination space-extra2-top">
                    <ul>
                        <li><a href="blog"><i class="fas fa-arrow-left"></i></a></li>
                        <li><a href="blog">01</a></li>
                        <li><a href="blog">02</a></li>
                        <li><a href="blog">03</a></li>
                        <li><a href="blog"><i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog">Car Repair</a>
                            </li>
                            <li>
                                <a href="blog">Engine Repair</a>
                            </li>
                            <li>
                                <a href="blog">Tyer Change</a>
                            </li>
                            <li>
                                <a href="blog">Oil Change</a>
                            </li>
                            <li>
                                <a href="blog">Battery Charge</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_price_filter  ">
                        <h4 class="widget_title">Filter By Price</h4>
                        <div class="price_slider_wrapper">

                            <div class="price_slider"></div>
                            <button type="submit" class="button">Filter</button>
                            <div class="price_label">
                                <span class="from">$0</span> — <span class="to">$70</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_top_rated_products">
                        <h4 class="widget_title">Popular Product</h4>
                        <ul class="product_list_widget">
                            <li class="recent-post">
                                <div class="media-img">
                                    <a href="shop-details">
                                        <img src="assets/img/product/product_thumb_1_3.png" alt="thumb" width="70" height="70">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="recent-post-title h5"><a href="shop-details">Cool Light</a></h4>
                                    <span class="price">$125.00</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="media-img">
                                    <a href="shop-details">
                                        <img src="assets/img/product/product_thumb_1_4.png" alt="thumb" width="70" height="70">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="recent-post-title h5"><a href="shop-details">Air Filter</a></h4>
                                    <span class="price">$105.00</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="media-img">
                                    <a href="shop-details">
                                        <img src="assets/img/product/product_thumb_1_5.png" alt="thumb" width="70" height="70">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="recent-post-title h5"><a href="shop-details">Brake Liver</a></h4>
                                    <span class="price">$225.00</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="media-img">
                                    <a href="shop-details">
                                        <img src="assets/img/product/product_thumb_1_6.png" alt="thumb" width="70" height="70">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="recent-post-title h5"><a href="shop-details">CSK Rim</a></h4>
                                    <span class="price">$750.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="blog">Technology</a>
                            <a href="blog">Repair</a>
                            <a href="blog">Dealaro</a>
                            <a href="blog">Car Repair</a>
                            <a href="blog">Speed</a>
                            <a href="blog">Solution</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</section>
<!--==============================
        Footer Area
==============================-->
@endsection
