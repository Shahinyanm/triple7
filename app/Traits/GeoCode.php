<?php

namespace App\Traits;

use App\Language;
use GeoIP;
use Illuminate\Support\Facades\Route;

trait GeoCode
{
    public function localeCode()
    {
        $location = GeoIP::getLocation('194.45.52.72');

        if (strpos(Route::currentRouteName(), 'admin') !== false) {
            $code = app()->getLocale();
        } else {


            $language = Language::where('code', strtolower($location->iso_code))->first();
            if ($language) {
                $code = $language->code;
            } else {
                $code = 'en';
            }
        }



        return $code;
    }

}