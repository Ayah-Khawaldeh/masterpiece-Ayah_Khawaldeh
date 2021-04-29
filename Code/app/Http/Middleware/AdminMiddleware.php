<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::user()-> role == 'admin')
        {
            return $next($request);
        }
        else{
            return redirect('/home') -> with('status','you are not allowed access to Dashboard.! ');

        }
//         if(!Auth::guest() && (Auth::user()->isadmin=='admin') ){
//             return $next($request);
// }
// return redirect("/Admin/Login");

    }
}
