<?php


namespace Great\Cms\Http\Middleware;


use Closure;

class Admin
{
    public function handle($request, Closure $next){
        return $next($request);
    }
}
