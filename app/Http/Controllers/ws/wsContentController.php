<?php

namespace App\Http\Controllers\ws;


//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;
use App\Entities\stock\Items;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;


class wsContentController extends Controller {

    public function __construct()
    {
        //$this->middleware('cors');
        //$this->middleware('changeDbWS');
    }

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

}