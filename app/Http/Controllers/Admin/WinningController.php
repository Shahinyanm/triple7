<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Winning;
use App\User;
use App\Http\Requests\WinningRequest;
use Storage;
use Image;
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
            $file = $request->image;
            $storedFile = Storage::disk('public')->put('image/winnings', $file);

        }


        Winning::create([
            'user_id' => $request->user_id,
            'image' => str_replace('public/', '', $storedFile),
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

        return view('admin.winning.edit',compact('winning','users'));
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

            if ($request->image) {
                $file = $request->image;
                $storedFile = Storage::disk('public')->put('image/winnings', $file);

            }



            $winning->image = str_replace('public/', '', $storedFile);

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
