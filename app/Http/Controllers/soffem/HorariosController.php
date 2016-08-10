<?php

namespace App\Http\Controllers\soffem;

use App\Entities\soffem\Horarios;
use App\Http\Repositories\soffem\HorariosRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class HorariosController extends Controller {

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
        $module = 'horarios';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'soffem.'.$module.'.index';
        $this->form                 = 'soffem.'.$module.'.form';
        $this->data['sectionName']  = 'Horarios de Partidos';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/soffem/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']      = RoomsTypes::lists('name','id');
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
    public function requestCustom($request = null)
    {
        $newRequest         = $request;

        return $newRequest;
    }

   
}