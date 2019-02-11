<?php

namespace App\Http\Controllers\Auth;

use App\Mail\RegisterMail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Jobs\SendRegisterMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
//            'last_name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation'     =>  ['sometimes'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $user = User::create([
                'first_name'        => $data['first_name'],
//                'last_name'         => $data['last_name'],
                'title'             => $data['title'],
                'email'             => $data['email'],
                'password'          => Hash::make($data['password']),
            ]);

//          $data['password'] = $password;

        SendRegisterMail::dispatch($data);
//        Mail::to($user)->queue(new RegisterMail($user));


        return $user;
    }

    protected function registered(Request $request, $user)
    {
        \Auth::loginUsingId($user->id);
        return response()->json(['data'=>'aaa']);
    }
}
