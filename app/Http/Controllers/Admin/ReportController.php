<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report;
use App\User;
use App\Trick;
use App\Winning;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('users','tricks','winnings')->get()->map(function($report){
            $report->user = User::findOrfail($report->user_id);
            $report->trick = Trick::findOrfail($report->trick_id);
            $report->winning = Winning::findOrFail($report->winning_id);
            return $report;
        });


        return view('admin.report.index', compact('reports'));
    }

    public function destroy($id)
    {

        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->route('admin.reports');
    }


}
