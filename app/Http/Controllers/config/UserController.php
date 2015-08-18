<?php

namespace App\Http\Controllers\config;


use App\Http\Repositories\config\UserRepo as Repo;
use App\Http\Repositories\config\ProfileRepo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;


class UserController extends Controller {

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;

    public function __construct(Repo $repo, ProfileRepo $profileRepo)
    {
        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'config.users.index';
        $this->form                 = 'config.users.form';
        $this->data['sectionName']  = 'Usuarios';

        //data for validation
        $this->rules                = $this->repo->Rules();

        //data routes
        $this->data['route']        = 'user';
        $this->data['routeEdit']    = 'userGetEdit';
        $this->data['routeDel']     = 'userGetDel';
        $this->data['routeNew']     = 'userGetNew';
        $this->data['routePostNew'] = 'userPostNew';
        $this->data['routePostEdit']= 'userPostEdit';

        $this->data['profiles']      = $profileRepo->Lists();

    }


}