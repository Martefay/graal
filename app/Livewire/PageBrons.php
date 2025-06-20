<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Бронь')]
class PageBrons extends Component
{

use WithPagination;

    public function render()
    {
        $categories = Category::query()->where("is_active", 1);

        return view('livewire.page-bron', [
            'categories' => $categories->paginate(12),
            
            
        ]);
    }

    
}
