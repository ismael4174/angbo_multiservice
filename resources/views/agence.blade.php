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
            @foreach ($agences as $agence)
                <div class="row gy-30 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-box">
                            <div class="contact-box_icon">
                                <i class="fa fa-headset"></i>
                            </div>
                            <div class="contact-box_info">
                                <h4 class="contact-box_title">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#agenceModal{{ $agence->id }}">
                                        {{ $agence->nom }}
                                    </a>
                                </h4>
                                <p class="contact-box_text">{{ $agence->localisation }}</p>
                            </div>
                        </div>
                    </div>
                </div>


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
                                {{-- @if ($agence->service_agence)
                                    <p><i class="fa fa-service text-primary me-2"></i><strong>Services :</strong>
                                    {{ $agence->service_agence->nom }}</p>
                                @else
                                    <p><em>Aucun service associé</em></p>
                                @endif --}}

                                @php
                                    // On groupe les agences par leur nom (ou par leur ID si c’est mieux)
                                    $groupes = $agences->groupBy('nom');
                                @endphp

                                @foreach ($groupes as $nomAgence => $listeAgences)
                                    <div class="contact-box">
                                        {{-- <h4>{{ $nomAgence }}</h4> --}}
                                        {{-- <p><i
                                                class="fa fa-map-marker text-primary me-2"></i>{{ $listeAgences->first()->localisation }}
                                        </p> --}}

                                        @php
                                            // Récupérer tous les noms de services liés à cette agence
                                            $services = $listeAgences
                                                ->pluck('service_agence.nom')
                                                ->unique()
                                                ->implode(', ');
                                        @endphp

                                        @if ($services)
                                            <p><i class="fa fa-cogs text-primary me-2"></i><strong>Services :</strong>
                                                {{ $services }}</p>
                                        @else
                                            <p><em>Aucun service associé</em></p>
                                        @endif
                                    </div>
                                @endforeach


                                <hr class="my-3">
                                <p><i class="fa fa-info-circle text-primary me-2"></i><strong>Description
                                        :</strong><br>{{ $agence->description ?? 'Aucune description disponible.' }}</p>
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
    </section>
@endsection
