<?php

namespace App\Http\Controllers\ws;


//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;
use App\Entities\content\Staffs;
use App\Entities\content\Teams;
use App\Entities\stock\Items;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;


class wsContentController extends Controller {

    public function __construct()
    {
        $this->middleware('cors');
        $this->middleware('changeDbWS');
    }

    public function index()
    {
        $data =  Staffs::all();

        $datas = [];

        foreach($data as $d)
        {
            array_push($datas, [
                'id' =>         $d->id,
                'name'=>        $d->name,
                'last_name'=>   $d->last_name,
                'title' =>      $d->title,
                'image' =>      $d->images->first()->image,
            ]);

        }
        return response()->json($datas);
    }



    public function getTeams()
    {
        $data = Teams::all();
        $datas = [];

        foreach($data as $d)
        {
            array_push($datas ,
                [
                    'id'     => $d->id,
                    'name'   => $d->name,
                    'escudo' => $d->images->first()->image,
                ]);
        }
        return response()->json($datas);
    }

}