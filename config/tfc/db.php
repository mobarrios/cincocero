<?php

return array(


    'sedes' =>
        [
            'name'     => ['string','50'],
            'address'    => ['string','100'],
            'phone'     => ['string','100'],
        ],

    'canchas' =>
        [
            'name'    => ['string','100'],
            'relations' => ['sedes_id'=>['sedes','id']],
        ],

    'teams' =>
        [
            'name'    => ['string','50'],
        ],

    'players' =>
        [
            'name'    => ['string','50'],
            'last_name'    => ['string','50'],
            'mail'    => ['string','50'],
            'phone'    => ['string','50'],
            'cel'    => ['string','50'],
        ],

    'categories' =>
        [
            'name'    => ['string','50'],
        ],




            //relations['nombre_columna'=>'tabla_realcion','referencia']
            //'relations' => ['profiles_id'=>['profiles','id'],
            //                'modules_id'=>['modules','id']],


);

?>