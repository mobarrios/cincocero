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
use App\Http\Controllers\Auth\AuthController ;
use Intervention\Image\ImageManagerStatic as Image;
use App\Helpers\ImagesHelper;

    // lista de empresas para mejorar acceso
    Route::get('',function(){
       return view('company_list');
    });

//Session::put('languaje','es_ES');

Route::group(['middleware'=>'changeLanguaje'],function(){


    //login pasa x middle company para chequear la empresa
    Route::get('login/id={id}', ['middleware'=>['company'],'as'=>'login','uses'=>'LoginController@getLogin']);

    //pasa para cambiar la conexion a la db segun la empresa
    Route::group(['middleware'=>'changeDb'],function(){

        Route::post('postLogin',['as'=>'postLogin','uses'=>'LoginController@postLogin']);

        Route::group(['middleware' => ['auth']], function()
        {
            Route::get('home', ['as'=>'home','uses'=>'HomeController@getIndex']);
           // Route::get('dispositivos',            ['middleware' => ['roles:dispostivo-listar'] , 'as'=>'dispositivos','uses'=>'DispositivosController@getIndex']);

            require(__DIR__.'/Routes/CrudRoutes.php');

            //logout
            Route::get('logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
        });

        Route::group(['prefix'=>'config'],function()
        {
            require(__DIR__ . '/Routes/config/UsersRoutes.php');
            require(__DIR__ . '/Routes/config/ProfilesRoutes.php');
            require(__DIR__ . '/Routes/config/ModulesRoutes.php');
            require(__DIR__ . '/Routes/stock/items/ItemsRoutes.php');
            require(__DIR__ . '/Routes/stock/brands/BrandsRoutes.php');
        });

        Route::get('borrarImagen/{id}',['as'=>'deleteImage',function($id){

            $file   = \App\Entities\Images::find($id);

            $img    = new ImagesHelper();

            $img->deleteFile($file->image);

            $file->delete();

            return redirect()->back();
        }]);

    });

});

Route::get('changeLanguaje/{lang}',function($lang){

    Session::put('languaje',$lang);

    return redirect()->back()->withErrors(trans('messages.changeLanguaje'));
});




//test
Route::get('test',function()
{
    $a = Image::make('a.JPG')->resize(100,200);

    $a->crop(150,200,100,100)->save('crop.jpg');
    dd($a);

    dd(bcrypt('1234'));
    /*
    Artisan::call('make:controller',['name'=>'App\Http\Controllers\PepitoController']);
    Artisan::call('make:model',		['name'=>'App\Entities\PepitoModel']);
    Artisan::call('make:migration',	['name'=>'PepitoMigration']);
*/
});

