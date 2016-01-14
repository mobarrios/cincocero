<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Categories;
use App\Entities\tfc\Fases;
use App\Entities\tfc\News;
use App\Entities\tfc\Players;
use App\Entities\tfc\Sedes;
use App\Entities\tfc\Teams;
use App\Entities\tfc\Tournaments;
use App\Http\Controllers\Controller;
use App\Http\Repositories\tfc\CategoriesRepo;
use App\Http\Repositories\tfc\TournamentsRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class WebController extends Controller {

    public function Index()
    {
        $data['categories'] = Categories::all();

        return view('tfc/web/index')->with($data);
    }

    public function Reglamento()
    {
        return view('tfc/web/reglamento');
    }

    public function Noticias(Categories $categorias)
    {
        $data['noticias']   = News::orderBy('date','DESC')->paginate(10);

        $data['categorias'] = $categorias->all();
        return view('tfc/web/noticias')->with($data);
    }

    public function Sedes()
    {
        $data['sedes'] = Sedes::all();

        return view('tfc/web/sedes')->with($data);
    }

    public function SedeDetalle($id = null)
    {
        $data['sedes'] = Sedes::find($id);

        return view('tfc/web/sede_detalle')->with($data);
    }

    public function Galeria(Categories $categorias)
    {
        $data['categorias'] = $categorias->all();
        return view('tfc/web/galeria')->with($data);
    }

    public function Inscripcion()
    {
        $data['teams'] = Teams::orderBy('name','DESC')->lists('name','id');
        return view('tfc/web/inscripcion')->with($data);
    }

    public function Contactenos()
    {
        return view('tfc/web/contactenos');
    }

    public function Principal($id,Tournaments $torneos,Categories $categorias,Fases $fases)
    {
        $data['noticias']   = News::orderBy('date','DESC')->paginate(5);

        $data['categorias'] = $categorias->all();
        $data['categoria'] = $categorias->find($id);
        $data['torneos'] = $torneos->where('categories_id',$id)->get();
        $data['fases'] = $fases->all();

        return view('tfc/web/principal')->with($data);
    }

    public function Resultado($id,Categories $categorias)
    {
        $data['categorias'] = $categorias->all();
        $data['categoria'] = $categorias->find($id);
        return view('tfc/web/resultado')->with($data);
    }
    public function ProximaFecha()
    {
        return view('tfc/web/proxima_fecha');
    }
    public function Fixture($id,Tournaments $torneos,Categories $categorias,Fases $fases)
    {
        $data['categorias'] = $categorias->all();
        $data['categoria'] = $categorias->find($id);
        $data['torneos'] = $torneos->where('categories_id',$id)->get();
        $data['fases'] = $fases->all();

        return view('tfc/web/fixture')->with($data);
    }

    public function Sancion()
    {
        return view('tfc/web/sancion');
    }
    public function Goleador()
    {
        return view('tfc/web/goleador');
    }
    public function FairPlay()
    {
        return view('tfc/web/fair_play');
    }
    public function Destacado()
    {
        return view('tfc/web/destacado');
    }
    public function Clima()
    {
        return view('tfc/web/clima');
    }
    public function LaCantera()
    {
        return view('tfc/web/la_cantera');
    }
    public function LaGuapeada()
    {
        return view('tfc/web/la_guapeada');
    }
    public function Jugador()
    {
        return view('tfc/web/jugador');
    }



    // Inscripcion

    public function postRegistration(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'dni' =>'required|unique:players,dni',
                'last_name' => 'required',
                'name'=>'required',
                'mail'=>'required',
                'teams_id'=>'required',
                'password'=>'required'
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }

        $team = Teams::find($request->teams_id);

        //return  $team->password .'<br>'. $request->password;


        if($request->password != $team->password)
                return redirect()->back()->withInput()->withErrors('Password del Equipo = '.$team->name.', Incorrecto');


        $player             = new Players();
        $player->dni        = $request->dni;
        $player->name       = $request->name;
        $player->last_name  = $request->last_name;
        $player->mail       = $request->mail;
        $player->teams_id   = $request->teams_id;
        $player->status     = 1;
        $player->save();

        return redirect()->back()->withErrors('INSCRIPCION CARGADA CORRECTAMENTE. Se le enviara un mail con la confirmacion de la inscripcion.');
    }
}