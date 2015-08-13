<?php

namespace App\Http\Controllers;

use App\Entities\Crud;
use App\Http\Repositories\CrudRepo as Repo;


class CrudController extends Controller {

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
        $this->view                 = 'crud.index';
        $this->form                 = 'crud.form';
        $this->data['sectionName']  = 'CRUD';

        //data for validation
        $this->rules                = $this->repo->Rules();

        //data routes
        $this->data['route']        = 'crud';
        $this->data['routeEdit']    = 'crudGetEdit';
        $this->data['routeDel']     = 'crudGetDel';
        $this->data['routeNew']     = 'crudGetNew';
        $this->data['routePostNew'] = 'crudPostNew';
        $this->data['routePostEdit']= 'crudPostEdit';
    }








}