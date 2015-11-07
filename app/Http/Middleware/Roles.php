<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Repositories\config\ModulesRepo;


class Roles
{
    protected $roles;
    protected $moduloRepo;

    public function __construct(Guard $roles, ModulesRepo $moduloRepo)
    {
        $this->roles        = $roles;
        $this->moduloRepo   = $moduloRepo;
    }

    public function handle($request, Closure $next  )
    {
        $req = $request->route()->getAction();

        $data       = explode('-',$req['data']);
        $modulo     = $data[0];
        $section    = $data[1];



       if($this->moduloRepo->buscarRoles($modulo , $section) != '1'){

           return redirect()->back()->withErrors(trans('messages.access'));

       }else{

           //log de actividad x usuario
           Log::info('modulo:'.$modulo.'-section:'.$section.'-user:'.Auth::user()->id);

       }


        return $next($request);
    }
}
