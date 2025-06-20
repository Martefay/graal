<?php

namespace App\Livewire\Partials;

use App\Helpers\CartManagment;
use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
    public function render()
    {

        $products = CartManagment::getCartItemsFromCookie();
        return view('livewire.partials.application-modal',[
            'products' => $products,
        ]);

    }
}
