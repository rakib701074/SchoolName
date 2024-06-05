<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Webguard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {    
      
    //   if(Auth::user()->role == $role){
    //     return $next($request);
    //   }elseif(Auth::user()->role == "reader"){
    //     return redirect()->route('register');
    //   }else{
    //     return redirect()->route('login');
    //   }
    








    








          // if(auth()->check()){
          //  
          // }
          // echo "<h1>hello</h1>";
        
        //   return redirect('/');
          // if(Auth::check()){
              // return $next($request);
          // //   // return redirect('/');
          // }else{
          //   return redirect('signup');
          // }
    // }

            if(Auth::check() ){
              return $next($request);
            }else{
              return redirect()->route('login');
            }
          } 
}

