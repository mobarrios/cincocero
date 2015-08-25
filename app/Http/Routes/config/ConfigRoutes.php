<?php



Route::get('configuracion',['as'=> 'config', function(){

    $data['sectionName'] = 'Config';
    return view('config.config')->with($data);
}]);


?>