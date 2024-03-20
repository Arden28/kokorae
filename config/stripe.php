<?php

return [
    'stripe_publishable_key' => env('STRIPE_PUBLISHABLE_KEY'),
    'stripe_secret_key' => env('STRIPE_SECRET_KEY'),

    'product' =>[
        'name' => 'Koverae Spark',
        'description' => 'Water resistant, Stop watch, Alarm features.',
        'price' => 1000,
    ]
];
?>
