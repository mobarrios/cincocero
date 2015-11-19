<?php

namespace App\Http\Controllers;



use App\Entities\Images;
use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Helpers\ImagesHelper;


abstract class Controller extends BaseController
{
   // use DispatchesJobs,
    use ValidatesRequests;


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

    //detail item
    public function getDetail($id)
    {
        $this->data['model'] = $this->repo->getModel()->find($id);

        return view($this->detail)->with($this->data);
    }

    //delete item
    public function getDel($id)
    {

        $this->repo->delete($id);

        $img = Images::where('entity',$this->data['entityImg'])->where('entity_id',$id)->get();

        if($img->count() != 0)
        {
            $imgHelp = new ImagesHelper();

            foreach($img as $imagen)
            {
                $imgHelp->deleteFile($imagen->image);
                $imagen->delete();
            }
        }

        return redirect()->route($this->data['route'])->withErrors(trans('messages.delItem'));
    }


    // post new item
    public function postNew(Request $request, ImagesHelper $image)
    {
        $request = $this->requestCustom($request->all());

        dd($request);
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
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

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

}
