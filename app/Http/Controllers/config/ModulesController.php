<?php

namespace App\Http\Controllers\config;


use App\Http\Repositories\config\ModulesRepo as Repo;

use App\Http\Controllers\Controller;


class ModulesController extends Controller {

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;

    public function __construct(Repo $repo)
    {

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'config.modules.index';
        $this->form                 = 'config.modules.form';
        $this->data['sectionName']  = 'Modulos';

        //data for validation
        $this->rules                = $this->repo->Rules();

        //data routes
        $this->data['route']        = 'modules';
        $this->data['routeEdit']    = 'modulesGetEdit';
        $this->data['routeDel']     = 'modulesGetDel';
        $this->data['routeNew']     = 'modulesGetNew';
        $this->data['routePostNew'] = 'modulesPostNew';
        $this->data['routePostEdit']= 'modulesPostEdit';
    }

}