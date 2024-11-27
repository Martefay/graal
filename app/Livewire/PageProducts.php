<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Товары')]
class PageProducts extends Component
{
    public function render()
    {
        return view('livewire.page-products');
    }
}
