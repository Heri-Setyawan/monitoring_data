<?php

namespace App\Http\Controllers;

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

    // public function authenticated(Request $request, $user)
    // {
    //     if ($user->hasRole('admin')) {
    //         return redirect()->route('/home');
    //     }

    //     return redirect()->route('/home-user');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //        if(Auth::hasUser())
        $tools = Tool::all()->count();
        return view('welcome', ['session' => $request->session()->get('key'), 'tool' => $tools]);
    }

    public function realtime()
    {
        $get = Monitor::latest()->first();

        return response()->json($get, 200);
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
