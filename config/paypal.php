<?php

/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', 'AbxtcIP8ipC4dms9F_K0s2SkXs60HDnZF17Sd_JoOvXfvZI4WeGR25vGqI57CraI2p69D9SwpKcc74QT'),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'EBq1mklYmijbCCjopwHQtSgL4Mrjos-ZyFCuXYLqp7VyKyYydOEaDQM-qK_Phb8J2ix5sKSv9zRDSOZ1'),
        'app_id'            => 'APP-80W284485P519543T',
    ],


    'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
    'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
];
