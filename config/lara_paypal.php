<?php

return [
    'debug_requests' => false,

    'sandbox' => [
        'url' => 'https://api.sandbox.paypal.com',
        'client_id' => 'AZgtEi9199wVDmvD8-2mGryP-Z-wNj1_-FDW6ETvmMZFs7_7mhIJXhXCnYGscicOZlsFPqyUPKxXjqH2',
        'secret' => 'EJxGy-eWAB9Vz1Mx9h7HnSwS4E7joydsX8i8-xU553ggGJLHIr-GZJ2-QwYl-gEj18uyte9NQaospo4A',
    ],

    'production' => [
        'url' => 'https://api.paypal.com',
        'client_id' => '',
        'secret' => '',
    ]
];
