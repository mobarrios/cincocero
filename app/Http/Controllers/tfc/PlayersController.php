<?php

namespace App\Http\Controllers\tfc;

use App\Entities\Images;
use App\Entities\tfc\Players;
use App\Entities\tfc\Teams;
use App\Http\Repositories\tfc\PlayersRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Session;


class PlayersController extends Controller {

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
        $module = 'players';

        //data from entities
        $this->repo = $repo;
        //$this->data['models'] = $repo->ListAll();
        $this->data['models'] = Players::orderBy('last_name','ASC')->get();
        $this->data['tableHeader'] = $repo->tableHeader();

        //data for views
        $this->view = 'tfc.' . $module . '.index';
        $this->form = 'tfc.' . $module . '.form';
        $this->data['sectionName'] = 'Jugadores';


        //images
        $this->data['imgQuantityMax'] = 1;
        $this->data['imagePath'] = 'uploads/tfc/' . $module . '/images/';
        $this->data['entityImg'] = $module;

        //selects
        $this->data['status']       = ['1'=>'activo','2'=>'inactivo'];
        $this->data['teams']        = Teams::orderBy('name','ASC')->lists('name','id');

        //data for validation
        $this->rules = $this->repo->Rules();
        $this->rulesEdit = $this->repo->RulesEdit();

        //data routes
        $this->data['route'] = $module;
        $this->data['routeEdit'] = $module . 'GetEdit';
        $this->data['routeDel'] = $module . 'GetDel';
        $this->data['routeNew'] = $module . 'GetNew';
        $this->data['routePostNew'] = $module . 'PostNew';
        $this->data['routePostEdit'] = $module . 'PostEdit';

    }


    //index
    public function getIndex($teams_id = null)
    {
        if(isset($teams_id))
        {
            Session::put('teams_id',$teams_id);
            $this->data['models'] = Players::where('teams_id',$teams_id)->get();

        }else{

            Session::forget('teams_id');
        }


        return view($this->view)->with($this->data);
    }

    // post new item
    public function postNew(Request $request, ImagesHelper $image)
    {
        if(isset($request->admin))
        {
            $admin = Players::where('teams_id',Session::get('teams_id'))->where('admin',1)->first();
            $admin->admin = 0;
            $admin->save();

            $request['admin'] = 1;
        }



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


        if(Session::has('teams_id'))
            return redirect()->route('players',Session::get('teams_id'))->withErrors(trans('messages.editItem'));
        else
            return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }


    public function postEdit($id = null, Request $request, ImagesHelper $image)
    {
        if(isset($request['admin']))
        {
            $admin = Players::where('teams_id',Session::get('teams_id'))->where('admin',1)->first();
            if(!is_null($admin))
            {
                $admin->admin = 0;
                $admin->save();
            }


            $request['admin'] = 1;
        }

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
                $image->upload($this->data['entityImg'], $id ,$request->file('image') ,$this->data['imagePath'], true);
            }
        }

        $this->repo->edit($id, $request);


        if(Session::has('teams_id'))
            return redirect()->route('players',Session::get('teams_id'))->withErrors(trans('messages.editItem'));
        else
            return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));
    }



}