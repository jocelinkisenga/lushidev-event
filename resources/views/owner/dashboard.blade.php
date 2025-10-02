@extends("front.front")
@section("content")
<!-- Header -->
<section class="container my-5 text-center">
    <h1 class="fw-bold">Dashboard Propriétaire</h1>
    <p class="text-secondary">Gérez vos salles et suivez vos performances</p>
</section>

<!-- Statistiques -->
<section class="container my-4">
    <div class="row g-3">
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-house-door fs-2 text-warning"></i>
                <h3>5</h3>
                <p>Salles actives</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-calendar-check fs-2 text-success"></i>
                <h3>12</h3>
                <p>Réservations ce mois</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-graph-up-arrow fs-2 text-info"></i>
                <h3>85%</h3>
                <p>Taux d’occupation</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-cash-coin fs-2 text-success"></i>
                <h3>4 500€</h3>
                <p>Revenus ce mois</p>
            </div>
        </div>
    </div>
        <div class="text-center mt-4">
            <a href="{{ route("owner.venues.create") }}" class="btn btn-premium" wire:navigate><i class="bi bi-plus-circle"></i> Ajouter une salle</a>
        </div>

</section>
<!-- Gestion des salles -->
<section class="container my-5">
    <h4 class="mb-3">Mes salles</h4>
    @foreach ($latestVenues as $venue)
    <div class="info-card d-flex justify-content-between align-items-center">
        <span>{{ $venue->name }} – {{ $venue->location }}</span>
        <div class="btn-group">
            <button class="btn btn-outline-light btn-sm"><i class="bi bi-pencil"></i> Éditer</button>
            <button class="btn btn-outline-success btn-sm"><i class="bi bi-x-circle"></i> voir plus</button>
        </div>
    </div>

    @endforeach

    <div class="text-center mt-4">
        <a href="{{ route("owner.venues") }}" class="btn btn-premium" wire:navigate><i class="bi bi-plus-circle"></i> voir toutes les salles</a>

    </div>
</section>



<!-- Dernières réservations -->
{{-- <section class="container my-5">
    <h4 class="mb-3">Dernières réservations reçues</h4>
    <div class="info-card">
        <div class="d-flex justify-content-between">
            <span><strong>Salle Prestige – Paris</strong></span>
            <span class="text-success">Confirmée</span>
        </div>
        <p class="text-secondary mb-0"><i class="bi bi-person"></i> Marie Dupont · <i class="bi bi-calendar"></i> 12 Oct 2025 · 💶 300€</p>
    </div>
    <div class="info-card">
        <div class="d-flex justify-content-between">
            <span><strong>Salle Horizon – Marseille</strong></span>
            <span class="text-warning">En attente</span>
        </div>
        <p class="text-secondary mb-0"><i class="bi bi-person"></i> Karim B. · <i class="bi bi-calendar"></i> 20 Oct 2025 · 💶 250€</p>
    </div>
    <div class="text-center mt-4">
        <a href="" class="btn btn-premium"><i class="bi bi-plus-circle"></i> voir plus</a>
    </div>

</section> --}}

@endsection
