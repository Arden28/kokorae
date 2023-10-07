<?php

namespace App\Http\Livewire\Trial;

use App\Mail\Demo\ApplyMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $email;

    public $country, $countries = ['Kongo-B', 'République Démocratique du Kongo', 'Gabon', 'Cameroun'];
    public $city, $cities = [];
    public $phone;
    public $industry;
    public $size;
    public $primary_interest;

    public $message = '';

    protected $rules = [
        'name'=> 'required|string|max:50',
        'email' => 'required|string|email|max:50',
        'country' => 'required|string',
        'city' => 'required|string',
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
        // Demo
        $demo = [
            'name' => $this->name,
            'email' => $this->email,
            'country' => $this->country,
            'city' => $this->city,
            'phone' => $this->phone,
            'industry' => $this->industry,
            'size' => $this->size,
            'primary_interest' => $this->primary_interest
        ];
        // Send mail
        $this->sendMail($demo);
        session()->flash('message', __("Votre demande à bien été envoyée ! 😊"));
        $this->message = "Votre demande à bien été envoyée ! 😊";
    }

    public function sendMail($demo){
        Mail::to('contact@koverae.com')->send(new ApplyMail($demo));
    }
}
