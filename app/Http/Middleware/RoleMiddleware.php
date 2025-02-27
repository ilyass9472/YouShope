<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
{
    $user = $request->user();

    
    if (!$user || !$user->roles()->exists()) {
        return redirect('/register')->with('error', 'you sholde to register first');
    }

    
    // if (!$user->hasRole($role)) {
    //     abort(403, 'nop');
    // }

    return $next($request);
}

}