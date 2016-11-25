<?php
namespace App\Helpers;


class MailChimpHelper
{
    public function __construct()
    {
        $this->apiKey = env('API_MAILCHIMP_KEY');
        $this->urlBase =  env('API_MAILCHIMP_URL');

    }

    public function members( $email, $status, $list_id, $method, $merge_fields = array('FNAME' => '','LNAME' => '') ){

        $data = array(
            'apikey'        => $this->apiKey,
            'email_address' => $email,
            'status'        => $status,
            "language"      => "es_ES",
            'merge_fields'  => $merge_fields
        );
        $mch_api = curl_init(); // initialize cURL connection

        curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($this->apiKey,strpos($this->apiKey,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
        curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$this->apiKey )));
        curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
        curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
        curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, $method); // method PUT
        curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
        curl_setopt($mch_api, CURLOPT_POST, true);
        curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json

        $result = curl_exec($mch_api);
        return json_decode($result, true);
    }

}