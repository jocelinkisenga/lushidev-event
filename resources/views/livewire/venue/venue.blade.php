<div>

    <div class="container-fluid p-0">
        <div class="row mb-4">
            <div class="col-6 col-lg-6 col-xxl-9 d-flex">

                <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            </div>
            <div class="col-6 col-lg-6 col-xxl-9 d-flex">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create">
                    Ajouter une salle <span> <i class="align-middle" data-feather="send"></i></span>

                </button>


            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">SALLES</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Status</th>
                                <th>Prix</th>
                                <th>Capacite</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($venues as $venue)
                            <tr>
                                <td>{{ $venue->name }}</td>
                                <td>
                                    @if ($venue->avaibility == true )
                                    Salle occupe

                                    @else
                                    salle libre
                                    @endif
                                </td>
                                <td>
                                    {{ $venue->price }} $
                                </td>
                                <td>
                                    {{ $venue->capacity }}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <button class="btn btn-sm btn-success">
                                        editer

                                    </button>
                                    <button wire:click="delete({{ $venue->id }})" class="btn btn-sm btn-danger">
                                        supprimer
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
                        Ajout la salle
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="store()">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="mb-3">
                                <label for="" class="form-label"> Nom de la salle</label>
                                <input type="text" class="form-control" wire:model="name" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> capacite</label>
                                <input type="text" class="form-control" wire:model="capacity" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> Prix</label>
                                <input type="text" class="form-control" wire:model="price" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> Adresse</label>
                                <input type="text" class="form-control" wire:model="location" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> Ajouter une image</label>
                                <input type="file" class="form-control" wire:model="image" id="" aria-describedby="emailHelpId" placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"> Description de la salle</label>
                                <textarea type="text" class="form-control" wire:model="description" id="" aria-describedby="emailHelpId"></textarea>
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
