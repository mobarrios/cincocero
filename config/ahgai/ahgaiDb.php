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
        'relations' =>      [
                             'categories_id'=>['categories','id']
                            ],
        ],

    'partners' =>
        [
        'name' => ['string','100'],
        'last_name' => ['string','100'],
        'phone' => ['string','50'],
        'mail' =>  ['string','50'],
            'relations' => [
                'establecimientos_id' => ['establecimientos','id']
            ],
        ],

    /*
    'partners_establecimientos' =>
        [
            'relations' =>
                [
                    'partners_id'=>['partners','id'],
                    'establecimientos_id'=>['establecimientos','id']
                ],
        ],
    */

    'galeries' =>
        [
            'name'=>['string' , '50']
        ],

    'news' =>
        [
            'date' => ['date',null],
            'title' => ['string','100'],
            'copete' => ['string','250'],
            'description' => ['text',null],
        ],
);

?>