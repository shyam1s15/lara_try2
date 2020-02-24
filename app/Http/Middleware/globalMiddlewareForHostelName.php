<?php

namespace App\Http\Middleware;

use Closure;

class globalMiddlewareForHostelName
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
        // if(\session()->has("email")){
        //     $id = \DB::select('select sUsers_id from s_users where email = ?', [$request->session("email")])->get();
        //     dd($id);
        // }
        // if($request->session()->has('email')){
        //     dd("got it");
        // }
        // dd($request->user());
        
        return $next($request);
    }
}
