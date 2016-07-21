<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Branches;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Models;
use App\Helpers\BreadCrumbHelper;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\motonet\SlidersRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SlidersController extends Controller {

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
        $this->view                 = 'motonet.sliders.index';
        $this->form                 = 'motonet.sliders.form';
        $this->data['sectionName']  = 'Imágenes de slider';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/sliders/images/';
        $this->data['entityImg']        = 'sliders';


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'sliders';
        $this->data['routeEdit']    = 'slidersGetEdit';
        $this->data['routeDel']     = 'slidersGetDel';
        $this->data['routeNew']     = 'slidersGetNew';
        $this->data['routePostNew'] = 'slidersPostNew';
        $this->data['routePostEdit']= 'slidersPostEdit';

    }



}