<?php

namespace App\Http\Controllers\soffem;

use App\Entities\soffem\FasesTeams;
use App\Entities\soffem\FasesWeek;
use App\Entities\soffem\Players;
use App\Entities\soffem\Sanciones;
use App\Entities\soffem\SancionesDetails;
use App\Entities\soffem\Teams;
use App\Http\Repositories\soffem\SancionesRepo as Repo;
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
        $this->view                 = 'tsoffemfc.'.$module.'.index';
        $this->form                 = 'soffem.'.$module.'.form';
        $this->data['sectionName']  = 'Sanciones';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/soffem/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        //$this->data['players']        = Players::where('status',1)->orderBy('last_name','ASC')->get()->lists('full_name','id');
        $this->data['teams']            = Teams::WhereHas('FasesTeams',function($q){

                                                    $q->where('fases_id',Session::get('fases_id'));
                                             })
                                                ->where('status',1)
                                                ->orderBy('name','ASC')
                                                ->get()
                                                ->lists('name','id');


        $this->data['sancionesDetails']    = SancionesDetails::lists('name','name');
        $fases_week                        = FasesWeek::where('fases_id',Session::get('fases_id'))->get();

        $this->data['max']                 = $fases_week->count();

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
        $this->data['weeks']     = FasesWeek::where('fases_id',Session::get('fases_id'))->get();


        return view($this->form)->with($this->data);
    }


    // post new
    public function postNew(Request $request, ImagesHelper $image)
    {
        $request['fases_week_id']       = Session::get('fases_week_id');
        $request['end_fases_week_id']   = Session::get('fases_week_id') + $request->cantidad_fechas ;

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