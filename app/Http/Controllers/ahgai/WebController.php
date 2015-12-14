<?php

namespace App\Http\Controllers\ahgai;


use App\Entities\ahgai\Establecimientos;
use App\Entities\ahgai\Galeries;
use App\Entities\ahgai\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct()
    {
      // cambia la base de datos para ahgai
        Config::set('database.connections.mysql.database', env('DB_DATABASE', ''));
    }

    public function getNewsDetail($news_id = null)
    {
        $data['noticias'] = News::find($news_id);

        return view('ahgai.web.news_detail')->with($data);
    }

    public function getIndex()
    {
        $data['noticias'] = News::all();

        return view('ahgai.web.index')->with($data);
    }

    public function getHoteleriaIndex()
    {
        $data['hoteles'] = Establecimientos::all();

        return view('ahgai.web.hoteleria')->with($data);
    }

    public function getGastronomiaIndex()
    {
        $data['gastronomia'] = Establecimientos::all();

        return view('ahgai.web.gastronomia')->with($data);
    }

    public function getGaleryIndex()
    {
        $data['galeries'] = Galeries::all();
        return view('ahgai.web.galery')->with($data);
    }

    public function  getInstitucional()
    {
        return view('ahgai.web.institucional');
    }

    public function  getContacto()
    {
        return view('ahgai.web.contacto');
    }

    public function getMail(Request $request)
    {
        echo "Envio de mail con los datos de :";
        dd($request->request);
    }
}