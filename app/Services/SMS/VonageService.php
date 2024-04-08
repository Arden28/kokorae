<?php

namespace App\Services\SMS;

use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Illuminate\Support\Facades\Log;
use Vonage\Message\WhatsApp;


class VonageService{

    protected $client;

    public function __construct()
    {
        $basic  = new Basic(env('VONAGE_KEY'), env('VONAGE_SECRET'));
        $this->client = new Client($basic);
    }

    public function sendSMS($to, $message)
    {
        $response = $this->client->sms()->send(new \Vonage\SMS\Message\SMS($to, "Koverae", $message));

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "Le message a été envoyé avec succès\n";
        } else {
            echo "Le message a échoué avec le statut: " . $message->getStatus() . "\n";
        }
    }

    public function sendWhatsApp($to, $message){
        // Create the WhatsApp message payload
        $message = new WhatsApp\Message(
            'whatsapp:destination_number', // The recipient number with "whatsapp:" prefix
            'whatsapp:your_registered_number', // Your WhatsApp registered number with "whatsapp:" prefix
            [
                'type' => 'text',
                'text' => 'Hello from Vonage WhatsApp API!'
            ]
        );

        // Send the message
        $response = $client->message()->send($message);

        if ($response->isSuccessful()) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
