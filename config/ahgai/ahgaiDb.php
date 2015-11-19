<?php

return array(

    'types' =>
        [
        'name' => ['string','50']
        ],

    'categories' =>
        [
        'name' => ['string','50']
        ],

    'establecimientos' =>
        [
        'name'=>            ['string','100'],
        'address'=>         ['string','100'],
        'web'=>             ['string','100'],
        'phone' =>          ['string','50'],
        'mail' =>           ['string','50'],
        'relations' =>      ['types_id'=>['types','id'],
                             'categories_id'=>['categories','id']],
        ],

    'news' =>
        [
        'date' => ['date',null],
        'title' => ['string','100'],
        'copete' => ['string','250'],
        'description' => ['text',null],
        ],

    'partners' =>
        [
        'name' => ['string','100'],
        'last_name' => ['string','100'],
        'phone' => ['string','50'],
        'mail' =>           ['string','50'],
        ],

    'galeries' => [
        'name'=>['string' , '50']
    ],
);

?>