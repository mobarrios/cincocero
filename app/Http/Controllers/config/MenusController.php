<?php

namespace App\Http\Controllers\config;


use App\Entities\Menus;
use App\Http\Repositories\config\MenusRepo as Repo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class MenusController extends Controller {

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $detail;

    public function __construct(Repo $repo)
    {
        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'config.menus.index';
        $this->form                 = 'config.menus.form';
        $this->detail               = 'config.menus.detail';

        $this->data['sectionName']  = 'Menues';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();


        //images
        $this->data['imgQuantityMax']   = 0 ;
        $this->data['imagePath']        = null ;
        $this->data['entityImg']        = null ;

        $this->data['main']             = $repo->getModel()->where('routes','')->lists('name','id');


        //data routes
        $this->data['route']        = 'menus';
        $this->data['routeEdit']    = 'menusGetEdit';
        $this->data['routeDel']     = 'menusGetDel';
        $this->data['routeNew']     = 'menusGetNew';
        $this->data['routePostNew'] = 'menusPostNew';
        $this->data['routePostEdit']= 'menusPostEdit';


    }

    public function requestCustom($request = null)
    {
        $newRequest         = $request;

        return $newRequest;
    }


}