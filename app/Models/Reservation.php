<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
        'venue_id',
        'starts_at',
        'ends_at',
        'code'
    ];

    public function venue () {
        return $this->belongsTo(Venue::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

}
