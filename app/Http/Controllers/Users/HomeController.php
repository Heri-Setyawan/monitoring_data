<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Monitor;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

        $tools = Tool::all()->count();
        return view('users.dashboard', ['tool' => $tools]);
    }

    public function realtime()
    {
        $get = Monitor::latest()->first();

        return response()->json($get, 200);
    }

    public function voltageLatest($voltage)
    {

        $get = Monitor::latest()->limit(5)->get()->toArray();
        $datas = array_column($get, $voltage);

        return response()->json($datas, 200);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
