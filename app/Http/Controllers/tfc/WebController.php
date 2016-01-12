<?php

namespace App\Http\Controllers\tfc;

use App\Entities\tfc\Categories;
use App\Entities\tfc\Fases;
use App\Entities\tfc\Sedes;
use App\Entities\tfc\Tournaments;
use App\Http\Controllers\Controller;
use App\Http\Repositories\tfc\CategoriesRepo;
use App\Http\Repositories\tfc\TournamentsRepo;


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

    public function Noticias()
    {
        return view('tfc/web/noticias');
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

    public function Galeria()
    {
        return view('tfc/web/galeria');
    }

    public function Inscripcion()
    {
        return view('tfc/web/inscripcion');
    }

    public function Contactenos()
    {
        return view('tfc/web/contactenos');
    }

    public function Principal($id,Tournaments $torneos,Categories $categorias,Fases $fases)
    {
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
}