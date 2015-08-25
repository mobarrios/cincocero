<?php

//user Profile

$module = 'profiles';
$controller = '\App\Http\Controllers\config\ProfilesController';

Route::get('userProfile',       ['as'=>'userProfileEdit', 'uses'=> $controller.'@userProfileEdit']);
Route::post('userProfileEdit',  ['as'=>'userProfilePostEdit', 'uses'=> $controller.'@userProfileEdit']);



?>