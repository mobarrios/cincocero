<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Categories;

use App\Http\Repositories\ahgai\CategoriesRepo as Repo;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller {

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
        $module = 'categories';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.'.$module.'.index';
        $this->form                 = 'ahgai.'.$module.'.form';
        $this->data['sectionName']  = 'Categorias de Establecimientos';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/ahgai/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
       // $this->data['establecimientos']      = Establecimientos::lists('name','id');
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