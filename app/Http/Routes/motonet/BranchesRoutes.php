<?php

$module = 'branches';
$controller = '\App\Http\Controllers\motonet\BranchesController';

Route::get('list'.$module,           ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module,'uses'=> $controller.'@getIndex']);
Route::get('edit'.$module.'/{id}',   ['middleware'=>'roles','data'=> $module.'-edit' ,'as'=> $module.'GetEdit','uses'=> $controller.'@getEdit']);
Route::get('delete'.$module.'/{id}', ['middleware'=>'roles','data'=> $module.'-delete' ,'as'=> $module.'GetDel','uses'=> $controller.'@getDel']);
Route::get('new'.$module,            ['middleware'=>'roles','data'=> $module.'-store' ,'as'=> $module.'GetNew', 'uses'=> $controller.'@getNew']);


Route::post('postNew'.$module,          ['as'=> $module.'PostNew', 'uses'=> $controller.'@postNew']);
Route::post('postEdit'.$module.'/{id}', ['as'=>$module.'PostEdit', 'uses'=> $controller.'@postEdit']);

Route::get('branches_users'.'/{id}', ['middleware'=>'roles','data'=> $module.'-edit' ,'as'=> 'branches_users','uses'=> $controller.'@getBranchesUsers']);






