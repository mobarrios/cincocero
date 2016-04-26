<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Models;
use App\Helpers\BreadCrumbHelper;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\motonet\ItemsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ItemsController extends Controller {

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
        $this->view                 = 'motonet.items.index';
        $this->form                 = 'motonet.items.form';
        $this->data['sectionName']  = 'Articulos';


        //images
        $this->data['imgQuantityMax']   = 2;
        $this->data['imagePath']        = 'uploads/items/images/';
        $this->data['entityImg']        = 'items';

        //selects
        $this->data['brands']           = Brands::lists('name','id');
        $this->data['categories']       = Categories::lists('name','id');
        $this->data['modelos']           = Models::lists('name','id');
//        $this->data['providers']           = Providers::lists('name','id');

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'items';
        $this->data['routeEdit']    = 'itemsGetEdit';
        $this->data['routeDel']     = 'itemsGetDel';
        $this->data['routeNew']     = 'itemsGetNew';
        $this->data['routePostNew'] = 'itemsPostNew';
        $this->data['routePostEdit']= 'itemsPostEdit';

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
        dd($categories);
        if($request->categories_id != 0){
            $model->Categories()->attach($request->categories_id);
        }

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);}
        // redirect with errors messages language

        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));


    }

}