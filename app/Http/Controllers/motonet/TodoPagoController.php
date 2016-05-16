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
    protected $http_header;
    protected $connector;
    protected $operation_id;




    public function __construct()
    {
        $this->mode                 = 'test';
        $this->autorization_code    = 'TODOPAGO a8e7772800df4919a0c3753738659150';
        $this->security             = 'a8e7772800df4919a0c3753738659150';
        $this->merchant             =  3328;
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
                'CSITPRODUCTSKU'            => "LEVJNSL36GN#chocho",
                'CSITTOTALAMOUNT'           => number_format($request->price, 2, '.', '')."#10.00",
                'CSITQUANTITY'              => "1#1",
                'CSITUNITPRICE'             => number_format($request->price, 2, '.', '')."#15.00"
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




}