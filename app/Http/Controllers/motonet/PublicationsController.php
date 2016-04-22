<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Items;
use App\Entities\motonet\Publications;
use App\Helpers\Meli;
use App\Http\Controllers\ws\MercadolibreController;
use App\Http\Repositories\motonet\PublicationsRepo as Repo;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Helper\Helper;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;


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
        $this->data['items']             = Items::all();


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

        return view('motonet.publications.mercadolibre')->with($this->data);
    }


}