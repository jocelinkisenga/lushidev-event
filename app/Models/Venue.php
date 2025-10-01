<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'image',
        'capacity',
        'avaibility',
        'price',
        'user_id',
        'opening',
        'closing',
        'active'
    ];

    protected $casts = [
        'avaibility' => 'boolean',
    ];

    public function venue_images() {
        return $this->hasMany(VenueImage::class);
    }
    public function comments () {
        return $this->hasMany(Comment::class);
    }

    public function services () {
        return $this->belongsToMany(Service::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
