<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\User;
use App\Trick;
use App\Winning;
use App\TrickRating;
use DB;

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
        $tricks = Trick::all();
        $activeTricks = Trick::where('activated',1);

        return view('user.index', compact('tricks','activeTricks'));
    }

    public function tricks()
    {
        $tricks = Trick::with('rating', 'images')->get()->map(function ($trick) {
            if ($trick->rating->count()) {
                $trick->procent = $trick->rating()->RatingYes()->count() * 100 / $trick->rating->count();
            } else {
                $trick->procent = 0;
            }

            return $trick;
        });

        return view('user.tricks', compact('tricks'));
    }

    public function update_apply(Request $request)
    {

        $trick = Trick::findOrfail($request->id);
        $trick->apply += 1;
        $trick->save();
        return response()->json($trick);
    }


    public function winnings()
    {

        $winnings = Winning::select('id', 'image', 'created_at')->orderBy('created_at')->get()->groupBy(function ($date) {
            return \Carbon\Carbon::parse($date->created_at)->format('d');
        })->last();


        return view('user.winning.winnings', compact('winnings'));
    }



    public function loadMore(Request $request)
    {



        $winnings = Winning::select('id', 'image', 'created_at')->whereDate('created_at','<', Carbon::parse($request->date))->orderBy('created_at','ASC')->get()->groupBy(function ($date) {
            return \Carbon\Carbon::parse($date->created_at)->format('d');
        })->last();

        if(!$winnings->isEmpty())
        {
            $data = [
                'date' => \Carbon\Carbon::parse($winnings['0']->created_at)->format('d.m.Y'),
                'html' => view('user.winning.list_item')->with('winnings', $winnings)->render()
            ];
            return $data;

        }else{
            return Response()->json();
        }
    }

   public function rating(Request $request){
        $check = TrickRating::where('trick_id',$request->trick_id)->where('user_id', Auth::id())->first();
        if($check !== null){
            $data = array('message'=>'denied');
        }else{
            $rating = new TrickRating;
            $rating->rating = 1;
            $rating->trick_id = $request->trick_id;
            $rating->user_id = Auth::id();
            $rating->save();
            $data =array('message'=>'successful');
        }



        return Response()->json(array($data));
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
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->title = $request->title;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('home');
    }
}
