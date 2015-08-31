<?php

namespace App\Http\Controllers\stock\categories;

use App\Http\Repositories\stock\categories\CategoriesRepo as Repo;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller {

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
        $this->view                 = 'stock.categories.index';
        $this->form                 = 'stock.categories.form';
        $this->data['sectionName']  = 'Categorias';

        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = "";
        $this->data['entityImg']        = "";


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'categories';
        $this->data['routeEdit']    = 'categoriesGetEdit';
        $this->data['routeDel']     = 'categoriesGetDel';
        $this->data['routeNew']     = 'categoriesGetNew';
        $this->data['routePostNew'] = 'categoriesPostNew';
        $this->data['routePostEdit']= 'categoriesPostEdit';

    }
}