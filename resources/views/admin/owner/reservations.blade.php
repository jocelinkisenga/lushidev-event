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
     <div class="info-card">
         <div class="d-flex justify-content-between align-items-center">
             <h4>Salle Prestige – Paris</h4>
             <span class="status status-confirmed">Confirmée</span>
         </div>
         <p><i class="bi bi-calendar-check"></i> 12 Octobre 2025 · 👥 100 pers. · 💶 300€</p>
         <div class="d-flex gap-2 mt-2">
             <a href="details-reservation.html" class="btn btn-outline-light btn-sm"><i class="bi bi-eye"></i> Voir</a>
             <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle"></i> Annuler</button>
             <button class="btn btn-premium btn-sm"><i class="bi bi-download"></i> Facture</button>
         </div>
     </div>

     <!-- Réservation à venir -->
     <div class="info-card">
         <div class="d-flex justify-content-between align-items-center">
             <h4>Salle Élite – Lyon</h4>
             <span class="status status-pending">À venir</span>
         </div>
         <p><i class="bi bi-calendar-check"></i> 5 Novembre 2025 · 👥 50 pers. · 💶 200€</p>
         <div class="d-flex gap-2 mt-2">
             <a href="details-reservation.html" class="btn btn-outline-light btn-sm"><i class="bi bi-eye"></i> Voir</a>
             <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle"></i> Annuler</button>
         </div>
     </div>

     <!-- Réservation terminée -->
     <div class="info-card">
         <div class="d-flex justify-content-between align-items-center">
             <h4>Salle Horizon – Marseille</h4>
             <span class="status status-done">Terminée</span>
         </div>
         <p><i class="bi bi-calendar-check"></i> 20 Septembre 2025 · 👥 80 pers. · 💶 250€</p>
         <div class="d-flex gap-2 mt-2">
             <button class="btn btn-premium btn-sm"><i class="bi bi-download"></i> Facture</button>
         </div>
     </div>

     <!-- Réservation annulée -->
     <div class="info-card">
         <div class="d-flex justify-content-between align-items-center">
             <h4>Salle Classique – Bordeaux</h4>
             <span class="status status-cancelled">Annulée</span>
         </div>
         <p><i class="bi bi-calendar-check"></i> 10 Août 2025 · 👥 30 pers. · 💶 150€</p>
         <div class="d-flex gap-2 mt-2">
             <a href="nouvelle-reservation.html" class="btn btn-outline-light btn-sm"><i class="bi bi-arrow-repeat"></i> Réserver à nouveau</a>
         </div>
     </div>

 </section>


 @endsection)

