<?php

return array(

    'brands' => [
        'name' => ['string',50]
    ],

    'items' => [
      'name' => ['string',50],
        'relations'=>['brands_id' => ['brands','id']]
    ],


    'galeries' =>
        [
            'name'=>['string' , '50']
        ],


);

?>