<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PlaybackAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('user')) {
            return redirect()->route('/home-user');
        }

        return redirect()->route('/home');
    }

    public function index()
    {
        $monitor = Schema::getColumnListing('monitors');
        $exclude_columns = ['id', 'tool_id', 'created_at', 'updated_at'];
        $monitorComponent = array_diff($monitor, (array) $exclude_columns);
        return view('playback', ['monitor' => $monitorComponent]);
    }


    public function barChart(Request $request, $monitor)
    {

        $monitor_type = $request->input('component');
        $hour = $request->input('hour');
        $nextHour = $hour + 1;
        $value = [];
        $count = [];
        $get = Monitor::whereDate('created_at', $monitor)->whereNotNull($monitor_type)
            ->whereTime('created_at', '>=', "$hour:00:00")->whereTime('created_at', '<', "$nextHour:00:00")->get();

        for ($i = 0; $i < count($get); $i++) {

            if (isset($get)) {
                $count[$i] = [$i, date('H:i:s', strtotime($get[$i]->created_at))];
                $value[$i] = [$i, $get[$i]->$monitor_type];
            } else {
                $count[$i] = [$i, 0];
            }
        }


        return response()->json(['column' => $value, 'hours' => $count], 200);
    }
}
