<?php

namespace App\Livewire;

use App\Models\Form;
use Livewire\Component;

class Forms extends Component
{
   public $name;
   public $date;
   public $time;
   public $phone;
   public $guest;

   public function submitForm()
   {
    Form::create([
        'name' => $this->name,
        'date' => $this->date,
        'time' => $this->time,
        'phone' => $this->phone,
        'guest' => $this->guest,
    ]);

    $this->reset(['name', 'date', 'time', 'phone', 'guest']);

   }

   public function render()
   {
    return view('livewire.page-bron');
   }
}