<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Coordi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        dd($request);
            if($request->cookies =='Coordinador'){
                return $next($request);
            }else{
                abort(403, 'Usted no esta autorizado');
            }
    }
}
