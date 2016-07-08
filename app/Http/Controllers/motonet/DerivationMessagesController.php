<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\DerivationMessages;
use App\Entities\motonet\Derivations;
use App\Helpers\BreadCrumbHelper;
use App\Http\Repositories\motonet\DerivationMessagesRepo as Repo;
use App\Http\Controllers\Controller;
use App\Helpers\ImagesHelper;
use Illuminate\Http\Request;


class DerivationMessagesController extends Controller {

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
        $module = 'derivationMessages';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->data['sectionName']  = 'Derivaciones por clientes';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']  = RoomsTypes::lists('name','id');
        //$this->data['status']      = ['1' => 'Pendiente','3' => 'Finalizada'];
        $this->data['status']        =  $this->repo->getStatus();

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

    public function getIndex($id = null){
        $this->data['history'] = DerivationMessages::where('derivations_id',$id)->get();

        $bc = new BreadCrumbHelper();
        $bc->index($this->data['sectionName'], $this->data['route']);


        return view($this->view)->with($this->data);

    }

    public function getEdit($id = null){

        $this->data['model'] = Derivations::find($id);
        $this->data['client'] = $this->data['model']->clients;


        return view($this->form)->with($this->data);

    }


}