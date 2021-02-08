<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->balance>1000){   //pass this balance query parameter value in the root url
            return redirect('deny');  //redirect to 'deny' page
        }
          
        return $next($request);
    }
}
