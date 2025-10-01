@extends("front.front")
@section("content")
<!-- Header -->
<section class="container my-5 text-center">
    <h1 class="fw-bold">Ajouter une salle</h1>
    <p class="text-secondary">Publiez une nouvelle salle pour la mettre en location</p>
</section>

<!-- Formulaire ajout salle -->
<section class="container">
    <form action="{{ route("owner.venues.store") }}" method="Post" enctype="multipart/form-data">

        @csrf
        <!-- Infos principales -->
        <div class="card-custom">
            <h4><i class="bi bi-house-add"></i> Informations principales</h4>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nom de la salle *</label>
                    <input type="text" name="name" class="form-control" placeholder="Ex: Salle Prestige" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Ville *</label>
                    <input type="text" name="location" class="form-control" placeholder="Ex: Paris" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Capacité *</label>
                    <input type="number" name="capacity" class="form-control" placeholder="Ex: 120" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Prix par jour (€) *</label>
                    <input type="number" name="price" class="form-control" placeholder="Ex: 300" required>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="card-custom">
            <h4><i class="bi bi-card-text"></i> Description *</h4>
            <textarea class="form-control mt-3" name="description" rows="4" placeholder="Décrivez votre salle..." required></textarea>
        </div>

        <!-- Équipements -->
        <div class="card-custom">
            <h4><i class="bi bi-tools"></i> Équipements disponibles</h4>
            <input type="text" class="form-control" name="services">
            <small class="text-secondary">Separes par des virgules : wifi, parking, sonorisation, etc</small>


        </div>
                <div class="card-custom">
                    <h4><i class="bi bi-image"></i>image principale</h4>
                    <div class="mt-3">
                        <input type="file" class="form-control" name="image" accept="images/*">
                        <small class="text-secondary">Formats acceptés : JPG, PNG (max 5 Mo)</small>
                    </div>
                </div>


        <!-- Photos -->
        <div class="card-custom">
            <h4><i class="bi bi-image"></i> Photos</h4>
            <div class="mt-3">
                <input type="file" name="images[]" accept="images/*" class="form-control" multiple>
                <small class="text-secondary">Formats acceptés : JPG, PNG (max 5 Mo)</small>
            </div>
        </div>

        <!-- Disponibilité -->
        <div class="card-custom">
            <h4><i class="bi bi-calendar-week"></i> Disponibilité (optionnel)</h4>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Heure d'ouverture</label>
                    <input type="time" name="opening" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Heure de fermeture</label>
                    <input type="time" name="closing" class="form-control">
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="text-center my-5">
            <button type="submit" class="btn btn-premium px-4"><i class="bi bi-plus-circle"></i> Ajouter la salle</button>
        </div>
    </form>
</section>


@endsection
