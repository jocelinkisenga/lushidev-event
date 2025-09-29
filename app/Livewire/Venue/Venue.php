<?php

namespace App\Livewire\Venue;

use App\Models\Venue as ModelsVenue;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Venue extends Component
{
    use WithFileUploads;
    public $name;
    public $location;
    public $description;
    public $image;
    public $capacity;
    public $price;
    public $venues;

    protected $rules = [
        "name" => "required",
        "location" => "required",
        "description" => "required",
        "image" => "required|mimes:jpeg,png,jpg",
        "price" => "required"
    ];
    public function render()
    {
        return view('livewire.venue.venue');
    }

    public function store()
    {

        // $this->validate();
        $imagePath = $this->image->store("uploads", "public");

        ModelsVenue::create([
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'image' => $imagePath,
            'capacity' => $this->capacity,
            'user_id' => Auth::user()->id,
            'price' => $this->price,
        ]);
    }

    public function  mount()
    {
        $this->venues = ModelsVenue::whereUserId(Auth::user()->id)->get();
    }

    public function delete($venueId) {
        $venue = ModelsVenue::destroy($venueId);

    }
}
