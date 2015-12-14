<?php

//user Profile

$module = 'user';
$controller = '\App\Http\Controllers\config\UserController';

Route::get('userProfile',       ['as'=>'userProfileEdit', 'uses'=> $controller.'@userProfileEdit']);
Route::post('userProfileEdit',  ['as'=>'userProfilePostEdit', 'uses'=> $controller.'@userProfileSave']);



?>