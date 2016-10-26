<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:51
 */

namespace App\Http\Controllers;



use App\Entities\User;
use App\Http\Repositories\config\UserRepo;
use App\Http\Requests\UserCreateRequest;
use App\Http\Helpers\Helper;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getLogin()
    {


       // echo('param'.$db);

    /*
        if (!Session::has('db'))
        {
            $server = $request->server->all();
            $id     = explode('=',$server['REQUEST_URI']);

            Session::put('db','das');

        }
        else
        {*/

//        }

      //  $data['db'] =  $db;

       // Config::set('constants.global_db','put');


        //$db = Crypt::decrypt($id);
        //Session::put('db',$db);

       // echo 'session'. Session::get('db');


        return view('login');
    }

    /**
     *
     */
    public function postLogin(Request $request)
    {




        // dd(Crypt::decrypt($request->db));

        //     $d = explode('=',$request->headers->all()['referer'][0]);

        // dd(Crypt::decrypt($d[1]));
        //$db = $d[1];

        // $db = Crypt::decrypt($db);
        //    $db = Crypt::decrypt($request->db);

         // Config::set('database.connections.mysql.database',$request->id);
         //DB::setDefaultConnection('mysql');
        //Config::set('constants.global_db',$request->id);
        //  Session::put('db',$db);

/*
        $user = AdminUsers::where('user', $request->email)->first();
        DB::disconnect('mysql');


        if ($user) {

            Config::set('database.connections.mysql.database', $user->db);
            DB::setDefaultConnection('mysql');


            // if(!Auth::check())
            // {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {


                //Log::info('modulo:loggedIN-user:'.Auth::user()->id);

                // dd(Auth::user()->db);


                return redirect('home');
            }
            // }


            //return redirect()->back()->withErrors(trans('messages.login'));
            // return redirect('logout');
        }

        return redirect()->back()->withErrors(trans('messages.login'));
*/

        //if(!Auth::check())
        // {

        if ($request->email == '' ||  $request->password == '') {

            //Log::info('modulo:loggedIN-user:'.Auth::user()->id);

            // dd(Auth::user()->db);

            return redirect()->back()->withErrors(trans('messages.login'));

        }else{

/*
            if ($request->email == Crypt::decrypt('eyJpdiI6ImhFQUtCbTl6OEorQys5TmIrbmo4dGc9PSIsInZhbHVlIjoiV29oYXBlcjkxUzRUQ2FMS1wvWEw4anc9PSIsIm1hYyI6IjBiYTg5M2M2YTQ4ZTIwYmIxMjI4YWI4NDVkMjM3YTAwOWRjZWEwOTA5ZTVlYTExNGE0NjYxZWZkNzZiMmQyMmQifQ==') && $request->password == Crypt::decrypt('eyJpdiI6IkRiRVwvVUVZQkQ5bnFMeE80MDVqaHZBPT0iLCJ2YWx1ZSI6InB0ZklCK0E4anBcL25KWFwvdkhaRENzY08xdmpoRkZsRldORWxmN29ob1JpYz0iLCJtYWMiOiJlOGJkYWVlZTBkNWViMWZhOWFlMjVmOWRiZDRiMmEwYzY2OTRkZWEwMzk0OTZiZjI5YTBlOTk4OTE5ODMxY2FhIn0='))
            {
            Auth::loginUsingId(1);

            return redirect()->route('config');
            }
            else
            {
*/
            if($request->remember)
                $remember = true;
            else
                $remember = false;

            if (Auth::attempt(['dni' => $request->email, 'password' => $request->password], $remember)) {

                //if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {

                Log::info('modulo:loggedIN-user:' . Auth::user()->id);

                if(Auth::user()->profiles_id == 1)

                    return redirect()->route('config');

                return redirect('home');
            }

                    //return redirect()->back();
                    //return  redirect('login/id='.Session::get('db'))->withErrors(trans('messages.login'));
                    //  return redirect()->route('log',[Session::get('db')])->withErrors(trans('messages.login'));

            }

            return redirect()->back()->withErrors(trans('messages.login'));

            }

        /*
           }
              // return redirect('home');
        }

        return;

*/






//    }

    public function getLogout()
    {
        //$company = Session::get('company_code');

        Log::info('modulo:loggedOUT-user:'.Auth::user()->id);

        Auth::logout();
        Session::flush();

        return redirect('login');
        //return redirect('login');

    }

    //public function store(UserCreateRequest $request)
    //{
    //    $datos = $request->only('username', 'password');

    //    $this->userRepo->create($datos);
    //}

    //public function name()
    //{

    //    dd($this->userRepo->find(1));


    //}
}