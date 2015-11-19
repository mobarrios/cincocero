<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\News;
use App\Http\Repositories\ahgai\NoticiasRepo as Repo;
use App\Http\Controllers\Controller;


class NoticiasController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;


    public function __construct(Repo $repo)
    {

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.noticias.index';
        $this->form                 = 'ahgai.noticias.form';
        $this->data['sectionName']  = 'Noticias';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/noticias/images/';
        $this->data['entityImg']        = 'news';

        //selects
       // $this->data['types']           = EstablecimientosTypes::lists('type','id');


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'noticias';
        $this->data['routeEdit']    = 'noticiasGetEdit';
        $this->data['routeDel']     = 'noticiasGetDel';
        $this->data['routeNew']     = 'noticiasGetNew';
        $this->data['routePostNew'] = 'noticiasPostNew';
        $this->data['routePostEdit']= 'noticiasPostEdit';

    }
}