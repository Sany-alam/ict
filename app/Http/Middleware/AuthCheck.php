<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $path = $request->path();
        if (($path=="login"||$path=="register") && Session::get('user')) {
            return redirect(route('home'));
        }else if(($path!="login" && !Session::get('user')) && ($path!="register" && !Session::get('user'))){
            return redirect(url('login'));
        }
        return $next($request);
    }
}
