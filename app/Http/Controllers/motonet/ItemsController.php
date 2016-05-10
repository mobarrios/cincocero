<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Branches;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Models;
use App\Helpers\BreadCrumbHelper;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\motonet\ItemsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ItemsController extends Controller {

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
        $this->view                 = 'motonet.items.index';
        $this->form                 = 'motonet.items.form';
        $this->data['sectionName']  = 'Articulos';


        //images
        $this->data['imgQuantityMax']   = 2;
        $this->data['imagePath']        = 'uploads/items/images/';
        $this->data['entityImg']        = 'items';

        //selects
        $this->data['brands']           = Brands::with('Models')->get();



        $this->data['categories']       = Categories::lists('name','id');
        $this->data['branches']         = Branches::orderBy('name','ASC')->lists('name','id');
//        $this->data['providers']           = Providers::lists('name','id');

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'items';
        $this->data['routeEdit']    = 'itemsGetEdit';
        $this->data['routeDel']     = 'itemsGetDel';
        $this->data['routeNew']     = 'itemsGetNew';
        $this->data['routePostNew'] = 'itemsPostNew';
        $this->data['routePostEdit']= 'itemsPostEdit';

    }



}