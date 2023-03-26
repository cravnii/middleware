<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Policeman
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $role): Response
    {

        if($request->route('type')=="admin"){
            return redirect()->route('admin');
        }

        
        if($request->route('type')=="user"){
            return redirect()->route('user');
        }
// if ($role=='admin'){
        //     return redirect()->route('admin');
        // }

        // if ($role=='user'){
        //     return redirect()->route('user');
        // }
    //   return redirect()->route('admin');       


        return $role($request);
    }
}

        