<?php

namespace App\Http\Controllers\ahgai;


use App\Entities\ahgai\Establecimientos;
use App\Entities\ahgai\Noticias;
use App\Http\Controllers\Controller;

class WebController extends Controller
{

    public function getIndex()
    {
        $data['noticias'] = Noticias::all();

        return view('ahgai.web.index')->with($data);
    }

    public function getHoteleriaIndex()
    {
        $data['hoteles'] = Establecimientos::all();

        return view('ahgai.web.hoteleria')->with($data);
    }

    public function getGaleryIndex()
    {
        return view('ahgai.web.galery');
    }
}