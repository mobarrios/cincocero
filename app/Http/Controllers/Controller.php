<?php

namespace App\Http\Controllers;



use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;


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

    //delete item
    public function getDel($id)
    {
        $this->repo->Borrar($id);

        return redirect($this->data['route'])->withErrors(trans('messages.delItem'));
    }


    // post new item
    public function postNew(Request $request)
    {
        // validation rules form repo
        $this->validate($request, $this->rules);

        // method crear in repo
        $this->repo->Crear($request);

        // redirect with errors messages language
        return redirect($this->data['route'])->withErrors(trans('messages.newItem'));
    }


    public function postEdit($id = null, Request $request)
    {
        // validation rules form repo
        $this->validate($request, $this->rules);

        $this->repo->Editar($id, $request);

        // redirect with errors messages language
        return redirect($this->data['route'])->withErrors(trans('messages.editItem'));
    }

}
