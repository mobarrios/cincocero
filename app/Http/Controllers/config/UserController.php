<?php

namespace App\Http\Controllers\config;


use App\Entities\Images;
use App\Entities\Profile;
use App\Entities\User;
use App\Http\Repositories\config\UserRepo as Repo;
use App\Http\Repositories\config\ProfileRepo;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;


use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class UserController extends Controller {

    use ValidatesRequests;

    public   $repo;
    public   $view ;
    public   $form;
    public   $data;
    public   $request;
    public   $rules;

    public function __construct(Repo $repo)
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
        $this->rulesPassword        = $this->repo->RulesPassword();
        $this->rulesImages          = $this->repo->RulesImages();


        //images
        $this->data['imgQuantityMax']   = 1 ;
        $this->data['imagePath']        = 'uploads/users/images/';
        $this->data['entityImg']        = 'users' ;

        //data routes
        $this->data['route']        = 'user';
        $this->data['routeEdit']    = 'userGetEdit';
        $this->data['routeDel']     = 'userGetDel';
        $this->data['routeNew']     = 'userGetNew';
        $this->data['routePostNew'] = 'userPostNew';
        $this->data['routePostEdit']= 'userPostEdit';

        $this->data['profiles']      = Profile::lists('profile','id');

    }


    public function postEdit($id = null, Request $request, ImagesHelper $image)
    {
        //if in controller custom
        // $request = $this->requestCustom($request);

        // validation rules form repo
        $this->validate($request, $this->rulesEdit);


        if($request->email != $request->old_email )
        {
            $validate = User::where('email',$request->email)->get();

            if($validate->count() != 0)
                return redirect()->back()->withErrors('Usuario en Uso');
        }



        $model = User::find($request->id);

            if($request->password != null)
            {
                $this->validate($request, $this->rulesPassword);
                $model->password = $request->password;

            }

        $model->name        = $request->name;
        $model->last_name   = $request->last_name;
        $model->profiles_id = $request->profiles_id;
        $model->dni         = $request->dni;

        $model->save();


        return redirect()->route($this->data['route'])->withErrors(trans('messages.editItem'));
    }


    public function userProfileEdit()
    {
        $this->data['model'] = Auth::user();

        return view('config.users.userProfile')->with($this->data);
    }

    public function userProfileSave(Request $request, ImagesHelper $image)
    {
        $this->validate($request, $this->rulesEdit);


        //$unique = User::where('email',$request->email)->get();

        //if($unique->count() != 0)
        //    return redirect()->back()->withErrors('Usuario en Uso.');


        $user = User::find(Auth::user()->id);

        $user->name      = $request->name;
        $user->last_name = $request->last_name;


            // if has image uploaded
            if($request->hasFile('image'))
            {
                $this->validate($request, $this->rulesImages);

                $img = Images::where('entity',$this->data['entityImg'])->where('entity_id',Auth::user()->id )->get();

                if( $this->data['imgQuantityMax'] <= $img->count())
                {
                    return redirect()->back()->withErrors('Limite Maximo de Imagenes.');
                }
                else
                {
                    $image->upload($this->data['entityImg'], Auth::user()->id  ,$request->file('image') ,$this->data['imagePath'], true);
                }
            }

                if($request->password != null)
                {
                    $this->validate($request, $this->rulesPassword);
                    $user->password = $request->password;
                    $user->save();

                    return redirect()->to('logout');
                }

        $user->save();


        return redirect()->to('home')->withErrors('Perfil Editado.');
    }



    /*
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
    */
}