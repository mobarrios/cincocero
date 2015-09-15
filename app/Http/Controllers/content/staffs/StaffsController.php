<?php

namespace App\Http\Controllers\content\staffs;

use App\Http\Repositories\content\staffs\StaffsRepo as Repo;
use App\Http\Controllers\Controller;


class StaffsController extends Controller {

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
        $this->view                 = 'content.staffs.index';
        $this->form                 = 'content.staffs.form';
        $this->data['sectionName']  = 'Staffs';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/staff/images/';
        $this->data['entityImg']        = 'staffs';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'staffs';
        $this->data['routeEdit']    = 'staffsGetEdit';
        $this->data['routeDel']     = 'staffsGetDel';
        $this->data['routeNew']     = 'staffsGetNew';
        $this->data['routePostNew'] = 'staffsPostNew';
        $this->data['routePostEdit']= 'staffsPostEdit';
    }
}