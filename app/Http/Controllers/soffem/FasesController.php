<?php

namespace App\Http\Controllers\soffem;

use App\Entities\soffem\Fases;
use App\Entities\soffem\FasesTeams;
use App\Entities\soffem\FasesWeek;
use App\Entities\soffem\Matches;
use App\Entities\soffem\Tablas;
use App\Entities\soffem\Teams;
use App\Helpers\FixtureHelper;
use App\Http\Repositories\soffem\FasesRepo as Repo;
use App\Http\Controllers\Controller;
use App\Http\Repositories\soffem\TablasRepo;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Session;


class FasesController extends Controller {

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
        $module = 'fases';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();
        $this->data['start']        = $repo->start();

            //data for views
        $this->view                 = 'soffem.'.$module.'.index';
        $this->form                 = 'soffem.'.$module.'.form';
        $this->formPlayOff          = 'soffem.'.$module.'.form_playoff';
        $this->detail               = 'soffem.'.$module.'.detail';
        $this->data['sectionName']  = 'Fechas';



        //images
        $this->data['imgQuantityMax']   = 0;
        $this->data['imagePath']        = null;
        $this->data['entityImg']        = null;

        //selects
        //$this->data['roomsTypes']      = RoomsTypes::lists('name','id');
        $this->data['teams']             = Teams::where('status',1)->orderBy('name','ASC')->get();

        //data for validation
        $this->rules                = $this->repo->Rules();
        $this->rulesEdit            = $this->repo->RulesEdit();

        //data routes
        $this->data['route']        = 'seasons';
        $this->data['routeEdit']    = $module.'GetEdit';
        $this->data['routeDel']     = $module.'GetDel';
        $this->data['routeNew']     = $module.'GetNew';
        $this->data['routePostNew'] = $module.'PostNew';
        $this->data['routePostEdit']= $module.'PostEdit';



    }


    //go to form new
    public function getNew($id = null)
    {
        $this->data['tournaments_id'] = $id;

        return view($this->form)->with($this->data);
    }


    public function postNew(Request $request, ImagesHelper $image)
    {
        // validation rules form repo
        $this->validate($request, $this->rules);

        $teams = $request->all()['team'];

        if(!is_null($request->play_off)) $request['play_off'] = 1;


        // method crear in repo
        $model = $this->repo->create($request);
        $model->Teams()->attach($teams);

        if(is_null($request->play_off)){

            $fixture = new  FixtureHelper($teams);
            $fixture->setAleatorio(false);
            $fixture->setFechaLibre('Libre');
            $fixture->tablaDeCruces();

            for ($f = 1; $f <= count($fixture->getCruces()); $f++) {

                // agrga week
                $week           = new FasesWeek();
                $week->name     = $f;
                $week->fases_id = $model->id;
                $week->save();

                for ($c = 1; $c <= $fixture->partidosXFechas() ; $c++) {


                    if($fixture->getCruces()[$f][$c]['A'] != 'Libre')
                        $home = $fixture->getCruces()[$f][$c]['A'] ;
                    else
                        $home = null;

                    if($fixture->getCruces()[$f][$c]['B'] != 'Libre')
                        $away  = $fixture->getCruces()[$f][$c]['B'] ;
                    else
                        $away = null;


                    //agrega matches
                    $match = new Matches();
                    $match->name = $c;
                    $match->fases_week_id = $week->id;
                    $match->home_teams_id = $home ;
                    $match->away_teams_id = $away;
                    $match->status = 1;

                    $match->save();

                }

            }

            //agrega los datos a la tabla de posiciones
            foreach($teams as $t)
            {
                $newTabla = new Tablas();
                $newTabla->teams_id = $t;
                $newTabla->fases_id = $model->id;
                $newTabla->save();
            }



            // if has image uploaded
            if($request->hasFile('image')) {

                $image->upload($this->data['entityImg'], $model->id  ,$request->file('image') ,$this->data['imagePath']);
            }


        }else{

            if(!is_null($request->i_v))
                $c_partidos = 2;
            else
                $c_partidos = 1;


            $week           = new FasesWeek();

            $week->fases_id = $model->id;
            $week->save();



            if($request->start == 1)
                $c_partidos = 1 * $c_partidos ;

            if($request->start == 2)
                $c_partidos = 2 * $c_partidos ;

            if($request->start == 3)
                $c_partidos = 1 * $c_partidos ;

            if($request->start == 4)
                $c_partidos = 4 * $c_partidos ;

            if($request->start == 8)
                $c_partidos = 8 * $c_partidos ;

            if($request->start == 16)
                $c_partidos = 16 * $c_partidos ;

            if($request->start == 32)
                $c_partidos = 32 * $c_partidos ;

            if($request->start == 64)
                $c_partidos = 64 * $c_partidos ;


            for( $i = 0 ; $i < $c_partidos; $i++ ){
                $match = new Matches();
                //$match->name = $c;
                $match->fases_week_id = $week->id;
                //$match->home_teams_id = $home ;
                //$match->away_teams_id = $away;
                $match->status = 1;

                $match->save();
            }

        }


        // redirect with errors messages language
        return redirect()->route($this->data['route'])->withErrors(trans('messages.newItem'));

    }

    public function getDetail($id = null)
    {
        $fases  = $this->repo->find($id);
        $this->data['fases'] = $fases;

        $this->data['fases_start'] = $fases->start;

        $fases_start = [];

        switch ($fases->start)
        {
            case  '1';
                $fases_start = ['1' => 'Final'];
            break;

            case '2';
                $fases_start = ['2'=>'SemiFinal', '1' => 'Final'];
            break;

            case '4';
                $fases_start = ['4'=>'4tos de Final','2'=>'SemiFinal','1' => 'Final'];
            break;

            case '8';
                $fases_start = ['8'=>'8vos de Final','4'=>'4tos de Final','2'=>'SemiFinal','1' => 'Final'];
            break;

            case '16';
                $fases_start = ['16' =>'16vos de Final','8'=>'8vos de Final','4'=>'4tos de Final','2'=>'SemiFinal','1' => 'Final'];
            break;
            case '32';
                $fases_start = ['32' =>'32vos de Final','16' =>'16vos de Final','8'=>'8vos de Final','4'=>'4tos de Final','2'=>'SemiFinal','1' => 'Final'];
            break;

        }

        $this->data['fases_start'] = $fases_start;

        //if($fases->play_off == 0){

            $this->data['week']     = FasesWeek::where('fases_id',$id)->get();
            if($this->data['week']->first()->fases->second_round == 1)
                $this->data['iyv'] = 1;

            Session::put('fases_id',$id);
            return view($this->detail)->with($this->data);

    //    }

      //  else
         //   return view('tfc.fases.detail_play_off')->with($this->data);
    }

    public function getTabla($fases_id ,TablasRepo $tabla)
    {
        // si no hay equipos en la tabla los crea
        $tabla->getTabla($fases_id);


       //$this->data['teams'] = Teams::WhereHas('FasesTeams',function($q) use($fases_id){
       //     $q->where('fases_id',$fases_id);
       // })->get();

        $this->data['tablas'] =  Tablas::where('fases_id',$fases_id)
                                ->orderBy('pts','DESC')
                                ->orderBy('pj','DESC')
                                ->orderBy('dg','DESC')
                                ->get();

        $this->data['fases_id'] = $fases_id;
        $this->data['pos'] = 1;

        return view('tfc.fases.tablas')->with($this->data);
    }

    public function FasesWeekChange($action = null, $fases_week_id = null)
    {
        $f = FasesWeek::where('fases_id',Session::get('fases_id'))->where('active',1)->first();
       if(!is_null($f))
       {
           $f->active = 0;
           $f->save();
       }


        $fw = FasesWeek::find($fases_week_id);
        $fw->active = $action;
        $fw->save();

        return redirect()->back();
    }

    public function getDel($id)
    {

        //$this->repo->week()->delete();
        //$this->repo->Teams()->delete();

        FasesTeams::where('fases_id',$id)->delete();

        $fw = FasesWeek::where('fases_id',$id)->first();
        $mt = Matches::where('fases_week_id',$fw->id)->delete();
        $fw->delete();
        $this->repo->delete($id);

        return redirect()->route($this->data['route'])->withErrors(trans('messages.delItem'));
    }

    public function recalcularTabla(TablasRepo $tablasRepo)
    {

        return $tablasRepo->recalcular();
    }

    //change Team
    public function changeTeam($team_from = null , $team_to = null)
    {
        $fases_id    =  Session::get('fases_id');

        $fases_teams = FasesTeams::where('fases_id',$fases_id)->where('teams_id',$team_from)->first();
        $fases_teams->teams_id = $team_to;
        $fases_teams->save();


        $fasesWeeks = FasesWeek::where('fases_id',$fases_id)->get();

        foreach($fasesWeeks as $week)
        {
            $matchesLocal = Matches::where('fases_week_id',$week->id)->where('home_teams_id',$team_from)->get();

            foreach ($matchesLocal as $home)
            {
                $home->home_teams_id = $team_to;
                $home->save();
            }

            $matchesVisita = Matches::where('fases_week_id',$week->id)->where('away_teams_id',$team_from)->get();

            foreach ($matchesVisita as $away)
            {
                $away->away_teams_id = $team_to;
                $away->save();
            }

        }

        $tablas             = Tablas::where('fases_id',$fases_id)->where('teams_id',$team_from)->first();
        $tablas->teams_id   = $team_to;
        $tablas->save();



        return redirect()->back();
    }

    //add team
    public function addTeam($teams_id = null)
    {
        $fases_id  = Session::get('fases_id');

        $fases_teams            = new FasesTeams();
        $fases_teams->fases_id  = $fases_id;
        $fases_teams->teams_id  = $teams_id;
        $fases_teams->save();

        $fases_week              = Matches::whereHas('FasesWeek',function($q) use ($fases_id){
            $q->where('fases_id', $fases_id);
        })->get();


       foreach($fases_week as $fw){

           if($fw->home_teams_id == null)
               $fw->home_teams_id = $teams_id;

           if($fw->away_teams_id == null)
               $fw->away_teams_id = $teams_id;

           $fw->save();
       }


        return redirect()->back();
    }


    // go to form with model
    public function getEdit($id)
    {
        Session::put('fases_id',$id);
        $this->data['model'] = $this->repo->getModel()->find($id);

        $ft = Teams::WhereHas('FasesTeams',function($q){
                                 $q->where('fases_id',Session::get('fases_id'));
                                })->get();


        return view($this->form)->with($this->data);
    }
    
    public function getFasesVuelta($id = null){

        $fase   = $this->repo->find($id);
        $nFases = $fase->weeks->count();

        foreach ($fase->weeks as $week)
        {
            $fasesWeek = new FasesWeek();
            $fasesWeek->name = $nFases + 1;
            $fasesWeek->fases_id = $id;
            $fasesWeek->save();

            $nMatches = 1;

            foreach($week->matches as $match)
            {

                $matches                = new Matches();
                $matches->name          = $nMatches;
                $matches->status        = 1;
                $matches->fases_week_id = $fasesWeek->id;
                $matches->home_teams_id = $match->away_teams_id;
                $matches->away_teams_id = $match->home_teams_id;
                $matches->save();
                $nMatches++;
            }

            $nFases++;
       }

        $fase->second_round = '1';
        $fase->save();

        return redirect()->back()->withErrors('Vuelta Creada Correctamente');
    }

    // vista nueva fecha = fasesweeek
    public function getNewFasesWeek($id_fases = null){

        $this->data['fases'] = $this->repo->find($id_fases);

        return view('tfc.fases.fases_week.form')->with($this->data);
    }

    // post nueva fecha
    public function postNewFasesWeek(Request $request,$id_fases = null){

        $new_fases_week             = new FasesWeek();
        $new_fases_week->fases_id   = $request->fases_id;
        $new_fases_week->name       = $request->name;
        $new_fases_week->save();

        return redirect()->back()->withErrors('Fecha Creada Correctamente');
    }

    public function getEditTable(Request $request, $id_table = null,  $col = null , $data = null){

        $tabla          = Tablas::find($id_table);
        $tabla->$col    = $data;
        $tabla->save();

        if($tabla)
            return json_encode(true);
        else
            return json_encode(false);




    }
}
