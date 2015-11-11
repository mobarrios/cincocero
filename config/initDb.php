<?php

return array(

    //images
    'images' =>
        [
            'entity'    => ['string','50'],
            'image'     => ['string','100'],
            'entity_id' => ['integer',null]
        ],

    //menus
    'menus' =>
        [
            'name'  =>['string','100'],
            'routes'=>['string','100'],
            'main'  =>['integer',null]
        ],

    //modulos
    'modules' =>
        [
            'name'      =>['string','100'],
            'available' =>['boolean',null]
        ],

    //profiles
    'profiles' =>
        [
            'profile'=>['string','100']
        ],

    //permissions
    'permissions' =>
        [
            'list'  =>['boolean',null],
            'edit'  =>['boolean',null],
            'delete'=>['boolean',null],
            'store' =>['boolean',null],

            //relations['nombre_columna'=>'tabla_realcion','referencia']
            'relations' => ['profiles_id'=>['profiles','id'],
                            'modules_id'=>['modules','id']],
        ]

);

?>