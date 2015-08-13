<?php

namespace App\Http\Controllers\config;


use App\Http\Repositories\config\ProfileRepo as Repo;

use App\Http\Controllers\Controller;


class ProfilesController extends Controller {

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
        $this->view                 = 'config.profiles.index';
        $this->form                 = 'config.profiles.form';
        $this->detail               = 'config.profiles.detail';

        $this->data['sectionName']  = 'Perfiles';

        //data for validation
        $this->rules                = $this->repo->Rules();

        //data routes
        $this->data['route']        = 'profiles';
        $this->data['routeEdit']    = 'profilesGetEdit';
        $this->data['routeDel']     = 'profilesGetDel';
        $this->data['routeNew']     = 'profilesGetNew';
        $this->data['routePostNew'] = 'profilesPostNew';
        $this->data['routePostEdit']= 'profilesPostEdit';
        $this->data['routeDetail']  = 'profilesDetail';

    }

}