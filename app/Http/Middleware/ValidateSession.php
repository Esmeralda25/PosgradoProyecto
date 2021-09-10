<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateSession
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
        if($request->path()=="/")         return $next($request);

        if ($request->path()!="entrada"){
            if  (!\Session::has('usuario')  ) {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
