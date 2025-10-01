@extends("front.front")
@section("content")
<!-- Hero avec Carousel -->
<section class="container my-4">
    <div id="salleCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset("/storage/".$venue->image)  }}" style="height:400px"   class="d-block w-100  overflow-hidden" alt="Salle">
            </div>
            @foreach ($venue->venue_images as $venue_image)
                            <div class="carousel-item ">
                                <img src="{{ asset("/storage/".$venue_image->image_path)  }}" style="height:400px" class="d-block w-100  overflow-hidden" alt="Salle">
                            </div>

            @endforeach

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
            <h3 class="text-warning">Description</h3>
            <p>{{ $venue->description }}</p>
            <h4 class="mt-4 text-warning">Équipements</h4>
            <ul class="row list-unstyled">
                @foreach ($venue->services as $service)
                    <li class="col-6"><i class=""></i> {{ $service->nom }}</li>

                @endforeach
                
            </ul>
        </div>
    </div>

    <!-- Formulaire de réservation -->
    <div class="col-md-4">
        <div class="info-card">
            <h4>Réservez maintenant</h4>
            <form class="mt-3" action="{{ route("store.reservation") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nom de l'evenement</label>
                    <input type="text" name="title" class="form-control" placeholder="👥">
                </div>

                <div class="mb-3">
                    <label class="form-label">Date et heure de debut</label>
                    <input type="dateTime-Local" name="starts_at" class="form-control">

                </div>
                <div class="mb-3">
                    <label class="form-label">Date et heure de fin</label>
                    <input type="dateTime-Local" name="ends_at" class="form-control">

                </div>
                <input type="hidden" name="venue_id" value="{{ $venue->id }}">

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control"></textarea>

                </div>



                <button class="btn btn-premium w-100" type="submit">Réserver</button>
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
