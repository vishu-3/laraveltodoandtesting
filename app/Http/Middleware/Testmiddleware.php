<?php

namespace App\Http\Middleware;

use Closure;

class Testmiddleware
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
        $ip = $request->ip();
        if($ip == '127.0.0.1'){
            // throw new \Exception("Your Ip is Correct");
            return redirect('/');
            
        }
        return $next($request);
    }
}
