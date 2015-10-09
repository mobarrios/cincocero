<?php

namespace App\Http\Controllers\booking;

use App\Entities\booking\Currency;
use App\Entities\booking\Rooms;
use App\Entities\booking\RoomsAvailables;
use App\Http\Repositories\booking\RoomsAvailablesRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;




class RoomsAvailablesController extends Controller {

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
        $module = 'roomsAvailables';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'booking.'.$module.'.index';
        $this->form                 = 'booking.'.$module.'.form';
        $this->data['sectionName']  = 'Disponibilidad';


        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = 'uploads/booking/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['rooms']           = Rooms::all();
        $this->data['currency']        = Currency::lists('name','id');

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

    // post new item

    public function postNew(Request $request, ImagesHelper $image)
    {
        // validation rules form repo
        $this->validate($request, $this->rules);

        $rooms = $request->chk_rooms;

        if($rooms != null)
        {
            foreach($rooms as $room => $val)
            {
                $available              = new RoomsAvailables();
                $available->from        = $request->from;
                $available->to          = $request->to;
                $available->price       = $request->price;
                $available->currency_id = $request->currency_id;
                $available->rooms_id    = $room;
                $available->save();

            }
        }


       return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));
       /*
        // method crear in repo
        $model = $this->repo->create($request);

        // if has image uploaded
        if($request->hasFile('image'))
        {
            $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
        }

        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));
*/
    }
}