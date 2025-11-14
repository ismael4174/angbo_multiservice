<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMS - Angbo MultiServices</title>
    <meta name="author" content="Ibrain">
    <meta name="description" content="AMS - Angbo MultiServices">
    <meta name="keywords" content="AMS - Angbo MultiServices">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/favicon.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
    .preloader {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: #ffffff;
display: flex;
align-items: center;
justify-content: center;
z-index: 9999;
}
.preloader-inner {
text-align: center;
}
.loader-logo img {
width: 120px;
height: auto;
animation: fadeLogo 5s ease-in-out infinite;
}
.loader-spinner {
margin: 20px auto 0;
width: 40px;
height: 40px;
border: 4px solid #ddd;
border-top: 4px solid #000;
border-radius: 50%;
animation: spin 1s linear infinite;
}
@keyframes spin {
to { transform: rotate(360deg); }
}
@keyframes fadeLogo {
0%, 100% { opacity: 1; }
50% { opacity: 0.4; }
}
        .contact-box_title a {
            color: #1e1e1e;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-box_title a:hover {
            color: #4a6cf7;
        }

        .modal-content {
            border-radius: 1rem;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        /* Dégradé élégant pour l’en-tête */
        .bg-gradient {
            background: linear-gradient(90deg, #007bff, #6610f2);
        }

        /* Animation d’apparition */
        .animated-modal {
            animation: zoomIn 0.3s ease-in-out;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.85);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Amélioration du texte */
        .modal-body p {
            margin-bottom: 0.6rem;
            font-size: 15px;
        }

        /* Bouton moderne */
        .btn-primary {
            background-color: #4a6cf7;
            border: none;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #3955d1;
            transform: scale(1.05);
        }

        .hover-shadow {
            transition: all 0.3s ease;
        }

        .hover-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .animated-modal {
            animation: fadeInUp 0.3s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</head>


<body>
    <!--==============================
    Preloader
==============================-->
    <!--<div class="preloader">
        <button class="as-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loading-window">
                <div class="car">
                    <div class="strike"></div>
                    <div class="strike strike2"></div>
                    <div class="strike strike3"></div>
                    <div class="strike strike4"></div>
                    <div class="strike strike5"></div>
                    <div class="car-detail spoiler"></div>
                    <div class="car-detail back"></div>
                    <div class="car-detail center"></div>
                    <div class="car-detail center1"></div>
                    <div class="car-detail front"></div>
                    <div class="car-detail wheel"></div>
                    <div class="car-detail wheel wheel2"></div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Preloader with custom site logo -->
<div class="preloader">
<!--<button class="as-btn style2 preloaderCls">Cancel Preloader</button>
--><div class="preloader-inner">
<div class="loading-window">
<div class="loader-logo">
<img src="assets/img/favicons/favicon.png" alt="Site Logo" />
</div>
<div class="loader-spinner"></div>
</div>
</div>
</div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
Mobile Menu
============================== -->
    <div class="as-menu-wrapper">
        <div class="as-menu-area text-center">
            <button class="as-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="/"><img src="assets/img/logo_2.png" style="width: 220px; height: 60px;" alt="dealaro"></a>
            </div>
            <div class="as-mobile-menu">
                <ul>

                    <li>
                        <a href="/">ACCUEIL</a>
                    </li>

                    <li>
                        <a href="{{ route('vente.vehicule') }}">ACHAT / LOCATION</a>
                    </li>

                    <li>
                        <a href="{{ route('vente.piece') }}">PIECES DETACHEES</a>
                    </li>

                    <li>
                        <a href="agence">AGENCE</a>
                    </li>

                    <li>
                        <a href="contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="sidemenu-wrapper d-none d-lg-block ">
        <div class="sidemenu-content bg-title">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="as-widget-about">
                    <div class="footer-logo">
                        <a href="/"><img src="assets/img/logo-white2_2.svg" alt="dealaro"></a>
                    </div>
                    <p class="about-text">Fusce varius, dolor tempor interdum tristiquei bibendum.</p>
                    <ul class="footer-info-list">
                        <li class="footer-info"><i class="fa-solid fa-phone"></i><a
                                href="tel:(+163)-1202-0088">(+163)-1202-0088</a></li>
                        <li class="footer-info"><i class="fa-solid fa-envelope"></i><a
                                href="mailto:info@dealaro.com">info@dealaro.com</a></li>
                    </ul>
                    <div class="as-social pt-25">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.goggle.com/"><i class="fa-brands fa-google"></i></a>
                        <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                        {{-- <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Popular Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details"><img src="assets/img/widget/footer-recent-post-1.png"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog"><i class="fa-regular fa-clock"></i>15th April, 2023</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details">How To Start Car
                                    Engine Here</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details"><img src="assets/img/widget/footer-recent-post-2.png"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog"><i class="fa-regular fa-clock"></i>20th June, 2023</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details">How To Stop Car Engine
                                    Here</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget newsletter-widget footer-widget">
                <h3 class="widget_title">Subscribe</h3>
                <p class="footer-text">Get latest updates &amp; offers Now.</p>
                <form class="newsletter-form">
                    <input class="form-control" type="email" placeholder="Enter Email Address" required="">
                    <button type="submit" class="as-btn"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
                <div class="company-info mt-35">
                    <h6 class="info-title"><i class="fa-light fa-clock"></i> Opening Time</h6>
                    <span class="info-details"> Mon-Sat : 8:00AM - 5:00PM</span>
                </div>
            </div>
        </div>
    </div>

    <div class="side-cart-wrapper d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideCartCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/widget/footer-recent-post-1.png"
                                    alt="Cart Image">Car Engine Plug</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/widget/footer-recent-post-2.png"
                                    alt="Cart Image">Car Air Filter</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/blog/recent-post-1-1.png" alt="Cart Image">CSK Red
                                Wheel</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/blog/recent-post-1-3.png" alt="Cart Image">Car
                                Repair Solution</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart" class="as-btn wc-forward">View cart</a>
                        <a href="checkout" class="as-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
Header Area
==============================-->
    <header class="as-header header-layout3">
        <div class="navbar-top">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($parametresGlobaux as $parametresGlobau)
                        <div class="col-xl-6 col-lg-5 text-lg-start text-center">
                            <p class="header-text">{{ $parametresGlobau->slogan }}</p>
                        </div>
                        <div class="col-xl-6 col-lg-7 align-self-center text-lg-end text-center">
                            <div class="header-links">
                                <ul>
                                    <li><i class="far fa-phone"></i><a
                                            href="tel:+25625921589">{{ $parametresGlobau->telephone }}</a></li>
                                    <li>
                                        <i class="far fa-envelope"></i>
                                        <a href="mailto:help24/7@gmail.com">{{ $parametresGlobau->email }}</a>
                                    </li>
                                    <li>
                                        <div class="header-social">
                                            {{-- <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> --}}
                                            {{-- <a href="https://www.vimeo.com/"><i class="fab fa-vimeo-v"></i></a> --}}
                                            @foreach ($reseaux as $reseau)
                                                <a href="{{ $reseau->lien }}" target="_blank">
                                                    <i class="{{ $reseau->icone }}"></i>
                                                </a>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container-fluid">
                <div class="menu-wrap-area">
                    <div class="logo-bg-shape"></div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                @foreach ($parametresGlobaux as $parametresGlobau)
                                    {{-- <a href="/"><img src="assets/img/logo.svg" alt="Dealaro"></a> --}}
                                    <a href="/"><img src="{{ asset('uploads/' . $parametresGlobau->logo) }}"
                                            style="width: 220px; height: 60px;" alt="Dealaro"></a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <div class="menu-area">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        {{-- <li class="menu-item-has-children">
                                            <a href="/">ACCUEIL</a>
                                            <ul class="sub-menu">
                                                <li><a href="/">Home Automotive Repair</a></li>
                                                <li><a href="home-car-dealer">Home Car Dealer</a></li>
                                                <li><a href="home-logistic">Home Logistic Dealer</a></li>
                                            </ul>
                                        </li> --}}

                                        <li>
                                            <a href="/">ACCUEIL</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vente.vehicule') }}">ACHAT / LOCATION  </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('vente.piece') }}">PIECES DETACHEES</a>
                                        </li>



                                        {{-- <li class="menu-item-has-children">
                                            <a href="#">SERVICES</a>
                                            <ul class="sub-menu">
                                                <li><a href="service">Service Page</a></li>
                                                <li><a href="service-details">Service Details</a></li>
                                            </ul>
                                        </li> --}}



                                        <li>
                                            <a href="agence">AGENCES</a>
                                        </li>

                                        <li>
                                            <a href="contact">CONTACT</a>
                                        </li>
                                    </ul>
                                </nav>
                                <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                {{-- <button type="button" class="icon-btn bg-none searchBoxToggler"><i class="fa-regular fa-magnifying-glass"></i></button>

                            <button type="button" class="icon-btn bg-none sideCartToggler">
                                <i class="fa-light fa-cart-shopping"></i>
                                <span class="badge">4</span>
                            </button> --}}

                                <a href="/admin" class="as-btn d-none d-xxl-block">SE CONNECTER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!--==============================
        Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout3" data-bg-src="assets/img/bg/footer_bg_3.png">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="as-widget-about">
                                @foreach ($parametresGlobaux as $parametresGlobau)
                                    <div class="footer-logo">
                                        <a href="/"><img
                                                src="{{ asset('uploads/' . $parametresGlobau->logo) }}"
                                                alt="Dealaro"></a>
                                    </div>
                                    <p class="about-text">{{ $parametresGlobau->slogan }}</p>
                                    <ul class="footer-info-list">
                                        <li class="footer-info"><i class="fa-solid fa-phone"></i><a
                                                href="tel:(+163)-1202-0088">{{ $parametresGlobau->telephone }}</a>
                                        </li>
                                        <li class="footer-info"><i class="fa-solid fa-envelope"></i><a
                                                href="mailto:info@dealaro.com">{{ $parametresGlobau->email }}</a></li>
                                    </ul>
                                    <div class="as-social pt-25">
                                        @foreach ($reseaux as $reseau)
                                            <a href="{{ $reseau->lien }}" target="_blank">
                                                <i class="{{ $reseau->icone }}"></i>
                                            </a>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Liens utiles <span class="line"></span></h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu2">
                                    <li><a href="/">Accueil
                                        </a></li>
                                    {{-- <li><a href="about">A propos</a></li> --}}
                                    <li><a href="service">Services
                                        </a></li>
                                    <li><a href="agence">Agences
                                        </a></li>
                                    <li><a href="contact">Contactez-nous</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget widget_nav_menu">
                            <h3 class="widget_title">our servises</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu2">
                                    <li><a href="service">Air Freight</a></li>
                                    <li><a href="service">Ocean Freight</a></li>
                                    <li><a href="service">Warehousing</a></li>
                                    <li><a href="service">Cargo Insurance
                                        </a></li>
                                    <li><a href="service">Road Freight</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title">Souscrire</h3>
                            <p class="footer-text">Obtenez nos dernières actualités & offres</p>
                            <form class="newsletter-form">
                                <input class="form-control" type="email" placeholder="Enter Email Address"
                                    required="">
                                <button type="submit" class="as-btn"><i
                                        class="fa-solid fa-paper-plane"></i></button>
                            </form>
                            <div class="company-info mt-35">
                                <h6 class="info-title"><i class="fa-light fa-clock"></i> Heures d'ouverture</h6>
                                <span class="info-details"> Lun-Sam :
                                    {{ $parametresGlobau->heure_ouverture->format('H:i') }} -
                                    {{ $parametresGlobau->heure_fermerture->format('H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        {{-- <p class="copyright-text"><i class="fal fa-copyright me-1"></i>Copyright 2023 <a
                                href="https://themeforest.net/user/themeholy">Dealaro.</a> All Rights Reserved.</p> --}}
                        <p class="copyright-text"><i class="fal fa-copyright me-1"></i>Copyright 2025 <a
                                href="">?</a> All Rights Reserved.</p>
                    </div>
                    {{-- <div class="col-lg-6 text-end d-none d-lg-block">
                        <div class="footer-links">
                            <ul>
                                <li><a href="about">Terms of use</a></li>
                                <li><a href="about">Privacy Environmental</a></li>
                                <li><a href="about">Policy</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Nice Select File -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/theme.js"></script>

</body>

</html>
