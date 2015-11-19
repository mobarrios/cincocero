<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Galeries;


use App\Http\Repositories\ahgai\GaleriesRepo as Repo;
use App\Http\Controllers\Controller;


class GaleriesController extends Controller {

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
        $this->view                 = 'ahgai.galeries.index';
        $this->form                 = 'ahgai.galeries.form';
        $this->data['sectionName']  = 'Galeria de Fotos';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/galeries/images/';
        $this->data['entityImg']        = 'galeries';

        //selects
       // $this->data['categories']           = EstablecimientosCategories::lists('id','id');


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'galeries';
        $this->data['routeEdit']    = 'galeriesGetEdit';
        $this->data['routeDel']     = 'galeriesGetDel';
        $this->data['routeNew']     = 'galeriesGetNew';
        $this->data['routePostNew'] = 'galeriesPostNew';
        $this->data['routePostEdit']= 'galeriesPostEdit';

    }
}