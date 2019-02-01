<?php
namespace saad3074\Bambora;

use saad3074\Bambora\requests\PaymentRequest;
use saad3074\Bambora\requests\ProfilesRequest;
use saad3074\Bambora\requests\ReportingRequest;
use saad3074\Bambora\requests\TokenizationRequest;

class Gateway
{
    public static function getPaymentRequest($merchantId, $passcode, $version)
    {
        return new PaymentRequest($merchantId, $passcode, $version);
    }

    public static function getReportingRequest($merchantId, $passcode, $version)
    {
        return new ReportingRequest($merchantId, $passcode, $version);
    }

    public static function getProfilesRequest($merchantId, $passcode, $version)
    {
        return new ProfilesRequest($merchantId, $passcode, $version);
    }

    public static function getTokenizationRequest($merchantId, $passcode, $version)
    {
        return new TokenizationRequest($merchantId, $passcode, $version);
    }
}
