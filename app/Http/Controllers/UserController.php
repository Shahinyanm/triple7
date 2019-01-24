<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }

    public function tricks()
    {
        return view('user.tricks');
    }

    public function winnings()
    {
        return view('user.winnings');
    }

    public function forum()
    {
        return view('user.forum');
    }

    public function settings()
    {
        $user = User::find(Auth::user()->id);
        return view('user.settings', compact('user'));
    }

    public function update_user(UserRequest $request)
    {
//        dd($request->all());
        $user = User::find(Auth::user()->id);
        $user -> first_name     = $request->first_name;
        $user -> last_name      = $request->last_name;
        $user -> email          = $request->email;
        $user -> title          = $request->title;
        $user -> password       = Hash::make($request->password);
        $user->save();

        return redirect()->route('home');
    }
}
