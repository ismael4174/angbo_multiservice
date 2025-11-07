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
                        <h1 class="breadcumb-title">Agences</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="home-child-care">ACCUEIL</a></li>
                            <li class="active">Agences</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="breadcumb-thumb">
                        {{-- <img src="assets/img/normal/breadcumb-thumb.png" alt="img"> --}}
                        <img src="assets/img/normal/recep.jpg" alt="img">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
                        Agence Area
                        ==============================-->
   <section class="space">
    <div class="container">
        {{-- ✅ Une seule row pour toutes les agences --}}
        <div class="row gy-4 justify-content-center">
            @foreach ($agences as $agence)
                <div class="col-md-6 col-lg-4">
                    <div class="contact-box shadow-sm p-4 rounded-3 text-center transition-all hover-shadow">
                        <div class="contact-box_icon mb-3">
                            <i class="fa fa-headset fa-2x text-primary"></i>
                        </div>
                        <div class="contact-box_info">
                            <h4 class="contact-box_title mb-2">
                                <a href="#" data-bs-toggle="modal"
                                   data-bs-target="#agenceModal{{ $agence->id }}"
                                   class="text-decoration-none text-dark fw-bold">
                                    {{ $agence->nom }}
                                </a>
                            </h4>
                            <p class="contact-box_text text-muted mb-0">
                                <i class="fa fa-map-marker-alt text-primary me-1"></i>{{ $agence->localisation }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- ✅ Modal pour chaque agence --}}
                <div class="modal fade" id="agenceModal{{ $agence->id }}" tabindex="-1"
                     aria-labelledby="agenceModalLabel{{ $agence->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content animated-modal">
                            <div class="modal-header bg-gradient text-white rounded-top-4">
                                <h5 class="modal-title fw-bold">
                                    <i class="fa fa-building me-2"></i>{{ $agence->nom }}
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body p-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i><strong>Adresse :</strong>
                                            {{ $agence->adresse }}</p>
                                        <p><i class="fa fa-phone text-primary me-2"></i><strong>Téléphone :</strong>
                                            {{ $agence->telephone }}</p>
                                        <p><i class="fa fa-envelope text-primary me-2"></i><strong>Email :</strong>
                                            {{ $agence->email }}</p>
                                        <p><i class="fa fa-user text-primary me-2"></i><strong>Responsable :</strong>
                                            {{ $agence->responsable }}</p>
                                        <p><i class="fa fa-clock text-primary me-2"></i><strong>Ouverture :</strong>
                                            {{ $agence->heure_ouverture->format('H:i') }}</p>
                                    </div>

                                    <div class="col-md-6">
                                        <p><i class="fa fa-city text-primary me-2"></i><strong>Ville :</strong>
                                            {{ $agence->ville }}</p>
                                        <p><i class="fa fa-home text-primary me-2"></i><strong>Commune :</strong>
                                            {{ $agence->commune }}</p>
                                        <p><i class="fa fa-map text-primary me-2"></i><strong>Quartier :</strong>
                                            {{ $agence->localisation }}</p>
                                        <p><i class="fa fa-flag text-primary me-2"></i><strong>Pays :</strong>
                                            {{ $agence->pays }}</p>
                                        <p><i class="fa fa-clock text-primary me-2"></i><strong>Fermeture :</strong>
                                            {{ $agence->heure_fermeture->format('H:i') }}</p>
                                    </div>
                                </div>

                                <hr class="my-3">

                                {{-- ✅ Affichage des services liés à l’agence --}}
                                @php
                                    $servicesAgences = collect([$agence->service_agence])
                                        ->filter()
                                        ->unique('id');
                                @endphp

                                @if ($servicesAgences->isNotEmpty())
                                    <p>
                                        <i class="fa fa-cogs text-primary me-2"></i>
                                        <strong>Services :</strong>
                                    </p>

                                    <div class="d-flex flex-wrap justify-content-start">
                                        @foreach ($servicesAgences as $service)
                                            <div class="text-center me-3 mb-3">
                                                @if ($service->logo)
                                                    <img src="{{ asset('uploads/' . $service->logo) }}"
                                                         alt="{{ $service->nom }}" width="60" height="60"
                                                         class="rounded shadow-sm mb-1">
                                                @else
                                                    <img src="{{ asset('uploads/default.png') }}"
                                                         alt="Logo par défaut" width="60" height="60"
                                                         class="rounded shadow-sm mb-1">
                                                @endif
                                                <div class="small fw-semibold">{{ $service->nom }}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p><em>Aucun service associé</em></p>
                                @endif

                                <hr class="my-3">

                                <p><i class="fa fa-info-circle text-primary me-2"></i><strong>Description :</strong><br>
                                    {{ $agence->description ?? 'Aucune description disponible.' }}
                                </p>
                            </div>

                            <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-primary rounded-pill px-4" data-bs-dismiss="modal">
                                    <i class="fa fa-times me-1"></i> Fermer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Effet hover en CSS --}}
<style>
    
</style>

@endsection
