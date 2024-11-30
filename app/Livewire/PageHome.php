<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Главная')]
class PageHome extends Component
{
    public function render()
    {
        $products = Product::where("is_active", 1)->where('is_featured', 1)->orderBy("updated_at", "DESC")->paginate(10);
        return view('livewire.page-home', [
            'products' => $products,
        ]);
    }
}
