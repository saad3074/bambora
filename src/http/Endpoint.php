<?php
namespace saad3074\Bambora\http;

class Endpoint
{
    const BASE_URL  = 'https://api.na.bambora.com/';

    protected $paymentUrl;
    protected $reportUrl;
    protected $profileUrl;
    protected $tokenizationUrl;

    protected $makePaymentMethod = 'POST';
    protected $returnPaymentMethod = 'POST';
    protected $voidTransactionMethod = 'POST';
    protected $completePreAuthMethod = 'POST';
    protected $paymentMethod = 'GET';
    protected $continuePaymentMethod = 'POST';

    protected $searchQueryMethod = 'POST';

    protected $createProfileMethod = 'POST';
    protected $getProfileMethod = 'GET';
    protected $updateProfileMethod = 'PUT';
    protected $deleteProfileMethod = 'DELETE';
    protected $getCardsMethod = 'GET';
    protected $addCardMethod = 'POST';
    protected $getCardMethod = 'GET';
    protected $updateCardMethod = 'PUT';
    protected $deleteCardMethod = 'DELETE';

    protected $tokenizationMethod = 'POST';

    public function __construct($version)
    {
        $this->paymentUrl = self::BASE_URL . $version . '/payments';
        $this->reportUrl = self::BASE_URL . $version . '/reports';
        $this->profileUrl = self::BASE_URL . $version . '/profiles';
        $this->tokenizationUrl = self::BASE_URL . 'scripts/tokenization/tokens';
    }

    public function getMakePaymentUrl()
    {
        return $this->paymentUrl;
    }

    public function getReturnPaymentUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId . '/returns';
    }

    public function getVoidTransactionUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId . '/void';
    }

    public function getCompletePreAuthUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId . '/completions';
    }

    public function getPaymentUrl($transId)
    {
        return $this->paymentUrl . '/' . $transId;
    }

    public function getContinuePaymentUrl($merchantData)
    {
        return $this->paymentUrl . '/' . $merchantData . '/continue';
    }

    public function getSearchQueryUrl()
    {
        return $this->reportUrl;
    }

    public function getCreateProfileUrl()
    {
        return $this->profileUrl;
    }

    public function getProfileUrl($profileId)
    {
        return $this->profileUrl . '/' . $profileId;
    }

    public function getUpdateProfileUrl($profileId)
    {
        return $this->profileUrl . '/' . $profileId;
    }

    public function getDeleteProfileUrl($profileId)
    {
        return $this->profileUrl . '/' . $profileId;
    }

    public function getCardsUrl($profileId)
    {
        return $this->profileUrl . '/' . $profileId . '/cards';
    }

    public function getAddCardUrl($profileId)
    {
        return $this->profileUrl . '/' . $profileId . '/cards';
    }

    public function getCardUrl($profileId, $cardId)
    {
        return $this->profileUrl . '/' . $profileId . '/cards/' . $cardId;
    }

    public function getUpdateCardUrl($profileId, $cardId)
    {
        return $this->profileUrl . '/' . $profileId . '/cards/' . $cardId;
    }

    public function getDeleteCardUrl($profileId, $cardId)
    {
        return $this->profileUrl . '/' . $profileId . '/cards/' . $cardId;
    }

    public function getTokenizationUrl()
    {
        return $this->tokenizationUrl;
    }

    public function getMakePaymentMethod()
    {
        return $this->makePaymentMethod;
    }

    public function getReturnPaymentMethod()
    {
        return $this->returnPaymentMethod;
    }

    public function getVoidTransactionMethod()
    {
        return $this->voidTransactionMethod;
    }

    public function getCompletePreAuthMethod()
    {
        return $this->completePreAuthMethod;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function getContinuePaymentMethod()
    {
        return $this->continuePaymentMethod;
    }

    public function getSearchQueryMethod()
    {
        return $this->searchQueryMethod;
    }

    public function getCreateProfileMethod()
    {
        return $this->createProfileMethod;
    }

    public function getProfileMethod()
    {
        return $this->getProfileMethod;
    }

    public function getUpdateProfileMethod()
    {
        return $this->updateProfileMethod;
    }

    public function getDeleteProfileMethod()
    {
        return $this->deleteProfileMethod;
    }

    public function getCardsMethod()
    {
        return $this->getCardsMethod;
    }

    public function getAddCardMethod()
    {
        return $this->addCardMethod;
    }

    public function getCardMethod()
    {
        return $this->getCardMethod;
    }

    public function getUpdateCardMethod()
    {
        return $this->updateCardMethod;
    }

    public function getDeleteCardMethod()
    {
        return $this->deleteCardMethod;
    }

    public function getTokenizationMethod()
    {
        return $this->tokenizationMethod;
    }
}

