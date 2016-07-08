<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\DerivationMessages;
use App\Entities\motonet\Derivations;
use App\Http\Repositories\motonet\DerivationsRepo as Repo;
use App\Http\Repositories\motonet\DerivationMessagesRepo;
use App\Http\Controllers\Controller;
use App\Helpers\ImagesHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $this->data['routeDerivationMessages']     = 'derivationMessages';
        $this->data['routePostNew'] = $module.'PostNew';
        $this->data['routePostEdit']= $module.'PostEdit';

    }

    public function getNew($clientId = null, $derivationId = null){


        if(!is_null($derivationId)){
            $d                      = Derivations::find($derivationId);
            $this->data['model']   = $d;
            $this->data['client']   = $d->Clients;
        }else{

            $this->data['client'] = Clients::find($clientId);
        }
        //if(!is_null($clientId))
           // $this->data['client'] = Clients::find($clientId);



        return view($this->form)->with($this->data);

    }

    public function getEdit($id = null){

        $this->data['model'] = Derivations::find($id);
        $this->data['client'] = $this->data['model']->clients;


        return view($this->form)->with($this->data);

    }


    public function postNew(Request $request, ImagesHelper $image, DerivationMessages $derivationMessages = null)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $model = $this->repo->create($request);

        $derivationMessages->create(['derivations_id' => $model->id,'users_id' => Auth::user()->id, 'message' => 'Derivación iniciada.']);

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }


}