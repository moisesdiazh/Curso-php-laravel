<?php

namespace App\Http\Middleware;

use Closure;

class TestYear
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

        $year = $request->route('year');

        if(is_null($year) || $year != 2019){ //los middleware solo se aplican a nivel de rutas, son como filtros
                                            //tambien se debe modificar en kernel.php
            return redirect('/peliculas');
        }
        return $next($request);
    }
}
