<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class ChangeDbWS
{

    protected $ChangeDbWS;


    public function __construct(Guard $ChangeDbWS)
    {
        $this->ChangeDbWS = $ChangeDbWS;
    }

    public function handle($request, Closure $next)
    {
        $db = Crypt::decrypt($request->id);

        Config::set('database.connections.mysql.database',$db);
        DB::setDefaultConnection('mysql');

        return $next($request);
    }
}
