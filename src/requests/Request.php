<?php
namespace saad3074\Bambora\requests;

use saad3074\Bambora\http\Endpoint;
use saad3074\Bambora\http\HttpConnector;

class Request
{
    protected $url;
    protected $method;
    protected $requestData;
    protected $endpoint;
    private $header;

    public function __construct($merchantId, $passcode, $version)
    {
        $this->header = [
            'Authorization: Passcode '.base64_encode($merchantId.':'.$passcode),
            'Content-Type: application/json',
        ];

        $this->endpoint = new Endpoint($version);
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setRequestData($requestData)
    {
        $this->requestData = $requestData;
        return $this;
    }

    protected function sendData()
    {
        $response = HttpConnector::request($this->url, json_encode($this->requestData), $this->method, $this->header);
        return json_decode($response,true);
    }
}