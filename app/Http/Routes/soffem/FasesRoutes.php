<?php

$module = 'fases';
$controller = '\App\Http\Controllers\tfc\FasesController';

Route::get('list'.$module,           ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module,'uses'=> $controller.'@getIndex']);
Route::get('edit'.$module.'/{id?}',   ['middleware'=>'roles','data'=> $module.'-edit' ,'as'=> $module.'GetEdit','uses'=> $controller.'@getEdit']);
Route::get('delete'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-delete' ,'as'=> $module.'GetDel','uses'=> $controller.'@getDel']);
Route::get('new'.$module.'/{id?}',    ['middleware'=>'roles','data'=> $module.'-store' ,'as'=> $module.'GetNew', 'uses'=> $controller.'@getNew']);
Route::get('newPlayOff'.$module.'/{id?}',    ['middleware'=>'roles','data'=> $module.'-store' ,'as'=> $module.'PlayOffGetNew', 'uses'=> $controller.'@getPlayOffNew']);


Route::get('fixture'.$module.'/{id?}', ['middleware'=>'roles','data'=> $module.'-list' ,'as'=> $module.'Fixture', 'uses'=> $controller.'@getDetail']);

Route::get('tabla'.$module.'/{id?}', ['middleware' => 'roles','data'=>$module.'-list' , 'as' => $module.'Tabla', 'uses'=>$controller.'@getTabla']);
Route::get('fasesWeekChange/{action?}/{id?}',['middleware' => 'roles', 'data' => $module.'-edit','as'=> $module.'fasesChange', 'uses'=>$controller.'@fasesWeekChange']);

Route::post('postNew'.$module,          ['as'=> $module.'PostNew', 'uses'=> $controller.'@postNew']);
Route::post('postEdit'.$module.'/{id?}', ['as'=>$module.'PostEdit', 'uses'=> $controller.'@postEdit']);


Route::get('fases_change_team/{fases_id?}/{team_from?}/{team_to?}',$controller.'@changeTeam');
Route::get('fases_add_team/{team_to?}',$controller.'@addTeam');

Route::get('fases_vuelta/{id?}',['as'=>'fases_vuelta','uses'=>$controller.'@getFasesVuelta']);

Route::get('nueva_fecha/{id_fases?}',['as' => 'new_fases_week','uses'=>$controller.'@getNewFasesWeek']);
Route::any('post_nueva_fecha/{id_fases?}',['as' => 'post_new_fases_week','uses'=>$controller.'@postNewFasesWeek']);

Route::get('edit_table/{id_table?}/{column?}/{data?}', $controller.'@getEditTable');



