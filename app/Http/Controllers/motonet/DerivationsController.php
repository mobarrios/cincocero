<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\Derivations;
use App\Http\Repositories\motonet\DerivationsRepo as Repo;
use App\Http\Controllers\Controller;
use App\Helpers\ImagesHelper;
use Illuminate\Http\Request;


class DerivationsController extends Controller {

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
        $module = 'derivations';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->data['sectionName']  = 'Derivar cliente';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']      = RoomsTypes::lists('name','id');
        $this->data['status']        = ['0' => 'Pendiente','2' => 'Finalizada'];

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

    public function getNew($id = null){
<<<<<<< HEAD
        
        $this->data['client'] = Clients::find($id);
=======
        if($id == 0){
            $clients = [];
            foreach(Clients::all() as $c){
                $clients[$c->id] = $c->fullName;
            }

            $this->data['clients'] = $clients;

        }else{
            $this->data['client'] = Clients::find($id);
        }
>>>>>>> 88a347517e5763e4a8dac7aecbf8380c450ad55c

        return view($this->form)->with($this->data);

    }

    public function getEdit($id = null){

        $this->data['model'] = Derivations::find($id);
        $this->data['client'] = $this->data['model']->clients;


        return view($this->form)->with($this->data);

    }


}