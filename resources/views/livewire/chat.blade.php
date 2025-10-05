{{-- <div class="card h-100 shadow-sm">
    <div class="card-header bg-primary text-white">
        <h6 class="mb-0">chat avec le proprietaire</h6>
    </div>

    <div class="card-body overflow-auto" style="max-height: 400px;">

@foreach ($messages as $msg)


        <div class="d-flex mb-2
        {{ $msg->sender_id == auth()->id() ? 'justify-content-end' : 'justify-content-start'  }}">

<div class="p-2 rounded {{$msg->sender_id == auth()->id() ? 'bg-primary text-white' : 'bg-light border' }} " style="max-width: 70%;">


    <p class="mb-1">
        {{ $msg->message }}
    </p>
    <small class="text-muted">
        {{ $msg->created_at->diffForHumans() }}
    </small>
</div>
</div>
@endforeach


</div>
<div class="card-footer">
    <div class="input-group">
        <input type="text" wire:model="message" class="form-control" placeholder="votre message">
        <button class="btn btn-primary" wire:click="sendMessage">
            envoyer
        </button>
    </div>
</div>
</div> --}}

<div class="chat-container " style="padding: 70px 20px">
    <!-- Sidebar conversations -->
    <div class="sidebar">
        <div class="conversation active">
            <img src="https://i.pravatar.cc/50?img=1" alt="Jean Dupont">
            <span class="badge-notif">3</span>
            <div>
                <strong>Jean Dupont</strong><br>
                <small>Dernier message...</small>
            </div>
        </div>
        <div class="conversation">
            <img src="https://i.pravatar.cc/50?img=2" alt="Salle Prestige">
            <span class="badge-notif">1</span>
            <div>
                <strong>Salle Prestige</strong><br>
                <small>Bonjour, dispo...</small>
            </div>
        </div>
        <div class="conversation">
            <img src="https://i.pravatar.cc/50?img=3" alt="Admin">
            <div>
                <strong>Admin</strong><br>
                <small>Merci pour retour</small>
            </div>
        </div>
    </div>

    <!-- Chat area -->
    <div class="chat-area" wire:poll.5s="loadMessages" id="messages-box">
        <div class="messages" >
            @foreach ($messages as $msg)
            @if ($msg->sender_id == auth()->id() )
            <div class="message sent">
                <p class="mb-1">
                    {{ $msg->messages }}
                </p>
                <small class="text-muted">
                    {{ $msg->created_at->diffForHumans() }}
                </small>

            </div>
            @else
            <div class="message received">{{ $msg->messages }}</div>
            @endif
            @endforeach
        </div>
        <div class="input-area">
            <div class="input-group">
                <input type="text" wire:model="message" class="form-control" placeholder="Écrire un message...">
                <button class="btn btn-send" wire:click="sendMessage">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListerner("livewire:update", () => {
        let box = document.getElementById("messages-box");
        if (box) {
            box.scrollTop = box.scrollHeight;
        }

    })
</script>
