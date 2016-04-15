<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Canchas;
use App\Entities\tfc\Horarios;
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
        //$this->data['hour' ]            = ['10:00'=>'10:00','11:45'=>'11:45','13:30'=>'13:30','15:15'=>'15:15'];

        $this->data['sedes']            = Sedes::lists('name','id');

        $this->data['hour']             = Horarios::lists('name','name');

        $this->data['canchas']          = Canchas::where('sedes_id',Sedes::first()->id)->lists('name','id');

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

        $date =date('Y-m-d',strtotime($request->date));

        $match = Matches::where('date',$date)
            ->where('canchas_id',$request->canchas_id)
            ->where('hour',$request->hour)
            ->get();

        if($match->count() == 1)
            return redirect()->back()->withErrors('La cancha ya se encuentra asignada a otro partido a esta hora.')->withInput();



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

        // si edita el partido , borra los datos de la tabla actuales y los vuevle a cargar con los datos nuevos

        //si edita el partido vuelve los datos atras

    if ($request->edit == 1) {

        //  if($request->walk_over_no_ptos == null)
        $tabla->reCalculaTabla($request->matches_id);

    }

    // si el walk over esta on
    if ($request->walk_over == 'on') {
        $match->walk_over = 1;

        if ($request->walk_over_no_ptos == 'on') {
            $match->walk_over_no_ptos = 1;
        }
    } else {
        $match->walk_over = 0;
        $match->walk_over_motivo = '';

        if ($request->walk_over_no_ptos != 'on') {
            $match->walk_over_no_ptos = 0;
        }
    }


    if ($request->home_goals != '' || $request->away_goals != '') {
        $match->home_goals = $request->home_goals;
        $match->away_goals = $request->away_goals;
        $match->walk_over_motivo = $request->walk_over_motivo;
    }

    //if($request->walk_over_no_ptos != 'on')
    //{

    $match->status = 2;
    $match->save();

    //recalcula tabla
    $tabla->calculaTabla($request->matches_id, $request->walk_over_no_ptos);



    foreach ($request->yellow as $yellow => $player) {

        if ($match->MatchesDetails()->where('players_id', $yellow)->count() == 0) {
            $detail = new MatchesDetails();
            $detail->matches_id = $request->matches_id;
            $detail->players_id = $yellow;
            $detail->yellow = $player;
            $detail->save();

        } else {

            $detail = MatchesDetails::where('matches_id', $match->id)->where('players_id', $yellow)->first();
            $detail->yellow = $player;
            $detail->save();
        }
    }

    foreach ($request->red as $red => $player) {

        if ($match->MatchesDetails()->where('players_id', $red)->count() == 0) {
            $detail = new MatchesDetails();
            $detail->matches_id = $request->matches_id;
            $detail->players_id = $red;
            $detail->red = $player;
            $detail->save();

        } else {

            $detail = MatchesDetails::where('matches_id', $match->id)->where('players_id', $red)->first();
            $detail->red = $player;
            $detail->save();
        }
    }
    foreach ($request->goals as $player => $goal) {

        if ($match->MatchesDetails()->where('players_id', $player)->count() == 0) {
            $detail = new MatchesDetails();
            $detail->matches_id = $request->matches_id;
            $detail->players_id = $player;
            $detail->goals = $goal;
            $detail->save();

        } else {

            $detail = MatchesDetails::where('matches_id', $match->id)->where('players_id', $player)->first();
            $detail->goals = $goal;
            $detail->save();
        }
    }
    //}



        return redirect()->route('fasesFixture', Session::get('fases_id') );
    }


    // get Ficha de Partido
    public function getFicha($matches_id = null)
    {
        $data['match']  = Matches::find($matches_id);


        $pdf = PDF::loadView('tfc.matches.ficha',$data);
        $pdf->setPaper('A4');

        return $pdf->stream();

    }

    //Edita resultado de los partidos

    public function postEditResult( Request $request, TablasRepo $tablasRepo)
    {
        $id                 = $request->matches_id;
        $match              = Matches::find($id);
        $resultado_anterior =  $match;

        $tablasRepo->reCalculaTabla($request->matches_id);

        $tablasRepo->calculaTabla($request->matches_id);


       // return view('tfc.matches.result')->with($this->data);
    }



}