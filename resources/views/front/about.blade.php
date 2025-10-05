@extends("front.front")
@section("content")
<section class="hero">
    <div class="container">
        <h1 class="display-5 fw-bold">À propos de L-Event</h1>
        <p class="lead">Votre partenaire pour la réservation simple, rapide et professionnelle de salles d’événements.</p>
        <a href="{{ route("venues") }}" class="btn btn-premium btn-lg mt-3">Découvrir nos salles</a>
    </div>
</section> <!-- Mission -->
<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="section-title">Notre mission</h2>
        <p>L-Event a pour mission de faciliter la recherche, la comparaison et la réservation de salles pour tous types d’événements : mariages, anniversaires, conférences et plus encore.</p>
    </div>
</section> <!-- Valeurs -->
<section class="container my-5">
    <h2 class="section-title text-center">Nos valeurs</h2>
    <div class="row g-4 mt-3">
        <div class="col-md-4">
            <div class="card text-center p-4">
                <i class="bi bi-check-circle fs-1 text-primary"></i>
                <h5 class="mt-3">Fiabilité</h5>
                <p>Des salles vérifiées et des partenaires de confiance pour une expérience sans stress.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-4">
                <i class="bi bi-lightning-charge fs-1 text-primary"></i>
                <h5 class="mt-3">Simplicité</h5>
                <p>Un processus de réservation fluide et intuitif, accessible à tous.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-4">
                <i class="bi bi-people fs-1 text-primary"></i>
                <h5 class="mt-3">Proximité</h5>
                <p>Une équipe à votre écoute et un accompagnement personnalisé à chaque étape.</p>
            </div>
        </div>
    </div>
</section> <!-- Comment ça marche -->
<section class="container my-5">
    <h2 class="section-title text-center">Comment ça marche ?</h2>
    <div class="row text-center g-4 mt-3">
        <div class="col-md-4">
            <div class="card p-4">
                <i class="bi bi-search fs-1 text-primary"></i>
                <h5 class="mt-3">1. Recherchez</h5>
                <p>Explorez notre catalogue de salles selon le type d’événement et votre localisation.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <i class="bi bi-calendar-check fs-1 text-primary"></i>
                <h5 class="mt-3">2. Réservez</h5>
                <p>Sélectionnez votre salle et réservez-la instantanément depuis notre plateforme sécurisée.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <i class="bi bi-emoji-smile fs-1 text-primary"></i>
                <h5 class="mt-3">3. Profitez</h5>
                <p>Organisez votre événement en toute sérénité — L-Event s’occupe du reste.</p>
            </div>
        </div>
    </div>
</section> <!-- CTA final -->
<section class="text-center py-5" style="background-color: #0d6efd; color: white;">
    <div class="container">
        <h2 class="fw-bold mb-3">Prêt à réserver votre prochaine salle ?</h2>
        <p>Découvrez nos offres et réservez en ligne dès maintenant.</p>
        <a href="{{ route("venues") }}" class="btn btn-pre btn-lg mt-2">Voir les salles disponibles</a>

    </div>
</section> <!-- Footer -->


@endsection
