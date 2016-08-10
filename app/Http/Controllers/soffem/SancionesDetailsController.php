<?php

namespace App\Http\Controllers\soffem;


use App\Entities\soffem\SancionesDetails;
use App\Http\Repositories\soffem\SancionesDetailsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Session;


class SancionesDetailsController extends Controller {

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
        $module = 'sancionesDetails';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'soffem.'.$module.'.index';
        $this->form                 = 'soffem.'.$module.'.form';
        $this->data['sectionName']  = 'Sanciones Detalles';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/soffem/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
       // $this->data['players']             = Players::orderBy('last_name','ASC')->get()->lists('full_name','id');

        //$this->data['weeks']             = Currency::lists('name','id');

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