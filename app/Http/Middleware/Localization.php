<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Localization
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
        $locale = "es";

//        if($request->getHttpHost() == "rivarasa.com")
//            $locale = "en";

        if(\Session::has('locale'))
            $locale = \Session::get('locale');

        \Session::put('locale', $locale);

        \App::setlocale($locale);

        return $next($request);
    }
}
