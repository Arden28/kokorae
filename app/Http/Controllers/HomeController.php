<?php

namespace App\Http\Controllers;

use App\Services\SMS\VonageService;
use Illuminate\Http\Request;
use Vonage\Client;
use Vonage\Client\Credentials\Basic;

class HomeController extends Controller
{

    public function home(){

        return view('home');
    }

    // About
    public function pricing(){

        return view('pricing');
    }

    // About
    public function about(){

        return view('about');
    }
    // Blog
    public function blog(){

        return view('blog.index');
    }

    public function single(){

        return view('blog.single');
    }

    // Typo
    public function typo(Request $request){

        // Get the subdomain from the URL
        $host = $request->get('esika');
        $subdomain = explode('.', $host)[0]; // Extract the first part before the first dot

        return view('errors.typo', compact('host', 'subdomain'));
    }

    // Test SMS
    public function testSmS(){
        // $vonageService = new VonageService();
        // $vonageService->sendSMS(+2425996406, "Salut c'est Koverae");

        $basic  = new Basic(env('VONAGE_KEY'), env('VONAGE_SECRET'));
        $client = new Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS(2425996406, "Koverae", "Salut c'est Koverae")
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }

    }
}
