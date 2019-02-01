<?php

namespace saad3074\Bambora\requests;

class TokenizationRequest extends Request
{
    /**
     * Turn a credit card into a token using this service. This helps lessen your PCI scope by not passing
     * the credit card information to your server. Instead you turn the card number into a token in the client app,
     * then send the token to the server. When you send the token to Bambora to make a payment, Bambora then looks up
     * the card number from that token and makes the payment. Tokens can also be used to create payment profiles.
     *
     * @param $tokenRequest
     * @return mixed
     */
    public function tokenizeCard($tokenRequest)
    {
        return $this->setUrl($this->endpoint->getTokenizationUrl())
            ->setMethod($this->endpoint->getTokenizationMethod())
            ->setRequestData($tokenRequest)
            ->sendData();
    }
}
