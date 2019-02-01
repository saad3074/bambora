<?php

namespace saad3074\Bambora\requests;

class PaymentRequest extends Request
{
    /**
     * Make a payment using credit card, cash, cheque, profile, token, Apple Pay or Android Pay.
     * Each payment type has its own json definition passed in the body. For all payments you have
     * the standard Billing, Shipping, Comments, etc. fields that are optional. Only the amount is
     * required along with the payment data for card, cash, cheque, profile, and token. You must change
     * the payment_method for each payment type. Credit Card - "card", Payment Profile - "payment_profile",
     * Legato Token - "token", Cash - "cash", Cheque - "cheque", Interac - "interac", Apple Pay - "apple_pay",
     * Android Pay - "android_pay".
     *
     * @param $paymentRequest
     * @return mixed
     */
    public function makePayment($paymentRequest)
    {
        return $this->setUrl($this->endpoint->getMakePaymentUrl())
            ->setMethod($this->endpoint->getMakePaymentMethod())
            ->setRequestData($paymentRequest)
            ->sendData();
    }

    /**
     * Return payment.
     *
     * @param $transId
     * @param $returnRequest
     * @return mixed
     */
    public function returnPayment($transId, $returnRequest)
    {
        return $this->setUrl($this->endpoint->getReturnPaymentUrl($transId))
            ->setMethod($this->endpoint->getReturnPaymentMethod())
            ->setRequestData($returnRequest)
            ->sendData();
    }

    /**
     * Void a transaction. You can void payments, returns, pre-auths, and completions.
     * It will cancel that transaction.
     *
     * @param $transId
     * @param $voidRequest
     * @return mixed
     */
    public function voidPayment($transId, $voidRequest)
    {
        return $this->setUrl($this->endpoint->getVoidTransactionUrl($transId))
            ->setMethod($this->endpoint->getVoidTransactionMethod())
            ->setRequestData($voidRequest)
            ->sendData();
    }

    /**
     * Complete a pre-authorized payment. The amount of the transaction to complete must
     * be less than or equal to the original pre-auth amount. Complete must be set to true.
     *
     * @param $transId
     * @param $paymentRequest
     * @return mixed
     */
    public function completePreAuth($transId, $paymentRequest)
    {
        return $this->setUrl($this->endpoint->getCompletePreAuthUrl($transId))
            ->setMethod($this->endpoint->getCompletePreAuthMethod())
            ->setRequestData($paymentRequest)
            ->sendData();
    }

    /**
     * Get a previous payment (transaction).
     *
     * @param $transId
     * @return mixed
     */
    public function getPayment($transId)
    {
        return $this->setUrl($this->endpoint->getPaymentUrl($transId))
            ->setMethod($this->endpoint->getPaymentMethod())
            ->sendData();
    }

    /**
     * Continues 3D Secure or Interac Online payment processing.
     *
     * @param $merchantData The merchant_data attribute value returned from the initiating
     * Payments API request. The value represents a unique payment ID.
     * @param $continueRequest
     * @return mixed
     */
    public function continuePayment($merchantData, $continueRequest)
    {
        return $this->setUrl($this->endpoint->getContinuePaymentUrl($merchantData))
            ->setMethod($this->endpoint->getContinuePaymentMethod())
            ->setRequestData($continueRequest)
            ->sendData();
    }
}
