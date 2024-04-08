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

        $vonageService = new VonageService();
        // Send SMS
        // $vonageService->sendSMS(242065996406, "Salut c'est Koverae");
        $vonageService->sendWhatsApp(242064074926, "Bienvenue dans la famille Koverae");
        // Send WhatsApp message

    }
}
