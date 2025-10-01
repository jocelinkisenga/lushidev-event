@extends("front.front")
@section("content")

<!-- Header -->
<section class="container my-5 text-center">
    <h1 class="fw-bold">Mes Salles</h1>
    <p class="text-secondary">Vos reservations</p>
</section>

<!-- Liste des réservations -->
<section class="container">

    <!-- Réservation confirmée -->
@foreach ($venues as $venue)
    <div class="info-card">
        <div class="d-flex justify-content-between align-items-center">
            <h4>{{ $venue->name }} – {{ $venue->location }}</h4>
            @if ($venue->active == true)
        <span class="status status-confirmed">Deja actif</span>

            @else
<span class="status status-pending">Non actif</span>

            @endif

        </div>
        <p><i class="bi bi-calendar-check"></i> {{ $venue->capacity }} 👥pers. · 💶 {{ $venue->price }}</p>

        <div class="d-flex gap-2 mt-2">
            <a href="{{ route("owner.bookings",["venueId" => $venue->id]) }}" wire:navigate class="btn btn-outline-light btn-sm"><i class="bi bi-eye"></i> Voir les reservations</a>
            @if ($venue->active == false)
            <a href="{{ route("active.venue",["venueId" => $venue->id]) }}" class="btn btn-outline-success btn-sm" wire:navigate><i class="bi bi-x-circle"></i> activer</a>

            @else
            <a href="{{ route("deactive.venue",["venueId" => $venue->id]) }}" class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle" wire:navigate></i> Desactiver</a>

            @endif


        </div>
    </div>


@endforeach


</section>


@endsection

