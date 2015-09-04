<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\EstablecimientosCategories;
use App\Entities\ahgai\EstablecimientosTypes;

use App\Http\Repositories\ahgai\EstablecimientosTypesRepo as Repo;
use App\Http\Controllers\Controller;


class EstablecimientosTypesController extends Controller {

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
        $this->view                 = 'ahgai.establecimientosTypes.index';
        $this->form                 = 'ahgai.establecimientosTypes.form';
        $this->data['sectionName']  = 'Tipos de Establecimientos';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = null;
        $this->data['entityImg']        = null;

        //selects
        $this->data['categories']           = EstablecimientosCategories::lists('id','id');


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'establecimientos_types';
        $this->data['routeEdit']    = 'establecimientos_typesGetEdit';
        $this->data['routeDel']     = 'establecimientos_typesGetDel';
        $this->data['routeNew']     = 'establecimientos_typesGetNew';
        $this->data['routePostNew'] = 'establecimientos_typesPostNew';
        $this->data['routePostEdit']= 'establecimientos_typesPostEdit';

    }
}