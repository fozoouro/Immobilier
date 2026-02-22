<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Immobilier')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            body {
                background-color: #f8f9fa;
            }
            .navbar-brand {
                font-weight: bold;
            }
            
            .footer {
                background: #212529;
                color: white;
                padding: 20px 0;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">🏠 Mon Immobilier</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Biens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('a-propos') }}">À propos</a>
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