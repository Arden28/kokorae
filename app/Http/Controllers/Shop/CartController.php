<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\User;
use Bpuig\Subby\Models\Plan;
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Customer;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{

    public function ship(){
        return view('shop.ship');
    }

    // Shipping Information
    public function shipping(Request $request){
        // $request->validate([
        //     // 'society' => ['required', 'string', 'max:50'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'phone' => ['required', 'string', 'min:9'],
        //     'street' => ['required', 'string', 'max:155'],
        //     'city' => ['required', 'string', 'max:255'],
        //     'counrty' => ['required', 'string', 'max:255'],
        //     'zip' => ['nullable', 'string', 'max:15'],
        // ]);

        $user = User::find(auth()->user()->id);
        $user->update([
            'society' => $request->society,
            'email' => $request->email,
            'street' => $request->street,
            'city' => $request->city,
            'country' => $request->country,
            'zip' => $request->zip,
        ]);
        $user->save();

        return redirect()->route('cart.pay');
    }

    public function payment(){
        return view('shop.payment');
    }
    public function charge(Request $request)
    {
        try{
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $user = User::find(auth()->user()->id);
            $plan = Plan::find(Cart::instance('plan')->content()->first()->id);

            $fee = (convertToInt(Cart::instance('plan')->total) * 80) / 100;
            $charge = Charge::create([
                "amount" => $fee,
                "currency" => "xaf",
                "source" => $request->stripeToken,
                "description" => "Achat d'un abonnent "
            ]);

            if($charge){
                $this->createSubscription($user, $plan);
                $this->deleteCart();
                Session::flash('success', 'Payment successful!');

                return redirect()->route('kovers.databases');

            }else{
                Session::flash('error', "Une erreur c'est produite lors du paiement.");
            }
        } catch (\Exception $e) {
            Log::error("Une erreur c'est produite lors du paiement." . $e->getMessage());
            return response()->json(['error' => "Une erreur c'est produite lors du paiement."], 500);
        }
    }

    // Kover Plan
    public function createSubscription($user, $plan){

        $user->newSubscription(
            $plan->tag, // identifier tag of the subscription. If your application offers a single subscription, you might call this 'main' or 'primary'
            $plan, // Plan or PlanCombination instance your subscriber is subscribing to
            'Main subscription', // Human-readable name for your subscription
            'Customer main subscription', // Description
            null, // Start date for the subscription, defaults to now()
            'free' // Payment method service defined in config
        );
    }

    // Cart
    public function index(){
        $cart_items = Cart::instance('plan')->content();
        return view('shop.cart', [
            'cart_items' => $cart_items
        ]);
    }

    public function addToCart(Request $request){
        $plan = Plan::getByTag($request->slug);

        Cart::store($plan->id);
        $cart = Cart::instance('plan');

        $exists = $cart->search(function ($cartItem, $rowId) use ($plan) {
            return $cartItem->id == $plan->id;
        });

        if ($exists->isNotEmpty()) {
            session()->flash('message', 'Product exists in the cart!');
            return;
        }

        $cart->add([
            ['id' => $plan->id, 'name' => $plan->name, 'qty' => 1, 'price' => $plan->price, 'options' => [
                'invoice_interval' => $plan->invoice_interval,
                'subtotal' => ($plan->price * 80) / 100,
            ]],
          ]);

          return redirect()->route('cart');
    }

    public function deleteCart(){
        Cart::instance('plan')->destroy();
        return back();
    }
}
