<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//use App\Http\Controllers\Auth\AuthController ;
//use Intervention\Image\ImageManagerStatic as Image;
use App\Helpers\ImagesHelper;
use \App\Helpers\TodoPago\lib\Sdk as todoPago;
use \App\Helpers\TodoPago\lib\Data\User as todoPagoUser;


    // lista de empresas para mejorar acceso
    //Route::get('',function(){
    //   return view('company_list');
    // });

//Session::put('languaje','es_ES');


// route MERCADO PAGO

Route::get('mp',function()
{
    $mp  = new \App\Helpers\MercadoPago\MP("315396166222597", "B8i2XAin03lDts4n0UQXmfMBVwWDTKd6");

    $mp->sandbox_mode(true);
    $preference_data = array(
        "items" => array(
            array(
                "title" => "TEST",
                "quantity" => 1,
                "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
                "unit_price" => 10.00
            )
        )
    );

    $preference = $mp->create_preference($preference_data);


    echo 		"<a href=". $preference['response']['sandbox_init_point'].">Pay</a>";

    dd($preference);
});


// route TODO PAGO
Route::get('tp',   '\App\Http\Controllers\motonet\TodoPagoController@getTp');
Route::get('exito/{data?}','\App\Http\Controllers\motonet\TodoPagoController@getExito');
Route::get('error/{data?}','\App\Http\Controllers\motonet\TodoPagoController@getError');


/*

Route::get('exito/{data?}',function($data){


    dd($data);
});

Route::get('error/{data?}',function($data){

    dd($data);
});



Route::get('tp',function(){
    $mode           = "test";//identificador de entorno obligatorio, la otra opcion es prod
    $http_header    = array('Authorization'=>'TODOPAGO a8e7772800df4919a0c3753738659150');//authorization key del ambiente requerido

    $connector      = new todoPago($http_header, $mode);

    $operationid = 1;

    $optionsSAR_comercio = array (
        'Security'=> 'TODOPAGO a8e7772800df4919a0c3753738659150',
        'EncodingMethod'=>'XML',
        'Merchant'=>3328,
        'URL_OK'=>"http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/exito/operationid=$operationid",
        'URL_ERROR'=>"http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/error/operationid=$operationid"

    );
    $optionsSAR_operacion = array (
        'MERCHANT'=> 3328,
        'OPERATIONID'=> $operationid,
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


    $rta = $connector->sendAuthorizeRequest($optionsSAR_comercio, $optionsSAR_operacion);

    //if($values['StatusCode'] == -1)
      //  return redirect()->to($values['URL_Request']);

    if($rta['StatusCode'] != -1) {
        var_dump($rta);
    } else {
        setcookie('RequestKey',$rta["RequestKey"],  time() + (86400 * 30), "/");
       // header("Location: ".$rta["URL_Request"]);
        return redirect()->to($rta["URL_Request"]);
    }

});
*/

Route::get('ml/{id?}', ['as'=>'ml','uses'=>'\App\Http\Controllers\ws\MercadolibreController@getItem']);
Route::get('ml_sub_categories/{id?}','\App\Http\Controllers\ws\MercadolibreController@getSubCategories');

Route::get('update_categories','\App\Http\Controllers\ws\MercadolibreController@updateCategories');
Route::get('update_sub_categories','\App\Http\Controllers\ws\MercadolibreController@updateSubCategories');


//Route::group(['middleware'=>'changeLanguaje'],function(){
Route::get('template',function(){

    return view('test');
});
require(__DIR__. '/Routes/motonet/webRoutes.php');

Route::get('/',function(){

    return redirect()->route('index');
});





//login pasa x middle company para chequear la empresa
Route::get('login', ['as'=>'login','uses'=>'LoginController@getLogin']);


        //pasa para cambiar la conexion a la db segun la empresa
 //   Route::group(['middleware'=>'changeDb'],function()
  //     {

//Config::set('constants.global_db',$request->id);


           //Route::post('postLogin', ['as'=>'postLogin','uses'=>'LoginController@postLogin']);
        Route::post('postLogin', ['as'=>'postLogin','uses'=>'LoginController@postLogin']);


            Route::group(['middleware' => ['auth']], function()
            {

                //logout
                Route::get('logout',['as'=>'logout','uses'=>'LoginController@getLogout']);

                Route::get('home', ['as'=>'home','uses'=>'HomeController@getIndex']);

               // Route::get('dispositivos',            ['middleware' => ['roles:dispostivo-listar'] , 'as'=>'dispositivos','uses'=>'DispositivosController@getIndex']);

                //require(__DIR__. '/Routes/CrudRoutes.php');
                //require(__DIR__. '/Routes/stock/items/ItemsRoutes.php');
                //require(__DIR__. '/Routes/stock/brands/BrandsRoutes.php');
                require(__DIR__. '/Routes/config/UserProfilesRoutes.php');


                $route_files = File::allFiles(__DIR__ . '/Routes/motonet');

                foreach ($route_files as $partial)
                {
                    require_once $partial->getPathName();
                }


                //only super user
                Route::group(['prefix'=>'config','middleware'=>'isAdmin'],function()
                {
                    require(__DIR__ . '/Routes/config/ConfigRoutes.php');
                    require(__DIR__ . '/Routes/config/UsersRoutes.php');
                    require(__DIR__ . '/Routes/config/ProfilesRoutes.php');
                    require(__DIR__ . '/Routes/config/MenusRoutes.php');
                    require(__DIR__ . '/Routes/config/ModulesRoutes.php');

                    Route::get('init', ['as'=>'init','uses'=>'\App\Http\Controllers\config\InitController@getInit']);
                    Route::get('update', ['as'=>'update','uses'=>'\App\Http\Controllers\config\InitController@getUpdate']);


                });

            });



        Route::get('borrarImagen/{id}',['as'=>'deleteImage',function($id){

            $file   = \App\Entities\Images::find($id);

            $img    = new ImagesHelper();

            $img->deleteFile($file->image);

            $file->delete();

            return redirect()->back();
        }]);

  //});

//});

/*
Route::group(['prefix'=>'ws'],function(){
    require(__DIR__ . '/Routes/ws/wsContentRoutes.php');
});

*/
Route::get('xls',function(){
    Excel::create('Laravel Excel', function($excel) {

        $excel->sheet('Excel sheet', function($sheet) {

            $sheet->setOrientation('landscape');

        });

    })->export('xls');
});

Route::get('pdf',function(){
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
});





/*
Route::get('changeLanguaje/{lang}',function($lang){

    Session::put('languaje',$lang);

    return redirect()->back()->withErrors(trans('messages.changeLanguaje'));
});




    //test
    Route::get('test',function() {

        // $a = Image::make('a.JPG')->resize(100,200);

        // $a->crop(150,200,100,100)->save('crop.jpg');
        // dd($a);


        echo(\Illuminate\Support\Facades\Crypt::encrypt('admin_stock'));

        /*
        Artisan::call('make:controller',['name'=>'App\Http\Controllers\PepitoController']);
        Artisan::call('make:model',		['name'=>'App\Entities\PepitoModel']);
        Artisan::call('make:migration',	['name'=>'PepitoMigration']);
    */
   // });

//});

