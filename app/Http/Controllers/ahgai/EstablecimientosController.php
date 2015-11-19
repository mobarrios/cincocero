<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Categories;
use App\Entities\ahgai\Establecimientos;
use App\Entities\ahgai\EstablecimientosTypes;
use App\Http\Repositories\ahgai\EstablecimientosRepo as Repo;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class EstablecimientosController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;


    public function __construct(Repo $repo, Request $request)
    {
        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.establecimientos.index';
        $this->form                 = 'ahgai.establecimientos.form';
        $this->data['sectionName']  = 'Establecimientos';


        //images
        $this->data['imgQuantityMax']   = 5;
        $this->data['imagePath']        = 'uploads/establecimientos/images/';
        $this->data['entityImg']        = 'establecimientos';

        //selects
        $this->data['categories']           = Categories::lists('name','id');


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'establecimientos';
        $this->data['routeEdit']    = 'establecimientosGetEdit';
        $this->data['routeDel']     = 'establecimientosGetDel';
        $this->data['routeNew']     = 'establecimientosGetNew';
        $this->data['routePostNew'] = 'establecimientosPostNew';
        $this->data['routePostEdit']= 'establecimientosPostEdit';



    }


    public function requestCustom($request)
    {
       $request['manuel'] = 'barrios';

        return $request;

    }

}