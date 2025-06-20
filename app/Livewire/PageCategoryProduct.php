<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class PageCategoryProduct extends Component
{
    // public $category_id;

    // public function mount($category_id)
    // {
    //     $this->category_id = $category_id;
    // }

    // public function render()
    // {
    //     $products = Product::where("is_active", 1)->where("category_id", $this->category_id)->get();
    //     return view('livewire.single-product', [
    //         'products' => $products,
    //     ]);
    // }
}
