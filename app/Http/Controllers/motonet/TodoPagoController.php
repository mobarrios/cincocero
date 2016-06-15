<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\Models;
use App\Entities\motonet\Operations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Helpers\TodoPago\lib\Sdk as todoPago;
use \App\Helpers\TodoPago\lib\Data\User as todoPagoUser;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;


class TodoPagoController extends Controller {

    protected $mode;
    protected $autorization_code;
    protected $security;
    protected $merchant;
    protected $http_header;
    protected $connector;
    protected $operation_id;




    public function __construct()
    {

        if(env('TODO_PAGO_MODE') == 'test'){

            //modo testing "test"
            $this->mode                 = 'test';
            $this->autorization_code    = 'TODOPAGO a8e7772800df4919a0c3753738659150';
            $this->security             = 'a8e7772800df4919a0c3753738659150';
            $this->merchant             =  3328;
        }else{
            // produccion "prod"
            $this->mode                 = 'prod';
            $this->autorization_code    = 'TODOPAGO 42828D3178E67DF1D71FF49B67A67131';
            $this->security             = '42828D3178E67DF1D71FF49B67A67131';
            $this->merchant             =  21478;
        }

        $this->http_header          =  ['Authorization'=> $this->autorization_code, 'user_agent' => 'PHPSoapClient'];//authorization key del ambiente requerido

    }

    public function getTp($request = null , $client = null, $publication = null, $operation_id = null)
    {
            $this->connector        = new todoPago($this->http_header, $this->mode);
            $this->operation_id     = $operation_id;

            $optionsSAR_operacion   = $_POST;

            $optionsSAR_operacion   = array(

                'MERCHANT'                  => $this->merchant,
                'OPERATIONID'               => $operation_id,
                'CURRENCYCODE'              => 032,
                'AMOUNT'                    => $request->price,

                //Datos ejemplos CS
                'CSBTCITY'                  => $request->city,
                'CSSTCITY'                  => $request->city,

                'CSBTCOUNTRY'               => "AR",
                'CSSTCOUNTRY'               => "AR",

                'CSBTEMAIL'                 => $client->email,
                'CSSTEMAIL'                 => $client->email,

                'CSBTFIRSTNAME'             => $client->name,
                'CSSTFIRSTNAME'             => $client->name,

                'CSBTLASTNAME'              => $client->last_name,
                'CSSTLASTNAME'              => $client->last_name,

                'CSBTPHONENUMBER'           => $client->phone,
                'CSSTPHONENUMBER'           => $client->phone,

                'CSBTPOSTALCODE'            => $request->postal_code,
                'CSSTPOSTALCODE'            => $request->postal_code,

                'CSBTSTATE'                 => $request->state,
                'CSSTSTATE'                 => $request->state,

                'CSBTSTREET1'               => $request->street,
                'CSSTSTREET1'               => $request->street,

                'CSBTCUSTOMERID'            => $client->id,
                'CSBTIPADDRESS'             => '127.0.0.1',
                'CSPTCURRENCY'              => "ARS",
                'CSPTGRANDTOTALAMOUNT'      => number_format($request->price, 2, '.', ''),
                'CSITPRODUCTCODE'           => $publication->Models->Brands->name .'-'.$publication->Models->name ."#chocho",
                'CSITPRODUCTDESCRIPTION'    => $publication->Models->Brands->name .'-'.$publication->Models->name ."#chocho",
                'CSITPRODUCTNAME'           => $publication->Models->Brands->name .'-'.$publication->Models->name ."#chocho",
                'CSITPRODUCTSKU'            => "ABC123#chocho",
                'CSITTOTALAMOUNT'           => number_format($request->price, 2, '.', '')."#10.00",
                'CSITQUANTITY'              => "1#1",
                'CSITUNITPRICE'             => number_format($request->price, 2, '.', '')."#15.00"
            );


            $rta = $this->connector->sendAuthorizeRequest($this->getSARComercio(), $optionsSAR_operacion);

            if ($rta['StatusCode'] != -1) {

                var_dump($rta);

            } else {

                //setcookie('client_id',$client->id);
                setcookie('RequestKey', $rta["RequestKey"], time() + (86400 * 30), '/');
                Session::put('RequestKey',$rta["RequestKey"]);


                return redirect()->to($rta["URL_Request"]);
            }

    }

    public function getSARComercio()
    {
        $optionsSAR_comercio = array (
            'Security'      => $this->security,
            'EncodingMethod'=> 'XML',
            'Merchant'      => $this->merchant,
            //'URL_OK'        => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/exito/operationid=$this->operation_id",
            //'URL_ERROR'     => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/error/operationid=$this->operation_id"

            'URL_OK'        => env('TODO_PAGO_URL_OK')."operationid=$this->operation_id",
            'URL_ERROR'     => env('TODO_PAGO_URL_ERROR')."operationid=$this->operation_id",

        );

        return $optionsSAR_comercio;
    }

    public function getExito(Request $request){

      //  $rk               = $_COOKIE['RequestKey'];
      //  $client_id        = $_COOKIE['client_id'];
      //  $p_id             = $_COOKIE['publication_id'];

        $rk               = Session::get('RequestKey');
        $client_id        = Session::get('client_id');
        $p_id             = Session::get('publication_id');

        dd($_COOKIE);
        $this->connector  =  new todoPago($this->http_header, $this->mode);

        $optionsGAA = array (
            'Security'   => $this->security,
            'Merchant'   => $this->merchant,
            'RequestKey' => $rk,
            'AnswerKey'  => $request->Answer,
        );

        $rta = $this->connector->getAuthorizeAnswer($optionsGAA);

        $payController = new PayController();
        $payController->newOperationTodoPago($rta, $client_id);

        $payController->sendMail();

        return redirect()->route('resumen',$p_id)->withErrors($rta['StatusMessage']);

    }

    public function getError(Request $request){


        //$rk         = $_COOKIE['RequestKey'];
        //$p_id       = $_COOKIE['publication_id'];
        //$client_id  = $_COOKIE['client_id'];

        $rk               = Session::get('RequestKey');
        $client_id        = Session::get('client_id');
        $p_id             = Session::get('publication_id');


        dd($_COOKIE);

        $connector  =  new todoPago($this->http_header, $this->mode);

        $optionsGAA = array(
            'Security' => $this->security,
            'Merchant' => $this->merchant,
            'RequestKey' => $rk,
            'AnswerKey' => $request->Answer
        );

        $rta = $connector->getAuthorizeAnswer($optionsGAA);


        $payController = new PayController();
        $payController->newOperationTodoPago($rta, $client_id);

        // return '<h5>'.$ak['StatusMessage'].'</h5>';
        return redirect()->route('resumen',$p_id)->withErrors($rta['StatusMessage']);

    }



}