@extends('layouts.app')

@section('title', $bien->titre)

@section('content')

<div class="mb-4">
    <h1>{{ $bien->titre }}</h1>
    <p class="text-muted">{{ $bien->ville }} - {{ $bien->quartier }}</p>
    <p>{{ $bien->description }}</p>
</div>

<!-- Affichage des messages de succès pour les demandes de visite -->

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<h4 class="mb-3">Unités disponibles</h4>

<div class="row">
    @forelse($bien->unites as $unite)
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">

                <!-- CAROUSEL DES PHOTOS DE L'UNITÉ -->
                @if($unite->photos->count() > 0)
                    <div id="carouselUnite{{ $unite->id_unite }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($unite->photos as $key => $photo)
                                <div class="carousel-item @if($key==0) active @endif">
                                    <img src="{{ $photo->url_photo }}" class="d-block w-100" style="height:250px; object-fit:cover;">
                                </div>
                            @endforeach
                        </div>
                        @if($unite->photos->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselUnite{{ $unite->id_unite }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselUnite{{ $unite->id_unite }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Suivant</span>
                            </button>
                        @endif
                    </div>
                @else
                    <img src="https://via.placeholder.com/400x250" class="card-img-top">
                @endif

                <div class="card-body">
                    <h5 class="card-title">Unité {{ $unite->numero ?? '' }} - {{ $unite->type_unite }}</h5>
                    <p>Surface : {{ $unite->surface }} m²</p>
                    <p>Prix : {{ number_format($unite->prix_loyer,0,',',' ') }} €</p>
                    <p>Caution : {{ number_format($unite->caution ?? 0,0,',',' ') }} €</p>
                    <p>{{ $unite->description }}</p>

                    <button class="btn btn-dark"
                            data-bs-toggle="modal"
                            data-bs-target="#modalVisite{{ $unite->id_unite }}">
                        📅 Demander une visite
                    </button>
                    {{-- Inclure le modal --}}
                    @include('site.demande_visite', ['unite' => $unite])
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p class="text-center text-muted">Aucune unité disponible pour ce bien.</p>
        </div>
    @endforelse
</div>

<a href="{{ route('home') }}" class="btn btn-secondary mt-3">← Retour à l’accueil</a>

@endsection