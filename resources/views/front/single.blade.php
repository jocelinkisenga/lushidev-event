@extends("front.front")
@section("content")
<!-- Hero avec Carousel -->
<section class="container my-4">
    <div id="salleCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset("/storage/".$venue->image)  }}" class="d-block w-100" alt="Salle">

            </div>
            <div class="carousel-item">
                <img src="{{ asset("/storage/".$venue->image)  }}" class="d-block w-100" alt="Salle">

            </div>
            <div class="carousel-item">
                <img src="{{ asset("/storage/".$venue->image)  }}" class="d-block w-100" alt="Salle">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#salleCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#salleCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- Infos principales -->
<section class="container my-4">
    <h1 class="fw-bold">{{ $venue->title }}</h1>
    <p><i class="bi bi-geo-alt"></i> {{ $venue->location }} · 👥 {{ $venue->capacity }} pers. · 💶 {{ $venue->price }}$/jour</p>
    <p class="text-warning"><i class="bi bi-star-fill"></i> 4.8 (120 avis)</p>
</section>

<!-- Description & équipements -->
<section class="container my-5 row g-4">
    <div class="col-md-8">
        <div class="info-card">
            <h3>Description</h3>
            <p>{{ $venue->description }}</p>
            <h4 class="mt-4">Équipements</h4>
            <ul class="row list-unstyled">
                <li class="col-6"><i class="bi bi-wifi"></i> Wi-Fi</li>
                <li class="col-6"><i class="bi bi-speaker"></i> Sonorisation</li>
                <li class="col-6"><i class="bi bi-lightbulb"></i> Éclairage LED</li>
                <li class="col-6"><i class="bi bi-people"></i> Chaises & tables</li>
            </ul>
        </div>
    </div>

    <!-- Formulaire de réservation -->
    <div class="col-md-4">
        <div class="info-card">
            <h4>Réservez maintenant</h4>
            <form class="mt-3">
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="d" class="form-control">
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre de personnes</label>
                    <input type="number" class="form-control" placeholder="👥">
                </div>
                <button class="btn btn-premium w-100">Réserver</button>
            </form>
        </div>
    </div>
</section>

<!-- Avis clients -->
<section class="container my-5">
    <h3 class="mb-4">Avis clients</h3>
    <div class="info-card mb-3">
        <p class="fw-bold"><i class="bi bi-person-circle"></i> Marie Dupont</p>
        <p>"Salle magnifique, service impeccable. Je recommande à 100%."</p>
    </div>
    <div class="info-card mb-3">
        <p class="fw-bold"><i class="bi bi-person-circle"></i> Karim B.</p>
        <p>"Parfait pour notre conférence, équipements modernes et staff disponible."</p>
    </div>
</section>

<!-- CTA Sticky -->
<div class="sticky-cta d-md-none">
    <span class="fw-bold">300€/jour</span>
    <button class="btn btn-premium">Réserver</button>
</div>


@endsection
