@extends("front.front")
@section("content")
<!-- Header -->
<section class="container my-5 text-center">
    <h1 class="fw-bold">Ajouter une salle</h1>
    <p class="text-secondary">Publiez une nouvelle salle pour la mettre en location</p>
</section>

<!-- Formulaire ajout salle -->
<section class="container">
    <form action="{{ route("store.category") }}" method="Post">
        @csrf
        <!-- Infos principales -->
        <div class="card-custom">
            <h4><i class="bi bi-house-add"></i> Informations principales</h4>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nom de la categorie *</label>
                    <input type="text" name="name" class="form-control" placeholder="Ex: Salle Prestige" required>
                </div>
            </div>
        </div>
        <div class="text-center my-5">
            <button type="submit" class="btn btn-premium px-4"><i class="bi bi-plus-circle"></i> Ajouter une categorie</button>
        </div>
    </form>
</section>


@endsection

