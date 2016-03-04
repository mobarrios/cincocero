<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\DestacadosCategories;
use App\Entities\tfc\Fases;
use App\Entities\tfc\Players;
use App\Entities\tfc\Seasons;
use App\Entities\tfc\Teams;
use App\Entities\tfc\Tournaments;
use App\Http\Repositories\tfc\TournamentsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;
use Illuminate\Support\Facades\Session;


class TournamentsController extends Controller {

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
        $module = 'tournaments';

        //data from entities
        $this->repo                 = $repo;
        $this->data['models']       = $repo->ListAll();
        $this->data['tableHeader']  = $repo->tableHeader();

        //data for views
        $this->view                 = 'tfc.'.$module.'.index';
        $this->form                 = 'tfc.'.$module.'.form';
        $this->data['sectionName']  = 'Torneos';


        //images
        $this->data['imgQuantityMax']   = 1;
        $this->data['imagePath']        = 'uploads/tfc/'.$module.'/images/';
        $this->data['entityImg']        = $module;

        //selects
        $this->data['series']          = Fases::lists('name','id');
        //$this->data['currency']        = Currency::lists('name','id');

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
    public function getNew($season_id = null, $category_id = null)
    {
        $this->data['categories_id'] = $category_id;
        $this->data['seasons_id']   = $season_id;

        return view($this->form)->with($this->data);
    }


    
    public function destacadosPlayersGetNew($season_id = null , $cat_id = null)
    {
        Session::put('seasons_id', $season_id);
        Session::put('categories_id', $cat_id);

        $destacado = DestacadosCategories::where('seasons_id',$season_id)->where('categories_id',$cat_id)->get();


        if($destacado->count() != 0)
        {
            foreach($destacado as $d)
            {

                if($d->players_id != 0 )
                {
                    $player = $d;
                }
            }
            $this->data['model'] = $player;
        }

        $this->data['players']  = Players::orderBy('teams_id','ASC')->lists('name','id');

        return view('tfc.tournaments.formPlayersDestacados')->with($this->data);
    }


    public function destacadosPlayersPostNew(Request $request)
    {
        $destacado = DestacadosCategories::where('seasons_id',Session::get('seasons_id'))->where('categories_id',Session::get('categories_id'))->get();

          if($destacado->count() == 0 ){

              $destacadoN                  = new DestacadosCategories();
              $destacadoN->seasons_id      = Session::get('seasons_id');
              $destacadoN->categories_id   = Session::get('categories_id');
              $destacadoN->players_id      = $request->players_id;
              $destacadoN->observations    = $request->observations;
              $destacadoN->save();

          }else{

              foreach($destacado as $d)
              {
                  if($d->players_id != 0)
                  {
                      $d->players_id      = $request->players_id;
                      $d->observations    = $request->observations;
                      $d->save();
                  }
              }
          }

        return redirect()->back();
    }




    public function destacadosTeamsGetNew($season_id = null , $cat_id = null)
    {
        Session::put('seasons_id', $season_id);
        Session::put('categories_id', $cat_id);

        $destacado = DestacadosCategories::where('seasons_id',$season_id)->where('categories_id',$cat_id)->get();


        if($destacado->count() != 0)
        {
            foreach($destacado as $d)
            {
                if($d->teams_id != 0 )
                {
                    $teams = $d;
                }
                else{
                    $teams = null;
                }
            }
            $this->data['model'] = $teams;
        }

        $this->data['teams']  = Teams::orderBy('name','ASC')->lists('name','id');

        return view('tfc.tournaments.formTeamsDestacados')->with($this->data);
    }


    public function destacadosTeamsPostNew(Request $request)
    {
        $destacado = DestacadosCategories::where('seasons_id',Session::get('seasons_id'))->where('categories_id',Session::get('categories_id'))->get();

        if($destacado->count() == 0 ){

            $destacadoN                  = new DestacadosCategories();
            $destacadoN->seasons_id      = Session::get('seasons_id');
            $destacadoN->categories_id   = Session::get('categories_id');
            $destacadoN->teams_id        = $request->teams_id;
            $destacadoN->observations    = $request->observations;
            $destacadoN->save();

        }else{

            foreach($destacado as $d)
            {
                if($d->teams_id != 0)
                {
                    $d->teams_id         = $request->teams_id;
                    $d->observations     =  $request->observations;
                    $d->save();
                }
            }
        }

        return redirect()->back();
    }



}