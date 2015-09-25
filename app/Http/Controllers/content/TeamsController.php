<?php

namespace App\Http\Controllers\content;

use App\Http\Repositories\content\TeamsRepo as Repo;
use App\Http\Controllers\Controller;


class TeamsController extends Controller {

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
        $this->view                 = 'content.teams.index';
        $this->form                 = 'content.teams.form';
        $this->data['sectionName']  = 'Equipos';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/teams/images/';
        $this->data['entityImg']        = 'teams';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'teams';
        $this->data['routeEdit']    = 'teamsGetEdit';
        $this->data['routeDel']     = 'teamsGetDel';
        $this->data['routeNew']     = 'teamsGetNew';
        $this->data['routePostNew'] = 'teamsPostNew';
        $this->data['routePostEdit']= 'teamsPostEdit';
        $this->data['routeDetail']  = 'players';

    }
}