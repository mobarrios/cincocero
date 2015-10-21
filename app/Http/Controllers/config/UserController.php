<?php

namespace App\Http\Controllers\config;


use App\Entities\User;
use App\Http\Repositories\config\UserRepo as Repo;
use App\Http\Repositories\config\ProfileRepo;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;


use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;



class UserController extends BaseController {

    use ValidatesRequests;

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;

    public function __construct(Repo $repo, ProfileRepo $profileRepo)
    {
        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'config.users.index';
        $this->form                 = 'config.users.form';
        $this->data['sectionName']  = 'Usuarios';

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //images
        $this->data['imgQuantityMax']   = 0 ;
        $this->data['imagePath']        = null ;
        $this->data['entityImg']        = null ;

        //data routes
        $this->data['route']        = 'user';
        $this->data['routeEdit']    = 'userGetEdit';
        $this->data['routeDel']     = 'userGetDel';
        $this->data['routeNew']     = 'userGetNew';
        $this->data['routePostNew'] = 'userPostNew';
        $this->data['routePostEdit']= 'userPostEdit';

        $this->data['profiles']      = $profileRepo->Lists();

    }




    //index
    public function getIndex()
    {
        return view($this->view)->with($this->data);
    }
    //go to form new
    public function getNew()
    {
        return view($this->form)->with($this->data);
    }
    // go to form with model
    public function getEdit($id)
    {
        $this->data['model'] = $this->repo->getModel()->find($id);

        return view($this->form)->with($this->data);
    }

    public function postEdit($id = null, Request $request, ImagesHelper $image)
    {

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

    // post new item
    public function postNew(Request $request, ImagesHelper $image)
    {
        $mail  = User::where('email',$request->email)->get();

        if($mail->count() != 0)
            return redirect()->back()->withErrors('Usuario en Uso');


        // validation rules form repo
        $this->validate($request, $this->rules);


        // method crear in repo
        //$model = $this->repo->create($request);

        $user               = new User();
        $user->name         = $request->name;
        $user->last_name    = $request->last_name;
        $user->email        = $request->email;
        $user->password     = $request->password;
        $user->profiles_id  = $request->profiles_id;
        $user->db           = $request->db;
        $user->save();


        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $user->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }
}