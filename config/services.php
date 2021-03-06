<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'facebook' => [
        'client_id' => '1986600134825658',  //client face của bạn
        'client_secret' => 'ba0a2a0bb40f4f3de8a784d9ef10de7a',  //client app service face của bạn
        'redirect' => 'http://localhost:8080/shopbanhanglaravel/admin/callback' //callback trả về
    ],

    'google' => [
        'client_id' => '285540586230-7172qnl1d7k26ok82a77ueqmvlhhlef9.apps.googleusercontent.com',
        'client_secret' => 'SB7_gkbnZQf6jT2aD4KfNSxm',
        'redirect' => 'http://localhost:8080/shopbanhanglaravel/google/callback'
    ],



];
