<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Cookie;
use Tracker;
use Session;
class ValidateLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next):Response
    {
        $url = explode('/', $request->url());
        $url = end($url);
        
        if($url =="login"|| $url == "loginUser"){
            return $next($request);
        }else{

            $response = $next($request);

            try{

                if(session()->has("user_name")){
                    return $response;
                }else{
                    return redirect('/login');
                }
                
            }catch (Exception $e){

                return redirect('/login');
            }
        }
    }
}
