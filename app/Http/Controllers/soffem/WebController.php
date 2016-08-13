<?php

namespace App\Http\Controllers\soffem;

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
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Repositories\tfc\PlayersRepo;

class WebController extends Controller {

    public function __construct(){

        if(!Session::has('categoria'))
        {
            return redirect()->to('web/');
        }

    }

//    public function Index()
//    {
//        $data['categories'] = Categories::all();
//
//        return view('tfc/web/index')->with($data);
//    }

    public function Reglamento()
    {
        return view('tfc/web/reglamento');
    }

    public function Noticias()
    {
        $data['noticias']   = News::orderBy('date','DESC')->paginate(10);

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

    public function Galeria(Galleries $galeria)
    {
        $data['galeria'] = $galeria->all();
        return view('tfc/web/galeria')->with($data);
    }

    public function Inscripcion()
    {
        $data['teams'] = Teams::where('status',1)->orderBy('name','asc')->lists('name','id');
        return view('tfc/web/inscripcion')->with($data);
    }

    public function Contactanos()
    {
        return view('tfc/web/contactanos');
    }

    public function Principal($id,Tournaments $torneos,Categories $categorias,Fases $fases,Destacados $destacados)
    {
        /*
        $data['jugadorDestacado'] = $destacados->where('players_id','>',0)
            ->whereHas('fasesWeeks',function($q) use($id){
                $q->where('fases_id',$id)->where('active',1);
            })->orderBy('id','des')
            ->first();

        $data['equipoDestacado'] = $destacados->where('teams_id','>',0)
            ->whereHas('fasesWeeks',function($q) use($id){
                $q->where('fases_id',$id)->where('active',1);
            })->orderBy('id','des')
            ->first();
        */

        $data['jugadorDestacado'] = DestacadosCategories::where('categories_id',$id)->where('players_id','!=','null')->first();

        $data['equipoDestacado'] = DestacadosCategories::where('categories_id',$id)->where('teams_id','!=','null')->first();


        $data['faseActual'] = $fases->find($id);

        $data['categoriaActual'] = $categorias->find($id);

        $data['torneos'] = $torneos->where('categories_id',$id)->get();

        $data['categoriaActual'] = $categorias->find($id);

//        // setcookie("categoria",$categorias->find($id));
        // setcookie("fase", "", time() - 3600);

        return view('tfc/web/principal')->with($data);
    }

    public function Resultado($categoriaId,$id,Tablas $tablas,FasesWeek $fasesWeek,Fases $fases,Categories $categories)
    {
        /*
        $arr_teams = [];
        $data['teams']  = Teams::whereHas('FasesTeams', function($q) use ($id){
                                    $q->where('fases_id',$id);
                                        })->orderBy('name','ASC')
                                    ->get();

        foreach($data['teams']  as $t)
        {
            $tabla = $tablas->where('fases_id',$id)->where('teams_id',$t->id);

           // echo $tabla->count();
       }
      //  return;
        */
        //$data['arr_teams'] = $arr_teams;
        //$data['tablas']    = $tablas->where('fases_id',$id);

        $data['resultado']  = $fasesWeek->where('fases_id',$id)->where('active',1)->get();

        $data['tablas'] =  Tablas::where('fases_id',$id)
            ->orderBy('pts','DESC')
            ->orderBy('pj','DESC')
            ->orderBy('dg','DESC')
            ->get();

        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/resultado')->with($data);
    }

    public function ProximaFecha($categoriaId,$id,FasesWeek $fasesWeek, Fases $fases,Categories $categories)
    {
        /*$data['fase'] = $fasesWeek->where('fases_id',$id)
                ->whereHas('matches',function($q){
                    $q->where('status',1);
                })->orderBy('created_at','asc')
                    ->first();
        */
        $actual = $fasesWeek->where('fases_id',$id)
                        ->where('active',1)
                        ->first();

        $proxima = $actual->name + 1;

        $data['fase'] = $fasesWeek->where('fases_id',$id)->where('name',$proxima)->first();
        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/proxima_fecha')->with($data);
    }

    public function FechaActual($categoriaId,$id,FasesWeek $fasesWeek,Fases $fases,Categories $categories)
    {
        /*$data['fase'] = $fasesWeek->where('fases_id',$id)
                ->whereHas('matches',function($q){
                    $q->where('status',1);
                })->orderBy('created_at','asc')
                    ->first();
        */
        $data['fase']  = $fasesWeek->where('fases_id',$id)
            ->where('active',1)
            ->first();
        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        //$data['fase'] = $actual->name + 1;

        //$data['fase'] = $fasesWeek->where('fases_id',$id)->where('name',$proxima)->first();

        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/fecha_actual')->with($data);
    }

    public function Fixture($categoriaId,$id,FasesWeek $fasesWeek,Fases $fases,Categories $categories)
    {

        $data['fases'] = $fasesWeek->where('fases_id',$id)->get();

        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);
        // setcookie("categoria",$data["fases"]->first()->Fases->tournaments->categories);

        return view('tfc/web/fixture')->with($data);
    }

    public function Equipo($categoriaId,$faseId,$id,Teams $equipos,Matches $matches, Fases $fases,Categories $categories)
    {
        $data['matches'] = $matches->all();
        $data['equipo'] = $equipos->find($id);
        $data['faseActual'] = $fases->find($faseId);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/equipo')->with($data);
    }


    public function Jugador($categoriaId,$id,Players $jugador, Fases $fases,$faseId,Categories $categories)
    {
        $data['jugador'] = $jugador->find($id);
        $data['faseActual'] = $fases->find($faseId);
        $data['categoriaActual'] = $categories->find($categoriaId);

        return view('tfc/web/jugador')->with($data);
    }

    public function Sancion($categoriaId,$id,Matches $matches,FasesWeek $fasesWeek, Fases $fases,Categories $categories)
    {

        $data['fases'] = $fasesWeek->where('fases_id',$id)->where('active',1)->first()->id;

//        $data['sanciones'] = $sanciones->where('end_fases_week_id','<=',$data['fases'])->get();
        $data['faseWeekActual'] = $fasesWeek->find($data['fases'])->name;
//        dd($data['sanciones']->first()->EndSancion->name);

        $data['faseActual'] = $fases->find($id);

        $data['categoriaActual'] = $categories->find($categoriaId);

        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/sancion')->with($data);
    }

    public function Goleador($categoriaId,$id,Matches $matches, Fases $fases,Categories $categories)
    {
        $q = "SELECT SUM(matches_details.goals) AS goals, CONCAT(players.last_name,' ',players.name) as players, teams.name as
teams FROM matches_details JOIN players ON matches_details.players_id = players.id JOIN teams ON players.teams_id =
teams.id JOIN matches ON matches_details.matches_id = matches.id JOIN fases_week ON matches.fases_week_id =
fases_week.id WHERE fases_week.fases_id = ? AND goals != 0
GROUP BY matches_details.players_id ORDER BY goals DESC";

        $data['goleadores'] = DB::select($q,array($id));
        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/goleador')->with($data);
    }

    public function FairPlay($categoriaId,$id,Tablas $tablas,Fases $fases,Categories $categories)
    {
        $q = "SELECT SUM(yellow) as yellow,SUM(red) as red,teams.name as name,SUM(yellow) + (SUM(red)*3) as puntos FROM
matches_details JOIN players ON matches_details.players_id = players.id JOIN teams ON players.teams_id = teams.id
JOIN matches ON matches_details.matches_id = matches.id JOIN fases_week ON fases_week.id = matches.fases_week_id JOIN
 fases ON fases_week.fases_id= fases.id WHERE fases.id = ? GROUP BY players.teams_id ORDER BY puntos DESC";

        $data['fairPlay'] = DB::select($q,array($id));
        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);

        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/fair_play')->with($data);
    }


    public function Destacado($categoriaId,$id , Destacados $destacados, Fases $fases,Categories $categories)
    {
        $data['jugadorDestacado'] = $destacados->where('players_id','>',0)
                                        ->whereHas('fasesWeeks',function($q) use($id){
                                            $q->where('fases_id',$id)->where('active',1);
                                        })->orderBy('id','des')
                                        ->first();

        $data['equipoDestacado'] = $destacados->where('teams_id','>',0)
                                        ->whereHas('fasesWeeks',function($q) use($id){
                                            $q->where('fases_id',$id)->where('active',1);
                                        })->orderBy('id','des')
                                        ->first();


        $data['faseActual'] = $fases->find($id);
        $data['categoriaActual'] = $categories->find($categoriaId);
        // setcookie("fase",$id);
        // setcookie("categoria",$fases->find($id)->tournaments->categories);

        return view('tfc/web/destacado')->with($data);
    }
    public function Clima()
    {
        return view('tfc/web/clima');
    }

    public function LaGuapeada()
    {
        return view('tfc/web/la_guapeada');
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



    public function index(){
        
        return view('soffem.web.home');
    }

    public function fasesDetalle(){

        return view('soffem.web.fases');
    }

    public function equiposDetail(){
        return view('soffem.web.equipos');
    }

    public function jugadoresDetail(){
        return view('soffem.web.jugadores');
    }

}
