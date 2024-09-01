<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        print_r($request->age);

// THIS INDIA AND AGE SHOLD BE PASSED THROUGH URL USING WHICH WE CAN CHECK THIS CONDITION 
// http://localhost:8000/middleware?country=india&age=20
        if($request->age < 18){
            die('you can not visit this age site');
        }
        return $next($request);
    }
}
