<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\Guard;
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

       if($this->moduloRepo->buscarRoles($modulo , $section) != '1')
            return redirect()->back()->withErrors("Acceso restrigido");

        return $next($request);
    }
}
