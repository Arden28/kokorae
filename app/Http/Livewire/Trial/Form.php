<?php

namespace App\Http\Livewire\Trial;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $email;
    public $country;
    public $phone;
    public $industry;
    public $size;
    public $primary_interest;

    public $message = '';

    protected $rules = [
        'name' => 'required|string|max:50',
        'email' => 'required|string|email|max:50',
        'country' => 'required|string',
        'phone' => 'required|integer|min:9',
        'industry' => 'required|string',
        'size' => 'required|string',
        'primary_interest' => 'required|string',
    ];
    public function render()
    {
        return view('livewire.trial.form');
    }

    public function send(){
        $this->validate();

        session()->flash('message', __("Votre demande à bien été envoyée ! 😊"));
        $this->message = "Votre demande à bien été envoyée ! 😊";
    }
}
