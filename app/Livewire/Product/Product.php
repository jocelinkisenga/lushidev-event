<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component{

    public string $name;
    public $quantity;
    public $category_id;

    public $categories;
    public $products;

    public function render()
    {
        return view('livewire.product.product');
    }

    public function mount () {
        $this->categories = Category::whereUserId(Auth::user()->id)->get();
        $this->products = ModelsProduct::whereUserId(Auth::user()->id)->get();
    }

    public function store(){
        ModelsProduct::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'user_id' => Auth::user()->id,
            'quantity' => $this->quantity,
            "user_id" => Auth::user()->id
        ]);

        $this->vider();
    }

    public function delete($productId) {
        ModelsProduct::destroy($productId);
    }

    private function vider() {
        $this->name = "";
        $this->quantity = "";
        $this->category_id = "";
    }
}
