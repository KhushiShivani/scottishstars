<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class is_admin
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
        if(Auth::check()){
            if(auth()->user()->role == 1){
                return $next($request);
            }
            else{
                print_r(" you don't have permission to login ");
            }
        }
        else{
            // print_r("Session Time Out Please Login Again <a href='#!'>login</a>");exit;
            return redirect('session-out');
        }

        return redirect('login')->with('error',"You don't have admin access.");
    }
}
