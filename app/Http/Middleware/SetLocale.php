<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && !empty(auth()->user()->language)) {
            App::setLocale(auth()->user()->language);
        } elseif (session()->has('locale')) {
            App::setLocale(session('locale'));
        }
        
        return $next($request);
    }
}
