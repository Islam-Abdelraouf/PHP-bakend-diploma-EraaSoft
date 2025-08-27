<?php

return [
    'admin' => [
        'name' => env('ADMIN_USERNAME', 'admin'),
        'email' => env('ADMIN_EMAIL', 'admin@clinic.com'),
        'password' => env('ADMIN_PASSWORD', 'password')
    ],
    'user' => [
        'name' => env('USER_USERNAME', 'user'),
        'email' => env('USER_EMAIL', 'user@clinic.com'),
        'password' => env('USER_PASSWORD', 'password')
    ]
];
