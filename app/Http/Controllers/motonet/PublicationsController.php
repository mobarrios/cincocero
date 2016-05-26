<?php

namespace App\Http\Controllers\motonet;

use App\Entities\MercadoLibreCategories;
use App\Entities\motonet\Brands;
use App\Entities\motonet\Items;
use App\Entities\motonet\PayMethod;
use App\Entities\motonet\Publications;
use App\Helpers\Meli;
use App\Http\Controllers\ws\MercadolibreController;
use App\Http\Repositories\motonet\PublicationsRepo as Repo;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Helper\Helper;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use App\Helpers\BreadCrumbHelper;


use App\Http\Controllers\ws\MercadolibreController as Ml;


class PublicationsController extends Controller {

    public   $module;
    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $rulesEdit;



    public function __construct(Repo $repo )
    {

        $module = 'publications';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'motonet.'.$module.'.index';
        $this->form                 = 'motonet.'.$module.'.form';
        $this->data['sectionName']  = 'Publicaciones';


        //images
        $this->data['imgQuantityMax']   = 5;
        $this->data['imagePath']        = 'uploads/motonet/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['roomsTypes']      = RoomsTypes::lists('name','id');
        //$this->data['currency']        = Currency::lists('name','id');
        $this->data['pay_method']        = PayMethod::all()->lists('Metodo','id');
        $this->data['brands']            = Brands::with('Models')->get();



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

    public function MercadoLibre($publications_id = null, MercadolibreController $ml)
    {
        $this->data['sectionName'] = 'Publicaciones - Mercadolibre';
        $this->data['publicacion'] = Publications::find($publications_id);
       $this->data['categorias']  = MercadoLibreCategories::where('ml_main','')->get();


       /*
        foreach($ml->getCategories()['body'] as $cat => $k)
        {
            echo '<ul>'.$k->name ;

           foreach($ml->getSubCategories($k->id)['body']->children_categories as $s => $ks)
           {
               echo  '<li>'.$ks->name;

               foreach($ml->getSubCategories($ks->id)['body']->children_categories as $ss => $kss)
               {
                   echo  '<li>'.$kss->name.'</li>';
               }

               echo '</li>';

           }
            echo '</ul>';

        }
       */
        return view('motonet.publications.mercadolibre')->with($this->data);
    }


    public function postNew(Request $request, ImagesHelper $image)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $model = $this->repo->create($request);
        $model->PayMethod()->attach($request->pay_method_id);

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }

    public function postEdit($id,Request $request, ImagesHelper $image)
    {

        // validation rules form repo
        $this->validate($request, $this->rulesEdit);

        // method crear in repo
        $model = $this->repo->getModel()->find($id);

        $this->repo->edit($id,$request);

        $categories = $model->PayMethod;

        if($request->pay_method_id != 0){
            $model->PayMethod()->sync($request->pay_method_id);
        }

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);}
        // redirect with errors messages language

        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));
    }

    public function getEdit($id)
    {
        $bc = new BreadCrumbHelper();
        $bc->create('Editar ' . $this->data['sectionName'], $this->data['routeEdit']);

        $this->data['model'] = $this->repo->getModel()->find($id);

        $cat = $this->data['model']->PayMethod;

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
//        dd($this->data['cat']);
        return view($this->form)->with($this->data);
    }
}