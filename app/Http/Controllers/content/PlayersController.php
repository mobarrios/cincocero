<?php

namespace App\Http\Controllers\content;

use App\Http\Repositories\content\PlayersRepo as Repo;
use App\Http\Controllers\Controller;


class PlayersController extends Controller {

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
        $this->view                 = 'content.players.index';
        $this->form                 = 'content.players.form';
        $this->data['sectionName']  = 'Jugadores';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/players/images/';
        $this->data['entityImg']        = 'players';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'players';
        $this->data['routeEdit']    = 'playersGetEdit';
        $this->data['routeDel']     = 'playersGetDel';
        $this->data['routeNew']     = 'playersGetNew';
        $this->data['routePostNew'] = 'playersPostNew';
        $this->data['routePostEdit']= 'playersPostEdit';

    }
}