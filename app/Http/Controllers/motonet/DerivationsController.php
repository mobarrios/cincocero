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

        $this->data['pendientes']   = Derivations::where('status',1)->orderBy('created_at','ASC')->get();
        $this->data['tomados']      = Derivations::where('status',2)->get();
        $this->data['finalizados']  = Derivations::where('status',3)->get();



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
        $this->data['medios']        =   $this->repo->getMedios();

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = $module;
        $this->data['routeEdit']    = $module.'GetEdit';
        $this->data['routeDel']     = $module.'GetDel';
        $this->data['routeNew']     = $module.'GetNew';
        $this->data['route']        = $module.'GetNew';
        $this->data['routeDerivationMessages']     = 'derivationMessages';
        $this->data['routeTomar']     = 'derivationMessagesTomar';
        $this->data['routePostNew'] = $module.'PostNew';
        $this->data['routePostEdit']= $module.'PostEdit';

    }



    public function getNew($clientId = null, $derivationId = null){


        if(!is_null($derivationId)){
            $d                      = Derivations::find($derivationId);
            $this->data['model']    = $d;
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
        $request['status']  =  1;

        // validation rules form repo
        $this->validate($request, $this->rules);


        // method crear in repo
        $model = $this->repo->create($request);

        $derivationMessages                 = new DerivationMessages();
        $derivationMessages->derivations_id = $model->id;
        $derivationMessages->users_id       = Auth::user()->id;
        $derivationMessages->message        = 'Derivación iniciada.';
        $derivationMessages->save();

        //$derivationMessages->save(['derivations_id' => $model->id,'users_id' => Auth::user()->id, 'message' => 'Derivaci�n iniciada.']);

        // redirect with errors messages language
        return redirect()->route('derivations')->withErrors(trans('messages.newItem'));

    }

    public function getEnd($derivations_id = null){

        $derivation = Derivations::find($derivations_id);
        $derivation->status = 3;
        $derivation->save();

        $derivationM = new DerivationMessages();
        $derivationM->derivations_id = $derivation->id;
        $derivationM->users_id = Auth::user()->id;
        $derivationM->message = 'Derivacion Finalizada';
        $derivationM->save();

        return redirect()->route('derivations')->withErrors('Derivación Finalizada');
    }


}