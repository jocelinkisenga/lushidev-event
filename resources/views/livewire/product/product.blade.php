<div>
    <div class="container-fluid p-0">
        <div class="row mb-4">
            <div class="col-6 col-lg-6 col-xxl-9 d-flex">

                <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            </div>
            <div class="col-6 col-lg-6 col-xxl-9 d-flex">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#create">
                    Ajouter un produit
                </button>


            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">PRODUITS</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th class="d-none d-xl-table-cell">Quantite</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse ($products as $item)
                                <td>{{ $item->name }}</td>
                                <td class="d-none d-xl-table-cell">{{ $item->quantity }}</td>
                                <td class="d-none d-xl-table-cell">
                                    <button class="btn btn-sm btn-success">
                                        editer
                                    </button>
                                    <button wire:click="delete({{ $item->id }})" class="btn btn-sm btn-danger">
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
    <div wire:ignore class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
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
                                <label for="" class="form-label"> Nom du produit</label>
                                <input type="text" class="form-control" wire:model="name" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> Quantite</label>
                                <input type="text" class="form-control" wire:model="quantity" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> selectionner une categorie</label>

                                <select class="form-select form-select-lg" wire:model="category_id" id="">
                                    <option selected>selectionner une categorie</option>
                                    @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>

                                    @endforeach

                                </select>


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
