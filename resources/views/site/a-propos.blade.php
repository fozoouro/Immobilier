@extends('layouts.app')

@section('content')

<!-- HERO BANNER FULL WIDTH -->
<section style="background: url('{{ asset('images/hero-immo.jpg') }}') center/cover no-repeat; height: 90vh; position: relative;">
    <div style="background: rgba(0,0,0,0.55); height:100%; display:flex; align-items:center; justify-content:center;">
        <div class="text-center text-white">
            <h1 class="display-3 fw-bold">L’Excellence Immobilière</h1>
            <p class="lead mt-4">Nous transformons vos projets immobiliers en réussites durables.</p>
        </div>
    </div>
</section>

<!-- QUI SOMMES NOUS -->
<section class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Une expertise au service de votre patrimoine</h2>
                <p class="text-muted">
                    Nous accompagnons propriétaires et locataires dans une relation équilibrée et transparente.
                    Notre mission est de valoriser le patrimoine immobilier tout en offrant aux locataires un cadre de vie confortable, sécurisé et bien géré.
                </p>
                <p class="text-muted">
                    Nous croyons qu’une gestion immobilière moderne doit créer de la confiance des deux côtés.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/entreprise-premium.jpg') }}" 
                     class="img-fluid rounded-4 shadow-lg" 
                     alt="Entreprise">
            </div>
        </div>
    </div>
</section>

<!-- NOS SERVICES PREMIUM -->
<section class="py-5 bg-light">
    <div class="container py-5 text-center">
        <h2 class="fw-bold mb-5">Nos Services</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-5 bg-white shadow-sm rounded-4 h-100 service-card">
                    <h4 class="fw-bold mb-3">Gestion complète</h4>
                    <p class="text-muted">
                        Administration, suivi locatif, gestion technique et accompagnement stratégique.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-5 bg-white shadow-sm rounded-4 h-100 service-card">
                    <h4 class="fw-bold mb-3">Organisation de visites</h4>
                    <p class="text-muted">
                        Planification optimisée et sélection rigoureuse des candidats.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-5 bg-white shadow-sm rounded-4 h-100 service-card">
                    <h4 class="fw-bold mb-3">Valorisation immobilière</h4>
                    <p class="text-muted">
                        Stratégies marketing modernes et optimisation de rentabilité.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Un accompagnement pour tous</h2>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="p-5 bg-light rounded-4 shadow-sm h-100">
                    <h4 class="fw-bold mb-3">Pour les propriétaires</h4>
                    <p class="text-muted">
                        Gestion complète, optimisation des revenus locatifs,
                        suivi administratif et tranquillité d’esprit.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-5 bg-light rounded-4 shadow-sm h-100">
                    <h4 class="fw-bold mb-3">Pour les locataires</h4>
                    <p class="text-muted">
                        Logements de qualité, organisation rapide des visites,
                        accompagnement personnalisé et communication fluide.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION CHIFFRES -->
<section class="py-5 text-white" style="background:#111;">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-md-4">
                <h2 class="fw-bold display-5">+150</h2>
                <p>Biens gérés</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold display-5">98%</h2>
                <p>Satisfaction client</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold display-5">10+</h2>
                <p>Années d’expérience</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-5">
    <div class="container text-center py-5">
        <h2 class="fw-bold mb-4">Confiez-nous votre projet</h2>
        <p class="text-muted mb-4">
            Nous sommes prêts à vous accompagner dans chaque étape de votre investissement immobilier.
        </p>
        <a href="{{ route('home') }}" class="btn btn-dark btn-lg px-5 rounded-pill">
            Découvrir nos biens
        </a>
    </div>
</section>

@endsection