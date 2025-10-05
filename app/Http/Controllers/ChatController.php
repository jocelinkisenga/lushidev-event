<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function create ($venueId) {

        return view("owner.chat", ['venueId' => $venueId]);
    }
}
