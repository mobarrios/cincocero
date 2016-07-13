<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Models;
use App\Entities\motonet\Operations;
use App\Entities\motonet\PayMethod;
use App\Entities\motonet\Publications;
use App\Http\Repositories\config\ModulesRepo;
use App\Http\Repositories\motonet\OperationsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\motonet\PayMethodRepo as PayMethodRepo;


class OperationsController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $detail;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;
    public   $tp ;



    public function __construct(Repo $repo, PayMethodRepo $pmRepo , TodoPagoController $tp, ModulesRepo $modules)
    {

        $this->tp = $tp;

        $module = 'operations';

        //data from entities
        $this->repo                 = $repo;

        if($modules->frontAccess('only_my_operations','list'))
            $this->data['models']       = $repo->listByUser();
        else
            $this->data['models']       = $repo->ListAll();

     
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->detail               = 'motonet.'.$module.'.detail';
        $this->data['sectionName']  = 'Operaciones Realizadas';


        //images
        $this->data['imgQuantityMax']   = 5;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']     = RoomsTypes::lists('name','id');
        $this->data['modelos']          = Models::orderBy('name','DESC')->lists('name','id');
        $this->data['medios']           = $pmRepo->getMethods();

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']         = $module;
        $this->data['routeEdit']     = $module.'GetEdit';
        $this->data['routeDel']      = $module.'GetDel';
        $this->data['routeNew']      = $module.'GetNew';
        $this->data['routePostNew']  = $module.'PostNew';
        $this->data['routePostEdit'] = $module.'PostEdit';
        $this->data['routeGetDetail']= $module.'GetDetail';


    }

    // post new item
    public function postNew(Request $request, ImagesHelper $image)
    {
        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $model = $this->repo->create($request);


        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }

    public function getDetail( $id = null){

        $this->data['model'] = $this->repo->getModel()->find($id);

        //$mp  = new \App\Helpers\MercadoPago\Mp("315396166222597", "B8i2XAin03lDts4n0UQXmfMBVwWDTKd6");
        //$mp->sandbox_mode(true);

        if($this->data['model']->medio_de_pago == 1)
            $this->data['status_tp'] = $this->tp->getStatus($id);

        //if($this->data['model']->medio_de_pago == 2)

           // $this->data['status_tp'] = $this->data['model']->message;





        // redirect with errors messages language
        return view($this->detail)->with($this->data);

    }


}