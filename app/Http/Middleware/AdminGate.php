<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminGate
{
    public function handle(Request $request, Closure $next)
    {
        $key = config('admin.session_key', 'admin_ok');

        if (session($key) === true) {
            return $next($request);
        }

        session(['intended_admin' => $request->fullUrl()]);
        return redirect()->route('admin.login.form');
    }
}
