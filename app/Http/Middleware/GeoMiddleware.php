<?php

namespace App\Http\Middleware;
use App\Traits\GeoCode;
use Session;

use Closure;
use Illuminate\Support\Facades\App;

class GeoMiddleware
{
    use GeoCode;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if($this->localeCode() !== app()->getLocale()){
            App::setLocale(app()->getLocale());
            Session::put('locale', app()->getLocale());
            \LaravelLocalization::setLocale(app()->getLocale());
            $url = \LaravelLocalization::getLocalizedURL(App::getLocale(), \URL::current());

            return  redirect()->to($url);
        }

            return $next($request);



    }
}
