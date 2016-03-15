<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Repositories\config\ModulesRepo;


class IsAdmin
{
    protected $isAdmin;


    public function __construct(Guard $isAdmin)
    {
        $this->isAdmin        = $isAdmin;
    }

    public function handle($request, Closure $next  )
    {

        if(Auth::user()->profiles_id != '1') {

            return redirect()->back()->withErrors(trans('messages.access'));
        }


        return $next($request);
    }
}
