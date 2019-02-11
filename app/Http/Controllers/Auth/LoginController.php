<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use App\Traits\GeoCode;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use GeoCode;
    use AuthenticatesUsers;



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {

        if ($user->isAdmin == 1){
            $this->redirectTo = route('admin');
        }else{
            if ($this->localeCode() !== 'en') {
                App::setLocale($this->localeCode());
                Session::put('locale', $this->localeCode());
                \LaravelLocalization::setLocale($this->localeCode());
//
                return redirect(App::getLocale().'/home');
            }

            $this->redirectTo = route('home');

        }

    }
}
