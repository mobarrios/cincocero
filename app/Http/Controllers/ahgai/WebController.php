<?php

namespace App\Http\Controllers\ahgai;


use App\Entities\ahgai\Disponibilidad;
use App\Entities\ahgai\Establecimientos;
use App\Entities\ahgai\Galeries;
use App\Entities\ahgai\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function postResultado(Request $request)
    {
        $from    =  date('Y-m-d',strtotime($request->start));
        $to      =  date('Y-m-d',strtotime($request->end));

        $data['from']   = $request->start;
        $data['to']     = $request->end;

        $data['dispo'] = Disponibilidad::where('from','<=',$from)
            ->where('to','>=',$to)
            ->where('rooms_types_id',$request->rooms_types_id)
            ->get();

        return view('ahgai.web.filter')->with($data);
    }

    public function postMessage(Request $request)
    {
        if($request->select)

            foreach ($request->select as $v =>  $htl) {

                Mail::raw('Tiene una notificacion en el sistema de disponibilidad.', function($message)
                {
                    $message->from('mbarrios@navcoder', 'Sistema Ahgai');
                    $message->subject('Consulta de Disponibilidad.');
                    $message->to('manuelobarrios@gmail.com');
                });

                echo $v;
                echo $request->name;
                echo $request->email;
                echo $request->mesaje;
            }


        return redirect()->route('webHome');

       // return view('ahgai.web.filter');
    }
}