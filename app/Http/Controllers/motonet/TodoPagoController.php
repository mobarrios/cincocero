<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\Models;
use App\Entities\motonet\Operations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Helpers\TodoPago\lib\Sdk as todoPago;
use \App\Helpers\TodoPago\lib\Data\User as todoPagoUser;
use Illuminate\Support\Facades\URL;


class TodoPagoController extends Controller {

    protected $mode;
    protected $autorization_code;
    protected $security;
    protected $merchant;
    protected $operation_id;
    protected $http_header;
    protected $connector;



    public function __construct()
    {
        $this->mode                 = 'test';
        $this->autorization_code    = 'TODOPAGO a8e7772800df4919a0c3753738659150';
        $this->security             = 'a8e7772800df4919a0c3753738659150';
        $this->merchant             =  3328;
        $this->http_header          =  ['Authorization'=> $this->autorization_code, 'user_agent' => 'PHPSoapClient'];//authorization key del ambiente requerido

    }

    public function getTp(Request $request)
    {
        $client             = Clients::where('email',$request->mail)->get();
        $operations         = Operations::all()->last();


        if(!is_null($operations)){

            if ($operations->count() != 0)
                $this->operation_id = $operations->id + 1;

        }else{

            $this->operation_id = 1;
        }


        if($client->count() == 0) {

            $client              = new Clients();
            $client->name        = $request->name;
            $client->last_name   = $request->last_name;
            $client->email       = $request->email;
            $client->phone       = $request->phone;
         
            $client->save();
        }


            $this->connector = new todoPago($this->http_header, $this->mode);

            $optionsSAR_operacion = $_POST;

            $optionsSAR_operacion = array(

                'MERCHANT' => $this->merchant,
                'OPERATIONID' => $this->operation_id,
                'CURRENCYCODE' => 032,
                'AMOUNT' => $request->price,

                //Datos ejemplos CS
                'CSBTCITY' => $request->city,
                'CSSTCITY' => $request->city,

                'CSBTCOUNTRY' => "AR",
                'CSSTCOUNTRY' => "AR",

                'CSBTEMAIL' => $client->email,
                'CSSTEMAIL' => $client->email,

                'CSBTFIRSTNAME' => $client->name,
                'CSSTFIRSTNAME' => $client->name,

                'CSBTLASTNAME' => $client->last_name,
                'CSSTLASTNAME' => $client->last_name,

                'CSBTPHONENUMBER' => $client->phone,
                'CSSTPHONENUMBER' => $client->phone,

                'CSBTPOSTALCODE' => $request->postal_code,
                'CSSTPOSTALCODE' => $request->postal_code,

                'CSBTSTATE' => $request->state,
                'CSSTSTATE' => $request->state,

                'CSBTSTREET1' => $request->street,
                'CSSTSTREET1' => $request->street,

                'CSBTCUSTOMERID' => $client->id,
                'CSBTIPADDRESS' => '127.0.0.1',
                'CSPTCURRENCY' => "ARS",
                'CSPTGRANDTOTALAMOUNT' => number_format($request->price, 2, '.', ''),
                'CSITPRODUCTCODE' => "electronic_good#chocho",
                'CSITPRODUCTDESCRIPTION' => "NOTEBOOK L845 SP4304LA DF TOSHIBA#chocho",
                'CSITPRODUCTNAME' => "NOTEBOOK L845 SP4304LA DF TOSHIBA#chocho",
                'CSITPRODUCTSKU' => "LEVJNSL36GN#chocho",
                'CSITTOTALAMOUNT' => "1254.40#10.00",
                'CSITQUANTITY' => "1#1",
                'CSITUNITPRICE' => "1254.40#15.00"
            );


            $rta = $this->connector->sendAuthorizeRequest($this->getSARComercio(), $optionsSAR_operacion);

            if ($rta['StatusCode'] != -1) {

                var_dump($rta);

            } else {

                setcookie('client_id',$client->id);
                setcookie('RequestKey', $rta["RequestKey"], time() + (86400 * 30), "/");

                return redirect()->to($rta["URL_Request"]);
            }

    }

    public function getSARComercio()
    {
        $optionsSAR_comercio = array (
            'Security'      => $this->security,
            'EncodingMethod'=> 'XML',
            'Merchant'      => $this->merchant,
            'URL_OK'        => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/exito/operationid=$this->operation_id",
            'URL_ERROR'     => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/error/operationid=$this->operation_id"
        );

        return $optionsSAR_comercio;
    }

    public function getExito(Request $request){

        $rk               = $_COOKIE['RequestKey'];
        $client_id        = $_COOKIE['client_id'];
        $p_id             = $_COOKIE['publication_id'];


        $this->connector  =  new todoPago($this->http_header, $this->mode);


        $optionsGAA = array (
            'Security'   => $this->security,
            'Merchant'   => $this->merchant,
            'RequestKey' => $rk,
            'AnswerKey'  => $request->Answer,
        );

        $rta = $this->connector->getAuthorizeAnswer($optionsGAA);



        $operation                    = new Operations();
        $operation->id                = $rta['Payload']['Answer']['OPERATIONID'];
        $operation->clients_id        = $client_id;
        $operation->medio_de_pago     = 1;
        //$operation->pay_date        = $rta['Payload']['Answer']['DATETIME'];
        $operation->amount            = $rta['Payload']['Request']['AMOUNT'];
        $operation->authorization_key = $rta['AuthorizationKey'];
        $operation->authorization_code= $rta['Payload']['Answer']['AUTHORIZATIONCODE'];
        $operation->save();




        return redirect()->route('resumen',$p_id)->withErrors($rta['StatusMessage']);

    }

    public function getError(Request $request){

        $rk        = $_COOKIE['RequestKey'];
        $p_id      = $_COOKIE['publication_id'];


        $connector  =  new todoPago($this->http_header, $this->mode);

        $optionsGAA = array(
            'Security' => $this->security,
            'Merchant' => $this->merchant,
            'RequestKey' => $rk,
            'AnswerKey' => $request->Answer
        );

        $ak = $connector->getAuthorizeAnswer($optionsGAA);

       // return '<h5>'.$ak['StatusMessage'].'</h5>';
        return redirect()->route('resumen',$p_id)->withErrors($ak['StatusMessage']);

    }


}