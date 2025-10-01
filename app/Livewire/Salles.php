<?php

namespace App\Livewire;

use App\Models\Venue;
use Livewire\Component;

class Salles extends Component
{
    public $venues = '';
    public $location;
    public $price;
    public $capacity;

    public $salles;
    public function render()
    {
        $this->venues = Venue::whereAvaibility(false)->whereActive(true)->latest()->get();

        return view('livewire.salles');
    }

    public function search () {

        $query = Venue::query()->when($this->location,fn($q) => $q->where("location","like","%{$this->location}%"))->when($this->price, fn($q) => $q->where('price','<=',$this->price))->when($this->capacity, fn($q) => $q->where("capacity",">=",$this->capacity))->get();

        // if ($this->location) {
        //     $query->where('location', 'like', '%' . $this->location . '%')->where('price', '<=',  $this->price)->where('capacity', '>=',  $this->capacity);
        // }

        // if ($this->price) {
        //     $query->where('price', '<=',  $this->price);
        // }

        // if ($this->capacity) {
        //     $query->where('capacity', '>=',  $this->capacity);
        // }


        dd($query);
    }
}
