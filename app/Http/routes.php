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

//fb

Route::get('fb', function(){

    $product_catalog = new \FacebookAds\Object\ProductCatalog(null, '1234');

        $product_catalog->setData(array(
            ProductCatalogFields::NAME => "Catalog",
        ));

        $product_catalog->create();
return $product_catalog;

});


// route MERCADO PAGO
Route::get('test_mail',function(){

    $publication    = App\Entities\motonet\Publications::find(14);
    $client         = App\Entities\motonet\Clients::find(2);
    $operation      = App\Entities\motonet\Operations::find(1);

    if($publication->Images->count() != 0 )
        $img = $publication->Images->first()->image;

    elseif($publication->Models->Images->count() != 0)
        $img = $publication->Models->Images->first()->image;

    else
        $img = null;

    $data['operation_id']       = $operation->id;
    $data['mail']               = $client->email;
    $data['subject']            = 'Tu compra en MotoNET : N° orden. '. Session::get('operation_id') ;
    $data['from']               = 'prueba@motonet.com.ar';
    $data['client']             = $client;
    $data['client_name']        = $client->full_name;
    //$data['publication_name']   = $publication->title;
    //$data['publication_price']  = $publication->price;
    $data['publication']        = $publication;
    $data['operation']          = $operation;
    $data['image']              = $img;
    //$data['total']              = $operation->amount;

    return view('emails.mail')->with($data);

});
//route MERCADO PAGO

Route::get('mp/{type?}/{operation_id?}','\App\Http\Controllers\motonet\PayController@mp');

// route TODO PAGO
Route::get('tp',   '\App\Http\Controllers\motonet\TodoPagoController@getTp');
Route::get('exito/{data?}','\App\Http\Controllers\motonet\TodoPagoController@getExito');
Route::get('error/{data?}','\App\Http\Controllers\motonet\TodoPagoController@getError');


Route::get('pay' ,'\App\Http\Controllers\motonet\PayController@processPay');



Route::get('ml/{id?}', ['as'=>'ml','uses'=>'\App\Http\Controllers\ws\MercadolibreController@getItem']);
Route::get('ml_sub_categories/{id?}','\App\Http\Controllers\ws\MercadolibreController@getSubCategories');

Route::get('update_categories','\App\Http\Controllers\ws\MercadolibreController@updateCategories');
Route::get('update_sub_categories','\App\Http\Controllers\ws\MercadolibreController@updateSubCategories');


//Route::group(['middleware'=>'changeLanguaje'],function(){
Route::get('template',function(){

    return view('test');
});
require(__DIR__. '/Routes/motonet/webRoutes.php');

//Route::get('/',function(){
//
//    return redirect()->route('indexNueva');
//});


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


        //export

        Route::get('export',['as'=>'export', 'uses'=>'\App\Http\Controllers\UtilitiesController@exportToExcel']);


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

