<?php

namespace App\Http\Controllers\stock\brands;

use App\Http\Repositories\stock\brands\BrandsRepo as Repo;
use App\Http\Controllers\Controller;


class BrandsController extends Controller {

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
        $this->view                 = 'stock.brands.index';
        $this->form                 = 'stock.brands.form';
        $this->data['sectionName']  = 'Marcas';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'brands';
        $this->data['routeEdit']    = 'brandsGetEdit';
        $this->data['routeDel']     = 'brandsGetDel';
        $this->data['routeNew']     = 'brandsGetNew';
        $this->data['routePostNew'] = 'brandsPostNew';
        $this->data['routePostEdit']= 'brandsPostEdit';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/brands/images/';
        $this->data['entityImg']        = 'brands';


    }
}