# Bambora SDK for API v1.0.5

Features:
* Payment
* Reporting
* Profiles
* Tokenization

Installation
-------
Use composer

    composer require saad3074/bambora

Usage
-----
```php
$merchant_id = ''; //INSERT MERCHANT ID (must be a 9 digit string)
$api_key = ''; //INSERT API ACCESS PASSCODE
$api_version = 'v1'; //default

$payment = \saad3074\bambora\Gateway::getPaymentRequest($merchant_id, $api_key, $api_version);

$response = $payment->makePayment([
    'order_number' => 'test order number or random string',
    'amount' => '12.45',
    'payment_method' => 'card',
    'card' => [
        'number' => '4111111111111111',
        'name' => 'john doe',
        'expiry_month' => '12',
        'expiry_year' => '21',
        'cvd' => '123',
    ],
]);
```
