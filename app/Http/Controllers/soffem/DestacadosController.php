<?php

namespace App\Http\Controllers\soffem;

use App\Entities\soffem\FasesWeek;
use App\Entities\soffem\Players;
use App\Entities\soffem\Destacados;
use App\Entities\soffem\Teams;
use App\Http\Repositories\tfc\DestacadosRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Session;


class DestacadosController extends Controller {

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
        $module = 'destacados';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'soffem.'.$module.'.index';
        $this->form                 = 'soffem.'.$module.'.form';
        $this->data['sectionName']  = 'Destacados de la Fecha';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/soffem/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['players']           = Players::lists('name','id');
        $this->data['teams']             = Teams::lists('name','id');

        //$this->data['weeks']             = Currency::lists('name','id');

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

    //index
    public function getIndex($fases_week_id = null)
    {
        Session::put('fases_week_id', $fases_week_id);

        $this->data['models'] = Destacados::where('fases_week_id',$fases_week_id)->get();

        return view($this->view)->with($this->data);
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
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'],Session::get('fases_week_id'))->withErrors(trans('messages.newItem'));

    }

}