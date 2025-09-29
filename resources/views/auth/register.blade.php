<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>S'Authentifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">

    <style>
        body {
            background-color: #0f0f0f;
            color: #eee;
            font-family: "Inter", sans-serif;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
            padding: 2rem;
            max-width: 400px;
            margin: auto;
            margin-top: 5vh;
        }

        .btn-premium {
            background: linear-gradient(45deg, #d4af37, #ffdd55);
            border: none;
            color: #111;
            font-weight: 600;
        }

        input {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            color: #eee !important;
        }

        input:focus {
            border-color: #d4af37 !important;
            box-shadow: none !important;
        }

        .nav-tabs .nav-link {
            color: #aaa;
            border: none;
        }

        .nav-tabs .nav-link.active {
            color: #fff;
            background: none;
            border-bottom: 2px solid #d4af37;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <!-- Carte Auth -->
    <div class="auth-card">
        <h2 class="text-center fw-bold mb-4">SalleBooking</h2>

        <!-- Onglets -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="authTabs" role="tablist">

            <li class="nav-item">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button">
                    Inscription
                </button>
            </li>
        </ul>

        <div class="tab-content">


            <!-- Inscription -->
            <div class="tab-pane fade show active" id="register" role="tabpanel">

                <form class="mb-3" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nom complet</label>
                        <input type="text" name="name" class="form-control" placeholder="Jean Dupont" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="exemple@mail.com" required />

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="" required />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type de compte</label>
                        <select class="form-select" name="role" required>
                            <option value="">Choisir...</option>
                            <option value="2">Organisateur d'evenement</option>
                            <option value="3">
                                Propriétaire d'une salle
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-premium w-100">
                        Créer un compte
                    </button>
                </form>
                <a href="{{ route("register") }}" class="text-warning small mt-4">vous avez un compte? connectez- vous ici</a>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <p class="text-secondary">
            &copy; 2025 SalleBooking · Tous droits réservés
        </p>
    </footer>
    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}" type="script"></script>
    <script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}" type="script"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
