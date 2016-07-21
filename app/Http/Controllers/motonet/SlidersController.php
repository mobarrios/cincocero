<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Branches;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Models;
use App\Helpers\BreadCrumbHelper;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\motonet\SlidersRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SlidersController extends Controller {

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
        $this->view                 = 'motonet.sliders.index';
        $this->form                 = 'motonet.sliders.form';
        $this->data['sectionName']  = 'Imágenes de slider';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/sliders/images/';
        $this->data['entityImg']        = 'sliders';


        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'sliders';
        $this->data['routeEdit']    = 'slidersGetEdit';
        $this->data['routeDel']     = 'slidersGetDel';
        $this->data['routeNew']     = 'slidersGetNew';
        $this->data['routePostNew'] = 'slidersPostNew';
        $this->data['routePostEdit']= 'slidersPostEdit';

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

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath'], null, '1263' );
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }

    public function postEdit($id = null, Request $request, ImagesHelper $image)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rulesEdit);


        // if has image uploaded
        if($request->hasFile('image'))
        {
            $img = Images::where('entity',$this->data['entityImg'])->where('entity_id',$id)->get();

            if( $this->data['imgQuantityMax'] <= $img->count())
            {
                return redirect()->back()->withErrors('Limite Maximo de Imagenes.');
            }
            else
            {
                $image->upload($this->data['entityImg'], $id ,$request->file('image') ,$this->data['imagePath'], true, '1263');
            }
        }

        $this->repo->edit($id, $request);

        // redirect with errors messages language

        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));
    }

}