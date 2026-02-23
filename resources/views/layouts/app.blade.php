<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Immobilier')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Background général */
        body {
            background-color: #F3F4F6; /* gris très clair */
            color: #1F2937; /* texte principal gris foncé */
        }

        /* Navbar */
        .navbar {
            background-color: #1E3A8A; /* bleu profond */
        }
        .navbar-brand {
            font-weight: bold;
            color: #FBBF24 !important; /* doré pour le logo */
        }
        .navbar-nav .nav-link {
            color: #F3F4F6 !important;
        }
        .navbar-nav .nav-link:hover {
            color: #FBBF24 !important; /* accent doré au hover */
        }

        h2, h3, h4, h5 {
            color: #1E3A8A;
        }

        /* Footer */
        .footer {
            background-color: #1E3A8A;
            color: #F3F4F6;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* Boutons principaux */
        .btn-dark {
            background-color: #F59E0B;
            border-color: #F59E0B;
            color: #1F2937;
            font-weight: 500;
        }
        .btn-dark:hover {
            background-color: #D97706;
            border-color: #D97706;
            color: #fff;
        }

        /* Boutons secondaires */
        .btn-outline-secondary {
            color: #1F2937;
            border-color: #1F2937;
        }
        .btn-outline-secondary:hover {
            background-color: #1E3A8A;
            color: #FBBF24;
            border-color: #1E3A8A;
        }

        /* Cartes */
        .card {
            border: none;
            border-radius: 12px;
        }

        /* Badges filtres */
        .badge.bg-danger {
            background-color: #F59E0B !important;
            color: #1F2937;
        }

        /* Offcanvas */
        .offcanvas {
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('acceuil') }}">🏠 Mon Immobilier</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('acceuil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bien') }}">Biens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('proprietaire.contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENU -->
<div class="container mt-5">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="footer text-center">
    <div class="container">
        <p class="mb-0">© {{ date('Y') }} Mon Immobilier - Tous droits réservés</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>