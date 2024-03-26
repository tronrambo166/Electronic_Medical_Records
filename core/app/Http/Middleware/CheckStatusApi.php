<?php

namespace App\Http\Middleware;

use App\Http\Helpers\ResponseHelper;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatusApi
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
        if((Auth::user()->sv == 1 )&& (Auth::user()->ev == 1) && (Auth::user()->status == 1)){
            return $next($request);
        }else{
            if(Auth::user()->status == 0){
                $error = ['errors'=>['Account Is Deactivated']];
                return ResponseHelper::error($error);

            }elseif(Auth::user()->ev == 0){;
                $error = ['errors'=>['Email Verification Required']];
                return ResponseHelper::error($error);
            }elseif(Auth::user()->sv == 0){
                $error = ['errors'=>['Mobile Verification Required']];
                return ResponseHelper::error($error);
            }
        }

    }
}
