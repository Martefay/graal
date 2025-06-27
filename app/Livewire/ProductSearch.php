<?php

namespace App\Http\Livewire;

use App\Models\CategoryMenu;
use Livewire\Component;
use App\Models\Product;

class ProductSearch extends Component
{
    public $search = '';

    public function render()
    {
        // Если строка поиска пуста, показываем все товары
        $products = $this->search === ''
            ? CategoryMenu::all()
            : CategoryMenu::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.page-products', [
            'categorymenus' => $products,
        ]);
    }
}
