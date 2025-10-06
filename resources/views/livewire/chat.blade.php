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


{{-- <div class="chat-container " style="padding: 70px 20px">
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
</script> --}}

<div>
<div class="chat-container d-flex" style="height: 100vh; font-family: Arial, sans-serif;">
    <!-- Sidebar conversations -->
    <div class="sidebar bg-light border-end p-3 d-none d-lg-block" style="width: 250px; overflow-y: auto;">
        <div class="conversation active d-flex align-items-center mb-3 p-2 rounded" style="cursor: pointer;">
            <img src="https://i.pravatar.cc/50?img=1" alt="Jean Dupont" class="rounded-circle me-2">
            <span class="badge bg-danger position-absolute" style="top:5px; right:10px;">3</span>
            <div>
                <strong>Jean Dupont</strong><br>
                <small class="text-muted">Dernier message...</small>
            </div>
        </div>
        <div class="conversation d-flex align-items-center mb-3 p-2 rounded">
            <img src="https://i.pravatar.cc/50?img=2" alt="Salle Prestige" class="rounded-circle me-2">
            <span class="badge bg-danger position-absolute" style="top:5px; right:10px;">1</span>
            <div>
                <strong>Salle Prestige</strong><br>
                <small class="text-muted">Bonjour, dispo...</small>
            </div>
        </div>
        <div class="conversation d-flex align-items-center mb-3 p-2 rounded">
            <img src="https://i.pravatar.cc/50?img=3" alt="Admin" class="rounded-circle me-2">
            <div>
                <strong>Admin</strong><br>
                <small class="text-muted">Merci pour retour</small>
            </div>
        </div>
    </div>

    <!-- Chat toggle button for mobile -->
    <button class="btn btn-primary d-lg-none position-fixed" id="toggleSidebar" style="top: 20px; left: 20px; z-index: 1000;">
        <i class="bi bi-list"></i>
    </button>

    <!-- Sidebar mobile overlay -->
    <div class="sidebar-overlay d-lg-none position-fixed bg-light p-3" id="mobileSidebar" style="width: 250px; height: 100vh; top: 0; left: -260px; overflow-y: auto; transition: 0.3s; z-index: 999;">
        <button class="btn btn-secondary mb-3" id="closeSidebar"><i class="bi bi-x-lg"></i></button>
        <div class="conversation active d-flex align-items-center mb-3 p-2 rounded" style="cursor: pointer;">
            <img src="https://i.pravatar.cc/50?img=1" alt="Jean Dupont" class="rounded-circle me-2">
            <span class="badge bg-danger position-absolute" style="top:5px; right:10px;">3</span>
            <div>
                <strong>Jean Dupont</strong><br>
                <small class="text-muted">Dernier message...</small>
            </div>
        </div>
        <div class="conversation d-flex align-items-center mb-3 p-2 rounded">
            <img src="https://i.pravatar.cc/50?img=2" alt="Salle Prestige" class="rounded-circle me-2">
            <span class="badge bg-danger position-absolute" style="top:5px; right:10px;">1</span>
            <div>
                <strong>Salle Prestige</strong><br>
                <small class="text-muted">Bonjour, dispo...</small>
            </div>
        </div>
        <div class="conversation d-flex align-items-center mb-3 p-2 rounded">
            <img src="https://i.pravatar.cc/50?img=3" alt="Admin" class="rounded-circle me-2">
            <div>
                <strong>Admin</strong><br>
                <small class="text-muted">Merci pour retour</small>
            </div>
        </div>
    </div>

    <!-- Chat area -->
    <div class="chat-area flex-grow-1 d-flex flex-column bg-white border p-3" wire:poll.5s="loadMessages" id="messages-box" style="overflow-y: auto;">
        <div class="messages flex-grow-1 mb-3">
            @foreach ($messages as $msg)
                @if ($msg->sender_id == auth()->id())
                    <div class="message sent bg-primary text-white p-2 rounded mb-2 align-self-end" style="max-width: 70%;">
                        <p class="mb-1">{{ $msg->messages }}</p>
                        <small class="text-light">{{ $msg->created_at->diffForHumans() }}</small>
                    </div>
                @else
                    <div class="message received bg-light p-2 rounded mb-2 align-self-start" style="max-width: 70%;">
                        <p class="mb-1">{{ $msg->messages }}</p>
                        <small class="text-muted">{{ $msg->created_at->diffForHumans() }}</small>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Input area -->
        <div class="input-area mt-auto">
            <div class="input-group">
                <input type="text" wire:model="message" class="form-control" placeholder="Écrire un message...">
                <button class="btn btn-primary" wire:click="sendMessage">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Scroll automatique Livewire
    document.addEventListener("livewire:update", () => {
        const box = document.getElementById("messages-box");
        if (box) box.scrollTop = box.scrollHeight;
    });

    // Sidebar toggle mobile
    const toggleBtn = document.getElementById('toggleSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const mobileSidebar = document.getElementById('mobileSidebar');

    toggleBtn.addEventListener('click', () => {
        mobileSidebar.style.left = '0';
    });

    closeBtn.addEventListener('click', () => {
        mobileSidebar.style.left = '-260px';
    });
</script>

<style>
    .conversation:hover { background-color: #f1f1f1; }
    .message.sent { text-align: right; }
    .message.received { text-align: left; }

    /* Overlay shadow on mobile when sidebar is open */
    .sidebar-overlay::after {
        content: "";
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.2);
        z-index: -1;
    }
</style>
</div>
