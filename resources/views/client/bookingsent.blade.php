@extends("front.front")
@section("content")
<!-- Section succès -->
<section class="container text-center my-5">
    <div class="info-card">
        <div class="success-icon mb-3">
            <i class="bi bi-check-circle-fill"></i>
        </div>
        <h1 class="fw-bold">Réservation En cours de traitement 🎉</h1>
        <p class="text-secondary">Merci ! d'avoir reserver la salle nous vous notifierons dans les prochains instants.</p>
        <p class="mt-3">Code de réservation :</p>
        <p class="code-resa">{{ $reservation->code }}</p>
    </div>
</section>

<!-- Résumé réservation -->
<section class="container my-4">
    <div class="info-card text-start">
        <h4 class="text-warning"><i class="bi bi-receipt"></i> Détails de la réservation</h4>
        <ul class="list-unstyled mt-3">
            <li><strong class="text-warning">Titre :</strong> {{ $reservation->title }}</li>

            <li><strong class="text-warning">Salle :</strong>{{ $reservation->venue->name}}</li>


            <li><strong class="text-warning">Date debut / fin :</strong> {{ $reservation->starts_at }} / {{ $reservation->ends_at }} </li>

            <li><strong class="text-warning">Prix total :</strong> {{ $reservation->venue->price }} $</li>

        </ul>
        <p>
            {{ $reservation->description }}
        </p>
    </div>
</section>


@endsection

