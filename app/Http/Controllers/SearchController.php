<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:51
 */

namespace App\Http\Controllers;


//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;


use App\Entities\tfc\Players;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller {


    public function getSearch($param1, $param2)
    {
        switch ($param1) {
            case 'playersByTeams':

                $players = Players::where('teams_id',$param2)->where('status',1)->get();
                return  response()->json($players);
            break;

        }

    }
}


//session variables
/*
    fases_id;

*/