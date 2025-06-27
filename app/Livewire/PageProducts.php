<?php

namespace App\Livewire;


use App\Models\CategoryMenu;


use Livewire\Attributes\Title;

use Livewire\Component;


#[Title('Меню')]
class PageProducts extends Component
{

    // public $search = '';

    // public function render()
    // {
        //  $products = $this->search === ''
        //     ? CategoryMenu::all()
        //     : CategoryMenu::where('name', 'like', '%' . $this->search . '%')->get();

        

        // return view('livewire.page-products', [
        //     'categorymenus' => $products,
            
            
        // ]);

    //     $products = CategoryMenu::when($this->search, fn($q) => $q->where('name', 'like', "%{$this->search}%"))
    //         ->get();
    
    //     return view('livewire.page-products', ['categorymenus' => $products])
    //         ->layout('layouts.app'); // Укажите ваш лейаут
    // }

    // $categories = CategoryMenu::query()->where("is_active", 1);

 public function render()
    {
        $categories = CategoryMenu::query()->where("is_active", 1);

        return view('livewire.page-products', [
            'categorymenus' => $categories->paginate(100),
            
            
        ]);
    }
    }

