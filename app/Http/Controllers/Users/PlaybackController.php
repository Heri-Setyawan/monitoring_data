<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PlaybackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect()->route('/home');
        }

        return redirect()->route('/home-user');
    }

    public function index()
    {
        $monitor = Schema::getColumnListing('monitors');
        $exclude_columns = ['id', 'tool_id', 'created_at', 'updated_at'];
        $monitorComponent = array_diff($monitor, (array) $exclude_columns);
        return view('users.playback', ['monitor' => $monitorComponent]);
    }


    public function barChart(Request $request, $monitor)
    {
        $monitor_type = $request->input('component');
        $hours = [];
        $count = [];
        for ($i = 1; $i < 25; $i++) {
            $hours[$i] = [$i, $i . '.00'];
            $get = Monitor::whereDate('created_at', $monitor)->whereNotNull($monitor_type)->get();
            $group = $get->groupBy(function ($gets) {
                return date('H', strtotime($gets->created_at));
            })->toArray();
            if (strlen((string)$i) == 1) {
                $h = '0' . $i;
            } else {
                $h = $i;
            }

            if (isset($group[$h])) {
                $count[$i] = [$i, count($group[$h])];
            } else {
                $count[$i] = [$i, 0];
            }
        }

        return response()->json(['column' => $count, 'hours' => $hours], 200);
    }
}
