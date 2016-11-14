<?php

namespace App\Http\Controllers\tfc;

use App\Entities\Images;
use App\Entities\tfc\Categories;
use App\Entities\tfc\Destacados;
use App\Entities\tfc\DestacadosCategories;
use App\Entities\tfc\Fases;
use App\Entities\tfc\FasesWeek;
use App\Entities\tfc\Matches;
use App\Entities\tfc\MatchesDetails;
use App\Entities\tfc\News;
use App\Entities\tfc\Galleries;
use App\Entities\tfc\Players;
use App\Entities\tfc\Sanciones;
use App\Entities\tfc\Sedes;
use App\Entities\tfc\Tablas;
use App\Entities\tfc\Teams;
use App\Entities\tfc\Tournaments;
use App\Helpers\ImagesHelper;
use App\Http\Controllers\Controller;
use App\Http\Repositories\tfc\CategoriesRepo;
use App\Http\Repositories\tfc\TournamentsRepo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Repositories\tfc\PlayersRepo;

class WebController2 extends Controller {
    protected $data;

    public function __construct(Route $route){
        $categorias = ["sedes","sedesDetalle","galeria","noticias","reglamento","inscripcion","contactanos","torneos","equipo"];

        $this->data['categoria'];

        foreach ($categorias as $cat){
            if(strpos($route->uri(),$cat))
                $this->data['categoria'] = $cat;
        }

        $this->data['route'] = $route->getParameter('categoriaId');
        if(!Session::has('categoria'))
        {
            return redirect()->to('web/');
        }

    }

    public function Index()
    {
        $this->data['categories'] = Categories::all();

        return view('tfc/web/new/index')->with($this->data);
    }

    public function Torneos($categoria,$torneos,FasesWeek $fasesWeek, Fases $fases,$fase = null)
    {
        $this->data["torneo"] = Tournaments::find($torneos);
        $this->data["fases"] = Fases::where("tournaments_id",$torneos)->get();

        if($fase)
            $this->data['faseActual'] = $fases->find($fase);
        else
            $this->data['faseActual'] = $this->data["fases"]->first();

        $fasesWeeks  = $fasesWeek->where('fases_id',$this->data['faseActual']->id);

//        RESULTADOS
        $this->data['resultado']  = $fasesWeek->where('fases_id',$this->data['faseActual']->id)->where('active',1)->get();

        $this->data['tablas'] =  Tablas::where('fases_id',$this->data['faseActual']->id)
            ->orderBy('pts','DESC')
            ->orderBy('pj','DESC')
            ->orderBy('dg','DESC')
            ->get();
//        FIN RESULTADOS

//        FIXTURE
        $this->data['fasesWeek'] = $fasesWeeks->get();
//        FIN FIXTURE

//        FECHA ACTUAL
        $this->data['faseWeek'] = $fasesWeeks->where('active',1)->first();
//        FIN FECHA ACTUAL

//        PROXIMA FECHA
        $this->data['faseWeekProxima']  = $fasesWeek->where('fases_id',$this->data['faseActual']->id+1)
            ->where('active',1)
            ->first();
//        FIN PROXIMA FECHA

//        GOLEADORES
        $q = "SELECT SUM(matches_details.goals) AS goals, CONCAT(players.last_name,' ',players.name) as players, teams.name as
teams FROM matches_details JOIN players ON matches_details.players_id = players.id JOIN teams ON players.teams_id =
teams.id JOIN matches ON matches_details.matches_id = matches.id JOIN fases_week ON matches.fases_week_id =
fases_week.id WHERE fases_week.fases_id = ? AND goals != 0
GROUP BY matches_details.players_id ORDER BY goals DESC";

        $this->data['goleadores'] = DB::select($q,array($this->data["faseActual"]->id));
//        FIN GOLEADORES

//        FAIRPLAY
        $fairplay = "SELECT SUM(yellow) as yellow,SUM(red) as red,teams.name as name,SUM(yellow) + (SUM(red)*3) as puntos FROM
matches_details JOIN players ON matches_details.players_id = players.id JOIN teams ON players.teams_id = teams.id
JOIN matches ON matches_details.matches_id = matches.id JOIN fases_week ON fases_week.id = matches.fases_week_id JOIN
 fases ON fases_week.fases_id= fases.id WHERE fases.id = ? GROUP BY players.teams_id ORDER BY puntos DESC";

        $this->data['fairplay'] = DB::select($fairplay,array($this->data["faseActual"]->id));
//        FIN FAIRPLAY

        return view('tfc/web/new/torneos')->with($this->data);
    }

    public function Reglamento()
    {
        return view('tfc/web/new/reglamento')->with($this->data);
    }

    public function Noticias()
    {
        $this->data['noticias']   = News::orderBy('date','DESC')->paginate(10);

         return view('tfc/web/new/noticias')->with($this->data);
    }

    public function Sedes()
    {
        $this->data['sedes'] = Sedes::all();

        return view('tfc/web/new/sedes')->with($this->data);
    }

    public function SedeDetalle($categoria,$id = null)
    {
        $this->data['sedes'] = Sedes::find($id);

        return view('tfc/web/new/sede_detalle')->with($this->data);
    }

    public function Galeria(Galleries $galeria)
    {
        $this->data['galeria'] = $galeria->all();
        return view('tfc/web/new/galeria')->with($this->data);
    }

    public function Inscripcion()
    {
        $this->data['teams'] = Teams::where('status',1)->orderBy('name','asc')->lists('name','id');
        return view('tfc/web/new/inscripcion')->with($this->data);
    }

    public function Contactanos()
    {
        return view('tfc/web/new/contactanos')->with($this->data);
    }


    public function Equipo($categoria,$id,Teams $equipos,Matches $matches)
    {
        $this->data['matches'] = $matches->all();
        $this->data['equipo'] = $equipos->find($id);

        return view('tfc/web/new/equipo')->with($this->data);
    }


    public function Jugador($categoriaId,$id,Players $jugador)
    {
        $this->data['jugador'] = $jugador->find($id);

        return view('tfc/web/jugador')->with($this->data);
    }


    // Inscripcion

    public function postRegistration(Request $request , PlayersRepo $player, ImagesHelper $image)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'dni' =>'required|unique:players,dni',
                'last_name' => 'required',
                'name'=>'required',
                'mail'=>'required',
                'teams_id'=>'required|not_in:0',
                'password'=>'required',
                'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
                'terms' => 'required'
            ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }


        $team = Teams::find($request->teams_id);


        //return  $team->password .'<br>'. $request->password;


        if($request->password != $team->password)
            return redirect()->back()->withInput()->withErrors('Password del Equipo = '.$team->name.', Incorrecto');


        if($team->PlayersListActive()->count() >= 25 )
            return redirect()->back()->withInput()->withErrors('El equipo  ( '.$team->name.' ) ESTA COMPLETO.');


        /*
        $player             = new Players();
        $player->dni        = $request->dni;
        $player->name       = $request->name;
        $player->cel        = $request->cel;
        $player->phone      = $request->phone;
        $player->last_name  = $request->last_name;
        $player->mail       = $request->mail;
        $player->teams_id   = $request->teams_id;
        $player->status     = 1;
        $player->save();
*/
        $request['status'] = 1;
        $request['admin']  = 0;

        $model =  $player->create($request);

        if($request->hasFile('image'))
        {
            $image->upload('players', $model->id  ,$request->file('image') ,'uploads/tfc/players/images/');
        }

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; UTF-8" . "\r\n";
        $headers .= "From: tfc@thefutbolcompany.com" . "\r\n" .
            "Reply-To: $request->mail" . "\r\n" .

        mail($request->mail,'Inscripción a TFC.','Registración correcta al sistema.  Atte. TFC',$headers);

        return redirect()->back()->withErrors('INSCRIPCION CARGADA CORRECTAMENTE. Se le enviara un mail con la confirmacion de la inscripcion.');
    }

    // Contacto

    public function postContact(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required',
                'email'     => 'required|email',
                'tema'      => 'required',
                'message'   => 'required'
            ]);




        if ($validator->fails()) {
            return "Complete correctamente los campos anteriores";
        }else{


            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; UTF-8" . "\r\n";
            $headers .= "From: juga@thefutbolcompany.com" . "\r\n" .
                "Reply-To: $request->email" . "\r\n" .


            $msg  = 'Tema:'.$request->tema.'<br>';
            $msg .= 'Nombre: '.$request->name.'<br>';
            $msg .= $request->message .'<br>';
            $msg .= 'Mail:'.$request->email.'<br>';


            if(mail('juga@thefutbolcompany.com','Contacto desde la web',$msg,$headers))
                return "Se Envio correctamente su mail.";
            else
                "No se pudo enviar el mail.";
        }

    }



}
