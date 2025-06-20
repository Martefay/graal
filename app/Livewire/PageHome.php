<?php

namespace App\Livewire;

use App\Helpers\CartManagment;
use App\Livewire\Partials\Header;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Title('Главная')]
class PageHome extends Component
{


    public function render()
    {
        $categories = Category::paginate(4);
        return view('livewire.page-home', [
            'categories' => $categories,
        ]);
    }
    
}
