<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'venue_id'
    ];

    public function venue () {
        return $this->belongsTo(Venue::class);
    }

}
