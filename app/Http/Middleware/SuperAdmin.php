<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if(!Auth::check()){
            return redirect()->route('login');
        }

        $userRole=Auth::user()->role;

        if($userRole==1){
            return $next($request);
        }

        if($userRole==2){
            return redirect()->route('admin');
        }

        if($userRole==3){
            return redirect()->route('dashboard');
        }
    }
}
