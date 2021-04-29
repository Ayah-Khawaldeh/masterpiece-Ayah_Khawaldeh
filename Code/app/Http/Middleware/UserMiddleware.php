<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class UserMiddleware
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

       if(Auth::check() && Auth::user()->isban)

    {
        $banned = Auth::user()-> isban == '1';
        Auth::logout();
        if ($banned == 1){

            $massage ='you account has been banned.please contact administrator.';
             }
            return redirect() -> route('login')
             ->with('status' ,$massage)
             ->withErrors(['email' =>'you account has been banned.please contact administrator.']);

       }
       if(Auth::check()) {
        $expiresAt = Carbon::now()->addMinutes(2);
        Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
    }
    return $next($request);
}


}


