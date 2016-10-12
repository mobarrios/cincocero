<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Blogs;
use App\Http\Repositories\config\UserRepo;
use App\Http\Repositories\motonet\BlogsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use App\Helpers\BreadCrumbHelper;




class BlogsController extends Controller {

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
        $module = 'blogs';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->data['sectionName']  = 'Blog';


        //images
        $this->data['imgQuantityMax']   = 10;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']     = RoomsTypes::lists('name','id');
        //$this->data['brands']           = Brands::lists('name','id');
        //$this->data['categories']       = Categories::lists('name','id');


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = $module;
        $this->data['routeEdit']    = $module.'GetEdit';
        $this->data['routeDel']     = $module.'GetDel';
        $this->data['routeNew']     = $module.'GetNew';
        $this->data['routePostNew'] = $module.'PostNew';
        $this->data['routePostEdit']= $module.'PostEdit';

    }




}