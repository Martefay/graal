<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\CategoryMenu;
use App\Models\Menu;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Меню')]
class PageProducts extends Component
{

    public function render()
    {
        $categories = CategoryMenu::query()->where("is_active", 1);

        return view('livewire.page-products', [
            'categorymenus' => $categories->paginate(12),
            
            
        ]);
    }

// public $categorymenus; // Явно объявляем свойство
    
//     public function mount()
//     {
//         $this->loadCategoryMenus();
//     }
    
//     public function loadCategoryMenus()
//     {
//         $this->categorymenus = CategoryMenu::with(['menus' => function($query) {
//             $query->where('is_active', true)
//                   ->orderBy('name');
//         }])
//         ->where('is_active', true)
//         ->get();
//     }
    
//     public function render()
//     {
//         return view('livewire.page-products');
//     }

}
