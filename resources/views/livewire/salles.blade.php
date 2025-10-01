<div>
    <!-- Header -->
    <header class="page-header">
        <h1 class="fw-bold">Toutes les salles</h1>
        <p>Explorez nos espaces premium pour vos événements</p>
        <form class="row g-2 justify-content-center mt-3">
            <div class="col-8 col-md-4">
                <input type="text" class="form-control" placeholder="🔍 Rechercher par ville ou salle">
            </div>
            <div class="col-4 col-md-2">
                <button class="btn btn-premium w-100"><i class="bi bi-search"></i> Rechercher</button>
            </div>
        </form>
    </header>

    <!-- Filtres -->
    <section class="container my-4">
        <div class="filter-card">
            <form class="row g-3" wire:submit="search()">
                <div class="col-12 col-md-3">
                    <input wire:model="location" type="text" class="form-control" placeholder="📍 Ville">
                </div>
                {{-- <div class="col-6 col-md-2">
                    <input type="date" class="form-control">
                </div> --}}
                <div class="col-6 col-md-2">
                    <input type="number" wire:model="capacity" class="form-control" placeholder="👥 Pers.">
                </div>
                <div class="col-6 col-md-2">
                    <input type="number" wire:model="price" class="form-control" placeholder="💶  exp: 100">


                    {{-- <select class="form-select" wire:model="price">
                        <option>💶 Prix</option>
                        <option value="100">-100€</option>

                        <option value="300">100-300€</option>
                        <option value="1000">+300€</option>
                    </select> --}}
                </div>
                {{-- <div class="col-6 col-md-2">
                    <select class="form-select">
                        <option>🎉 Type</option>
                        <option>Mariage</option>
                        <option>Conférence</option>
                        <option>Anniversaire</option>
                    </select>
                </div> --}}
                <div class="col-12 col-md-1 d-grid">
                    <button class="btn btn-premium" type="submit"><i class="bi bi-funnel"></i> Rechercher</button>
                </div>
            </form>
        </div>
    </section>


    <!-- Liste des salles -->
    <section class="container my-5">
        <div class="row g-4">
            @forelse ($venues as $venue)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset("/storage/".$venue->image)  }}" class="card-img-top overflow-hidden" alt="Salles" style="height:200px;">


                    <div class="card-body">
                        <h5 class="card-title">{{ $venue->name }}</h5>
                        <p class="card-text"><i class="bi bi-geo-alt"></i> {{ $venue->location }} · 👥 {{ $venue->capacity }} pers. · 💶 {{ $venue->price }} $/jour</p>
                        <a href="{{ route("salle.single",['title' => $venue->name, "id" => $venue->id]) }}" class="btn btn-premium w-100" wire:navigate>Voir détails</a>

                    </div>
                </div>
            </div>

            @endforeach
        </div>

        <!-- Pagination -->
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
            </ul>
        </nav>
    </section>


</div>
