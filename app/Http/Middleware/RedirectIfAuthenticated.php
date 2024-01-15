<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
<<<<<<< HEAD
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
=======
            if (Auth::guard('karyawan')->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
            if (Auth::guard('user')->check()) {
                return redirect(RouteServiceProvider::HOMEADMIN);
            }
>>>>>>> 0a4395a (Halaman Dashboard Karyawan)
        }

        return $next($request);
    }
}
