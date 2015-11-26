<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Canchas;
use App\Entities\tfc\Matches;
use App\Entities\tfc\Sedes;
use App\Http\Repositories\tfc\MatchesRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class MatchesController extends Controller {

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
        $module = 'matches';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'tfc.'.$module.'.index';
        $this->form                 = 'tfc.'.$module.'.form';
        $this->data['sectionName']  = 'Partidos';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/tfc/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        // $this->data['sedes']      = Sedes::lists('name','id');
        $this->data['canchas']        = Canchas::lists('name','id');

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

    public function requestCustom($request = null)
    {
        $newRequest         = $request;

        return $newRequest;
    }


    // go to form with model
    public function getEdit($id = null, $fases_id = null)
    {
        $this->data['model']    = $this->repo->getModel()->find($id);
        $this->data['fases_id'] = $fases_id;

        return view($this->form)->with($this->data);
    }


    public function postEdit($id = null, Request $request, ImagesHelper $image)
    {
        //if in controller custom
        //$request = $this->requestCustom($request);

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
                $image->upload($this->data['entityImg'], $id ,$request->file('image') ,$this->data['imagePath'], true);
            }
        }

        $this->repo->edit($id, $request);

        // redirect with errors messages language

        return redirect()->route('fasesFixture',$request->all()['fases_id'])->withErrors(trans('messages.editItem'));
    }
}