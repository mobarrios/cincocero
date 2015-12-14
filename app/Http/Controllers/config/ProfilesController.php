<?php

namespace App\Http\Controllers\config;


use App\Entities\Permissions;
use App\Entities\User;
use App\Http\Repositories\config\ProfileRepo as Repo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProfilesController extends Controller {

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;
    public   $detail;

    public function __construct(Repo $repo)
    {
        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'config.profiles.index';
        $this->form                 = 'config.profiles.form';
        $this->detail               = 'config.profiles.detail';

        $this->data['sectionName']  = 'Perfiles';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();


        //images
        $this->data['imgQuantityMax']   = 0 ;
        $this->data['imagePath']        = null ;
        $this->data['entityImg']        = null ;


        //data routes
        $this->data['route']        = 'profiles';
        $this->data['routeEdit']    = 'profilesGetEdit';
        $this->data['routeDel']     = 'profilesGetDel';
        $this->data['routeNew']     = 'profilesGetNew';
        $this->data['routePostNew'] = 'profilesPostNew';
        $this->data['routePostEdit']= 'profilesPostEdit';
        $this->data['routeDetail']  = 'profilesDetail';

    }


    //delete item
    public function getDel($id)
    {
        $this->repo->delete($id);
        Permissions::where('profiles_id',$id)->delete();
        return redirect()->route($this->data['route'])->withErrors(trans('messages.delItem'));
    }

    public function requestCustom($request = null)
    {
        $newRequest         = $request;

        return $newRequest;
    }

}