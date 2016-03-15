<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class ChangeLanguaje
{

    protected $languaje;


    public function __construct(Guard $languaje)
    {
        $this->languaje = $languaje;
    }

    public function handle($request, Closure $next)
    {

        App::setLocale(Session::get('languaje'));


        return $next($request);
    }
}
