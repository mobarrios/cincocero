<?php

namespace App\Http\Controllers\content\clients;

use App\Http\Repositories\content\clients\ClientsRepo as Repo;
use App\Http\Controllers\Controller;


class ClientsController extends Controller {

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
        $this->view                 = 'content.clients.index';
        $this->form                 = 'content.clients.form';
        $this->data['sectionName']  = 'Clientes';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/clients/images/';
        $this->data['entityImg']        = 'clients';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'clients';
        $this->data['routeEdit']    = 'clientsGetEdit';
        $this->data['routeDel']     = 'clientsGetDel';
        $this->data['routeNew']     = 'clientsGetNew';
        $this->data['routePostNew'] = 'clientsPostNew';
        $this->data['routePostEdit']= 'clientsPostEdit';
    }
}