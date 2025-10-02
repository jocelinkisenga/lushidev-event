<?php

namespace App\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $conversationId;
    public $message = '';

    public function mount($conversationId){
        $this->conversationId = $conversationId;
    }

    public function sendMessage () {
        if(trim($this->message) === '') return;

        //filtrage numero de telephone, whatsapp, etc
        $filtered = preg_replace([
            '/\b\d{7,}\b/', //pour le numero longs
            '/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i', //pour le mail
            '/(whatsapp|facebook|t\.me|telegram|instagram|viber|slack|messenger|skype)/i'],
            '[caché]', $this->message
        );

        Message::create([
            'conversation_id' => $this->conversationId,
            'sender_id' => Auth::user()->id,
            'message' => $filtered
        ]);

        $this->message = '';
    }

    public function getMessagesProperty() {
        return Message::whereConversation_id($this->conversationId)->with("sender")->orderBy('created_at')->get();
    }


    public function render()
    {

        return view('livewire.chat', ['messages' => $this->messages]);
    }
}
