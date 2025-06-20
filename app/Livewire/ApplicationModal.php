<?php

namespace App\Livewire;

use App\Models\Application;
use Livewire\Attributes\Validate;
use Livewire\Component;


class ApplicationModal extends Component
{
    #[Validate('required|max:30')]
    public string $name;

    #[Validate('required|email|max:30')]
    public string $phone;

    #[Validate('required')]
    public string $email;

    public function save()
    {
        $validated = $this->validate();
        Application::create($validated);
        $this->reset();
    }
}
