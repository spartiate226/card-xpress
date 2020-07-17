<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
    if (Auth::guard($guard)->attempt(['username'=>$request->username,'password'=>$request->password])){
            return redirect()->route('Etudiant.create');
    }else{
        dd('inconnu');
    }

        return $next($request);
    }
}
