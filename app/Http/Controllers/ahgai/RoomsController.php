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
        $module = 'rooms';

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
        $this->data['route']        = $module;
        $this->data['routeEdit']    = $module.'GetEdit';
        $this->data['routeDel']     = $module.'GetDel';
        $this->data['routeNew']     = $module.'GetNew';
        $this->data['routePostNew'] = $module.'PostNew';
        $this->data['routePostEdit']= $module.'PostEdit';

    }
}