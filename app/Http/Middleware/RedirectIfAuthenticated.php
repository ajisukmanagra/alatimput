<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }
        if(Auth::guard($guard)->check()){
            if(Auth::user()->level == 'Admin'){
                return redirect('/admin');
            }elseif(Auth::user()->level == 'Pegawai'){
                return redirect('/pegawai');
            }elseif(Auth::user()->level == 'Siswa'){
                return redirect('/siswa');
            }else{
                return redirect('/login');
            }
        }

        return $next($request);
    }
}
