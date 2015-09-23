<?php namespace App\Http\Middleware;
use Closure;

class Cors  {

    public function handle($request, Closure $next)
    {

        // ALLOW OPTIONS METHOD
        /*
        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Headers' => 'Origin, Content-Type'
        ];
          */

        header('Access-Control-Allow-Origin:  *');
        header('Access-Control-Allow-Credentials: true');
        header('Acces-Control-Allow-Headers: Origin, Content-Type ');


       // if($request->server('HTTP_HOST') == 'localhost')

            return $next($request);

        /*

        if ($request->getMethod() != "OPTIONS") {
            return $next($request);
        }

        $response = $next($request);

        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }
*/

    }
}