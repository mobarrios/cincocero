<?php

Route::group(['namespace' => 'tfc','prefix' => 'new'], function()
{
//    Route::resource('/','WebController2@Index');
    Route::get('/',[
       'as' => 'new.web',
        'uses' => 'WebController2@Index'
    ]);

    Route::get('{id}/principal',[
        'as' => 'new.principal',
        'uses' => 'WebController2@Principal'
    ]);

    Route::get('{categoriaId}/sedes',[
        'as' => 'new.sedes',
        'uses' => 'WebController2@Sedes'
    ]);


    Route::get('{categoriaId}/sedesDetalle/{id}',[
        'as' => 'new.sedeDetalle',
        'uses' => 'WebController2@SedeDetalle'
    ]);


    Route::get('{categoriaId}/galeria',[
        'as' => 'new.galeria',
        'uses' => 'WebController2@Galeria'
    ]);

    Route::get('{categoriaId}/noticias',[
        'as' => 'new.noticias',
        'uses' => 'WebController2@Noticias'
    ]);

    Route::get('{categoriaId}/reglamento',[
        'as' => 'new.reglamento',
        'uses' => 'WebController2@Reglamento'
    ]);

    Route::get('{categoriaId}/inscripcion',[
        'as' => 'new.inscripcion',
        'uses' => 'WebController2@Inscripcion'
    ]);

    Route::get('{categoriaId}/contactanos',[
        'as' => 'new.contactanos',
        'uses' => 'WebController2@Contactanos'
    ]);

    Route::get('{categoriaId}/torneos/{torneo}/{fase?}',[
        'as' => 'new.torneos',
        'uses' => 'WebController2@Torneos'
    ]);

    Route::get('{categoriaId}/equipos/{id}',[
        'as' => 'new.equipo',
        'uses' => 'WebController2@Equipo'
    ]);

//    Route::get('{categoriaId}/torneo/{id}',[
//        'as' => 'torneos',
//        'uses' => 'WebController2@Resultado'
//    ]);

//    Route::resource('resultado','WebController2@Resultado');
//
//
//    Route::get('{categoriaId}/resultado/{id}',[
//        'as' => 'rs',
//        'uses' => 'WebController2@Resultado'
//    ]);
//
//    Route::get('{categoriaId}/fixture/{id}',[
//        'as' => 'fixture',
//        'uses' => 'WebController2@Fixture'
//    ]);



//    Route::get('{categoriaId}/{id}/jugador/{faseId}',[
//        'as' => 'jugador',
//        'uses' => 'WebController2@Jugador'
//    ]);
//
//    Route::get('{categoriaId}/proximaFecha/{id}',[
//        'as' => 'proximaFecha',
//        'uses' => 'WebController2@ProximaFecha'
//    ]);
//
//    Route::get('{categoriaId}/fechaActual/{id}',[
//        'as' => 'fechaActual',
//        'uses' => 'WebController2@FechaActual'
//    ]);
//
//    Route::get('{categoriaId}/sancion/{id}',[
//        'as' => 'sancion',
//        'uses' => 'WebController2@Sancion'
//    ]);
//
//
//    Route::get('{categoriaId}/goleador/{id}',[
//        'as' => 'goleador',
//        'uses' => 'WebController2@Goleador'
//    ]);
//
//
//    Route::get('{categoriaId}/fairplay/{id}',[
//        'as' => 'fairplay',
//        'uses' => 'WebController2@FairPlay'
//    ]);





//    Route::resource('sancion','WebController2@Sancion');
//    Route::resource('goleador','WebController2@Goleador');
//    Route::resource('fairplay','WebController2@Fairplay');
//    Route::resource('destacado','WebController2@Destacado');
//    Route::resource('clima','WebController2@Clima');
//    Route::resource('la_cantera','WebController2@LaCantera');
//    Route::resource('la_guapeada','WebController2@LaGuapeada');
//    Route::resource('jugador','WebController2@Jugador');
//    Route::resource('proxima_fecha','WebController2@Jugador');

//    Route::resource('sede_detalle','WebController2@SedeDetalle');


    Route::post('registracion',['as'=>'postRegistration','uses'=>'WebController2@postRegistration']);

    Route::post('contacto',['as'=>'postContact','uses'=>'WebController2@postContact']);

});
