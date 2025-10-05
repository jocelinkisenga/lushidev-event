@extends("front.front")
@section("content")
@php
use \App\Enums\ReservationEnu;
@endphp

<!-- Salle -->
<section class="container my-4">
    <div class="card-custom highlight">
        <h4><i class="bi bi-house-door"></i> {{ $booking->venue->name }} – </h4>
        <p class="text-secondary mb-1"><i class="bi bi-geo-alt"></i> {{ $booking->venue->location }}</p>
        <p class="text-secondary mb-1"><i class="bi bi-people"></i> Capacité : {{ $booking->venue->capacity }} personnes</p>

        <img src="{{ asset("/storage/".$booking->venue->image)  }}" alt="{{ $booking->venue->name }}" class="img-fluid rounded mt-2">


    </div>
</section>

<!-- Infos réservation -->
<section class="container my-4">
    <div class="card-custom">
        <h4 class="text-warning"><i class="bi bi-calendar-event"></i> Détails de votre réservation</h4>
        <h6><i class="bi bi-house-door"></i> <span class="text-warning">nom de l'evenement:</span> {{ $booking->title }} – </h6>


        <ul class="list-unstyled mt-3">
            <li><i class="bi bi-calendar"></i> <span class="text-warning">Date et heure de debut :</span> <strong>{{ $booking->starts_at }}</strong></li>

            <li><i class="bi bi-clock"></i> <span class="text-warning">Date et heure de cloture :</span> <strong>{{ $booking->ends_at }}</strong></li>

            <li><i class="bi bi-people"></i> <span class="text-warning">Invités :</span> <strong>100</strong></li>

            <li><i class="bi bi-cash"></i><span class="text-warning"> Prix total : </span> <strong>{{ $booking->venue->price }}</strong></li>


            @switch($booking->status)
            @case(ReservationEnu::CANCELLED)
            <li><i class="bi bi-check-circle text-danger"></i> Statut : <strong>Annulee</strong></li>

            @break
            @case(ReservationEnu::DONE)
            <li><i class="bi bi-check-circle text-success"></i> Statut : <strong>Confirmée</strong></li>


            @break

            @default
            <li><i class="bi bi-check-circle text-warning"></i> Statut : <strong>en cours</strong></li>


            @endswitch

        </ul>
    </div>
</section>

<!-- Infos client -->
{{-- <section class="container my-4">
    <div class="card-custom">
        <h4><i class="bi bi-person"></i> Informations du Propri</h4>
        <ul class="list-unstyled mt-3">
            <li><i class="bi bi-person-circle"></i> Nom : <strong>{{ $booking->user->name }}</strong></li>
<li><i class="bi bi-envelope"></i> Email : <strong>{{ $booking->user->email }}</strong></li>
<li><i class="bi bi-telephone"></i> Téléphone : <strong>{{ $booking->user->phone }}</strong></li>
</ul>
</div>
</section> --}}

<!-- Actions rapides -->
<section class="container my-5 text-center">
    <div class="d-grid gap-3 col-12 col-md-6 mx-auto">
        {{-- @if ($booking->status === ReservationEnu::ONLINE)
            <a href="{{ route('owner.bookings.confirm', ["bookingId" => $booking->id]) }}" wire:navigate class="btn btn-premium"><i class="bi bi-check2-circle"></i> Confirmer</a>
        <a href="{{ route('owner.bookings.cancel', ["bookingId" => $booking->id]) }}" wire:navigate class="btn btn-outline-danger"><i class="bi bi-x-circle"></i> Annuler</a>
        @endif --}}

        @if(Auth::user()->role != \App\Enums\RoleEnum::EMPLOYEUR)
        <a href="{{ route("chat.create",["venueId" => $booking->venue->id]) }}" class="btn btn-outline-warning" wire:navigate><i class="bi bi-chat-dots"></i> Contacter le proprietaire</a>
        @else
        <a href="{{ route("chat.create",["venueId" => $booking->venue->id]) }}" class="btn btn-outline-warning" wire:navigate><i class="bi bi-chat-dots"></i> Contacter le client</a>

        @endif

    </div>
</section>


@endsection
