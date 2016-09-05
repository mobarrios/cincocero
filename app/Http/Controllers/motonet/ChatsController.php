<?php

namespace App\Http\Controllers\motonet;

use App\Http\Repositories\motonet\ChatsRepo as Repo;
use App\Http\Controllers\Controller;


class ChatsController extends Controller {

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
        $this->view                 = 'controls.chat';
        $this->form                 = 'motonet.brands.form';
        $this->data['sectionName']  = 'Chats';

        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/chats/images/';
        $this->data['entityImg']        = 'chats';


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'chats';
        $this->data['routeEdit']    = 'chatsGetEdit';
        $this->data['routeDel']     = 'chatsGetDel';
        $this->data['routeNew']     = 'chatsGetNew';
        $this->data['routePostNew'] = 'chatsPostNew';
        $this->data['routePostEdit']= 'chatsPostEdit';
    }

    public function newChat(){
        
    }
}