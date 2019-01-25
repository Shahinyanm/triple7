<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winning;
use App\User;
use App\Http\Requests\WinningRequest;
class WinningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winnings = Winning::all();

        return view('admin.winning.index',compact('winnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('admin.winning.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WinningRequest $request)
    {
        if ($request->image) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/winnings/'), $imageName);
        }

        Winning::create([
            'user_id' => $request->user_id,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.winnings.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $winning = Winning::with('user')->find($id);

        return  view('admin.winning.show',compact('winning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $winning = Winning::with('user')->find($id);
        $users = User::all();
        return view('admin.winning.edit',['winning'=>$winning, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WinningRequest $request, $id)
    {
        $winning = Winning::findOrfail($id);
        $winning->user_id = $request->user_id;

        if($request->image){

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/winnings'), $imageName);

            $winning->image = $imageName;

        }

        $winning->save();

        return redirect()->route('admin.winnings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $winning = Winning::find($id);
        $winning->delete();


        return redirect()->route('admin.winnings.index');
    }
}
