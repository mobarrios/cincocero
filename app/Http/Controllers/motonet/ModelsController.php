<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Models;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use App\Helpers\BreadCrumbHelper;




class ModelsController extends Controller {

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
        $module = 'models';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->data['sectionName']  = 'Modelos de Productos';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']     = RoomsTypes::lists('name','id');
        $this->data['brands']           = Brands::lists('name','id');
        $this->data['categories']       = Categories::lists('name','id');


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
    public function postNew(Request $request, ImagesHelper $image)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $model = $this->repo->create($request);
        $model->Categories()->attach($request->categories_id);

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }

    // get edit item
    public function getEdit($id)
    {
        $bc = new BreadCrumbHelper();
        $bc->create('Editar ' . $this->data['sectionName'], $this->data['routeEdit']);

        $this->data['model'] = $this->repo->getModel()->find($id);

        $cat = $this->data['model']->categories;
        if ($cat->count() > 0){
            $ca = 0;

            foreach ($cat as $c) {
                if($ca != 0)
                    $ca .= ",".$c->id;
                else
                    $ca = $c->id;
            }

            $this->data['cat'] = $ca;
            $this->data['cat'] = explode(',', $ca);;
        }
//        dd($this->data['cat']);
        return view($this->form)->with($this->data);
    }

    // post edit item
    public function postEdit($id,Request $request, ImagesHelper $image)
    {

        // validation rules form repo
        $this->validate($request, $this->rulesEdit);

        // method crear in repo
        $model = $this->repo->getModel()->find($id);

        $this->repo->edit($id,$request);

        $categories = $model->categories;

        if($request->categories_id != 0){
            $model->Categories()->sync($request->categories_id);
        }

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);}
        // redirect with errors messages language

        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));


    }


}