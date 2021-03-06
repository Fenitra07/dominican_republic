<?php

require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('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');
// \Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

header('Content-Type: application/json');

$MY_DOMAIN = 'http://localhost/3000';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 200,
      'product_data' => [
        'name' => 'Stubborn Attachments',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $MY_DOMAIN .'/success.html',
  'cancel_url' => $MY_DOMAIN .'/cancel.html',
]);
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);