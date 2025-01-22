<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*','post', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['GET','POST'],

    'allowed_origins' => [
        'http://localhost:3000',
        'https://poke-quiz-taiyou-yamamotos-projects.vercel.app',
        'https://poke-quiz-9cb315e1daf1.herokuapp.com/api/get'
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
