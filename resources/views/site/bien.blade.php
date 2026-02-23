@extends('layouts.app')

@section('title', 'bien')

@section('content')

<!-- BARRE DE RECHERCHE ET FILTRE -->
@php
    $activeFilters = collect([
        request('ville'),
        request('quartier'),
        request('prix_min'),
        request('prix_max'),
        request('surface_min'),
        request('surface_max'),
        request('type_unite'),
        request('type_bien'),
    ])->filter()->count();
@endphp

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="mb-0">Nos biens immobiliers</h1>

    <button class="btn btn-dark position-relative"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasFiltres">

        🔍 Filtres

        @if($activeFilters > 0)
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $activeFilters }}
            </span>
        @endif

    </button>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFiltres">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Filtres</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <form method="GET" action="{{ route('bien') }}">

            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control"
                       value="{{ request('ville') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Prix minimum</label>
                <input type="number" name="prix_min" class="form-control"
                       value="{{ request('prix_min') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Prix maximum</label>
                <input type="number" name="prix_max" class="form-control"
                       value="{{ request('prix_max') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Quartier</label>
                <input type="text" name="quartier" class="form-control"
                    value="{{ request('quartier') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Type de bien</label>
                <select name="type_bien" class="form-select">
                    <option value="">Tous</option>
                    <option value="VILLA" {{ request('type_bien') == 'VILLA' ? 'selected' : '' }}>Villa</option>
                    <option value="MAISON" {{ request('type_bien') == 'MAISON' ? 'selected' : '' }}>Maison</option>
                    <option value="IMMEUBLE" {{ request('type_bien') == 'IMMEUBLE' ? 'selected' : '' }}>Immeuble</option>
                    <option value="LOCAL_COMMERCIAL" {{ request('type_bien') == 'LOCAL_COMMERCIAL' ? 'selected' : '' }}>Local commercial</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Type d’unité</label>
                <select name="type_unite" class="form-select">
                    <option value="">Tous</option>
                    <option value="CHAMBRE" {{ request('type_unite') == 'CHAMBRE' ? 'selected' : '' }}>Chambre</option>
                    <option value="STUDIO" {{ request('type_unite') == 'STUDIO' ? 'selected' : '' }}>Studio</option>
                    <option value="APPARTEMENT" {{ request('type_unite') == 'APPARTEMENT' ? 'selected' : '' }}>Appartement</option>
                    <option value="BUREAU" {{ request('type_unite') == 'BUREAU' ? 'selected' : '' }}>Bureau</option>
                    <option value="MAGASIN" {{ request('type_unite') == 'MAGASIN' ? 'selected' : '' }}>Magasin</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Surface minimum (m²)</label>
                <input type="number" step="0.01" name="surface_min" class="form-control"
                    value="{{ request('surface_min') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Surface maximum (m²)</label>
                <input type="number" step="0.01" name="surface_max" class="form-control"
                    value="{{ request('surface_max') }}">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark">
                    Appliquer les filtres
                </button>

                <a href="{{ route('bien') }}" class="btn btn-outline-secondary">
                    Réinitialiser
                </a>
            </div>

        </form>

    </div>
</div>

<!-- LISTE DES BIENS -->
<div class="row">
    @forelse($biens as $bien)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                
                <!-- IMAGE DU BIEN (première unité) -->
                @php
                    $photo = $bien->unites->first() ? $bien->unites->first()->photos->first() : null;
                @endphp
                @if($photo)
                    <img src="{{ $photo->url_photo }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                @else
                    <img src="https://via.placeholder.com/400x250" class="card-img-top">
                @endif

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $bien->titre }}</h5>
                    <p class="card-text">{{ $bien->ville }} - {{ $bien->quartier }}</p>

                    <!-- PRIX MOYEN -->
                    @php
                        $prixMoyen = $bien->unites->avg('prix_loyer');
                    @endphp
                    @if($prixMoyen)
                        <p class="fw-bold text-primary">{{ number_format($prixMoyen, 0, ',', ' ') }} €</p>
                    @else
                        <p class="fw-bold text-secondary">Prix non disponible</p>
                    @endif

                    <a href="{{ route('bien.show', $bien->id_bien) }}" 
                        class="btn btn-dark mt-auto">
                        Voir détails
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p class="text-center text-muted">Aucun bien trouvé pour ce filtre.</p>
        </div>
    @endforelse
</div>

@endsection