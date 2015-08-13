<?php

$module = 'modules';
$controller = '\App\Http\Controllers\config\ModulesController';

Route::get('list'.$module,           ['as'=> $module,'uses'=> $controller.'@getIndex']);
Route::get('edit'.$module.'/{id}',   ['as'=> $module.'GetEdit','uses'=> $controller.'@getEdit']);
Route::get('delete'.$module.'/{id}', ['as'=> $module.'GetDel','uses'=> $controller.'@getDel']);
Route::get('new'.$module,            ['as'=> $module.'GetNew', 'uses'=> $controller.'@getNew']);

Route::post('postNew'.$module,          ['as'=> $module.'PostNew', 'uses'=> $controller.'@postNew']);
Route::post('postEdit'.$module.'/{id}', ['as'=>$module.'PostEdit', 'uses'=> $controller.'@postEdit']);


