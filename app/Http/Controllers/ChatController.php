<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function create ($venueId) {
        $conversation = Conversation::create(['venue_id' => $venueId]);
        return view("owner.chat", ['conversationId' => $conversation->id]);
    }
}
