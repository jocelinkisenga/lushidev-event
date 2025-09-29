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
        'user_id'
    ];

    protected $casts = [
        'avaibility' => 'boolean',
    ];

    public function comments () {
        return $this->hasMany(Comment::class);
    }

}
