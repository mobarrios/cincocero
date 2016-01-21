<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Canchas;
use App\Entities\tfc\Matches;
use App\Entities\tfc\MatchesDetails;
use App\Entities\tfc\Sedes;
use App\Http\Repositories\tfc\MatchesRepo as Repo;
use App\Http\Controllers\Controller;

use App\Http\Repositories\tfc\TablasRepo;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use PDF;
use Illuminate\Support\Facades\Session;


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
         $this->data['status']          = [1 => 'Por Jugar', 2 => 'Finalizado', 3 => 'Suspendido'];

        $this->data['sedes']            = Sedes::lists('name','id');

//        $this->data['canchas']         = Canchas::lists('name','id');

        $this->data['canchas'] = Canchas::where('sedes_id',Sedes::first()->id)->lists('name','id');

         $this->data['canchasEdit']     = Canchas::all();


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


    //Carga resultado de los partidos

    public function getResult($id = null)
    {

        $this->data['match'] = Matches::find($id);

        return view('tfc.matches.result')->with($this->data);
    }

    public function postResult(Request $request, TablasRepo $tabla)
    {


        $match = Matches::find($request->matches_id);
        $match->home_goals = $request->home_goals;
        $match->away_goals = $request->away_goals;
        $match->walk_over_motivo = $request->walk_over_motivo;

        if($request->walk_over == 'on')
            $match->walk_over = 1;

        $match->status = 2;
        $match->save();

        //recalcula tabla
        $tabla->calculaTabla($request->matches_id);



            foreach ($request->yellow as $yellow => $player) {



                    if($match->MatchesDetails()->where('players_id',$yellow)->count() == 0)
                    {
                        $detail                 = new MatchesDetails();
                        $detail->matches_id     = $request->matches_id;
                        $detail->players_id     = $yellow;
                        $detail->yellow         = $player;
                        $detail->save();

                    }else{

                        $detail             = MatchesDetails::where('matches_id',$match->id)->where('players_id',$yellow)->first();
                        $detail->yellow     = $player;
                        $detail->save();
                    }


            }

        foreach ($request->red as $red => $player) {


                if($match->MatchesDetails()->where('players_id',$red)->count() == 0)
                {
                    $detail                 = new MatchesDetails();
                    $detail->matches_id     = $request->matches_id;
                    $detail->players_id     = $red;
                    $detail->red         = $player;
                    $detail->save();

                }else{

                    $detail             = MatchesDetails::where('matches_id',$match->id)->where('players_id',$red)->first();
                    $detail->red        = $player;
                    $detail->save();
                }


        }



                foreach($request->goals as $player => $goal) {

                        if($match->MatchesDetails()->where('players_id',$player)->count() == 0)
                        {
                            $detail                 = new MatchesDetails();
                            $detail->matches_id     = $request->matches_id;
                            $detail->players_id     = $player;
                            $detail->goals          = $goal;
                            $detail->save();

                        }else{

                            $detail         = MatchesDetails::where('matches_id',$match->id)->where('players_id',$player)->first();
                            $detail->goals  = $goal;
                            $detail->save();
                        }


                }


        return redirect()->route('fasesFixture', Session::get('fases_id') );
    }


    // get Ficha de Partido
    public function getFicha($matches_id = null)
    {
        $data['match']  = Matches::find($matches_id);


        $pdf = PDF::loadView('tfc.matches.ficha',$data);
        $pdf->setOrientation('landscape');

        return $pdf->stream();


    }

}