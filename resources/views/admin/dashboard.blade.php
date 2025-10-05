@extends("front.front")
@section("content")
@php
use \App\Enums\ReservationEnu;
@endphp

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
        <a href="{{ route("admin.venues") }}" class="btn btn-premium" wire:navigate><i class="bi bi-plus-circle"></i> voir toutes les salles</a>

    </div>
</section>



<!-- Dernières réservations -->
<section class="container my-5">
    <h4 class="mb-3">Dernières réservations reçues</h4>
    @foreach ($latestBookings as $reservation)

    <div class="info-card">
        <div class="d-flex justify-content-between">
            <span><strong>{{ $reservation->title }} </strong></span>
            <span class="text-success">Confirmée</span>
            @switch($reservation->status)
            @case(ReservationEnu::CANCELLED)
            <span class="status status-cancelled">Anullee</span>
            @break
            @case(ReservationEnu::DONE)
            <span class="status status-confirmed">Confirme</span>

            @break

            @default
            <span class="status status-pending">En cours</span>

            @endswitch

        </div>
        <p class="text-secondary mb-0"><i class="bi bi-person"></i> {{ $reservation->user->name }} · <i class="bi bi-calendar"></i> {{ $reservation->starts_at }} </p>

    </div>
    @endforeach
    <div class="text-center mt-4">
        <a href="{{ route("admin.bookings") }}" class="btn btn-premium" wire:navigate><i class="bi bi-plus-circle"></i> voir plus toutes les Reservations</a>
    </div>

</section>


<!-- Dernières categories -->
<section class="container my-5">
    <h4 class="mb-3">Dernières réservations reçues</h4>
        <div class="text-center mt-4">
            <a href="{{ route("category.create") }}" class="btn btn-premium" wire:navigate><i class="bi bi-plus-circle"></i> Ajouter une categorie</a>

        </div>

    @foreach ($latestBookings as $reservation)
    <div class="info-card">
        <div class="d-flex justify-content-between">
            <span><strong></strong></span>

        </div>
    </div>
    @endforeach
    <div class="text-center mt-4">
        <a href="{{ route("admin.bookings") }}" class="btn btn-premium" wire:navigate><i class="bi bi-plus-circle"></i> voir plus toutes les Reservations</a>
    </div>

</section>



@endsection
