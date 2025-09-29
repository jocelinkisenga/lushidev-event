<div>
    <div class="container-fluid p-0">
        <div class="row mb-4">
            <div class="col-6 col-lg-6 col-xxl-9 d-flex">

                <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            </div>
            <div class="col-6 col-lg-6 col-xxl-9 d-flex">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#create">
                    Ajouter une categorie
                </button>


            </div>
        </div>


        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">CATEGORIES</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)

                            <tr>
                                <td>{{ $category->name }}</td>
                                <td class="d-none d-md-table-cell">
                                    <button class="btn btn-sm btn-success">
                                        editer
                                        </button>
                                        <button wire:click="delete({{ $category->id }})" class="btn btn-sm btn-danger">
                                            Supprimer
                                        </button>
                                </td>
                            </tr>

                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Ajout d'une categorie
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="store()">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="mb-3">
                                        <label for="" class="form-label"> Nom de la categorie</label>
                                        <input type="text" class="form-control" wire:model="name" id="" aria-describedby="emailHelpId" placeholder="" />
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Annuler
                                </button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>

            </form>
        </div>
    </div>
</div>

</div>
