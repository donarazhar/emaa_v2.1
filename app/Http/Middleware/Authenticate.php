<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
<<<<<<< HEAD
        return $request->expectsJson() ? null : route('login');
=======
        if (!$request->expectsJson()) {
            if ($request->is('panel/*')) {
                return route('loginadmin');
            } else {
                return route('/');
            }
        }
>>>>>>> 0a4395a (Halaman Dashboard Karyawan)
    }
}
