<?php

namespace App\Http\Controllers\booking;

use App\Entities\booking\Currency;
use App\Http\Repositories\booking\CurrencyRepo as Repo;
use App\Http\Controllers\Controller;


class CurrencyController extends Controller {

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
        $module = 'currency';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'booking.'.$module.'.index';
        $this->form                 = 'booking.'.$module.'.form';
        $this->data['sectionName']  = 'Tipos de Moneda';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/booking/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
       // $this->data['types']           = RoomsTypes::lists('name','id');

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