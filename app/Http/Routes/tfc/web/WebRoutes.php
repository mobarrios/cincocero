<?php

Route::group(['prefix' => 'web', 'namespace' => 'tfc'], function()
{
    Route::resource('/','WebController@Index');
    Route::resource('reglamento','WebController@Reglamento');
//    Route::resource('noticias','WebController@Noticias');
    Route::resource('sedes','WebController@Sedes');
//    Route::resource('galeria','WebController@Galeria');
    Route::resource('inscripcion','WebController@Inscripcion');
    Route::resource('contactanos','WebController@Contactanos');
//    Route::resource('principal','WebController@Principal');

    Route::get('{id}/principal',[
        'as' => 'principal',
        'uses' => 'WebController@Principal'
    ]);

    Route::get('galeria',[
        'as' => 'galeria',
        'uses' => 'WebController@Galeria'
    ]);

    Route::get('noticias',[
        'as' => 'noticias',
        'uses' => 'WebController@Noticias'
    ]);

    Route::get('{id}/resultado',[
        'as' => 'resultado',
        'uses' => 'WebController@Resultado'
    ]);


//    Route::resource('resultado','WebController@Resultado');


    Route::get('{id}/fixture',[
        'as' => 'fixture',
        'uses' => 'WebController@Fixture'
    ]);

    Route::get('{id}/equipo',[
        'as' => 'equipo',
        'uses' => 'WebController@Equipo'
    ]);

    Route::get('{id}/jugador',[
        'as' => 'jugador',
        'uses' => 'WebController@Jugador'
    ]);

    Route::get('{id}/proximaFecha',[
        'as' => 'proximaFecha',
        'uses' => 'WebController@ProximaFecha'
    ]);

    Route::get('{id}/sancion',[
        'as' => 'sancion',
        'uses' => 'WebController@Sancion'
    ]);


    Route::get('{id}/goleador',[
        'as' => 'goleador',
        'uses' => 'WebController@Goleador'
    ]);


    Route::get('{id}/fairplay',[
        'as' => 'fairplay',
        'uses' => 'WebController@FairPlay'
    ]);



    Route::get('{id}/destacado',[
        'as' => 'destacado',
        'uses' => 'WebController@Destacado'
    ]);



//    Route::resource('sancion','WebController@Sancion');
//    Route::resource('goleador','WebController@Goleador');
//    Route::resource('fairplay','WebController@Fairplay');
    Route::resource('destacado','WebController@Destacado');
    Route::resource('clima','WebController@Clima');
//    Route::resource('la_cantera','WebController@LaCantera');
    Route::resource('la_guapeada','WebController@LaGuapeada');
//    Route::resource('jugador','WebController@Jugador');
//    Route::resource('proxima_fecha','WebController@Jugador');

    Route::resource('sede_detalle','WebController@SedeDetalle');


    Route::post('registracion',['as'=>'postRegistration','uses'=>'WebController@postRegistration']);

});
