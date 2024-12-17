<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SingleProduct extends Component
{
    public $slug;
    public $description;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where("slug", $this->slug)->firstOrFail();
        $this->description = $product->description;
        return view('livewire.single-product', [
            'product' => $product,
        ]);
    }
}
  