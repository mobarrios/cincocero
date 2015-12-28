<?php

namespace App\Http\Controllers\ahgai;

use App\Entities\ahgai\Establecimientos;
use App\Entities\ahgai\Partners;

use App\Entities\User;
use App\Helpers\ImagesHelper;
use App\Http\Repositories\ahgai\PartnersRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class PartnersController extends Controller {

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
        $module = 'partners';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'ahgai.'.$module.'.index';
        $this->form                 = 'ahgai.'.$module.'.form';
        $this->data['sectionName']  = 'Asociados';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/ahgai/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['establecimientos']      = Establecimientos::lists('name','id');
        //$this->data['currency']        = Currency::lists('name','id');

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


        // validation rules form repo
        $this->validate($request, $this->rules);

        $validate = User::where('email',$request->mail)->get();

        if($validate->count() != 0)
            return redirect()->back()->withErrors('Usuario en Uso')->withInput();

        // method crear in repo
        $model = $this->repo->create($request);

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }


        $user               = new User();
        $user->name         = $request->name;
        $user->last_name    = $request->last_name;
        $user->email        = $request->mail;
        $user->password     = $request->password;
        $user->profiles_id  = '3';
        $user->db           = env('DB_DATABASE');
        $user->save();


        // enviar mail a  asociado con cuenta y mail


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
                $image->upload($this->data['entityImg'], $id ,$request->file('image') ,$this->data['imagePath'], true);
            }
        }

        $this->repo->edit($id, $request);

        // redirect with errors messages language

        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));
    }




}