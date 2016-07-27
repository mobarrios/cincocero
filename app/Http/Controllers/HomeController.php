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


use App\Entities\motonet\Visits;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    public $view ;
    public $data;

    public function __construct()
    {
        $this->view = 'home';
        $this->data['sectionName'] = 'Bienvenido';
    }

    public function getIndex()
    {
        $ruta_home  = Auth::user()->Perfil()->first()->home;
        $this->view = $ruta_home;

        //$this->data['visits'] = Visits::groupBy('created_at')->count();
        $visits = Visits::select(DB::raw('DATE(created_at) as dia,count(*) as total'))
            ->groupBy('dia')->get();

        $dia   = [];
        $cant  = [];

        foreach($visits as $visit){

            array_push($dia ,$visit->dia);
            array_push($cant ,$visit->total);
        }

        $this->data['dia']  = json_encode($dia);
        $this->data['cant'] = json_encode($cant);


        return view($this->view)->with($this->data);

    }
}