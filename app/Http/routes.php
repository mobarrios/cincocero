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


    // lista de empresas para mejorar acceso
    //Route::get('',function(){
    //   return view('company_list');
    // });

//Session::put('languaje','es_ES');

//Route::group(['middleware'=>'changeLanguaje'],function(){

Route::group(['prefix' => 'web', 'namespace' => 'tfc'], function() {

    Route::get('/', function(){
        return view('tfc/web/index');
    });

    Route::get('reglamento', function(){
        return view('tfc/web/reglamento');
    });

    Route::get('noticias', function(){
        return view('tfc/web/noticias');
    });

    Route::get('sedes', function(){
        return view('tfc/web/sedes');
    });

    Route::get('galeria', function(){
        return view('tfc/web/galeria');
    });

    Route::get('inscripcion', function(){
        return view('tfc/web/inscripcion');
    });

    Route::get('contactanos', function(){
        return view('tfc/web/contactanos');
    });

    Route::get('principal', function(){
        return view('tfc/web/principal');
    });



    Route::get('resultado', function(){
        return view('tfc/web/resultado');
    });
    Route::get('proxima_fecha', function(){
        return view('tfc/web/proxima_fecha');
    });
    Route::get('fixture', function(){
        return view('tfc/web/fixture');
    });
    Route::get('sancion', function(){
        return view('tfc/web/sancion');
    });
    Route::get('goleador', function(){
        return view('tfc/web/goleador');
    });
    Route::get('fairplay', function(){
        return view('tfc/web/fairplay');
    });

    Route::get('destacado', function(){
        return view('tfc/web/destacado');
    });

    Route::get('clima', function(){
        return view('tfc/web/clima');
    });


    Route::get('la_cantera', function(){
        return view('tfc/web/la_cantera');
    });


});


//Route::get('web',function(){
//
//    return view('tfc.web.index');
//});

Route::get('template',function(){

    return view('test');
});

Route::get('',function(){

    return redirect()->route('login');
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

                require(__DIR__. '/Routes/config/UserProfilesRoutes.php');


                $route_files = File::allFiles(__DIR__ . '/Routes/tfc');

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



Route::get('pass',function(){


    return RandomText(5);
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

