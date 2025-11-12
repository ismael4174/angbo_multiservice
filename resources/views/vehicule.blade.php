@extends('layouts.master')

@section('content')
    <!--==============================
                                                Hero Area 03
                                            ==============================-->
    <div class="as-hero-wrapper hero-3" id="hero">
        <div class="as-carousel hero-slider-1" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true"
            data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-adaptive-height="true">
            @foreach ($slide2s as $slide2)
                <div class="as-hero-slide">
                    <div class="as-hero-bg" data-bg-src="{{ asset('uploads/' . $slide2->photo) }}"></div>
                    <div class="watermark">ANGBO</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero-style3">
                                    <span class="hero-subtitle" data-ani="slideinleft"
                                        data-ani-delay="0.1s">{{ $slide2->sous_titre }}</span>
                                    <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.2s">
                                        {{ $slide2->titre }}</h1>
                                    <p class="hero-text text-white" data-ani="slideinleft" data-ani-delay="0.3s">
                                        {{ $slide2->description }}</p>
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
                     Véhicules
            ===============================-->
    {{-- <section class="product-area space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center mb-4">
                <span class="sub-title"><span class="double-line"></span> NOS VÉHICULES</span>
                <h2 class="sec-title">Découvrez nos choix de véhicules</h2>
            </div>

            <div class="row g-4 justify-content-center">
                @forelse ($produits as $produit)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="position-relative">
                                <img src="{{ asset('uploads/' . $produit->image_principale) }}" class="card-img-top"
                                    alt="{{ $produit->titre }}"
                                    style="height:230px; object-fit:cover; border-radius:10px 10px 0 0;">
                                @if ($produit->disponible)
                                    <span class="badge bg-success position-absolute top-0 end-0 m-2">Disponible</span>
                                @else
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">Indisponible</span>
                                @endif
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $produit->titre }}</h5>
                                <p class="card-text text-muted flex-grow-1">{{ Str::limit($produit->description, 80) }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <strong>{{ number_format($produit->prix, 0, ',', ' ') }} {{ $produit->devise }}</strong>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#produitModal{{ $produit->id }}">
                                        Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="produitModal{{ $produit->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-white">
                                    <h5 class="modal-title">{{ $produit->titre }}</h5>
                                    <button type="button" class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <img src="{{ asset('uploads/' . $produit->image_principale) }}"
                                                class="img-fluid rounded shadow-sm" alt="{{ $produit->titre }}">
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Description</h6>
                                            <p>{{ $produit->description }}</p>

                                            @if (!empty($produit->galerie))
                                                <h6>Galerie</h6>
                                                <div class="d-flex flex-wrap gap-2">
                                                    @foreach ($produit->galerie as $img)
                                                        <img src="{{ asset('uploads/' . $img) }}" class="img-thumbnail"
                                                            style="width:80px; height:80px; object-fit:cover;">
                                                    @endforeach
                                                </div>
                                            @endif

                                            <div class="mt-3">
                                                <strong>Prix :</strong> {{ number_format($produit->prix, 0, ',', ' ') }}
                                                {{ $produit->devise }}<br>
                                                <strong>Service :</strong> {{ $produit->service->titre ?? '—' }}
                                            </div>
                                            @if ($produit->whatsapp_link)
                                                <a href="{{ $produit->whatsapp_link }}" target="_blank"
                                                    class="btn btn-success mt-3">
                                                    <i class="fab fa-whatsapp"></i> Contacter sur WhatsApp
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">Aucun produit disponible pour le moment.</p>
                @endforelse
            </div>
        </div>
    </section> --}}

    <section class="product-area space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center mb-4">
                <span class="sub-title"><span class="double-line"></span> NOS VÉHICULES</span>
                <h2 class="sec-title">Découvrez nos choix de véhicules</h2>
            </div>

            <!-- 🔹 Filtres (affichés une seule fois) -->
            <form method="GET" class="row justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 mb-2">
                    <select name="marque_id" class="form-select" onchange="this.form.submit()">
                        <option value="">Toutes les marques</option>
                        @foreach ($marques as $marque)
                            <option value="{{ $marque->id }}" {{ $marque_id == $marque->id ? 'selected' : '' }}>
                                {{ $marque->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-4 col-md-6 mb-2">
                    <select name="type_transac" class="form-select" onchange="this.form.submit()">
                        <option value="">Tous les types</option>
                        <option value="vente" {{ $type_transac == 'vente' ? 'selected' : '' }}>Vente</option>
                        <option value="location" {{ $type_transac == 'location' ? 'selected' : '' }}>Location</option>
                    </select>
                </div>
            </form>

            <!-- 🔹 Grille de véhicules (4 colonnes sur grand écran) -->
            <div class="row g-4">
                @forelse ($vehicules as $vehicule)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="position-relative">
                                <img src="{{ asset('uploads/' . $vehicule->image_principale) }}" class="card-img-top"
                                    alt="{{ $vehicule->titre }}"
                                    style="height:230px; object-fit:cover; border-radius:10px 10px 0 0;">
                                @if ($vehicule->disponible)
                                    <span class="badge bg-success position-absolute top-0 end-0 m-2">Disponible</span>
                                @else
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">Indisponible</span>
                                @endif
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $vehicule->titre }}</h5>
                                <p class="text-muted mb-1">
                                    <strong>Marque :</strong> {{ $vehicule->marque->nom ?? '—' }}<br>
                                    <strong>Type :</strong> {{ ucfirst($vehicule->type_transac) }}
                                </p>
                                <p class="card-text text-muted flex-grow-1">{{ Str::limit($vehicule->description, 80) }}
                                </p>

                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <strong>{{ number_format($vehicule->prix, 0, ',', ' ') }}
                                        {{ $vehicule->devise }}</strong>
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#vehiculeModal{{ $vehicule->id }}">
                                        Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal détail -->
                    <div class="modal fade" id="vehiculeModal{{ $vehicule->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-white">
                                    <h5 class="modal-title">{{ $vehicule->titre }}</h5>
                                    <button type="button" class="btn-close btn-close-white"
                                        data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <img src="{{ asset('uploads/' . $vehicule->image_principale) }}"
                                                class="img-fluid rounded shadow-sm" alt="{{ $vehicule->titre }}">
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Description</h6>
                                            <p>{{ $vehicule->description }}</p>

                                            @if (!empty($vehicule->galerie))
                                                <h6>Galerie</h6>
                                                <div class="d-flex flex-wrap gap-2">
                                                    @foreach ($vehicule->galerie as $img)
                                                        <img src="{{ asset('uploads/' . $img) }}" class="img-thumbnail"
                                                            style="width:80px; height:80px; object-fit:cover;">
                                                    @endforeach
                                                </div>
                                            @endif

                                            <div class="mt-3">
                                                <strong>Prix :</strong> {{ number_format($vehicule->prix, 0, ',', ' ') }}
                                                {{ $vehicule->devise }}<br>
                                                <strong>Marque :</strong> {{ $vehicule->marque->nom ?? '—' }}<br>
                                                <strong>Type :</strong> {{ ucfirst($vehicule->type_transac) }}
                                            </div>

                                            @if ($vehicule->whatsapp_contact)
                                                @php
                                                    $message = "Bonjour, je suis intéressé par la voiture : {$vehicule->marque->nom} {$vehicule->modele} ({$vehicule->annee}).";
                                                    $whatsappLink =
                                                        "https://wa.me/{$vehicule->whatsapp_contact}?text=" .
                                                        urlencode($message);
                                                @endphp
                                                <a href="{{ $whatsappLink }}" target="_blank" class="btn btn-success mt-3">
                                                    <i class="fab fa-whatsapp"></i> Intéressé
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">Aucun véhicule disponible pour le moment.</p>
                @endforelse
            </div>
        </div>
    </section>












    <!--==============================
                                                Service Area 03
                                            ==============================-->
    <div class="service-area-3 space-top" data-bg-src="assets/img/bg/service_bg3.png">
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
            @foreach ($service1s as $service1)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="display: flex;">
                    <div class="service-card w-100"
                        style="display: flex; flex-direction: column; justify-content: space-between; background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); height: 100%;">
                        <h3 class="service-card_title"><a href="">{{ $service1->titre }}</a></h3>
                        <p class="service-card_text">{{ $service1->description }}</p>
                        <div class="service-card_img">
                            <div class="service-card_icon">
                                {{-- <img class="svg-img" style="height: 50px; width:50px;"src="assets/img/icon/cat-icon-6.svg"
                                    alt="img"> --}}
                                <img class="svg-img"
                                    style="height: 50px; width:50px;"src="assets/img/icon/service_feature_1_1.svg"
                                    alt="img">
                            </div>
                            <div class="thumb" style="height: 200px; width:351px;">
                                <img src="{{ asset('uploads/' . $service1->image) }}" alt="service">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>


    <!--==============================
                                                Portfolio Area 02
                                            ==============================-->

    <section class="portfolio-area-2 space-top" data-overlay="title" data-opacity="7"
        data-bg-src="uploads/images/neuf.jpg">

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
                @foreach ($service1s as $service1)
                    @foreach ($service1->galerie ?? [] as $image)
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

@endsection
