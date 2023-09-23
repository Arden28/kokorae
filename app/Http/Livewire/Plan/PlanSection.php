<?php

namespace App\Http\Livewire\Plan;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;

class PlanSection extends Component
{
    public function render()
    {

        return view('livewire.plan.plan-section');
    }
}
