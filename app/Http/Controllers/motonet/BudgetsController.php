<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\Models;
use App\Http\Repositories\motonet\ClientsRepo as Repo;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Blade;


class BudgetsController extends Controller {

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
        $module = 'budgets';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->data['sectionName']  = 'Presupuesto';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
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
        $this->data['routeNewDerivation']     = 'derivationsGetNew';


    }


    public function getNew($clients_id = null){

        $this->data['client'] = Clients::find($clients_id);
        
        return view('motonet.budgets.form')->with($this->data);
    }

    public function getSearch($data = null){

        $models = Models::with('brands')->where('name','like','%'.$data.'%')->get();
        return response($models);
    }
}