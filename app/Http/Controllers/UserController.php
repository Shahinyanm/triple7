<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
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
        return view('user.settings');
    }

    public function logout()
    {
        return view('home');
    }
}
