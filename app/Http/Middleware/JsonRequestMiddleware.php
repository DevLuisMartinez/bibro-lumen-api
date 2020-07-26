<?php

namespace App\Http\Middleware;

use Closure;

class JsonRequestMiddleware {

    public function handle($request, Closure $next){

        if(!$request->isJson()){

            return response('Unauthorized',401);
        }

        return $next($request);
    }
}