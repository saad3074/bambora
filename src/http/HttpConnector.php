<?php
namespace saad3074\Bambora\http;

class HttpConnector
{
    public static function request($url, $data = null, $method = 'POST', $header = [], $timeout = 30)
    {
        $req = curl_init($url);

        curl_setopt($req, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($req, CURLOPT_TIMEOUT, $timeout);

        curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($req, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($req, CURLOPT_SSL_VERIFYHOST, 2);

        if(!empty($header)) {
            curl_setopt($req, CURLOPT_HTTPHEADER, $header);
        }
        if (!is_null($data)) {
            if(is_array($data)) {
                $data = http_build_query($data);
            }
            curl_setopt($req, CURLOPT_POSTFIELDS, $data);
        }
        $res = curl_exec($req);
        curl_close($req);

        return $res;
    }
}