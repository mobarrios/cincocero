<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Models;
use App\Http\Repositories\motonet\ModelsRepo as Repo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ImagesHelper;



class webController extends Controller {

    public function index(){
        return view('motonet/web/index');
    }

    public function detail(){
        return view('motonet/web/detail');
    }

}