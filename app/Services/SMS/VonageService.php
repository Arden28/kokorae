<?php

namespace App\Services\SMS;

use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Illuminate\Support\Facades\Log;
use Vonage\Message\WhatsApp;
use Vonage\Messages\Channel\WhatsApp\WhatsAppText;


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

        $whatsAppMessage = new WhatsAppText($to,242065996406,$message);

        $response = app(Client::class)
            ->messages()
            ->send($whatsAppMessage);

        $response = $this->client->message()->send([
            'type' => 'text',
            'to' => 'whatsapp:'.$to, // Ensure to include 'whatsapp:' prefix and use E.164 format
            'from' => 'whatsapp:065996406', // Your WhatsApp registered number with "whatsapp:" prefix
            'message' => [
                'content' => [
                    'type' => 'text',
                    'text' => $message
                ]
            ],
            'channel' => 'whatsapp'
        ]);

        if ($response->isSuccessful()) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message. Error: " . $response->getErrors()[0]['detail'];
        }
    }
}
