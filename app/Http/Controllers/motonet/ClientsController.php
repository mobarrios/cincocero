<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Brands;
use App\Entities\motonet\Clients;
use App\Entities\motonet\Derivations;
use App\Http\Repositories\motonet\ClientsRepo as Repo;
use App\Http\Controllers\Controller;
use App\Http\Repositories\motonet\DerivationMessagesRepo;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class ClientsController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $formDetail;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;


    public function __construct(Repo $repo)
    {
        $module = 'clients';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->formDetail           = 'motonet.'.$module.'.details';
        $this->data['sectionName']  = 'Clientes';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']      = RoomsTypes::lists('name','id');
        //$this->data['currency']        = Currency::lists('name','id');

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
        $this->data['routeNewDerivation']     = 'derivationsGetNew';
        $this->data['routeDetail']  = $module.'GetDetail';


    }


    public function getDetail($id = null){

        $this->data['model']     = $this->repo->find($id);
        $this->data['history']   = Derivations::where('clients_id',$id)->get();

        $this->data['brands']    = Brands::with('Models')->get();

        return view($this->formDetail)->with($this->data);
    }

    // post new item
    public function postNew(Request $request, ImagesHelper $image)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $model = $this->repo->create($request);

        if($request->get('derivation')){
            
            return redirect()->route('derivationsGetNew',$model->id)->withErrors('Se cre� y deriv� correctamente al cliente');
        }
        else
            return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }


    public function postEdit($id = null, Request $request, ImagesHelper $image)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rulesEdit);

        $this->repo->edit($id, $request);

        return redirect()->back()->withErrors(trans('messages.editItem'));

        /*
        // redirect with errors messages language
        if($request->get('derivation'))
            return redirect()->route('derivationsGetNew',$id)->withErrors('Se cre� y deriv� correctamente al cliente');
        else
            return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));
        */
    }

}