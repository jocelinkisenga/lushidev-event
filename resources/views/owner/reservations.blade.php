 @extends("front.front")
 @section("content")
 @php
 use \App\Enums\ReservastionEnu;
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
                 <Evennement class="text-warning">Evennement : </span>{{ $booking->title }}
             </h2>
             <h5>
                 </ h5>
                 @switch($booking->status)
                 @case(ReservastionEnu::CANCELLED)
                 <span class="status status-cancelled">Anullee</span>
                 @break
                 @case(ReservastionEnu::DONE)
                 <span class="status status-confirmed">Anullee</span>

                 @break

                 @default
 <span class="status status-pending">En cours</span>

                 @endswitch


         </div>
         <p><i class="bi bi-calendar-check"></i> 12 Octobre 2025 · 👥 {{ $booking->quantity }} pers. {{ $booking->venue->name }}</p>

         <div class="d-flex gap-2 mt-2">
             <a href="details-reservation.html" class="btn btn-outline-light btn-sm"><i class="bi bi-eye"></i> Voir</a>
             <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle"></i> Annuler</button>
             <button class="btn btn-premium btn-sm"><i class="bi bi-download"></i> Facture</button>
         </div>
     </div>


     @endforeach

 </section>


 @endsection)
