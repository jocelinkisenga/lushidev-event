<?php

namespace App\Livewire\Category;

use App\Models\Category as ModelsCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Category extends Component
{

    public string $name;
    public $categories = [];
    public function render()
    {
        return view('livewire.category.category');
    }


    public function store (){
        ModelsCategory::create([
            "user_id" => Auth::user()->id,
            "name" => $this->name
        ]);

    }

    public function  mount()
    {
        $this->categories = ModelsCategory::whereUserId(Auth::user()->id)->get();
    }

    public function delete($categoryId)
    {
        $category = ModelsCategory::destroy($categoryId);
    }
}
