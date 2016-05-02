<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Helpers\TodoPago\lib\Sdk as todoPago;
use \App\Helpers\TodoPago\lib\Data\User as todoPagoUser;


class TodoPagoController extends Controller {

    protected $mode;
    protected $autorization_code;
    protected $merchant;
    protected $operation_id;
    protected $http_header;
    protected $connector;



    public function __construct()
    {
        $this->mode                 = 'test';
        $this->autorization_code    = 'TODOPAGO a8e7772800df4919a0c3753738659150';
        $this->merchant             =  3328;
        $this->operation_id         =  15;
        $this->http_header          =  array('Authorization'=> $this->autorization_code);//authorization key del ambiente requerido

    }

    public function getTp()
    {
        $this->connector  =  new todoPago($this->http_header, $this->mode);


        $optionsSAR_operacion = array (
            'MERCHANT'=> $this->merchant,
            'OPERATIONID'=> $this->operation_id,
            'CURRENCYCODE'=> 032,
            'AMOUNT'=>"54",

            //Datos ejemplos CS
            'CSBTCITY'=> "Villa General Belgrano",
            'CSSTCITY'=> "Villa General Belgrano",

            'CSBTCOUNTRY'=> "AR",
            'CSSTCOUNTRY'=> "AR",

            'CSBTEMAIL'=> "todopago@hotmail.com",
            'CSSTEMAIL'=> "todopago@hotmail.com",

            'CSBTFIRSTNAME'=> "Juan",
            'CSSTFIRSTNAME'=> "Juan",

            'CSBTLASTNAME'=> "Perez",
            'CSSTLASTNAME'=> "Perez",

            'CSBTPHONENUMBER'=> "541160913988",
            'CSSTPHONENUMBER'=> "541160913988",

            'CSBTPOSTALCODE'=> " 1010",
            'CSSTPOSTALCODE'=> " 1010",

            'CSBTSTATE'=> "B",
            'CSSTSTATE'=> "B",

            'CSBTSTREET1'=> "Cerrito 740",
            'CSSTSTREET1'=> "Cerrito 740",

            'CSBTCUSTOMERID'=> "453458",
            'CSBTIPADDRESS'=> "192.0.0.4",
            'CSPTCURRENCY'=> "ARS",
            'CSPTGRANDTOTALAMOUNT'=> "125.38",
            'CSMDD7'=> "",
            'CSMDD8'=> "Y",
            'CSMDD9'=> "",
            'CSMDD10'=> "",
            'CSMDD11'=> "",
            'CSMDD12'=> "",
            'CSMDD13'=> "",
            'CSMDD14'=> "",
            'CSMDD15'=> "",
            'CSMDD16'=> "",
            'CSITPRODUCTCODE'=> "electronic_good#chocho",
            'CSITPRODUCTDESCRIPTION'=> "NOTEBOOK L845 SP4304LA DF TOSHIBA#chocho",
            'CSITPRODUCTNAME'=> "NOTEBOOK L845 SP4304LA DF TOSHIBA#chocho",
            'CSITPRODUCTSKU'=> "LEVJNSL36GN#chocho",
            'CSITTOTALAMOUNT'=> "1254.40#10.00",
            'CSITQUANTITY'=> "1#1",
            'CSITUNITPRICE'=> "1254.40#15.00"
        );


        $rta = $this->connector->sendAuthorizeRequest($this->getSARComercio() , $optionsSAR_operacion);


        if($rta['StatusCode'] != -1) {

            var_dump($rta);

        } else {

            setcookie('RequestKey',$rta["RequestKey"],  time() + (86400 * 30), "/");

            return redirect()->to($rta["URL_Request"]);

        }
    }

    public function getSARComercio()
    {
        $optionsSAR_comercio = array (
            'Security'      => $this->autorization_code,
            'EncodingMethod'=> 'XML',
            'Merchant'      => $this->merchant,
            'URL_OK'        => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/exito/operationid=$this->operation_id",
            'URL_ERROR'     => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/error/operationid=$this->operation_id"
        );

        return $optionsSAR_comercio;
    }

    public function getExito(Request $request){

        $rk               = $_COOKIE['RequestKey'];

        $this->connector  =  new todoPago($this->http_header, $this->mode);


        $optionsGAA = array (
            'Security'   => $this->autorization_code,
            'Merchant'   => $this->merchant,
            'RequestKey' => $rk,
            'AnswerKey'  => $request->Awnser,
        );

        $rta = $this->connector->getAuthorizeAnswer($optionsGAA);

        dd($rta);
    }

    public function getError(Request $request){

        $this->connector    =  new todoPago($this->http_header, $this->mode);
        $rk                 = $_COOKIE['RequestKey'];

        $optionsGAA = array (
            'Security'   => $this->autorization_code,
            'Merchant'   => $this->merchant,
            'RequestKey' => $rk,
            'AnswerKey'  => $request->Awnser,
        );

        $rta = $this->connector->getAuthorizeAnswer($optionsGAA);

        dd($rta);

    }


}