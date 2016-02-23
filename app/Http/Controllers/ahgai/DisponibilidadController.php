<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Disponibilidad;


use App\Entities\ahgai\Rooms;
use App\Http\Repositories\ahgai\DisponibilidadRepo as Repo;
use App\Http\Controllers\Controller;


class DisponibilidadController extends Controller {

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
        $module = 'disponibilidad';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.'.$module.'.index';
        $this->form                 = 'ahgai.'.$module.'.form';
        $this->data['sectionName']  = 'Disponibilidad de Establecimientos';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/ahgai/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['rooms']      = Rooms::lists('tipo','id');
        //$this->data['currency']        = Currency::lists('name','id');

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