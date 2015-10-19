<?php

namespace App\Http\Controllers\config;


use App\Http\Repositories\config\ModulesRepo as Repo;
use App\Http\Repositories\config\PermissionsRepo;

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
        $this->rulesEdit            = $this->repo->RulesEdit();


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = null;
        $this->data['entityImg']        = null;

        //data routes
        $this->data['route']        = 'modules';
        $this->data['routeEdit']    = 'modulesGetEdit';
        $this->data['routeDel']     = 'modulesGetDel';
        $this->data['routeNew']     = 'modulesGetNew';
        $this->data['routePostNew'] = 'modulesPostNew';
        $this->data['routePostEdit']= 'modulesPostEdit';
    }

    public function changePermission($id = null , $section = null, $value = null,  PermissionsRepo $permissions)
    {
        $permission             = $permissions->find($id);
        $permission->$section   = $value;
        $permission->save();

        return redirect()->back()->withErrors(trans('messages.changePermissions'));

    }





}