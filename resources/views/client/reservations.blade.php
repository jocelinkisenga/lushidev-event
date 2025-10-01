 @extends("front.front")
 @section("content")
 <!-- Header -->
 <section class="container my-5 text-center">
     <h1 class="fw-bold">Mes réservations</h1>
     <p class="text-secondary">Consultez vos réservations passées et à venir</p>
 </section>

 <!-- Liste des réservations -->
 <section class="container">

     <!-- Réservation confirmée -->
     @foreach ($reservations as $reservation)
     <div class="info-card">
         <div class="d-flex justify-content-between align-items-center">
             <h4><span class="text-warning text-bold font-weight-bold">Evenement :</span> {{$reservation->title }} / <span class="text-warning">Salle</span> : {{ $reservation->venue->name }}</h4>

             <span class="status status-confirmed">Confirmée</span>
         </div>
         <p><i class="bi bi-calendar-check"></i> debut :  {{ $reservation->starts_at }} - fin : {{ $reservation->ends_at }}· 👥 {{ $reservation->quantity }} pers. · 💶 {{ $reservation->venue->price }} $</p>
         <div class="d-flex gap-2 mt-2">
             <a href="{{ route("client.bookings.detail", ["bookingId" => $reservation->id]) }}" class="btn btn-outline-warning " wire:navigate><i class="bi bi-eye"></i> Voir</a>

         </div>
     </div>


     @endforeach
 </section>


 @endsection)
