@extends("front.front")
@section("content")
<div class="auth-card">
    <h2 class="text-center fw-bold mb-4">L-Event</h2>

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
            <a href="{{ route("login") }}" class="text-warning small mt-4" wire:navigate>vous avez un compte? connectez- vous ici</a>

        </div>
    </div>
</div>

@endsection
