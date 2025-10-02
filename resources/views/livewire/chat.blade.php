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

  <div class="chat-container">
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
      <div class="chat-area">
          <div class="messages">
              <div class="message received">Bonjour, je suis intéressé par votre salle.</div>
              <div class="message sent">Merci ! Elle est dispo le 15 octobre.</div>
              <div class="message received">Parfait, je vais réserver.</div>
          </div>
          <div class="input-area">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Écrire un message...">
                  <button class="btn btn-send">
                      <i class="bi bi-send-fill"></i>
                  </button>
              </div>
          </div>
      </div>
  </div>

