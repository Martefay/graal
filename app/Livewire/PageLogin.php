<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Вход в личный кабинет')]
class PageLogin extends Component
{
    public function render()
    {
        return view('livewire.page-login');
    }
}
