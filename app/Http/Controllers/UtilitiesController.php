<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:51
 */

namespace App\Http\Controllers;

use App\Helpers\UtilitiesHelper;
use Illuminate\Support\Facades\Session;

//use App\Http\Repositories\UserRepo;
//use App\Http\Requests\UserCreateRequest;
//use App\Http\Helpers\Helper;


//use App\Entities\motonet\Visits;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;

class UtilitiesController extends Controller {

    private  $utilities;

    public function __construct(UtilitiesHelper $utilities){

        $this->utilities = $utilities;

    }

    public function exportToExcel(){

        $model = Session::get('export');
        

        $export =  $this->utilities->exportToXls($model);



    }

}