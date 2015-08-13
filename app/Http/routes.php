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

    // lista de empresas para mejorar acceso
    Route::get('',function(){
       return view('company_list');
    });


    //login pasa x middle company para chequear la empresa
    Route::get('login/id={id}', ['middleware'=>['company'],'as'=>'login','uses'=>'LoginController@getLogin']);

    //pasa para cambiar la conexion a la db segun la empresa
    Route::group(['middleware'=>'changeDb'],function(){

        //setea el idioma de la applicaion
        App::setLocale('es_ES');

        Route::post('postLogin',['as'=>'postLogin','uses'=>'LoginController@postLogin']);

        Route::group(['middleware' => ['auth']], function()
        {
            Route::get('home', ['as'=>'home','uses'=>'HomeController@getIndex']);
           // Route::get('dispositivos',            ['middleware' => ['roles:dispostivo-listar'] , 'as'=>'dispositivos','uses'=>'DispositivosController@getIndex']);

            Route::get('crud', ['as'=>'crud','uses'=>'CrudController@getIndex']);
            Route::get('crudEdit/{id}',['as'=>'crudGetEdit','uses'=>'CrudController@getEdit']);
            Route::get('crudDelete/{id}',['as'=>'crudGetDel','uses'=>'CrudController@getDel']);
            Route::get('crudNew',['as'=>'crudGetNew', 'uses'=>'CrudController@getNew']);

            Route::post('crudPostNew', ['as'=>'crudPostNew', 'uses'=>'CrudController@postNew']);
            Route::post('crudPostEdit/{id}',['as'=>'crudPostEdit', 'uses'=>'CrudController@postEdit']);

            //logout
            Route::get('logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
        });

        Route::group(['prefix'=>'config'],function()
        {

        });


    });



//test
Route::get('test',function()
{
    Artisan::call('make:controller',['name'=>'App\Http\Controllers\PepitoController']);
    Artisan::call('make:model',		['name'=>'App\Entities\PepitoModel']);
    Artisan::call('make:migration',	['name'=>'PepitoMigration']);

});

