<?php
namespace App\Helpers;


class MailChimpHelper extends ApiBaseHelper
{
    public function __construct($apiKey = null, $apiUrlBase = null)
    {
        parent::__construct("API_MAILCHIMP_KEY", "API_MAILCHIMP_URL");
    }

    public function AddNewMember($listId,$email){
        $datos = ["status" => "subscribed","language" => "es_ES","email_address" => $email];
        $this->call($this->urlBase."/lists/".$listId."/members","post",$datos);

        return $this->getResultado();
    }

}