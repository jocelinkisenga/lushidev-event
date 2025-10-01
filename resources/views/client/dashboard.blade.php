@extends("front.front")
@section("content")
@php
    use \App\Models\Reservation;
    use \App\Enums\ReservationEnu;
@endphp
<!-- Header -->
<section class="container my-5 text-center">
    <h1 class="fw-bold">Bienvenue, {{ Auth::user()->name }} 👋</h1>
    <p class="text-secondary">Voici un aperçu de vos réservations</p>
</section>

<!-- Statistiques -->
<section class="container my-4">
    <div class="row g-3">
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-calendar-check text-success fs-2"></i>
                <h3>{{ Reservation::whereStatus(ReservationEnu::DONE)->whereUser_id(Auth::user()->id)->count() }}</h3>

                <p>Confirmées</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-hourglass-split text-warning fs-2"></i>
                <h3>{{ Reservation::whereStatus(ReservationEnu::ONLINE)->whereUser_id(Auth::user()->id)->count() }}</h3>


                <p>À venir</p>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat">
                <i class="bi bi-x-circle text-danger fs-2"></i>
                <h3>{{ Reservation::whereStatus(ReservationEnu::CANCELLED)->whereUser_id(Auth::user()->id)->count() }}</h3>


                <p>Annulées</p>
            </div>
        </div>
    </div>
</section>

<!-- Prochaine réservation -->
<section class="container my-5">
    <div class="highlight-card">
        <h4>
            <i class="bi bi-calendar-event"></i> Votre prochaine
            réservation
        </h4>
        <p class="mt-3 fw-bold">Salle Prestige – Paris</p>
        <p>
            <i class="bi bi-calendar"></i> 12 Octobre 2025 · 👥 100
            pers. · 💶 300€
        </p>
        <a href="details-reservation.html" class="btn btn-premium mt-2">Voir détails</a>
    </div>
</section>

<!-- Dernières réservations -->
<section class="container my-5">
    <h4 class="mb-3">Dernières réservations</h4>
        @foreach (Reservation::whereUser_id(Auth::user()->id)->latest()->get() as $item)
    <div class="info-card">
        <div class="d-flex justify-content-between">
            <span>Evenement : {{ $item->title }}</span>
                             @switch($item->status)
                             @case(ReservationEnu::CANCELLED)
                             <span class="status status-cancelled">Anullee</span>
                             @break
                             @case(ReservationEnu::DONE)
                             <span class="status status-confirmed">Confirme</span>

                             @break

                             @default
                             <span class="status status-pending">En cours</span>

                             @endswitch

            {{-- <span class="text-warning">À venir</span> --}}
        </div>
        <p class="text-secondary mb-0">
            <i class="bi bi-calendar"></i> {{ $item->starts_at }} a {{ $item->ends_at }} · 💶 {{ $item->venue->price }} $
        </p>
    </div>


        @endforeach
</section>

<!-- Actions rapides -->
<section class="container text-center my-5">
    <div class="d-grid gap-3 col-12 col-md-6 mx-auto">
        <a href="{{ route("venues") }}" class="btn btn-premium"><i class="bi bi-plus-circle" wire:navigate></i> Nouvelle réservation</a>
        <a href="{{ route("client.reservations") }}" class="btn btn-outline-light" wire:navigate><i class="bi bi-journal-text"></i> Voir toutes mes
            réservations</a>
    </div>
</section>



@endsection
