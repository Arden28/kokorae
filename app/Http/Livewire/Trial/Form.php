<?php

namespace App\Http\Livewire\Trial;

use App\Mail\Demo\ApplyMail;
use App\Models\DemoBooking;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $company_name;
    public $role;
    public $email;

    public $countries = [
        'Congo' => 'République du Congo',
        'Congo RDC' => 'République Démocratique du Congo',
        'Gabon' => 'Gabon',
        'Cameroun' => 'Cameroun',
    ];

    public $cities = [
        'Congo' => ['Brazzaville', 'Pointe Noire', 'Ouesso', 'Dolisie'],
        'Congo RDC' => ['Kinshasa', 'Goma'],
        'Gabon' => ['Libreville', 'Franceville', 'Port-gentil'],
        'Cameroun' => ['Yaoundé', 'Douala'],
    ];

    public $country = '';
    public $city = '';
    public $phone;
    public $industry;
    public $size;
    public $primary_interest;

    public $message = '';

    protected $rules = [
        'name'=> 'required|string|max:50',
        'company_name'=> 'required|string|max:50',
        'role'=> 'required|string|max:15',
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
            'company_name' => $this->company_name,
            'role' => $this->role,
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
        $this->saveDemo();
        session()->flash('message', __("Votre demande à bien été envoyée ! 😊"));
        $this->message = "Votre demande à bien été envoyée ! 😊 Nous allons vous relancer sous 24h !";
    }

    public function sendMail($demo){
        Mail::to('contact@koverae.com')->send(new ApplyMail($demo));
    }

    public function saveDemo(){
        DemoBooking::create([
            'prospect_name' => $this->name,
            'prospect_phone' => $this->phone,
            'prospect_email' => $this->email,
            'prospect_country' => $this->country,
            'prospect_city' => $this->city,
            'prospect_company_name' => $this->company_name,
            'prospect_company_size' => $this->size,
            'prospect_company_industry' => $this->industry,
            'prospect_role' => $this->role,
            'date' => now()
        ]);

    }
}
