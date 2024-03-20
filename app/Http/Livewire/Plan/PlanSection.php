<?php

namespace App\Http\Livewire\Plan;

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
}
