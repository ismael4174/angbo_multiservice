@extends('layouts.master')

@section('content')
    <!--==============================
                                                    Hero Area 03
                                                ==============================-->
    <div class="as-hero-wrapper hero-3" id="hero">
        <div class="as-carousel hero-slider-1" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true"
            data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-adaptive-height="true">
            @foreach ($slide1s as $slide1)
                <div class="as-hero-slide">
                    <div class="as-hero-bg" data-bg-src="{{ asset('uploads/' . $slide1->photo) }}" style="width: 1042px; height: 453px;"></div>
                    <div class="watermark">ANGBO</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero-style3">
                                    <span class="hero-subtitle" data-ani="slideinleft"
                                        data-ani-delay="0.1s">{{ $slide1->sous_titre }}</span>
                                    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.2s">
                                        {{ $slide1->titre }}</h1>
                                    <p class="hero-text text-white" data-ani="slideinleft" data-ani-delay="0.3s">
                                        {{ $slide1->description }}</p>
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
                                                pieces
                                        ===============================-->

    {{-- <section class="product-area space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center mb-4">
                <span class="sub-title"><span class="double-line"></span> NOS PIECES</span>
                <h2 class="sec-title">Découvrez nos choix de pièces détachées</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <!-- ==== Zone principale (Produits) ==== -->
                <div class="col-xl-9 col-lg-8">
                    <div class="row gy-4">
                        @forelse ($produits as $produit)
                            <div class="col-xl-4 col-sm-6">
                                <div class="as-product">
                                    @if ($produit->disponible)
                                        <span class="tag bg-success text-white">DISPONIBLE</span>
                                    @else
                                        <span class="tag bg-danger text-white">INDISPONIBLE</span>
                                    @endif

                                    <div class="actions">
                                        <a class="icon-btn" href="#"><i class="fa-regular fa-heart"></i></a>
                                        <a class="icon-btn popup-content" data-bs-toggle="modal"
                                            data-bs-target="#produitModal{{ $produit->id }}"><i
                                                class="fa-regular fa-eye"></i></a>
                                        <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                class="rating">4.9</span></span>
                                    </div>

                                    <div class="product-img">
                                        <img src="{{ asset('uploads/' . $produit->image_principale) }}"
                                            alt="{{ $produit->titre }}" style="height:220px; object-fit:cover;">
                                    </div>

                                    <div class="product-content">
                                        <p class="meta">{{ $produit->service->titre ?? 'Autres pièces' }}</p>
                                        <h4 class="product-title h5">{{ $produit->titre }}</h4>
                                        <span class="price">
                                            {{ number_format($produit->prix, 0, ',', ' ') }} {{ $produit->devise }}
                                        </span>
                                        @if ($produit->whatsapp_link)
                                            <a class="as-btn style3 mt-2" href="{{ $produit->whatsapp_link }}"
                                                target="_blank">
                                                <i class="fab fa-whatsapp me-2"></i> Contacter
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Modal améliorée -->
                            <div class="modal fade" id="produitModal{{ $produit->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content border-0 shadow-lg overflow-hidden">
                                        <!-- En-tête plus claire -->
                                        <div class="modal-header bg-primary text-white py-2">
                                            <h5 class="modal-title fw-bold">{{ $produit->titre }}</h5>
                                            <button type="button" class="btn-close btn-close-white"
                                                data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body p-4">
                                            <div class="row g-4 align-items-center">
                                                <!-- Carrousel Images -->
                                                <div class="col-md-6">
                                                    <div id="carouselProduit{{ $produit->id }}" class="carousel slide"
                                                        data-bs-ride="carousel">
                                                        <div class="carousel-inner rounded shadow-sm border">
                                                            <!-- Image principale -->
                                                            <div class="carousel-item active">
                                                                <img src="{{ asset('uploads/' . $produit->image_principale) }}"
                                                                    class="d-block w-100 rounded"
                                                                    alt="{{ $produit->titre }}"
                                                                    style="height:320px; object-fit:cover;">
                                                            </div>

                                                            <!-- Galerie -->
                                                            @if (!empty($produit->galerie))
                                                                @foreach ($produit->galerie as $img)
                                                                    <div class="carousel-item">
                                                                        <img src="{{ asset('uploads/' . $img) }}"
                                                                            class="d-block w-100 rounded"
                                                                            alt="Image {{ $loop->iteration }}"
                                                                            style="height:320px; object-fit:cover;">
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>

                                                        @if (!empty($produit->galerie) && count($produit->galerie) > 0)
                                                            <button class="carousel-control-prev" type="button"
                                                                data-bs-target="#carouselProduit{{ $produit->id }}"
                                                                data-bs-slide="prev">
                                                                <span
                                                                    class="carousel-control-prev-icon bg-dark rounded-circle p-2"
                                                                    aria-hidden="true"></span>
                                                                <span class="visually-hidden">Précédent</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button"
                                                                data-bs-target="#carouselProduit{{ $produit->id }}"
                                                                data-bs-slide="next">
                                                                <span
                                                                    class="carousel-control-next-icon bg-dark rounded-circle p-2"
                                                                    aria-hidden="true"></span>
                                                                <span class="visually-hidden">Suivant</span>
                                                            </button>
                                                        @endif

                                                        <!-- Badge disponibilité sur image -->
                                                        @if ($produit->disponible)
                                                            <span
                                                                class="badge bg-success position-absolute top-0 start-0 m-2 shadow-sm">Disponible</span>
                                                        @else
                                                            <span
                                                                class="badge bg-danger position-absolute top-0 start-0 m-2 shadow-sm">Indisponible</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- Infos produit -->
                                                <div class="col-md-6">
                                                    <h6 class="fw-bold">Description</h6>
                                                    <p class="text-muted mb-3">{{ $produit->description }}</p>

                                                    <ul class="list-unstyled small">
                                                        <li><strong>Prix :</strong>
                                                            <span
                                                                class="text-primary">{{ number_format($produit->prix, 0, ',', ' ') }}
                                                                {{ $produit->devise }}</span>
                                                        </li>
                                                        <li><strong>Service :</strong>
                                                            {{ $produit->service->titre ?? '—' }}</li>
                                                        <li><strong>Disponibilité :</strong>
                                                            @if ($produit->disponible)
                                                                <span class="text-success">En stock</span>
                                                            @else
                                                                <span class="text-danger">Rupture</span>
                                                            @endif
                                                        </li>
                                                    </ul>

                                                    @if ($produit->whatsapp_link)
                                                        <a href="{{ $produit->whatsapp_link }}" target="_blank"
                                                            class="btn btn-success w-100 fw-bold mt-3">
                                                            <i class="fab fa-whatsapp"></i> Contacter sur WhatsApp
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer border-0 pt-0 pb-3">
                                            <button class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                                                Fermer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @empty
                            <p class="text-center text-muted">Aucune pièce disponible pour le moment.</p>
                        @endforelse
                    </div>
                </div>

                <!-- ==== Sidebar ==== -->
                <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Rechercher une pièce...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Catégories</h3>
                            <ul>
                                @foreach ($service2s as $service)
                                    <li><a href="#">{{ $service->titre }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget widget_price_filter">
                            <h4 class="widget_title">Filtrer par prix</h4>
                            <div class="price_slider_wrapper">
                                <div class="price_slider"></div>
                                <button type="submit" class="button">Filtrer</button>
                                <div class="price_label">
                                    <span class="from">0</span> — <span class="to">1 000 000</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- code qui passe 2  --}}

    {{-- @foreach ($produits as $produit)
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="as-product">
                @if ($produit->disponible)
                    <span class="tag">NEW</span>
                @endif
                <div class="product-img">
                    <img src="{{ $produit->image_principale ? asset('uploads/' . $produit->image_principale) : asset('assets/img/product/default.png') }}"
                        alt="{{ $produit->titre }}">
                </div>
                <div class="product-content">
                    <p class="meta">{{ $produit->service->nom ?? 'Service' }}</p>
                    <h4 class="product-title h5">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#ProduitModal{{ $produit->id }}">
                            {{ $produit->titre }}
                        </a>
                    </h4>
                    <span class="price">{{ $produit->devise ?? 'FCFA' }}{{ number_format($produit->prix, 2) }}</span>
                </div>
            </div>
        </div>
        <!-- Modal spécifique produit -->
        <div class="modal fade" id="ProduitModal{{ $produit->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $produit->titre }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <!-- Colonne images -->
                            <div class="col-md-6">
                                <img src="{{ $produit->image_principale ? asset('uploads/' . $produit->image_principale) : asset('assets/img/product/default.png') }}"
                                    class="img-fluid mb-2" alt="{{ $produit->titre }}">
                                @if ($produit->galerie && count($produit->galerie) > 0)
                                    <div class="d-flex flex-wrap">
                                        @foreach ($produit->galerie as $img)
                                            <img src="{{ asset('uploads/' . $img) }}" class="img-fluid me-1 mb-1"
                                                style="max-width:80px;">
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <!-- Colonne infos produit -->
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item"><strong>Service:</strong>
                                        {{ $produit->service->nom ?? 'N/A' }}</li>
                                    <li class="list-group-item"><strong>Type Produit:</strong>
                                        {{ $produit->type_produit->nom ?? 'N/A' }}</li>
                                    <li class="list-group-item"><strong>Titre:</strong> {{ $produit->titre }}</li>
                                    <li class="list-group-item"><strong>Description:</strong>
                                        {{ $produit->description }}
                                    </li>
                                    <li class="list-group-item"><strong>Prix:</strong>
                                        {{ number_format($produit->prix, 2) }}</li>
                                    <li class="list-group-item"><strong>Devise:</strong> {{ $produit->devise }}</li>
                                    <li class="list-group-item"><strong>Disponibilité:</strong>
                                        {{ $produit->disponible ? 'Oui' : 'Non' }}</li>
                                    <li class="list-group-item"><strong>Slug:</strong> {{ $produit->slug }}</li>
                                </ul>

                                <a href="{{ $produit->whatsapp_link ?? '#' }}" target="_blank" class="btn w-100 mt-3"
                                    style="background-color: #FFD700; color: #000;"
                                    onmouseover="this.style.backgroundColor='#FF0000'; this.style.color='#FFF';"
                                    onmouseout="this.style.backgroundColor='#FFD700'; this.style.color='#000';">
                                    <i class="fab fa-whatsapp me-2"></i> Contactez-nous
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}



    <!--==============================
        Product Area
    ==============================-->
    {{-- <div class="product-area space text-center" data-bg-src="assets/img/product/product_bg.png">
        <div class="container">
            <div class="title-area text-center mb-35">
                <h3 class="sub-title"><span class="double-line"></span> NOS PRODUITS</h3>
                <h2 class="sec-title mb-0">Nos produits les plus populaires</h2>
                <ul class="product-filter-btn nav">
                    <li class="nav-item">
                        <button class="tab-btn nav-link active" id="pills-1-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-1">ALL</button>
                    </li>
                    <li class="nav-item">
                        <button class="tab-btn nav-link" id="pills-2-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-2">BREAK</button>
                    </li>
                    <li class="nav-item">
                        <button class="tab-btn nav-link" id="pills-3-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-3">WHEELS</button>
                    </li>
                    <li class="nav-item">
                        <button class="tab-btn nav-link" id="pills-4-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-4">ENGINE</button>
                    </li>
                    <li class="nav-item">
                        <button class="tab-btn nav-link" id="pills-5-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-5">OIL</button>
                    </li>
                    <li class="nav-item">
                        <button class="tab-btn nav-link" id="pills-6-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-6">LIGHT</button>
                    </li>
                    <li class="nav-item">
                        <button class="tab-btn nav-link" id="pills-7-tab" data-bs-toggle="tab"
                            data-bs-target="#pills-7">OTHER</button>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <div class="row as-carousel product-slider g-0" data-slide-show="4" data-lg-slide-show="3"
                                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true"
                                data-xl-arrows="true" data-ml-arrows="true">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="as-product">
                                        <span class="tag">NEW</span>
                                        <div class="actions">
                                            <a class="icon-btn" href="cart"><i class="fa-regular fa-heart"></i></a>
                                            <a class="icon-btn popup-content" href="#QuickView"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <span class="icon-btn rating-btn"><i class="fa-regular fa-star"></i><span
                                                    class="rating">4.9</span></span>
                                        </div>
                                        <div class="product-img">
                                            <img src="assets/img/product/product_1_5.png" alt="product image">
                                        </div>
                                        <div class="product-content">
                                            <p class="meta">Car Bearing </p>
                                            <h4 class="product-title h5"><a href="shop-details">Ball bearing Rolling</a>
                                            </h4>
                                            <span class="price">$125.00 <del>$175.00</del></span>
                                            <a class="as-btn style3" href="checkout"><i
                                                    class="fa-regular fa-cart-shopping me-2"></i> ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




   <div class="product-area space text-center" data-bg-src="assets/img/product/product_bg.png">
    <div class="container">
        <div class="title-area text-center mb-35">
            <h3 class="sub-title"><span class="double-line"></span> NOS PRODUITS</h3>
            <h2 class="sec-title mb-0">Nos produits les plus populaires</h2>
            <ul class="product-filter-btn nav">
                <li class="nav-item">
                    <button class="tab-btn nav-link active" id="pills-1-tab" data-bs-toggle="tab" data-bs-target="#pills-1">ALL</button>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-1">
                        <div class="row as-carousel product-slider g-0" data-slide-show="4" data-lg-slide-show="3"
                            data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true"
                            data-xl-arrows="true" data-ml-arrows="true">
                            @foreach ($produits as $produit)
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="as-product">
                                        @if ($produit->disponible)
                                            <span class="tag">NEW</span>
                                        @endif
                                        <div class="product-img">
                                            <img src="{{ $produit->image_principale ? asset('uploads/' . $produit->image_principale) : asset('assets/img/product/default.png') }}"
                                                alt="{{ $produit->titre }}">
                                        </div>
                                        <div class="product-content">
                                            <p class="meta">{{ $produit->service->nom ?? 'Service' }}</p>
                                            <h4 class="product-title h5">
                                                <a role="button" data-bs-toggle="modal"
                                                    data-bs-target="#ProduitModal{{ $produit->id }}">
                                                    {{ $produit->titre }}
                                                </a>
                                            </h4>
                                            <span class="price">{{ $produit->devise ?? 'FCFA' }}{{ number_format($produit->prix, 2) }}</span>
                                            <a class="as-btn style3 mt-2" role="button" data-bs-toggle="modal"
                                                data-bs-target="#ProduitModal{{ $produit->id }}">
                                                <i class="fa-regular fa-eye me-2"></i> Détail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modales déplacées en dehors du carousel -->
        @foreach ($produits as $produit)
            <div class="modal fade" id="ProduitModal{{ $produit->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $produit->titre }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <img src="{{ $produit->image_principale ? asset('uploads/' . $produit->image_principale) : asset('assets/img/product/default.png') }}"
                                        class="img-fluid mb-2" alt="{{ $produit->titre }}">
                                    @if ($produit->galerie && count($produit->galerie) > 0)
                                        <div class="d-flex flex-wrap">
                                            @foreach ($produit->galerie as $img)
                                                <img src="{{ asset('uploads/' . $img) }}"
                                                    class="img-fluid me-1 mb-1" style="max-width:80px;">
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Service:</strong> {{ $produit->service->nom ?? 'N/A' }}</li>
                                        <li class="list-group-item"><strong>Type Produit:</strong> {{ $produit->type_produit->nom ?? 'N/A' }}</li>
                                        <li class="list-group-item"><strong>Titre:</strong> {{ $produit->titre }}</li>
                                        <li class="list-group-item"><strong>Description:</strong> {{ $produit->description }}</li>
                                        <li class="list-group-item"><strong>Prix:</strong> {{ number_format($produit->prix, 2) }}</li>
                                        {{-- <li class="list-group-item"><strong>Devise:</strong> {{ $produit->devise }}</li> --}}
                                        <li class="list-group-item"><strong>Disponibilité:</strong> {{ $produit->disponible ? 'Oui' : 'Non' }}</li>
                                        {{-- <li class="list-group-item"><strong>Slug:</strong> {{ $produit->slug }}</li> --}}
                                    </ul>
                                    <a href="{{ $produit->whatsapp_link ?? '#' }}" target="_blank" class="btn w-100 mt-3"
                                        style="background-color: #FFD700; color: #000;"
                                        onmouseover="this.style.backgroundColor='#FF0000'; this.style.color='#FFF';"
                                        onmouseout="this.style.backgroundColor='#FFD700'; this.style.color='#000';">
                                        <i class="fab fa-whatsapp me-2"></i> Contactez-nous
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Assure-toi que ce script est bien présent avant la fermeture de </body> -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}






    <!--==============================
                                                    Service Area 03
                                                ==============================-->
    {{-- <div class="service-area-3 space-top" data-bg-src="assets/img/bg/service_bg3.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><span class="double-line"></span> NOS SERVICES</span>
                <h2 class="sec-title">Découvrez nos services</h2>
            </div>

        </div>
    </div>
    </div>

    <div class="container">
        <div class="service-slider row as-carousel g-0" data-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="true" data-xl-dots="true"
            data-ml-dots="true" data-lg-dots="true">
            @foreach ($service2s as $service2)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="display: flex;">
                    <div class="service-card w-100"
                        style="display: flex; flex-direction: column; justify-content: space-between; background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); height: 100%;">
                        <h3 class="service-card_title"><a href="">{{ $service2->titre }}</a></h3>
                        <p class="service-card_text">{{ $service2->description }}</p>
                        <div class="service-card_img">
                            <div class="service-card_icon">
                                <img class="svg-img" style="height: 50px; width:50px;"src="assets/img/icon/cat-icon-3.svg"
                                    alt="img">
                            </div>
                            <div class="thumb" style="height: 200px; width:351px;">
                                <img src="{{ asset('uploads/' . $service2->image) }}" alt="service">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    <br>

    <!--==============================
                            Portfolio Area 02
                     ==============================-->

    <section class="portfolio-area-2 space-top" data-overlay="title" data-opacity="7"
        data-bg-src="assets/img/portfolio/Pièce_origine_const.jpeg">

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
                @foreach ($service2s as $service2)
                    @foreach ($service2->galerie ?? [] as $image)
                        <div class="portfolio-card2 col-md-4 mb-3">
                            <div class="portfolio-card_img">
                                <img src="{{ asset('uploads/' . $image) }}" alt="img"
                                    class="img-fluid rounded shadow">
                            </div>
                        </div>
                    @endforeach
                @endforeach
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
