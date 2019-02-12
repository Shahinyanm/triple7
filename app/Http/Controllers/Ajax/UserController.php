<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\TrickActivate;
use App\Winning;
use App\Trick;
use App\Report;
use App\Refund;
use App\Traits\GeoCode;
use Storage;

class UserController extends Controller
{

    use GeoCode;
    public function user_report_wins(Request $request)
    {

        $report = Report::create([
            'user_id' => Auth::id(),
            'trick_id' => $request->trick_id,
            'wins' => $request->win,
        ]);

        return Response()->json(['msg' => $report->id]);

    }

    public function user_win_image_post(Request $request)
    {

        if ($request->file) {

            $base64_image = $request->file; // your base64 encoded
            @list($type, $file_data) = explode(';', $base64_image);
            @list(, $file_data) = explode(',', $file_data);
            $imageName = str_random(10) . '.' . 'png';
            Storage::disk('public')->put('image/winnings/' . $imageName, base64_decode($file_data));

        }


        $winning = Winning::create([
            'user_id' => $request->user_id,
            'image' => $imageName,
            'trick_id' => $request->trick_id,
            'report_id' => $request->report_id,
        ]);

        $report = Report::findOrFail($request->report_id);
        $report->winning_id = $winning->id;
        $report->save();


        return Response()->json(['success' => "Image Uploaded"]);


    }

    public function user_activate_trick(Request $request)
    {
        TrickActivate::firstOrCreate([
            'user_id' => $request->user_id,
            'trick_id' => $request->trick_id,
            'activate' => '1',
        ]);


        return Response()->json(['success' => 'Trick Activated']);
    }


    public function user_trick_refund(Request $request)
    {
        if ($request->file) {

            $base64_image = $request->file; // your base64 encoded
            @list($type, $file_data) = explode(';', $base64_image);
            @list(, $file_data) = explode(',', $file_data);
            $imageName = str_random(10) . '.' . 'png';
            Storage::disk('public')->put('image/refunds/' . $imageName, base64_decode($file_data));

        }

        Refund:: firstOrCreate([
            'user_id' => $request->user_id,
            'trick_id' => $request->trick_id,
            'amount' => 25,
            'image' => $imageName,
        ]);


        return Response()->json(['msg' => 'success']);
    }


    public function user_tricks_load()
    {

        $tricks = Trick::with('rating', 'images', 'activate')->whereHas('languages', function ($query) {
            $query->where('code',  $this->localeCode());

        })->get()->map(function ($trick) {
            if ($trick->rating->count()) {
                $trick->procent = $trick->rating()->RatingYes()->count() * 100 / $trick->rating->count();
            } else {
                $trick->procent = 0;
            }

            if ($trick->activate()->where('user_id', Auth::id())->first()) {
                $trick->user_activated = true;
            } else {
                $trick->user_activated = false;
            }
            return $trick;
        });

        $activeTricks = Trick::where('activated', 1);

        if (!$tricks->isEmpty()) {
            $data = [
                'html' => view('user.trick.tricks', compact('tricks', 'activeTricks'))->render()
            ];
            return $data;
        } else {

            return Response()->json($tricks);
        }
    }


    public function check_refunds()
    {

        $approved = Refund::where('user_id', Auth::id())->where('approve','1')->where('seen', '0')->count();
        $disapproved = Refund::where('user_id', Auth::id())->where('approve','0')->where('seen', '0')->count();

        return Response()->json(['approved'=>$approved, 'disapproved'=>$disapproved]);
    }

    public function refunds_seen()
    {

        $refunds = Refund::where('user_id', Auth::id())->where('seen', '0')->get()->map(function($refund){
            $refund->seen = 1;
            $refund->save();
            return $refund;
        });


        return Response()->json(['text'=> 'done']);
    }

}
