<?php

namespace App\Services;

class PlanService{


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
}
