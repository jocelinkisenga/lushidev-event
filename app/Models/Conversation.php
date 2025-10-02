<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = ["venue_id","owner_id","client_id"];

    public function venue() {
        return $this->belongsTo(Venue::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'owner_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function messages () {
        return $this->hasMany(Message::class);
    }
}
