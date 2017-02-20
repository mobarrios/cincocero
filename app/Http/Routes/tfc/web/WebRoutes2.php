<?php

Route::group(['namespace' => 'tfc'], function()
{

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


    Route::post('registracion',['as'=>'postRegistration','uses'=>'WebController2@postRegistration']);

    Route::post('contacto',['as'=>'postContact','uses'=>'WebController2@postContact']);

});
