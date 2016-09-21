<?php

namespace App\Http\Controllers\motonet;

use App\Entities\Images;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Categories;
use App\Entities\motonet\Models;
use App\Entities\motonet\ModelsPurchasePrice;
use App\Entities\motonet\ModelsSalePrice;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use App\Helpers\BreadCrumbHelper;
use Intervention\Image\Image;


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

        //purhcases_price
            $purchases['price']         = $request->purchase_price;
            $purchases['flete_price']   = $request->flete_price;
            $purchases['models_id']     = $model->id;

            $pricePrice = new ModelsPurchasePrice();
            $pricePrice->fill($purchases);
            $pricePrice->save();

        //sales_price
            $sales['price']                 = $request->sale_price;
            $sales['patentamiento_price']   = $request->patentamiento_price;
            $sales['pack_price']            = $request->pack_price;
            $sales['max_discount']          = $request->max_discount;

            $salesPrice = new ModelsSalePrice();
            $salesPrice->fill($sales);
            $salesPrice->save();


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
            $this->data['cat'] = explode(',', $ca);
        }

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


        if(is_null($model->purchasePrice)){
            $purchasePrice              = new ModelsPurchasePrice();
            $purchasePrice->models_id   = $model->id ;

        }
        else{
            $purchasePrice              = ModelsPurchasePrice::where('models_id',$model->id)->first();
        }

        $purchasePrice->price       = $request->purchase_price;
        $purchasePrice->flete_price = $request->flete_price;
        $purchasePrice->save();


        if(is_null($model->salePrice)){
            $salePrice              = new ModelsSalePrice();
            $salePrice->models_id   = $model->id ;

        }
        else{
            $salePrice              = ModelsSalePrice::where('models_id',$model->id)->first();
        }

        //sales_price
        $salePrice->price                = $request->sale_price;
        $salePrice->patentamiento_price  = $request->patentamiento_price;
        $salePrice->pack_price           = $request->pack_price;
        $salePrice->max_discount         = $request->max_discount;

        $salePrice->save();


        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);}
        // redirect with errors messages language

        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));

    }

    //delete item
    public function getDel($id)
    {
        //borra precio de compra
        ModelsPurchasePrice::where('models_id',$id)->delete();

        $this->repo->delete($id);

        $img = Images::where('entity',$this->data['entityImg'])->where('entity_id',$id)->get();

        if($img->count() != 0)
        {
            $imgHelp = new ImagesHelper();

            foreach($img as $imagen)
            {
                $imgHelp->deleteFile($imagen->image);
                $imagen->delete();
            }
        }

        return redirect()->route($this->data['route'])->withErrors(trans('messages.delItem'));
    }


}