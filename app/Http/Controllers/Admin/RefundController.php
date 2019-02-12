<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Refund;
use App\User;
use App\Trick;

class RefundController extends Controller
{
    public function index()
    {
        $refunds = Refund::with('users', 'tricks')->get()->map(function ($refund) {
            $refund->user = User::findOrfail($refund->user_id);
            $refund->trick = Trick::findOrfail($refund->trick_id);
            return $refund;
        });

        return view('admin.refund.index', compact('refunds'));
    }


    public function approve($id)
    {
        $refund = Refund::findOrfail($id);

        $refund->approve = true;
        $refund->seen = 0;


        $refund->save();

        return redirect()->route('admin.refunds');
    }


    public function disapprove($id)
    {
        $refund = Refund::findOrfail($id);

        $refund->approve = false;
        $refund->seen = 0;

        $refund->save();
        return redirect()->route('admin.refunds');
    }


    public function destroy($id)
    {
        $refund = Refund::findOrFail($id);
        $refund->delete();
        return redirect()->route('admin.refunds');
    }
}
