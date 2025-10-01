<div>
  <div class="card h-100 shadow-sm">
    <div class="card-header bg-primary text-white">
        <h6 class="mb-0">chat avec le proprietaire</h6>
    </div>
    {{-- messages --}}
    <div class="card-body overflow-auto" style="max-height: 400px;">
        {{-- foreach  messages--}}

        <div class="d-flex mb-2  justify-content-end justify-content-start">
            <div class="p-2 rounded bg-primary text-white bg-light border" style="max-width: 70%;">
                <p class="mb-1">

                </p>
                <small class="text-muted">

                </small>
            </div>
        </div>
        {{-- end foreach --}}
    </div>
    <div class="card-footer">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="votre message">
            <button class="btn btn-primat">
                envoyer
            </button>
        </div>
    </div>
  </div>
</div>
