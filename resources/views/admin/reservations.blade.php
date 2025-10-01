 @extends("front.front")
 @section("content")
 @php
 use \App\Enums\ReservationEnu;
 @endphp
 <!-- Header -->
 <section class="container my-5 text-center">
     <h1 class="fw-bold">Mes réservations</h1>
     <p class="text-secondary">Consultez vos réservations passées et à venir</p>
 </section>

 <!-- Liste des réservations -->
 <section class="container">

     @foreach ($bookings as $booking)
     <!-- Réservation confirmée -->
     <div class="info-card">
         <div class="d-flex justify-content-between align-items-center">
             <h2>
                 <span class="text-warning">Evennement : </span>{{ $booking->title }}
             </h2>
             <h5>
                 </ h5>
                 @switch($booking->status)
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
         <p><i class="bi bi-calendar-check"></i><span class="text-warning">DEBUT</span> : {{ $booking->starts_at }} · <span class="text-warning"> FIN </span> : {{ $booking->ends_at }} . <span class="text-warning">SALLE : </span> {{ $booking->venue->name }}</p>





         <div class="d-flex gap-2 mt-2">
             <a href="{{ route("owner.bookings.detail",["bookingId" => $booking->id]) }}" class="btn btn-outline-light btn-sm" wire:navigate><i class="bi bi-eye"></i> Voir detail</a>

         </div>
     </div>


     @endforeach

 </section>


 @endsection)
