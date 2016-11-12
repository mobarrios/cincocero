<?php

Route::group(['namespace' => 'tfc'], function()
{
//    Route::resource('/','WebController@Index');
    Route::get('/',[
       'as' => 'web',
        'uses' => 'WebController@Index'
    ]);


    //    Route::resource('noticias','WebController@Noticias');
//    Route::resource('galeria','WebController@Galeria');
//    Route::resource('inscripcion','WebController@Inscripcion');
//    Route::resource('contactanos','WebController@Contactanos');
//    Route::resource('principal','WebController@Principal');

    Route::get('{id}/principal',[
        'as' => 'principal',
        'uses' => 'WebController@Principal'
    ]);

    Route::get('{categoriaId}/sedes',[
        'as' => 'web.sedes',
        'uses' => 'WebController@Sedes'
    ]);


    Route::get('{categoriaId}/sedesDetalle/{id}',[
        'as' => 'sedeDetalle',
        'uses' => 'WebController@SedeDetalle'
    ]);


    Route::get('{categoriaId}/galeria',[
        'as' => 'galeria',
        'uses' => 'WebController@Galeria'
    ]);

    Route::get('{categoriaId}/noticias',[
        'as' => 'noticias',
        'uses' => 'WebController@Noticias'
    ]);

    Route::get('{categoriaId}/reglamento',[
        'as' => 'reglamento',
        'uses' => 'WebController@Reglamento'
    ]);

    Route::get('{categoriaId}/inscripcion',[
        'as' => 'inscripcion',
        'uses' => 'WebController@Inscripcion'
    ]);

    Route::get('{categoriaId}/contactanos',[
        'as' => 'contactanos',
        'uses' => 'WebController@Contactanos'
    ]);

    Route::get('{categoriaId}/torneos/{torneo}/{fase?}',[
        'as' => 'torneos',
        'uses' => 'WebController@Torneos'
    ]);

//    Route::get('{categoriaId}/torneo/{id}',[
//        'as' => 'torneos',
//        'uses' => 'WebController@Resultado'
//    ]);

    Route::resource('resultado','WebController@Resultado');


    Route::get('{categoriaId}/resultado/{id}',[
        'as' => 'rs',
        'uses' => 'WebController@Resultado'
    ]);

    Route::get('{categoriaId}/fixture/{id}',[
        'as' => 'fixture',
        'uses' => 'WebController@Fixture'
    ]);

    Route::get('{categoriaId}/{faseId}/equipo/{id}',[
        'as' => 'equipo',
        'uses' => 'WebController@Equipo'
    ]);

    Route::get('{categoriaId}/{id}/jugador/{faseId}',[
        'as' => 'jugador',
        'uses' => 'WebController@Jugador'
    ]);

    Route::get('{categoriaId}/proximaFecha/{id}',[
        'as' => 'proximaFecha',
        'uses' => 'WebController@ProximaFecha'
    ]);

    Route::get('{categoriaId}/fechaActual/{id}',[
        'as' => 'fechaActual',
        'uses' => 'WebController@FechaActual'
    ]);

    Route::get('{categoriaId}/sancion/{id}',[
        'as' => 'sancion',
        'uses' => 'WebController@Sancion'
    ]);


    Route::get('{categoriaId}/goleador/{id}',[
        'as' => 'goleador',
        'uses' => 'WebController@Goleador'
    ]);


    Route::get('{categoriaId}/fairplay/{id}',[
        'as' => 'fairplay',
        'uses' => 'WebController@FairPlay'
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

//    Route::resource('sede_detalle','WebController@SedeDetalle');


    Route::post('registracion',['as'=>'postRegistration','uses'=>'WebController@postRegistration']);

    Route::post('contacto',['as'=>'postContact','uses'=>'WebController@postContact']);

});
