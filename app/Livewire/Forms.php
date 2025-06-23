<?php

namespace App\Livewire;

use App\Models\FormBron;
use Livewire\Component;

class Forms extends Component
{
   public $name;
   public $date;
   public $time;
   public $phone;
   public $guest;
   public $success = false;
   protected $rules = [
        'name' => 'required|min:2',
        'date' => 'required',
        'time' => 'required',
        'phone' => 'required|min:18',
        'guest' => 'required|integer',
   ];

   protected $messages =
      [
        'name.required' => 'Пожалуйста введите ваше имя.',
        'name.min' => 'Пожалуйста введите коректное имя.',
        'date.required' => 'Пожалуйста выберите дату.',
        'time.required' => 'Пожалуйста выберите время.',
        'phone.min' => 'Пожалуйста введите коректный номер телефона.',
        'phone.required' => 'Пожалуйста введите ваш номер телефона.',
        'guest.required' => 'Пожалуйста введите количество гостей.',
        'guest.integer' => 'Пожалуйста введите число гостей.',
    ];
   

   public function submitForm()
   {
    $this->validate();

    FormBron::create([
        'name' => $this->name,
        'date' => $this->date,
        'time' => $this->time,
        'phone' => $this->phone,
        'guest' => $this->guest,
    ]);

    $this->success = true;

    $this->reset(['name', 'date', 'time', 'phone', 'guest']);

   

   }

   public function render()
   {
    return view('livewire.page-bron');
   }
}