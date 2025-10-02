<?php

namespace App\Livewire;

use App\Enums\RoleEnum;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\Venue;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $venueId;
    public $message = '';
    public $conversation ;
    public $messages ;

    protected $rules = [
        "message" => "required",
    ];

    public function mount($venueId)
    {
        $this->venueId = $venueId;

        //verification de l'existance d'une conversation
        $this->conversation = Conversation::where("venue_id", $venueId)
        ->where(function ($q) {
            $q->where("owner_id", auth()->id())
            ->orWhere("client_id", auth()->id());
        })->first();

        // si pas de conversation, on en cree
        if(!$this->conversation && Auth::user()->role !== RoleEnum::EMPLOYEUR ) {
            $venue = Venue::findOrFail($venueId);
            $this->conversation = Conversation::create([
                "venue_id" => $venueId,
                "owner_id" => $venue->user_id,
                "client_id" => auth()->id()
            ]);
        }
        $this->loadMessages();
    }

    public function loadMessages () {
        $this->messages = $this->conversation->messages()->orderBy("created_at")->get();
    }

    public function sendMessage()
    {


        if (trim($this->message) === '') return;

        //filtrage numero de telephone, whatsapp, etc
        $filtered = preg_replace(
            [
                '/\b\d{7,}\b/', //pour le numero longs
                '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i', //pour le mail
                '/(whatsapp|facebook|t\.me|telegram|instagram|viber|slack|messenger|skype)/i'
            ],
            '[caché]',
            $this->message
        );

        Message::create([
            'conversation_id' => $this->conversation->id,
            'sender_id' => Auth::user()->id,
            'messages' => $filtered
        ]);

        $this->message = '';

        $this->loadMessages();
    }

    // public function getMessagesProperty()
    // {
    //     return Message::whereConversation_id($this->conversationId)->with("sender")->orderBy('created_at')->get();
    // }


    public function render()
    {

        return view('livewire.chat', ['messages' => $this->messages]);
    }
}
