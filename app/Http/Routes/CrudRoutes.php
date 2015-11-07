<?php

Route::get('list',            ['as'=>'crud','uses'=>'CrudController@getIndex']);
Route::get('edit/{id}',      ['as'=>'crudGetEdit','uses'=>'CrudController@getEdit']);
Route::get('delete/{id}',      ['as'=>'crudGetDel','uses'=>'CrudController@getDel']);
Route::get('new',            ['as'=>'crudGetNew', 'uses'=>'CrudController@getNew']);

Route::post('postNew',       ['as'=>'crudPostNew', 'uses'=>'CrudController@postNew']);
Route::post('postEdit/{id}', ['as'=>'crudPostEdit', 'uses'=>'CrudController@postEdit']);