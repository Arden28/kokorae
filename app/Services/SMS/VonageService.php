<?php

namespace App\Services\SMS;

use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Illuminate\Support\Facades\Log;


class VonageService{

    protected $client;

    public function __construct()
    {
        $basic  = new Basic(env('VONAGE_KEY'), env('VONAGE_SECRET'));
        $this->client = new Client($basic);
    }

    public function sendSMS($to, $message)
    {
        $response = $this->client->sms()->send(new \Vonage\SMS\Message\SMS($to, env('APP_NAME'), $message));

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "Le message a été envoyé avec succès\n";
        } else {
            echo "Le message a échoué avec le statut: " . $message->getStatus() . "\n";
        }
    }
}
