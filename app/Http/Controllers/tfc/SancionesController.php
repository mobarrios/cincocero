<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\FasesWeek;
use App\Entities\tfc\Players;
use App\Entities\tfc\Sanciones;
use App\Http\Repositories\tfc\SancionesRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Session;


class SancionesController extends Controller {

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
        $module = 'sanciones';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'tfc.'.$module.'.index';
        $this->form                 = 'tfc.'.$module.'.form';
        $this->data['sectionName']  = 'Sanciones';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/tfc/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['players']             = Players::orderBy('last_name','ASC')->lists('fullName','id');
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
        Session::put('fases_week_id',$fases_week_id);

        $this->data['models'] = Sanciones::where('fases_week_id',$fases_week_id)->get();

        return view($this->view)->with($this->data);
    }

    //go to form new
    public function getNew()
    {
        $this->data['weeks']     = FasesWeek::where('fases_id',Session::get('fases_id'))->lists('name','id');

        return view($this->form)->with($this->data);
    }


    // post new
    public function postNew(Request $request, ImagesHelper $image)
    {
        $request['fases_week_id'] = Session::get('fases_week_id');

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
        return redirect()->route('fasesFixture',Session::get('fases_id'))->withErrors(trans('messages.newItem'));

    }
}