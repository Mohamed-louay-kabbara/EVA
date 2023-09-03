<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetAppLang
{

    public function handle(Request $request, Closure $next): Response
    {
        // url = domain/en/post
        // if (! in_array($request->segment(2), config('app.available_lacales'))) {
        //     abort(400);
        // }

        app()->setLocale($request->segment(1));
        return $next($request);
    }
}
