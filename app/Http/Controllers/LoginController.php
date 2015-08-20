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

    public function getLogin()
    {
        return view('login');
    }

    /**
     *
     */
    public function postLogin(Request $request)
    {

       if(!Auth::check())
       {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                Log::info('modulo:loggedIN-user:'.Auth::user()->id);

              return redirect('home');
            }

           return  redirect('login/id='.Session::get('company_code'))->withErrors(trans('messages.login'));
        }
        return redirect('home');
    }

    public function getLogout()
    {
        $company = Session::get('company_code');

        Log::info('modulo:loggedOUT-user:'.Auth::user()->id);

        Auth::logout();
        Session::flush();

        return redirect('login/id='.$company);
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