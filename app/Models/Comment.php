<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ["venue_id", "comment"];

    public function venue () {
        return $this->belongsTo(Venue::class);
    }
}
