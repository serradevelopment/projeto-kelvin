<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Coordenador
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
        if(auth()->guard('coordenador')->check()){
            return $next($request);
        }

        return redirect()->route('coordenadores.auth.login');
    }
}
