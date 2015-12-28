<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Rooms;


use App\Http\Repositories\ahgai\RoomsRepo as Repo;
use App\Http\Controllers\Controller;


class RoomsController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;


    public function __construct(Repo $repo)
    {

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.rooms.index';
        $this->form                 = 'ahgai.rooms.form';
        $this->data['sectionName']  = 'Habitaciones';


        //images
        $this->data['imgQuantityMax']   = 3;
        $this->data['imagePath']        = null;
        $this->data['entityImg']        = null;

        //selects
        //$this->data['categories']           = EstablecimientosCategories::lists('id','id');


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'rooms_types';
        $this->data['routeEdit']    = 'rooms_typesGetEdit';
        $this->data['routeDel']     = 'rooms_typesGetDel';
        $this->data['routeNew']     = 'rooms_typesGetNew';
        $this->data['routePostNew'] = 'rooms_typesPostNew';
        $this->data['routePostEdit']= 'rooms_typesPostEdit';

    }
}