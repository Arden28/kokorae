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
        try {
            $response = $this->client->message()->send([
                'to' => $to,
                'from' => env('VONAGE_SMS_FROM'),
                'text' => $message,
            ]);

            return $response;
        } catch (\Exception $e) {
            Log::error('Failed to send SMS: ' . $e->getMessage());
            return false;
        }
    }
}
