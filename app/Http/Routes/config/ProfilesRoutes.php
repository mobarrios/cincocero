<?php

$module = 'profiles';
$controller = '\App\Http\Controllers\config\ProfilesController';

Route::get('list'.$module,           ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module,'uses'=> $controller.'@getIndex']);
Route::get('edit'.$module.'/{id}',   ['middleware'=>'roles','data'=> $module.'-edit' ,'as'=> $module.'GetEdit','uses'=> $controller.'@getEdit']);
Route::get('delete'.$module.'/{id}', ['middleware'=>'roles','data'=> $module.'-delete' ,'as'=> $module.'GetDel','uses'=> $controller.'@getDel']);
Route::get('new'.$module,            ['middleware'=>'roles','data'=> $module.'-store' ,'as'=> $module.'GetNew', 'uses'=> $controller.'@getNew']);
Route::get('detail'.$module.'/{id}', ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module.'Detail', 'uses'=> $controller.'@getDetail']);

Route::post('postNew'.$module,          ['as'=> $module.'PostNew', 'uses'=> $controller.'@postNew']);
Route::post('postEdit'.$module.'/{id}', ['as'=>$module.'PostEdit', 'uses'=> $controller.'@postEdit']);

//user Profile

Route::get('userProfile', ['as'=>'userProfileEdit', 'uses'=> $controller.'@userProfileEdit']);
Route::post('userProfileEdit', ['as'=>'userProfilePostEdit', 'uses'=> $controller.'@userProfileEdit']);

