@extends('front.front')
@section("content")
<!-- Carte Auth -->
<div class="auth-card">
    <h2 class="text-center fw-bold mb-4">L-Event</h2>

    <!-- Onglets -->
    <ul class="nav nav-tabs justify-content-center mb-4" id="authTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button">
                Connexion
            </button>
        </li>

    </ul>

    <div class="tab-content">
        <!-- Connexion -->
        <div class="tab-pane fade show active" id="login" role="tabpanel">
            <form class="mb-3" action="{{ route("login") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="input_type" class="form-control" placeholder="" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required />
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <input type="checkbox" id="remember" />
                        <label for="remember" class="ms-1">Se souvenir de moi</label>
                    </div>
                    <a href="{{ route("password.request") }}" class="text-warning small">Mot de passe oublié ?</a>
                </div>
                <button type="submit" class="btn btn-premium w-100">
                    Se connecter
                </button>
            </form>

            <a href="{{ route("register") }}" class="text-warning small mt-4" wire:navigate>vous n'avez pas de compte, creer ici ?</a>


        </div>

        <!-- Inscription -->

    </div>
</div>


@endsection
