@extends("front.front")
@section("content")
<!-- Section succès -->
<section class="container text-center my-5">
    <div class="info-card">
        <div class="success-icon mb-3">
            <i class="bi bi-check-circle-fill"></i>
        </div>
        <h1 class="fw-bold">Réservation confirmée 🎉</h1>
        <p class="text-secondary">Merci ! Votre réservation a bien été enregistrée.</p>
        <p class="mt-3">Code de réservation :</p>
        <p class="code-resa">{{ $reservation->code }}</p>
    </div>
</section>

<!-- Résumé réservation -->
<section class="container my-4">
    <div class="info-card text-start">
        <h4><i class="bi bi-receipt"></i> Détails de la réservation</h4>
        <ul class="list-unstyled mt-3">
             <li><strong>Titre :</strong> {{ $reservation->title }}</li>

            <li><strong>Salle :</strong>{{ $reservation->venue->name}}</li>

            <li><strong>Date debut / fin :</strong> {{ $reservation->starts_at }} / {{ $reservation->ends_at }} </li>
            <li><strong>Prix total :</strong> {{ $reservation->venue->price }} $</li>
        </ul>
    </div>
</section>

<!-- Actions -->
<section class="container text-center my-5">
    <div class="d-grid gap-3 col-12 col-md-6 mx-auto">
        <button class="btn btn-premium"><i class="bi bi-download"></i> Télécharger la facture</button>
        <a href="mes-reservations.html" class="btn btn-outline-light"><i class="bi bi-calendar-event"></i> Voir mes réservations</a>
        <a href="index.html" class="btn btn-outline-light"><i class="bi bi-house"></i> Retour à l'accueil</a>
    </div>
</section>


@endsection
