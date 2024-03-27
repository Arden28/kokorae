<?php

namespace App\Http\Livewire\Plan;

use Bpuig\Subby\Models\Plan;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;

class PlanSection extends Component
{
    public $period = 'Annuel'; // Default state

    public function togglePeriod()
    {
        $this->period = $this->period === 'Annuel' ? 'Mensuel' : 'Annuel';
    }

    public function render()
    {

        return view('livewire.plan.plan-section');
    }

    public function addToCart($slug){
        $plan = Plan::getByTag($slug);

        Cart::store($plan->id);
        $cart = Cart::instance('plan');

        $exists = $cart->search(function ($cartItem, $rowId) use ($plan) {
            return $cartItem->id == $plan->id;
        });

        if ($exists->isNotEmpty()) {
            session()->flash('message', "La formule existe déjà dans votre panier !");
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
}
