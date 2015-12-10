<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Establecimientos;
use App\Entities\ahgai\Partners;

use App\Helpers\ImagesHelper;
use App\Http\Repositories\ahgai\PartnersRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PartnersController extends Controller {

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
        $module = 'partners';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.'.$module.'.index';
        $this->form                 = 'ahgai.'.$module.'.form';
        $this->data['sectionName']  = 'Asociados';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/ahgai/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['establecimientos']      = Establecimientos::lists('name','id');
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

    }


    // post new item
    public function postNew(Request $request, ImagesHelper $image)
    {


        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $model = $this->repo->create($request)->Establecimientos()->attach($request->establecimientos_id);



        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }


}