<?php

namespace App\Http\Repositories\tfc;

//use App\Entities\tfc\Teams;
use App\Entities\tfc\Fases;
use App\Entities\tfc\FasesTeams;
use App\Entities\tfc\FasesWeek;
use App\Entities\tfc\Matches;
use App\Entities\tfc\Tablas;
use App\Entities\tfc\Teams;
use App\Http\Repositories\BaseRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TablasRepo extends BaseRepo {

    public function getModel()
    {
        //return new Tablas;
    }

    public static function getTabla($fases_id = null)
    {
        $equipos = FasesTeams::where('fases_id',$fases_id)->get();
        $t = [];

        foreach($equipos as $equipo)
        {
            $tabla =  Tablas::where('fases_id',$fases_id)
                        ->where('teams_id',$equipo->teams_id)
                        ->get();

            if($tabla->count() == 0){
                $newTabla = new Tablas();
                $newTabla->teams_id = $equipo->teams_id;
                $newTabla->fases_id = $fases_id;
                $newTabla->save();
            }
        }
    }


    public function calculaTabla( $match_id = null, $walk_over_no_ptos = null)
    {
        $match     = Matches::find($match_id);

        $tablaHome = Tablas::where('fases_id',Session::get('fases_id'))->where('teams_id',$match->home_teams_id)->first();
        $tablaAway = Tablas::where('fases_id',Session::get('fases_id'))->where('teams_id',$match->away_teams_id)->first();


    

    if ($walk_over_no_ptos != null) {

        if (!is_null($tablaHome)) {
            $tablaHome->pts = $tablaHome->pts + 0;
            $tablaHome->pj = $tablaHome->pj + 1;
            $tablaHome->pg = $tablaHome->pg + 0;
            $tablaHome->pe = $tablaHome->pe + 0;
            $tablaHome->pp = $tablaHome->pp + 1;
            $tablaHome->gf = $tablaHome->gf + 0;
            $tablaHome->gc = $tablaHome->gc + 0;
            $tablaHome->dg = $tablaHome->dg + 0;
            $tablaHome->save();
        }

        if (!is_null($tablaAway)) {
            $tablaAway->pts = $tablaAway->pts + 0;
            $tablaAway->pj = $tablaAway->pj + 1;
            $tablaAway->pg = $tablaAway->pg + 0;
            $tablaAway->pe = $tablaAway->pe + 0;
            $tablaAway->pp = $tablaAway->pp + 1;
            $tablaAway->gf = $tablaAway->gf + 0;
            $tablaAway->gc = $tablaAway->gc + 0;
            $tablaAway->dg = $tablaAway->dg + 0;
            $tablaAway->save();
        }

    } else {

        if ($match->home_goals > $match->away_goals) {

            // gana local y no encuetra el dato en la tabla
            if (is_null($tablaHome)) {
                $newTabla = new Tablas();
                $newTabla->fases_id = Session::get('fases_id');
                $newTabla->teams_id = $match->home_teams_id;
                $newTabla->pts = 3;
                $newTabla->pj = 1;
                $newTabla->pg = 1;
                $newTabla->pe = 0;
                $newTabla->pp = 0;
                $newTabla->gf = $match->home_goals;
                $newTabla->gc = $match->away_goals;
                $newTabla->dg = $match->home_goals - $match->away_goals;
                $newTabla->save();

            // gana local y  encuetra el dato en la tabla
            } else {

                $tablaHome->pts = $tablaHome->pts + 3;
                $tablaHome->pj = $tablaHome->pj + 1;
                $tablaHome->pg = $tablaHome->pg + 1;
                $tablaHome->pe = $tablaHome->pe + 0;
                $tablaHome->pp = $tablaHome->pp + 0;
                $tablaHome->gf = $tablaHome->gf + $match->home_goals;
                $tablaHome->gc = $tablaHome->gc + $match->away_goals;
                $tablaHome->dg = $tablaHome->dg + ($match->home_goals - $match->away_goals);
                $tablaHome->save();

            }


            if (is_null($tablaAway)) {
                $newTabla = new Tablas();
                $newTabla->fases_id = Session::get('fases_id');
                $newTabla->teams_id = $match->away_teams_id;
                $newTabla->pts = 0;
                $newTabla->pj = 1;
                $newTabla->pg = 0;
                $newTabla->pe = 0;
                $newTabla->pp = 1;
                $newTabla->gf = $match->away_goals;
                $newTabla->gc = $match->home_goals;
                $newTabla->dg = $match->away_goals - $match->home_goals;
                $newTabla->save();

            } else {

                $tablaAway->pts = $tablaAway->pts + 0;
                $tablaAway->pj = $tablaAway->pj + 1;
                $tablaAway->pg = $tablaAway->pg + 0;
                $tablaAway->pe = $tablaAway->pe + 0;
                $tablaAway->pp = $tablaAway->pp + 1;
                $tablaAway->gf = $tablaAway->gf + $match->away_goals;
                $tablaAway->gc = $tablaAway->gc + $match->home_goals;
                $tablaAway->dg = $tablaAway->dg + ($match->away_goals - $match->home_goals);
                $tablaAway->save();


            }

        } else if ($match->home_goals < $match->away_goals) {
            // gana visita y no encuetra el dato en la tabla
            if (is_null($tablaAway)) {
                $newTabla = new Tablas();
                $newTabla->fases_id = Session::get('fases_id');
                $newTabla->teams_id = $match->away_teams_id;
                $newTabla->pts = 3;
                $newTabla->pj = 1;
                $newTabla->pg = 1;
                $newTabla->pe = 0;
                $newTabla->pp = 0;
                $newTabla->gf = $match->away_goals;
                $newTabla->gc = $match->home_goals;
                $newTabla->dg = $match->away_goals - $match->home_goals;
                $newTabla->save();


                // gana visita y  encuetra el dato en la tabla
            } else {

                $tablaAway->pts = $tablaAway->pts + 3;
                $tablaAway->pj = $tablaAway->pj + 1;
                $tablaAway->pg = $tablaAway->pg + 1;
                $tablaAway->pe = $tablaAway->pe + 0;
                $tablaAway->pp = $tablaAway->pp + 0;
                $tablaAway->gf = $tablaAway->gf + $match->away_goals;
                $tablaAway->gc = $tablaAway->gc + $match->home_goals;
                $tablaAway->dg = $tablaAway->dg + ($match->away_goals - $match->home_goals);
                $tablaAway->save();
            }

            if (is_null($tablaHome)) {
                $newTabla = new Tablas();
                $newTabla->fases_id = Session::get('fases_id');
                $newTabla->teams_id = $match->home_teams_id;
                $newTabla->pts = 0;
                $newTabla->pj = 1;
                $newTabla->pg = 0;
                $newTabla->pe = 0;
                $newTabla->pp = 1;
                $newTabla->gf = $match->home_goals;
                $newTabla->gc = $match->away_goals;
                $newTabla->dg = $match->home_goals - $match->away_goals;

                $newTabla->save();

            } else {

                $tablaHome->pts = $tablaHome->pts + 0;
                $tablaHome->pj = $tablaHome->pj + 1;
                $tablaHome->pg = $tablaHome->pg + 0;
                $tablaHome->pe = $tablaHome->pe + 0;
                $tablaHome->pp = $tablaHome->pp + 1;
                $tablaHome->gf = $tablaHome->gf + $match->home_goals;
                $tablaHome->gc = $tablaHome->gc + $match->away_goals;
                $tablaHome->dg = $tablaHome->dg + ($match->home_goals - $match->away_goals);
                $tablaHome->save();
            }

        } else {

            // gana empate y no encuetra el dato en la tabla
            if (is_null($tablaHome)) {
                $newTabla = new Tablas();
                $newTabla->fases_id = Session::get('fases_id');
                $newTabla->teams_id = $match->home_teams_id;
                $newTabla->pts = 1;
                $newTabla->pj = 1;
                $newTabla->pg = 0;
                $newTabla->pe = 1;
                $newTabla->pp = 0;
                $newTabla->gf = $match->home_goals;
                $newTabla->gc = $match->away_goals;
                $newTabla->dg = $match->home_goals - $match->away_goals;

                $newTabla->save();

                // gana local y  encuetra el dato en la tabla
            } else {

                $tablaHome->pts = $tablaHome->pts + 1;
                $tablaHome->pj = $tablaHome->pj + 1;
                $tablaHome->pg = $tablaHome->pg + 0;
                $tablaHome->pe = $tablaHome->pe + 1;
                $tablaHome->pp = $tablaHome->pp + 0;
                $tablaHome->gf = $tablaHome->gf + $match->home_goals;
                $tablaHome->gc = $tablaHome->gc + $match->away_goals;
                $tablaHome->dg = $tablaHome->dg + ($match->home_goals - $match->away_goals);
                $tablaHome->save();
            }

            if (is_null($tablaAway)) {
                $newTabla = new Tablas();
                $newTabla->fases_id = Session::get('fases_id');
                $newTabla->teams_id = $match->away_teams_id;
                $newTabla->pts = 1;
                $newTabla->pj = 1;
                $newTabla->pg = 0;
                $newTabla->pe = 1;
                $newTabla->pp = 0;
                $newTabla->gf = $match->away_goals;
                $newTabla->gc = $match->home_goals;
                $newTabla->dg = $match->away_goals - $match->home_goals;
                $newTabla->save();

            } else {

                $tablaAway->pts = $tablaAway->pts + 1;
                $tablaAway->pj = $tablaAway->pj + 1;
                $tablaAway->pg = $tablaAway->pg + 0;
                $tablaAway->pe = $tablaAway->pe + 1;
                $tablaAway->pp = $tablaAway->pp + 0;
                $tablaAway->gf = $tablaAway->gf + $match->away_goals;
                $tablaAway->gc = $tablaAway->gc + $match->home_goals;
                $tablaAway->dg = $tablaAway->dg + ($match->away_goals - $match->home_goals);
                $tablaAway->save();
            }

        }
    }
    return Session::get('fases_id');

}

    // recalcula la tabla de posiciones

    public function reCalculaTabla( $match_id = null )
    {

        $match     = Matches::find($match_id);

        $tablaHome = Tablas::where('fases_id',Session::get('fases_id'))->where('teams_id',$match->home_teams_id)->first();
        $tablaAway = Tablas::where('fases_id',Session::get('fases_id'))->where('teams_id',$match->away_teams_id)->first();

        if($match->home_goals > $match->away_goals)
        {
            $tablaHome->pts          = $tablaHome->pts - 3;
            $tablaHome->pj           = $tablaHome->pj - 1;
            $tablaHome->pg           = $tablaHome->pg - 1;
            $tablaHome->pe           = $tablaHome->pe - 0;
            $tablaHome->pp           = $tablaHome->pp - 0;
            $tablaHome->gf           = $tablaHome->gf - $match->home_goals;
            $tablaHome->gc           = $tablaHome->gc - $match->away_goals;
            $tablaHome->dg           = $tablaHome->dg - ($match->home_goals - $match->away_goals);
            $tablaHome->save();

            $tablaAway->pts          = $tablaAway->pts - 0;
            $tablaAway->pj           = $tablaAway->pj - 1;
            $tablaAway->pg           = $tablaAway->pg - 0;
            $tablaAway->pe           = $tablaAway->pe - 0;
            $tablaAway->pp           = $tablaAway->pp - 1;
            $tablaAway->gf           = $tablaAway->gf - $match->away_goals;
            $tablaAway->gc           = $tablaAway->gc - $match->home_goals;
            $tablaAway->dg           = $tablaAway->dg - ($match->away_goals - $match->home_goals);
            $tablaAway->save();

        } else if($match->home_goals < $match->away_goals) {

            $tablaAway->pts         = $tablaAway->pts - 3;
            $tablaAway->pj          = $tablaAway->pj - 1;
            $tablaAway->pg          = $tablaAway->pg - 1;
            $tablaAway->pe          = $tablaAway->pe - 0;
            $tablaAway->pp          = $tablaAway->pp - 0;
            $tablaAway->gf          = $tablaAway->gf - $match->away_goals;
            $tablaAway->gc          = $tablaAway->gc - $match->home_goals;
            $tablaAway->dg          = $tablaAway->dg -($match->away_goals - $match->home_goals);
            $tablaAway->save();

            $tablaHome->pts         = $tablaHome->pts - 0;
            $tablaHome->pj          = $tablaHome->pj - 1;
            $tablaHome->pg          = $tablaHome->pg - 0;
            $tablaHome->pe          = $tablaHome->pe - 0;
            $tablaHome->pp          = $tablaHome->pp - 1;
            $tablaHome->gf          = $tablaHome->gf - $match->home_goals;
            $tablaHome->gc          = $tablaHome->gc - $match->away_goals;
            $tablaHome->dg          = $tablaHome->dg -($match->home_goals - $match->away_goals);
            $tablaHome->save();

        } else {

            $tablaHome->pts         = $tablaHome->pts - 1;
            $tablaHome->pj          = $tablaHome->pj - 1;
            $tablaHome->pg          = $tablaHome->pg - 0;
            $tablaHome->pe          = $tablaHome->pe - 1;
            $tablaHome->pp          = $tablaHome->pp - 0;
            $tablaHome->gf          = $tablaHome->gf - $match->home_goals;
            $tablaHome->gc          = $tablaHome->gc - $match->away_goals;
            $tablaHome->dg          = $tablaHome->dg -($match->home_goals - $match->away_goals);
            $tablaHome->save();

            $tablaAway->pts         = $tablaAway->pts - 1;
            $tablaAway->pj          = $tablaAway->pj - 1;
            $tablaAway->pg          = $tablaAway->pg - 0;
            $tablaAway->pe          = $tablaAway->pe - 1;
            $tablaAway->pp          = $tablaAway->pp - 0;
            $tablaAway->gf          = $tablaAway->gf - $match->away_goals;
            $tablaAway->gc          = $tablaAway->gc - $match->home_goals;
            $tablaAway->dg          = $tablaAway->dg -($match->away_goals - $match->home_goals);
            $tablaAway->save();
        }

        return Session::get('fases_id');
    }

}