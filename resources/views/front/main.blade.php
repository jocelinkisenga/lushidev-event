@extends("front.front")
@section("title", 'Acceuil')
@section("content")
<section class="hero d-flex align-items-center"
style="background: linear-gradient(rgba(70, 65, 65, 0.6), rgba(66, 64, 64, 0.8)), url({{ asset("img/photos/unsplash-3.jpg") }}) center/cover no-repeat;">




    <div class="container">
        <h1 class="fw-bold display-5">Trouvez la salle idéale</h1>
        <p class="lead">Un choix premium pour vos mariages, conférences et événements</p>
        <form class="row g-2 mt-4 justify-content-center">
            <div class="col-12 col-md-3">
                <input type="text" class="form-control" placeholder="📍 Ville ou adresse">
            </div>
            <div class="col-6 col-md-2">
                <input type="date" class="form-control">
            </div>
            <div class="col-6 col-md-2">
                <input type="number" class="form-control" placeholder="👥 Pers.">
            </div>
            <div class="col-12 col-md-2">
                <button class="btn btn-premium btn-sm w-100"><i class="bi bi-search"></i> Rechercher</button>
            </div>
        </form>
    </div>
</section>

<!-- Catégories -->
<section class="container my-5">
    <h2 class="text-center mb-4">Catégories populaires</h2>
    <div class="d-flex flex-wrap justify-content-center gap-2">
        @foreach (\App\Models\Category::all() as $category)
<button class="category-btn"> {{ $category->name }}</button>

        @endforeach
    </div>
</section>

<!-- Salles populaires -->
<section class="container my-5">
    <h2 class="text-center mb-4">Salles populaires</h2>
    <div class="row g-4">
        @foreach ($venues as $venue)

        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset("/storage/".$venue->image)  }}" class="card-img-top overflow-hidden img-fluid" alt="Salle" style="height:200px;">

                <div class="card-body">
                    <h5 class="card-title">{{ $venue->name }}</h5>

                    <p class="card-text"><i class="bi bi-geo-alt"></i> Paris · 👥 120 pers. · 💶 300€/jour</p>
                    <a href="{{ route("salle.single",['title' => $venue->name, "id" => $venue->id]) }}" class="btn btn-premium w-100" wire:navigate>Voir détails</a>



                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Comment ça marche -->
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
</section>


<!-- Avantages -->
<section class="container my-5">
    <h2 class="text-center mb-4">Pourquoi nous choisir ?</h2>
    <div class="row text-center g-4">
        <div class="col-md-3"><i class="bi bi-shield-lock fs-1 text-warning"></i>
            <p>Paiement sécurisé</p>
        </div>
        <div class="col-md-3"><i class="bi bi-building fs-1 text-warning"></i>
            <p>Large choix</p>
        </div>
        <div class="col-md-3"><i class="bi bi-star fs-1 text-warning"></i>
            <p>Avis vérifiés</p>
        </div>
        <div class="col-md-3"><i class="bi bi-headset fs-1 text-warning"></i>
            <p>Support 24/7</p>
        </div>
    </div>
</section>


@endsection
