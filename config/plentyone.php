<?php

declare(strict_types=1);

return [
    'base_url' => env('PLENTYONE_BASE_URL', 'https://example.com'),

    'client_id' => env('PLENTYONE_CLIENT_ID', ''),
    'client_secret' => env('PLENTYONE_CLIENT_SECRET', ''),

    'authorization_url' => env('PLENTYONE_AUTHORIZATION_URL'),
    'token_url' => env('PLENTYONE_TOKEN_URL'),
    'refresh_url' => env('PLENTYONE_REFRESH_URL'),

    'scopes' => array_filter(array_map('trim', explode(',', env('PLENTYONE_SCOPES', '')))),
];
