<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->permission == 0) {
            return redirect()->route('user.index');
        }

        if (Auth::user()->permission == 1) 
        {
            return redirect()->route('admin.index');
        }

        if (Auth::user()->permission == 2) {
            return redirect()->route('admin.index');
        }
    }
}
