<?php

namespace App\Livewire\Comment;

use App\Models\Comment as ModelsComment;
use Livewire\Component;

class Comment extends Component
{
    public $venueId;
    public $comment;

    public $comments;
    public function render()
    {
        return view('livewire.comment.comment');
    }

    public function mount (){
        $this->comments = ModelsComment::latest()->whereVenueId($this->venueId)->get();
    }

    public function store () {
        ModelsComment::create([
            "venue_id" => $this->venueId,
            "comment" => $this->comment
        ]);
    }
}
