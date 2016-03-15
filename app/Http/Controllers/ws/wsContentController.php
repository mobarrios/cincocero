<?php

namespace App\Http\Controllers\ws;


//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;
use App\Entities\AdminUsers;
use App\Entities\stock\Items;
use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class wsContentController extends Controller {

    public function __construct()
    {
        $this->middleware('cors');
      //  $this->middleware('changeDbWS');
    }

    public function getWs(Request $request)
    {
       $it = Items::lists('code','description');

        return response()->json($it);

    }

    

    /*
    public function index()
    {
        $it =  Items::all();

        $items = [];

        foreach($it as $its)
        {
            $items = [
                'name'=>$its->name,
                'code'=>$its->code
            ];
        }
        return response()->json($items);
    }
*/
}