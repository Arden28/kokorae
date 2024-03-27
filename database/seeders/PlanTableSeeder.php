<?php

namespace Database\Seeders;

use Bpuig\Subby\Models\Plan;
use Bpuig\Subby\Models\PlanFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Standard Plan
        $monthlyPlan1 = Plan::create([
            'id' => 1,
            'tag' => 'standard',
            'name' => 'Standard',
            'description' => 'Pour une seule app, avec des utilisateurs illimités',
            'price' => 0,
            'signup_fee' => 0.00,
            'invoice_period' => 2,
            'invoice_interval' => 'year',
            'tier' => 1,
            'currency' => 'XAF',
        ]);
        $monthlyPlan1->save();

        $monthlyPlan1->features()->saveMany([
            new PlanFeature(['tag' => 'apps', 'name' => 'Applications disponible', 'value' => 1, 'sort_order' => 2]),
            new PlanFeature(['tag' => 'companies', 'name' => 'Entreprises disponible', 'value' => 1, 'sort_order' => 1]),
            new PlanFeature(['tag' => 'users', 'name' => 'Utilisateurs disponible', 'value' => true, 'sort_order' => 3]),
            new PlanFeature(['tag' => 'external_apis', 'name' => 'Api externes disponibles', 'value' => false, 'sort_order' => 4]),
        ]);

        // Spark Plan Monthly
        $monthlyPlan2 = Plan::create([
            'id' => 2,
            'tag' => 'spark_monthly',
            'name' => 'Plan Spark',
            'description' => 'Toutes les apps disponibles',
            'price' => 44990.00,
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 8,
            'trial_interval' => 'day',
            'grace_period' => 1,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'XAF',
        ]);
        $monthlyPlan2->save();

        $monthlyPlan2->features()->saveMany([
            new PlanFeature(['tag' => 'app', 'name' => 'Applications disponibles', 'value' => true, 'sort_order' => 1]),
            new PlanFeature(['tag' => 'companies', 'name' => 'Entreprises disponibles', 'value' => 1, 'sort_order' => 2]),
            new PlanFeature(['tag' => 'users', 'name' => 'Utilisateurs disponibles', 'value' => true, 'sort_order' => 3]),
            new PlanFeature(['tag' => 'external_apis', 'name' => 'Api externes disponibles', 'value' => false, 'sort_order' => 4]),
        ]);

        // Spark Plan Yearly
        $yearlyPlan2 = Plan::create([
            'id' => 3,
            'tag' => 'spark_yearly',
            'name' => 'Plan Spark',
            'description' => 'Toutes les apps disponibles',
            'price' => 593990.00, //449.990 when promo 20%
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'year',
            'trial_period' => 8,
            'trial_interval' => 'day',
            'grace_period' => 1,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'XAF',
        ]);
        $yearlyPlan2->save();

        $yearlyPlan2->features()->saveMany([
            new PlanFeature(['tag' => 'app', 'name' => 'Applications disponibles', 'value' => true, 'sort_order' => 1]),
            new PlanFeature(['tag' => 'companies', 'name' => 'Entreprises disponibles', 'value' => 1, 'sort_order' => 2]),
            new PlanFeature(['tag' => 'users', 'name' => 'Utilisateurs disponibles', 'value' => true, 'sort_order' => 3]),
            new PlanFeature(['tag' => 'external_apis', 'name' => 'Api externes disponibles', 'value' => false, 'sort_order' => 4]),
        ]);

        // Enterprise Plan Monthly
        $monthlyPlan3 = Plan::create([
            'id' => 4,
            'tag' => 'enterprise_monthly',
            'name' => 'Plan Enterprise',
            'description' => "Toutes les apps disonibles et bien d'autres",
            'price' => 134990,
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'trial_period' => 8,
            'trial_interval' => 'day',
            'grace_period' => 1,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'XAF',
        ]);
        $monthlyPlan3->save();

        $monthlyPlan3->features()->saveMany([
            new PlanFeature(['tag' => 'app', 'name' => 'Application disponible', 'value' => true, 'sort_order' => 1]),
            new PlanFeature(['tag' => 'companies', 'name' => 'Entreprises disponibles', 'value' => true, 'sort_order' => 2]),
            new PlanFeature(['tag' => 'users', 'name' => 'Utilisateurs disponibles', 'value' => true, 'sort_order' => 3]),
            new PlanFeature(['tag' => 'external_apis', 'name' => 'Api externes disponibles', 'value' => false, 'sort_order' => 4]),
        ]);

        // Enterprise Plan Monthly
        $yearlyPlan3 = Plan::create([
            'id' => 5,
            'tag' => 'enterprise_yearly',
            'name' => 'Plan Enterprise',
            'description' => "Toutes les apps disonibles et bien d'autres",
            'price' => 1599990.00, //1.349.990 FCFA when promo 20%
            'signup_fee' => 0.00,
            'invoice_period' => 1,
            'invoice_interval' => 'year',
            'trial_period' => 8,
            'trial_interval' => 'day',
            'grace_period' => 1,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'XAF',
        ]);
        $yearlyPlan3->save();

        $yearlyPlan3->features()->saveMany([
            new PlanFeature(['tag' => 'app', 'name' => 'Application disponible', 'value' => true, 'sort_order' => 1]),
            new PlanFeature(['tag' => 'companies', 'name' => 'Entreprises disponibles', 'value' => true, 'sort_order' => 2]),
            new PlanFeature(['tag' => 'users', 'name' => 'Utilisateurs disponibles', 'value' => true, 'sort_order' => 3]),
            new PlanFeature(['tag' => 'external_apis', 'name' => 'Api externes disponibles', 'value' => true, 'sort_order' => 4]),
        ]);


    }
}
